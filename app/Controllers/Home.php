<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function playindex()
	{
		//just a test update to test Codeinspector.io
		return null;
	}
}
