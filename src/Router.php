<?php
     namespace geekscity;
     class Router{
            /**
         * @var string
         */
        private $viewPath;
        /**
         * @var AltoRouter
         */
        private $router;

        public function __construct(string $viewPath)
        {
            $this->viewPath = $viewPath;
            $this->router = new \AltoRouter();
        }

        public function get(string $url, string $view, ?string $name = null){
            $this->router->map('GET', $url, $view, $name);

            return $this;
        }
        public function post(string $url, string $view, ?string $name = null){
            $this->router->map('POST', $url, $view, $name);

            return $this;
        }
        public function match(string $url, string $view, ?string $name = null){
            $this->router->map('POST|GET', $url, $view, $name);

            return $this;
        }

        public function url(string $name, array $params = []){
            return $this->router->generate($name, $params);
        }


        public function run(): self{
            $match = $this->router->match();
            if ($match){
                $view = $match['target'];
                $params = $match['params'];
                $router = $this;
                $isAdmin = strpos($view, 'admin/') !== false;
                $layout = $isAdmin ? 'admin/layouts/default' : 'layouts/default';
                ob_start();
                require $this->viewPath.DIRECTORY_SEPARATOR.$view.'.php';
                $content = ob_get_clean();
                require $this->viewPath.DIRECTORY_SEPARATOR . $layout. '.php';
                return $this;
            }else{
                $router = $this;
                $layout = 'layouts/default';
                ob_start();
                require $this->viewPath.DIRECTORY_SEPARATOR . 'others/404.php';
                $content = ob_get_clean();
                require $this->viewPath.DIRECTORY_SEPARATOR . $layout. '.php';
                return $this;
            }
           
        }

     }