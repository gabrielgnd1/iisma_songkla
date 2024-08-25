/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./WEB/**/*.{html,js}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

