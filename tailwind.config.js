/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',

  ],
  darkMode:'class',
  theme: {
    extend: {
      fontFamily: {
        'dancing-script': ['Dancing Script', 'cursive'],
        'playfair': ['Playfair', 'serif'],
      },
      keyframes:{
        "fade-out": {
          "0%": {
              opacity: 1
          },
          "100%": {
              opacity: 0
          },
      },
      },
      animation:{
        fadeout: 'fade-out 1s ease-out 0.75s 1',

      },
      colors: {
        'cream':'#FFFDD0',
        'custom-bg-dark': 'rgb(62,60,57)',  
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],

}

