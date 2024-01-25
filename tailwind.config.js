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
      },
      keyframes: {
        slideInDown: {
          '0%': {
            transform: 'translateY(-100%)',
            opacity: '0',
          },
          '100%': {
            transform: 'translateY(0)',
            opacity: '1',
          },
        },
        dissolveIn: {
          '0%': {
            opacity: '0',
            transform: 'translateY(-100%)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(100%)',
          },
        },
        dissolveOut: {
          '0%': {
            opacity: '1',
            transform: 'translateY(100%)',
          },
          '100%': {
            opacity: '0',
            transform: 'translateY(-100%)',
          },
        }
      },
      animation: {
        'slide-down': 'slideInDown 0.5s ease-out',
        'dissolve-in': ' dissolveIn 0.3s ease-out',
        'dissolve-out': ' dissolveOut 0.3s ease-out'
      },
    },
  },
  plugins: [],
}

