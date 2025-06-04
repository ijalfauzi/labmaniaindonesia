module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './src/js/*.js'
  ],
  theme: {
    extend: {
      colors: {
        'lm-blue': '#004ed5',
        'lm-yellow': '#fcf839',
        'lm-yellow-light': '#fee600',
        'lm-white': '#fefefe',
        'lm-accent': '#2f58a5',
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