<?php
include_once "model/Request.php";
include_once "model/Recipe.php";
include_once "database/DatabaseConnector.php";
class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$recipe = new Recipe($params["nameRecipe"],
				 $params["nameChef"],
				 $params["data"],
				 $params["category"]);
		$db = new DatabaseConnector("localhost", "receita", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($recipe));	
	}
	private function generateInsertQuery($recipe)
	{
		$query =  "INSERT INTO recipe (nameRecipe, nameChef, data, category) VALUES ('".$recipe->getNameRecipe()."','".
					$recipe->getNameChef()."','".
					$recipe->getDate()."','".
					$recipe->getCategory()."')";
		return $query;						
	}
}