<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Frontend extends Controller
{
	public function index()
	{
		
		return view('frontend/login');
	}

	
	public function register()
	{
		session();
		$data = [
			'validate' => \Config\Services::validation(),
		];
		return view('frontend/register',$data);
	}

	//--------------------------------------------------------------------

}
