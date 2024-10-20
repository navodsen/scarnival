import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                pops: ['Poppins', ...defaultTheme.fontFamily.sans],
                mont: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'xxs': '7px',
              },
        },
    },
    plugins: [],
};
