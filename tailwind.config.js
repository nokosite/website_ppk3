/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    fontFamily: {
      nanum: 'Nanum Myeongjo, serif', // Adds a new `font-display` class
      mulish: 'Mulish, sans-serif'
    },
    extend: {
      animation: {
        "loop-scroll": "loop-scrool 50s linear infinite"
      },
      keyframes: {
        "loop-scrool": {
          from: { transform: "translateX(0)"},
          to: { transform: "translateX(-100%)"},
        }
      }
    },
  },
  plugins: [],
}

