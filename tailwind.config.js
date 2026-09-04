import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand-primary': {
                    DEFAULT: '#0DB3E9',
                    '50': '#C9EFFC',
                    '100': '#B3E9FB',
                    '200': '#87DDF8',
                    '300': '#5CD0F6',
                    '400': '#30C4F3',
                    '500': '#0DB3E9',
                    '600': '#0B92BE',
                    '700': '#087092',
                    '800': '#064F67',
                    '900': '#032D3B',
                    '1000': '#02222C'
                },
                'brand-secondary': {
                    DEFAULT: '#FEB943',
                    '50': '#FFE3B5',
                    '100': '#FFDFA8',
                    '200': '#FED58F',
                    '300': '#FECC76',
                    '400': '#FEC25C',
                    '500': '#FEB943',
                    '600': '#FEA815',
                    '700': '#E49001',
                    '800': '#B67301',
                    '900': '#895701'
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
