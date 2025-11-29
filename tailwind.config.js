import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'yc-green': {
                    50: '#e8f5e9',
                    100: '#c8e6c9',
                    500: '#4caf50',
                    600: '#43a047',
                    700: '#388e3c',
                }
            }
        },
    },

    plugins: [forms],
};