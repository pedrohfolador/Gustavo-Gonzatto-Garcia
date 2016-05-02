<?php
	class User
	{
		private $name;
		private $lastname;
		private $cpf
		private $rg;
		private $data;
		private $salary;
		
		
		public function __construct ($name, $lastname, $cpf, $rg, $data, $salary){
			$this->setName($name);
			$this->setLastName($lastname);
			$this->setCpf($cpf);
			$this->setRg($rg);
			$this->setDate($data);
			$this->setSalary($salary);
		}
		
		//SET
		
		public function setName ($name){
			$this->name = $name;
		}
		
		public function setLastName ($lastname){
			$this->lastname = $lastname;
		}
		
		public function setCpf ($cpf){
			$this->cpf = $cpf;
		}
		
		public function setRg ($rg){
			$this->rg = $rg;
		}
		
		public function setDate ($data){
			$this->data = $data;
		}
		
		public function setSalary($salary){
			$this->salary = $salary;
		}
		
		//GET
		public function getName (){
			echo $name;
		}
		
		public function getLastName (){
			echo $lastname;
		}
		
		public function getCpf (){
			echo $cpf;
		}
		
		public function getRg (){
			echo $rg;
		}
		
		public function getDate(){
			echo $data;
		}
		
		public function getSalary(){
			echo $salary;
		}
		
		
	}