import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';
import fs from 'fs';
import crypto from 'crypto';

// Appends a content hash (?v=…) to "/images/…" paths in Vue/JS sources so browsers and the CDN
// fetch a changed image immediately instead of serving the cached old one.
const imageCacheBusting = () => {
    const pattern = /(["'`])(\/?images\/[^"'`?$\s]+\.(?:jpe?g|png|webp|gif|svg))\1/g;
    const hashes = new Map();

    const hashOf = (file) => {
        const fullPath = path.resolve('public', decodeURIComponent(file));
        if (!fs.existsSync(fullPath)) return null;
        const mtime = fs.statSync(fullPath).mtimeMs;
        const cached = hashes.get(fullPath);
        if (cached && cached.mtime === mtime) return cached.hash;
        const hash = crypto.createHash('md5').update(fs.readFileSync(fullPath)).digest('hex').slice(0, 8);
        hashes.set(fullPath, { mtime, hash });
        return hash;
    };

    return {
        name: 'image-cache-busting',
        enforce: 'pre',
        transform(code, id) {
            if (id.includes('node_modules') || !/\.(vue|js)(\?|$)/.test(id)) return null;
            const result = code.replace(pattern, (match, quote, file) => {
                const hash = hashOf(file.replace(/^\//, ''));
                return hash ? `${quote}${file}?v=${hash}${quote}` : match;
            });
            return result === code ? null : { code: result, map: null };
        },
    };
};

export default defineConfig({
    resolve: {
        alias: {
            // Aliases für das Node-Modul 'crypto', das auf den Polyfill verweist
            crypto: 'crypto-browserify',
        },
    },
    optimizeDeps: {
        // Wenn du das Modul explizit vorab optimieren möchtest, füge es hier hinzu
        include: ['crypto-browserify'],
    },
    plugins: [
        imageCacheBusting(),
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    server: {
        port: 3000
    },
    build: {
        sourcemap: false,
    }
});
