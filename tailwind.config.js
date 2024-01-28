/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {

      colors: {
        'primary': '#49176D',
        'color1': '#AC7E3E',
        'color2':'#D58021'

      },
      fontFamily:{
        'sans':['Montserrat-Bold']
      },
    },
  },
  plugins: [],

  colors
}

