const plugin = require('tailwindcss/plugin');

module.exports = {
  content: [
    './*.php',
    './**/*.php',
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
      typography: (theme) => ({
        DEFAULT: {
          css: {
            fontSize: theme('fontSize.sm')[0], // small p
            lineHeight: theme('lineHeight.relaxed'),
            p: {
              fontSize: theme('fontSize.sm')[0],
              lineHeight: theme('lineHeight.relaxed'),
              marginBottom: '1.25em',
            },
            a: {
              color: theme('colors.blue.900'),
              textDecoration: 'underline',
              fontWeight: '500',
              '&:hover': {
                color: theme('colors.lm-blue'),
              },
              '&:focus': {
                outline: '2px solid ' + theme('colors.lm-blue'),
                outlineOffset: '2px',
              },
            },
            h1: {
              fontSize: theme('fontSize.lg')[0],
              fontWeight: '700',
              lineHeight: theme('lineHeight.snug'),
              marginBottom: '0.8em',
              fontFamily: theme('fontFamily.heading').join(','),
            },
            h2: {
              fontSize: theme('fontSize.base')[0],
              fontWeight: '700',
              lineHeight: theme('lineHeight.snug'),
              marginBottom: '0.75em',
              fontFamily: theme('fontFamily.heading').join(','),
            },
            h3: {
              fontSize: theme('fontSize.sm')[0],
              fontWeight: '600',
              lineHeight: theme('lineHeight.normal'),
              marginBottom: '0.5em',
              fontFamily: theme('fontFamily.heading').join(','),
            },
            blockquote: {
              borderLeftColor: theme('colors.lm-yellow'),
              fontStyle: 'italic',
              color: theme('colors.gray.700'),
            },
            'ul > li::marker': {
              color: theme('colors.lm-blue'),
            },
            'ol > li::marker': {
              color: theme('colors.lm-blue'),
            },
            strong: {
              color: theme('colors.gray.900'),
            },
            img: {
              borderRadius: theme('borderRadius.lg'),
              marginTop: '1.5em',
              marginBottom: '1.5em',
            },
            code: {
              backgroundColor: theme('colors.gray.100'),
              padding: '0.2em 0.4em',
              borderRadius: '0.25rem',
              fontWeight: '400',
            },
          },
        },
      }),
    },
  },
  safelist: [
    { pattern: /grid-cols-.*/ },
    { pattern: /col-span-.*/ },
    { pattern: /gap-.*/ },
  ],
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
