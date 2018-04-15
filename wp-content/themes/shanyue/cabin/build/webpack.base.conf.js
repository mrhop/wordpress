var utils = require('./utils')
var config = require('./config')
var path = require('path')
const resolve = path.resolve
let assetImgName = 'images/[name].[ext]';
let assetFontName = 'fonts/[name].[ext]';
let assetImgOutputPath = utils.assetsPath('/');
let assetFontOutputPath = utils.assetsPath('/');
module.exports = {
    entry: Object.assign({vendors: './assets/scss/vendors.scss'}, utils.getEntries('./assets/js/*.js'), utils.getEntries('./assets/scss/*-alone.scss')),
    output: {
        path: config.assetsRoot,
        filename: '[name].js'
    },
    resolve: {
        extensions: ['.js', '.jsx', '.json'],
        alias: {
            '@': resolve('assets'),
        }
    },
    module: {
        rules: [
            {
                test: /\.js[x]?$/,
                loader: 'eslint-loader',
                enforce: "pre",
                include: [resolve('./assets/js')],
                options: {
                    formatter: require('eslint-friendly-formatter')
                }
            },
            {
                test: /\.js[x]?$/,
                loader: 'babel-loader',
                include: [resolve('./assets/js')]
            },
            {
                test: /^\.(png|jpe?g|gif|svg)(\?.*)?$/,
                loader: 'url-loader',
                include: [resolve('assets/images')],
                query: {
                    limit: 10000,
                    name: assetImgName,
                    outputPath: assetImgOutputPath
                }
            },
            {
                test: /\.(woff2?|eot|ttf|otf)(\?.*)?$/,
                loader: 'url-loader',
                include: [resolve('assets/fonts')],
                query: {
                    limit: 10000,
                    name: assetFontName,
                    outputPath: assetFontOutputPath
                }
            }
        ]
    }
}