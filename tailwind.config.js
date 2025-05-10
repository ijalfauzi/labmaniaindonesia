module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './src/js/*.js'
  ],
  theme: {
    extend: {
      colors: {
        'lm-blue': '#2f58a5',
        'lm-yellow': '#fee600',
        'lm-yellow-light': '#fcf839',
        'lm-white': '#fefefe',
        'lm-accent': '#004ed5',
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
        heading: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
  safelist: [
    { pattern: /grid-cols-.*/ },
    { pattern: /col-span-.*/ },
    { pattern: /gap-.*/ },
  ],
}