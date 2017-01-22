<?php

class PagesController
{
	
	public function index()
	{
		$tasks = App::get('database')->selectAll('todos');

		return view('index', compact('tasks'));
	}

	public function about()
	{
		return view('about');
	}

	public function contact()
	{
		return view('contact');
	}
}