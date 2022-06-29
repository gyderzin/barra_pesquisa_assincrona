<?php
    namespace App\Controllers;

    //os recursos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;        

    class indexController extends Action{      
        public function index() {  
            $produto = Container::getModel('Produto');
            $produtos = $produto->getAll();
            $this->view->produtos = $produtos;
            $this->render('index');           
        }

        public function pesquisar() {        
            $pesquisa = $_POST['pesquisa'];
            $produto = Container::getModel('Produto'); 
            $pesquisa = $produto->pesquisar($pesquisa);
            echo $pesquisa;
        }        
    }
        
    



?>