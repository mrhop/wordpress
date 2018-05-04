var path = require('path')
var config = require('./config')
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
var glob = require('glob')

exports.getEntries = function (globPath) {
    var entries = {}
    glob.sync(globPath).forEach(function (entry) {
        let parentDir = path.dirname(entry).split('/').pop()
        var basename = path.basename(entry, path.extname(entry)) // 过滤router.js
        entries[basename] = entry
    });
    console.log(entries);
    return entries;
}


exports.assetsPath = function (_path) {
    return path.posix.join(config.assetsSubDirectory, _path)
}

exports.cssLoaders = function (options) {
    options = options || {}

    var cssLoader = {
        loader: 'css-loader',
        options: {
            minimize: process.env.NODE_ENV === 'production',
            sourceMap: options.sourceMap
        }
    }

    // generate loader string to be used with extract text plugin
    function generateLoaders(loader, loaderOptions) {
        var loaders = [cssLoader]
        if (loader) {
            loaders.push({
                loader: loader + '-loader',
                options: Object.assign({}, loaderOptions, {
                    sourceMap: options.sourceMap
                })
            })
        }

        // Extract CSS when that option is specified
        // (which is the case during production build)
        if (options.extract) {
            return [MiniCssExtractPlugin.loader].concat(loaders)
        } else {
            return ['style-loader'].concat(loaders)
        }
    }

    return {
        css: generateLoaders(),
        postcss: generateLoaders(),
        less: generateLoaders('less'),
        sass: generateLoaders('sass', {indentedSyntax: true}),
        scss: generateLoaders('sass'),
        stylus: generateLoaders('stylus'),
        styl: generateLoaders('stylus')
    }
}

exports.styleLoaders = function (options) {
    var output = []
    var loaders = exports.cssLoaders(options)
    for (var extension in loaders) {
        var loader = loaders[extension]
        output.push({
            test: new RegExp('\\.' + extension + '$'),
            use: loader
        })
    }
    return output
}
