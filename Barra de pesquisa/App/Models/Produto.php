<?php
namespace App\Models;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Model;

class Produto extends Model {
     private $id;
     private $descricao;
     private $valor;

     public function getAll() {
          $query = 'SELECT * FROM produtos';
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $stmt->fetchAll(\PDO::FETCH_ASSOC);
     }
     public function pesquisar($pesquisa) {
          $query = "SELECT * FROM produtos WHERE descricao LIKE ?";
          $stmt = $this->db->prepare($query);
          $stmt->execute(array("%$pesquisa%"));

          return json_encode($stmt->fetchAll(\PDO::FETCH_ASSOC));
     }
}
?>