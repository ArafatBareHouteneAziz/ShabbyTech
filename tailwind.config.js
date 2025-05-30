/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#272757',
        'secondary': '#8686ac',
        'tertiary': '#505081',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
} 