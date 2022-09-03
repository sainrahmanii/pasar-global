const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    mode: ['jit'],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                calistoga: 'Calistoga',
                alumni: 'Alumni Sans Inline One',
                bree_serif: 'Bree Serif',
                passion_one: 'Passion One',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
