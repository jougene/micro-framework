<?php

class TaskController
{
	public function index()
	{
		$tasks = App::get('database')->selectAll('todos');

		return view('tasks', compact('tasks'));
	}

	public function store()
	{
		App::get('database')->insert('todos', $_REQUEST);

		return redirect('/');
	}
}