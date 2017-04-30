/**
 * Created by karanbhasin on 30/04/17.
 */
var elixir = require('laravel-elixir');

elixir(function(mix){
    mix.sass('app.scss')

        .styles([



    ])

        .scripts([

            'app.js',
            'bootstrap.js'


        ],'./public/js.js')


});