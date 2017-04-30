/**
 * Created by karanbhasin on 30/04/17.
 */
var elixir = require('laravel-elixir');

elixir(function(mix){
    mix.sass('app.scss')

        .styles([

            'blog-post.css',
            'bootstrap.css',
            'font-awesome.css',
            'metis-menu.css',
            'sb-admin-2.css',
            'styles.css',
            'timeline.css'


    ],'./public/css.css')

        .scripts([

            'jquery.js',
            'bootstrap.js',
            'metismenu.js',
            'sb-admin-2.js'


        ],'./public/js.js')


});