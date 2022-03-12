<?php
     require '../vendor/autoload.php';

     $router = new Geekscity\Router(dirname(__DIR__).'/views');

     $router->get('/', 'post/index', 'home')
            ->get('/categories', 'category/show', 'category')
            ->get('/post/[*:slug]-[i:id]', 'post/show', 'post-show')
            ->get('/categories/[*:slug]-[i:id]', 'category/show', 'category-show')
            ->get('/contact', 'others/contact', 'contact')
            ->get('/bookmarks', 'others/bookmarks', 'bookmarks')
            ->run();
