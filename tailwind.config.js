module.exports = {
  mode: 'jit',
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'righteous': ['Righteous', 'cursive'],
        'poppins': ['Poppins', 'sans-serif']
      },
      backgroundImage: theme => ({
        'background': "url('/images/header.png')"
      }),
      fontSize: {
        '7.5xl': '5.25rem'
      },
      colors: {
        primary: '#f6861a',
        primaryhover: '#f9735b'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
