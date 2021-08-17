const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

 */

mix 
/*
    .sass('resources/css/bootstrap.scss', 'public/css/bootstrap.css')
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/bootstrap.css')
*/
    .sass('resources/css/style-dark.scss', 'public/css/style-dark.css')
    .sass('resources/css/style-light.scss', 'public/css/style-light.css')
    .scripts('node_modules/jquery/dist/jquery.js','public/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/js/bootstrap.js') 
    .scripts('resources/js/app.js', 'public/js/script.js')
/*
    .webpackConfig({
        module: {
        rules: [
            {
            test: /\.tsx?$/,
            loader: "ts-loader",
            exclude: /node_modules/
            }
        ]
        },
        resolve: {
        extensions: ["*", ".js", ".jsx", ".vue", ".ts", ".tsx"]
        }
    })*/
;

