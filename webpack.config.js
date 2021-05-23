const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    mode: 'production',
    entry: {
        index: './src/js/app.js',
        components: './src/js/components.js',
        styles: './src/js/styles.js',
    },
    watch: true,
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: ["babel-loader"]
            },
            {
                test: /\.scss$/i,
                use: [
                    'style-loader', 
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                        publicPath: path.resolve(__dirname, 'dist'),
                        esModule: false,
                        },
                    }
                    ,'css-loader', 
                    'sass-loader'],
            },
            {
                test: /\.svg$/,
                use: [
                  {
                    loader: 'svg-url-loader',
                    options: {
                      limit: 10000,
                    },
                  },
                ],
            },
        ],
    },
    optimization: {
        minimizer: [new TerserPlugin({
          extractComments: false,
        })],
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: path.resolve(__dirname, "src", "index.html"),
        }),
        new MiniCssExtractPlugin({
            filename: '[contenthash].css',
            chunkFilename: '[contenthash].css',
          }),
    ],
    output: {
        filename: '[contenthash].[name].bundle.js',
        path: path.resolve(__dirname, 'dist'),
        clean: true
    },
    optimization: {
        runtimeChunk: 'single',
    },
};