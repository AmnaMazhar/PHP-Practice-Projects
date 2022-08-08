/** @type {import('tailwindcss').Config} */
const { join } = require('path');
module.exports = {
  content: [join(__dirname, "../php/**/*.{html,js,php}")],
  theme: {
    extend: {},
  },
  plugins: [],
}
