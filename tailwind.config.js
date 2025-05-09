module.exports = {
  content: [
    './*.php',
    './template-parts/*.php',
    './src/js/*.js'
  ],
  theme: {
    extend: {
      colors: {
        'labmania-blue': '#2f58a5',
        'labmania-yellow': '#fee600',
        'labmania-yellow-light': '#fcf839',
        'labmania-white': '#fefefe',
        'labmania-accent': '#004ed5',
      },
      fontFamily: {
        'sans': ['Poppins', 'Montserrat', 'sans-serif'],
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