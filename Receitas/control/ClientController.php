<?php
include_once "model/Request.php";
include_once "model/Client.php";
include_once "database/DatabaseConnector.php";
class BudgetController
{
	public function register($request)
	{
		$params = $request->get_params();
		$client = new Client($params["name"],
				 $params["lastname"],
				 $params["cpf"],
				 $params["rg"],
				 $params["data"]),
				 $params["salary"]);
		$db = new DatabaseConnector("localhost", "receita", "mysql", "", "root", "");
	
		$conn = $db->getConnection();
		
		
	    return $conn->query($this->generateInsertQuery($client));	
	}
	private function generateInsertQuery($client)
	{
		$query =  "INSERT INTO client (name, lastname, cpf, rg, data, salary) VALUES ('".$client->getName()."','".
					$client->getLastName()."','".
					$client->getCpf()."','".
					$client->getRg()."','".
					$client->getDate()."','".  
					$client->getSalary()."')";
		return $query;						
	}
}