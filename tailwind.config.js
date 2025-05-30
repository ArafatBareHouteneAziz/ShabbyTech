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
        
        // 'primary': '#2e6f40',
        // 'secondary': '#cfffdc',
        // 'tertiary': '#68ba7f',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
} 