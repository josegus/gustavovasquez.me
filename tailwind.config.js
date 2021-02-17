module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
      zIndex: {
        '-10': '-10',
      }
    },
    fontFamily: {
      'serif': ['"Abril Fatface"', 'cursive']
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
