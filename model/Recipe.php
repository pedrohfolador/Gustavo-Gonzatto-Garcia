<?php
	class Recipe 
	{
		private $nameRecipe;
		private $nameChef;
		private $date;
		private $cod;
		private $category;
		
		public function __construct ($nameRecipe, $nameChef, $date, $cod, $category){
			$this->setNameRecipe($nameRecipe);
			$this->setNameChef($nameChef);
			$this->setDate($date);
			$this->setCod($cod);
			$this->setCategory($category);
		}
		
		//SET
		
		public function setNameRecipe ($nameRecipe){
			$this->nameRecipe = $nameRecipe;
		}
		
		public function setNameChef ($nameChef){
			$this->nameChef = $nameChef;
		}
		
		public function setDate ($date){
			$this->date = $date;
		}
		
		public function setCod ($cod){
			$this->cod = $cod;
		}
		
		public function setCategory ($category){
			$this->category = $category;
		}
		
		//GET
		public function getNameRecipe (){
			echo $nameRecipe;
		}
		
		public function getNameChef (){
			echo $nameChef;
		}
		
		public function getDate (){
			echo $date;
		}
		
		public function getCod (){
			echo $cod;
		}
		
		public function getCategory(){
			echo $category;
		}
		
		
		
	}