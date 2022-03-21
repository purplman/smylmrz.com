const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .vue()
    .sass("resources/scss/app/app.scss", "public/css/app")
    .sass("resources/scss/admin/app.scss", "public/css/admin");
