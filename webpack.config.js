const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const path = require('path');

module.exports = {
  entry: './src/js/main.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader', 'postcss-loader'],
      },
    ],
  },
  plugins: [
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      proxy: 'http://localhost/wordpress/',
      files: [
        './**/*.php',
        './dist/*.js',
        './dist/*.css'
      ],
    })
  ],
};