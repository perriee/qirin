/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
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
  plugins: [
    require('flowbite/plugin')
  ],
}

