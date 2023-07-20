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
        container: {
            center: true,
            padding: '16px'
          },
        extend: {
            colors: {
                primary: '#149393'
              },
              fontFamily: {
                inter: ['Inter']
              },
              screens: {
                '2xl': '1320px'
              }
        },
    },

    plugins: [forms],
};
