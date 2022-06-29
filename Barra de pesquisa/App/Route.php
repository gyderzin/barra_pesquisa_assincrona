<?php

    namespace App;
    
    use MF\init\bootstrap;

    class Route extends bootstrap{

        protected function initRoutes() {            
            // index
            $routes['home'] = array(                
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );  
            $routes['pesquisar'] = array(                
                'route' => '/pesquisar',
                'controller' => 'indexController',
                'action' => 'pesquisar'
            );                   
            $this->setRoutes($routes);
        }       
    }

?>