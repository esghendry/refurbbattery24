/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        "rb-green": "#52B05E",
        "rb-dark-blue": "#1B365E",
      }
    },
  },
  plugins: [],
}

