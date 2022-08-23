/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.{blade.php,js}'
    ],
    theme: {
        extend: {
            colors: {
                artisan: '#e6324d'
            },
            fontFamily: {
                artisan: ['ONE DAY', 'Nunito', 'sans-serif'],
            },
        },
    }
}
