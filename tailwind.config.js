/** @type {import('tailwindcss').Config} */
module.exports = {

  content: ["./app/Views/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        'Philosopher': ['"Philosopher"', 'sans-serif'],
        'Inter' : ['"Inter"', 'sans-serif'],
        'Poppins': ['Poppins', 'sans-serif'],
        'Sora': ['Sora', 'sans-serif']
      }
    },
  },
  plugins: [],
}

