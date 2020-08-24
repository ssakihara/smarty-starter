const mix = require('laravel-mix')

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.scss', '.json'],
    },
    module: {
        rules: [
            {
                enforce: 'pre',
                test: /\.(js|scss)?$/,
                exclude: /node_modules/,
                loader: 'eslint-loader',
                options: {
                    fix: true,
                },
            },
        ],
    },
})

mix.options({
    terser: {
        terserOptions: {
            compress: {
                drop_console: true,
            },
        },
    },
})

mix.js('resources/js/app.js', 'assets/js').sass('resources/sass/app.scss', 'assets/css')
