<?php

class LivresController extends BaseController 
{

	public function index()
	{
		$livre = Livres::get();
		return View::make('livres.index', array('livres' => $livre));
	}
}