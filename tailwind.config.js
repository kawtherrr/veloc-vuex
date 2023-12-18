/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing: {
        '1': '0.25rem',
        '2': '0.5rem',
        '3': '0.75rem',
      },
      colors: {
        fdc100: '#fdc100',
        ffa900: '#ffa900',
        D5E3FF: '#D5E3FF',
        707070: '#707070',
        BDBEBD: '#BDBEBD',
        aee7ff: '#aee7ff',
        707070: '#707070',
      },
      width: {
        45: '45%',
        80: '80%',
        95: '95%',
        90: '90%',
        98: '98%',
        65: '65%',
        35: '35%',
        60: '60%',
        25: '25%',
        20: '20%',
        30: '30%',
        70: '70%',

      }
    },
  },
  plugins: [],
}

