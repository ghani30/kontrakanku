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
                'poppins' : 'Poppins',
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        screens : {
            'handphone' : '320px',
            'tablet' : '640px',
            'laptop' : '1024px',
            'dekstop' : '1280px'
        },
    },
    plugins: [],
};