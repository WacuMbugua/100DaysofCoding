
const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const webpack = require('webpack');

module.exports = {
  entry: './src/index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist'),
    watchOptions: {
        poll: 1000 // Check for changes every second
      }
  },
  devtool: 'inline-source-map',
    devServer: {
    contentBase: './dist',
    hot: true,
},
plugins: [new webpack.HotModuleReplacementPlugin()],
 
  output: {
    filename: '[name].bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
};