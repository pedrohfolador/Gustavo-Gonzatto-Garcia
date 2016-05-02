<?php
include_once "model/Request.php";
include_once "model/Evaluation.php";
include_once "database/DatabaseConnector.php";
class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$evaluation = new Evaluation($params["nameDegustador"],
				 $params["nameRecipe"],
				 $params["date"],
				 $params["grade"]);
		$db = new DatabaseConnector("localhost", "receita", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($evaluation));	
	}
	private function generateInsertQuery($evaluation)
	{
		$query =  "INSERT INTO evaluation (nameDegustador, nameRecipe, data, grade) VALUES ('".$evaluation->getNameDegustador()."','".
					$evaluation->getNameRecipe()."','".
					$evaluation->getDate()."','".
					$evaluation->getGrade()."')";
		return $query;						
	}
}