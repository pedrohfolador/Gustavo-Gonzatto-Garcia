<?php
	class Evaluation
	{
		private $nameDegustador;
		private $nameRecipe;
		private $date;
		private $grade;
		
		public function __construct ($nameDegustador, $nameRecipe, $date, $grade){
			$this->setNameDegustador($nameDegustador);
			$this->setNameRecipe($nameRecipe);
			$this->setDate($date);
			$this->setGrade($grade);
		}
		
		//SET
		
		public function setNameDegustador ($nameDegustador){
			$this->nameDegustador = $nameDegustador;
		}
		
		public function setNameRecipe ($nameRecipe){
			$this->nameRecipe = $nameRecipe;
		}
		
		public function setDate ($date){
			$this->date = $date;
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
			echo $date;
		}
		
		public function getGrade (){
			echo $grade;
		}
		
		
	}