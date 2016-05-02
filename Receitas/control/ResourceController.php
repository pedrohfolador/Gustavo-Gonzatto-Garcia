<?php
include_once "model/Request.php";
include_once "control/UserController.php";
class ResourceController
{
	private $controlMap = 
	[
		"client" => "ClientController",
		"user" => "UserController",
		"evaluation" => "EvaluationController",
		"recipe" => "RecipeController",
	];
	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}
}