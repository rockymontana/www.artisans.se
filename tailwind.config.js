const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.{blade.php,js}'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['ONE DAY', 'Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    }
}
