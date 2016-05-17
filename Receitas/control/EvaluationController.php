<?php
include_once "model/Request.php";
include_once "model/Evaluation.php";
include_once "database/DatabaseConnector.php";
class EvaluationController
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

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "receita", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT * FROM evaluation WHERE ".$crit);
		//foreach($result as $row) 
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}
		return substr($criteria, 0, -4);	
	}

	public function delete ($request)
	{
		$params = $request->get_params();
		$cond = $this->generateDelete($params);
		$db = new DatabaseConnector("localhost", "receita", "mysql", "", "root", "");
		
		$conn = $db->getConnection();
		
		$result = $conn->query("DELETE FROM evaluation WHERE " .$cond);
	}

	private function generateDelete($params)
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." = '".$value."' AND ";
		}
		return substr($criteria, 0, -4);	
	}
}