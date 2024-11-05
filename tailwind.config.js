/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php", // Indiquez où se trouvent vos fichiers Blade
    "./resources/**/*.js",         // Indiquez où se trouvent vos fichiers JavaScript
    "./resources/**/*.vue",        // Indiquez si vous utilisez Vue.js
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
