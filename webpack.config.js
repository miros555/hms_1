const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const autoprefixer = require('autoprefixer');

module.exports = (env, argv) => {
    return {
        plugins: [
            new MiniCssExtractPlugin({
                filename: '../landings-style.css'
            }),
        ],
        entry: './js/webpack/landing.js',
        output: {
            filename: 'webpack/compiled.js',
            path: path.resolve(__dirname, 'js')
        },
        devtool: 'source-map',
        module: {
            rules: [
                {
                    test: /\.(sc|c)ss$/,
                    use: [
                        {
                            loader: MiniCssExtractPlugin.loader,
                            options: {
                                hmr: argv.mode === 'development',
                                sourceMap: true
                            },
                        },
                        {
                            loader: 'css-loader',
                            options: {
                                sourceMap: true
                            }
                        },
                        {
                            loader: 'postcss-loader',
                            options: {
                                plugins: [
                                    autoprefixer({})
                                ],
                                sourceMap: true
                            }
                        },
                        {
                            loader: 'sass-loader',
                            options: {
                                sourceMap: true
                            }
                        }
                    ]
                },
                {
                    test: /\.png$/,
                    use: [
                        {
                            loader: "file-loader",
                            options: {
                                name: '[name].[ext]',
                                outputPath: '../img-compiled/',
                                publicPath: '../HelloMaasWP/img-compiled/'
                            }
                        }
                    ]
                }
            ]
        },
        optimization: {
            minimizer: [new OptimizeCSSAssetsPlugin({})],
        },
        watch: argv.mode === 'development'
    }
};