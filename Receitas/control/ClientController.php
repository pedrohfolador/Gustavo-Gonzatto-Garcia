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

	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "receita", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT * FROM client WHERE ".$crit);
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
		
		$result = $conn->query("DELETE FROM client WHERE " .$cond);
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