<?php
	class Evaluation
	{
		private $nameDegustador;
		private $nameRecipe;
		private $data;
		private $grade;
		
		public function __construct ($nameDegustador, $nameRecipe, $data, $grade){
			$this->setNameDegustador($nameDegustador);
			$this->setNameRecipe($nameRecipe);
			$this->setDate($data);
			$this->setGrade($grade);
		}
		
		//SET
		
		public function setNameDegustador ($nameDegustador){
			$this->nameDegustador = $nameDegustador;
		}
		
		public function setNameRecipe ($nameRecipe){
			$this->nameRecipe = $nameRecipe;
		}
		
		public function setDate ($data){
			$this->data = $data;
		}
		
		public function setGrade ($grade){
			$this->grade = $grade;
		}
		
		//GET
		public function getNameDegustador (){
			echo $nameDegustador;
		}
		
		public function getNameRecipe (){
			echo $nameRecipe;
		}
		
		public function getDate (){
			echo $data;
		}
		
		public function getGrade (){
			echo $grade;
		}
		
		
	}