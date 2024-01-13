<?php
    // include_once('./App/Http/Controllers/WebsiteController.php');

    class Route{
        protected $route_list = [];
        
        public function get($uri, $controller){
            $function = explode('@',$controller)[1];
            $controller = explode('@',$controller)[0];
            
            $this->route_list[] = [
                'method' => 'get',
                'uri' => $uri,
                'controller' => $controller,
                'function' => $function,
            ];
            return $this;
        }

        public function post($uri,  $controller){
            $function = explode('@',$controller)[1];
            $controller = explode('@',$controller)[0];
            $this->route_list[] = [
                'method' => 'post',
                'uri' => $uri,
                'controller' => $controller,
                'function' => $function,
            ];
            return $this;
        }

        public function param(){
            
            $route_last_index = count($this->route_list) - 1 ;
            $this->route_list[$route_last_index]['param'] = func_get_args();
            // $this->$route_last_index
            // dd($this->route_list);
            // dd($this);
            return $this;

        }

        public function start(){
            // include_once('./resource/views/contact.php');
            // dd($this);
            $request_method = $_SERVER['REQUEST_METHOD'];
            $request_uri = explode('?',$_SERVER['REQUEST_URI'])[0] ;
            // dd($request_uri, explode('?',$_SERVER['REQUEST_URI']));
            // dd($request_method , $request_uri);
            $target_route =[];
            foreach($this->route_list as $route){
                $method = strtoupper($route['method']);
                $uri = $route['uri'];

                
                if($uri == $request_uri){
                    if($method == $request_method){
                        $target_route = $route;
                        // dd($uri,$request_uri,$method,$request_method,$route,$target_route);
                        // echo "ok";
                    }else{
                        echo "not ok";
                    }
                }
            }
            // dd($target_route);
            if(!count($target_route)){
                echo "404 page not found ";
                return 0;
            }
            if(isset($target_route['param']) && count($target_route['param'])){
                foreach($target_route['param'] as $param)
                    if(!isset($_REQUEST[$param])){
                        echo "404 page not found,<br> <h1>$param </h1> is missing";
                        return 0;
                    }
            }

            $controllername = $target_route['controller'];
            $controllerfunction = $target_route['function'];
            // include_once('./App/Http/Controllers/WebsiteController.php');
            // include_once("./App/Http/Controllers/$controllername.php");
            $controller = "\\App\\Http\\Controllers\\$controllername";
            $controller =new $controller() ;
            $function = $controllerfunction;
            $controller->$function(...array_values($_REQUEST));
            // dd($target_route,$controller , $function);

            // dd($this->route_list);
        }
    }
?>