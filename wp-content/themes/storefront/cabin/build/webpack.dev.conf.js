const utils = require('./utils')
const config = require('./config')
const merge = require('webpack-merge')
const baseWebpackConfig = require('./webpack.base.conf')
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const webpackConfig = merge(baseWebpackConfig, {
    mode: 'development',
    watch: true,
    module: {
        rules: utils.styleLoaders({
            sourceMap: config.build.productionSourceMap,
            extract: true
        })
    },
    optimization: {
        minimize: false,
        splitChunks: {
            cacheGroups: {
                initial: {
                    test: /[\\/]node_modules[\\/].*\.js/,
                    chunks: 'initial',
                    name: 'initial',
                    filename: 'js/initial.js',
                    priority: -10
                },
                vendors: {
                    test: /[\\/]node_modules[\\/].*\.js/,
                    name: 'vendors',
                    chunks: 'async',
                    filename: 'js/vendors.js',
                    reuseExistingChunk: true,
                    priority: -20
                },
            }
        }
    },
    devtool: config.dev.productionSourceMap ? '#source-map' : false,
    output: {
        path: config.build.assetsRoot,
        filename: utils.assetsPath('js/[name].js'),
        chunkFilename: utils.assetsPath('js/[id].js')
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: utils.assetsPath('css/[name].css'),
            chunkFilename: "[id].css"
        })
    ]
})

if (config.bundleAnalyzerReport) {
    const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin
    webpackConfig.plugins.push(new BundleAnalyzerPlugin())
}

module.exports = webpackConfig
