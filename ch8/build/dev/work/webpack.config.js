const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
    mode: "production",
    entry: './src/index.js',
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist'),
    },
    plugins: [new HtmlWebpackPlugin({ template: "src/index.html" })],
    plugins: [new MiniCssExtractPlugin({ filename: '[name].css', })],
    module: {
        rules: [
            {
                test: /\.(sass|scss|css)$/,
                use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader",],
            },
        ],
    },
};    
