import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

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
