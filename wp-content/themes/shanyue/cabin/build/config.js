var path = require('path')

module.exports = {
    assetsSubDirectory: '',
    assetsRoot: path.resolve(__dirname, '../../assets'),
    bundleAnalyzerReport: process.env.npm_config_report,
    build: {
        productionSourceMap: false,
        productionGzip: false,
        productionGzipExtensions: ['js', 'css'],
    },
    dev: {
        cssSourceMap: true
    }
}
