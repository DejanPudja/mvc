<?php 
namespace App\Controllers;
use App\Models\CategoryModel;
use App\Core\Controller;

class CategoryController extends Controller {

    public function show($id){
        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $category = $categoryModel->getById($id);
        $this->set("category", $category);
    }
    
}