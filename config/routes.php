<?php
use Cake\Routing\Router;

Router::plugin('TheMovieDatabase', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
