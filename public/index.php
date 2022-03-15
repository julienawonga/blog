<?php
     require '../vendor/autoload.php';

     $whoops = new \Whoops\Run;
     $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
     $whoops->register();

     $router = new Geekscity\Router(dirname(__DIR__).'/views');

     $router->get('/', 'post/index', 'home')
            ->get('/categories', 'category/index', 'category')
            ->get('/post/[*:slug]-[i:id]', 'post/show', 'post-show')
            ->get('/categories/[*:slug]-[i:id]', 'category/show', 'category-show')
            ->get('/contact', 'others/contact', 'contact')
            ->get('/bookmarks', 'others/bookmarks', 'bookmarks')
            ->get('/about', 'others/about', 'about')
            //admin
            ->get('/admin', 'admin/login', 'login')
            ->run();
