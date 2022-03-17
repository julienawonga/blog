<?php
     require '../vendor/autoload.php';

     $whoops = new \Whoops\Run;
     $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
     $whoops->register();

     $router = new Geekscity\Router(dirname(__DIR__).'/views');

     $router->get('/', 'post/index', 'home')
            ->get('/article/[*:slug]-[i:id]', 'post/show', 'article-show')

            //Categories
            ->get('/categories', 'category/index', 'category')
            ->get('/categories/[*:slug]-[i:id]', 'category/show', 'category-show')

            //Other pages
            ->get('/contact', 'others/contact', 'contact')
            ->get('/bookmarks', 'others/bookmarks', 'bookmarks')
            ->get('/about', 'others/about', 'about')


            //admin
            ->get('/admin', 'admin/login', 'admin-home')


            //Routes for Articles
            ->get('/admin/new-article', 'admin/post/new', 'admin-new-article')
            ->get('/admin/articles-view', 'admin/post/view', 'admin-articles-view')
            ->get('/admin/articles-show', 'admin/post/show', 'admin-articles-show')


            //Routes for categories
            ->get('/admin/new-category', 'admin/category/new', 'admin-new-category')
            ->get('/admin/categories-view', 'admin/category/view', 'admin-categories-view')
            ->get('/admin/categories-show', 'admin/category/show', 'admin-categories-show')

            ->run();
