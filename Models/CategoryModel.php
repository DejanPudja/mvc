<?php 
namespace App\Models;
use App\Core\DatabaseConnection;

class CategoryModel{
    private $dbConnection;

    public function __construct(DatabaseConnection &$dbConnection){
        $this->dbConnection = $dbConnection;
    }

    public function getById(int $categoryId){
        $sql = "SELECT * FROM category WHERE category_id = ?";
        $prepare = $this->dbConnection->getConnection()->prepare($sql);
        $result = $prepare->execute([$categoryId]);
        $category = NULL;
        if($result){
            $category = $prepare->fetch(\PDO::FETCH_OBJ);
        }
        return $category;
    }
    public function getAll():array{
        $sql = "SELECT * FROM category";
        $prepare = $this->dbConnection->getConnection()->prepare($sql);
        $result = $prepare->execute();
        $category = [];
        if($result){
            $category = $prepare->fetchAll(\PDO::FETCH_OBJ);
        }
        return $category;
    }







    
    public function insert(string $name){
        $sql = "INSERT INTO category( name)VALUES(?)";
        $prepare = $this->dbConnection->getConnection()->prepare($sql);
        $result = $prepare->execute([$name]);
    }
    public function delete(int $id){
        $sql = "DELETE FROM category WHERE category_id = ?";
        $prepare = $this->dbConnection->getConnection()->prepare($sql);
        $result = $prepare->execute([$id]);
    }

    // public function getByUsername(string $username){
    //     $sql = "SELECT * FROM user WHERE username = ?";
    //     $prepare = $this->dbConnection->getConnection()->prepare($sql);
    //     $result = $prepare->execute([$username]);
    //     $username = NULL;
    //     if($result){
    //         $username = $prepare->fetch(\PDO::FETCH_OBJ);
    //     }
    //     return $username;
    // }
}