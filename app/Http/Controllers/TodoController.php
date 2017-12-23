<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {

    	$todos = Todo::latest()->paginate(5);

    	return view('index')->with('todos', $todos);
    }


    public function store(Request $request)
    {
    	Todo::create(['todo' => $request->todo]);

    	session()->flash('msg', 'Successfully created');

    	return redirect()->back();
    }


    public function edit($id)
    {
    	$todo = Todo::find($id);

    	return view('edit', compact('todo'));
    }


    public function update($id)
    {
        // 'request()' is a helper funtion of 'Request'
    	Todo::find($id)->update(['todo' => request()->todo]);

    	session()->flash('msg', 'Successfully updated');

    	return redirect()->route('home');
    }


    public function completed($id)
    {
    	$todo = Todo::find($id)->update(['is_completed' => 1]);

    	session()->flash('msg', 'Successfully completed');

    	return redirect('/');
    }


    public function incomplete($id)
    {
    	$todo = Todo::find($id)->update(['is_completed' => 0]);

        // 'request()->session()' is same to 'session()'
    	request()->session()->flash('msg', 'Undo Successfull');

    	return redirect('/');
    }


    public function delete($id)
    {
        // same to 'Todo::find($id)->delete()'
    	Todo::destroy($id);

    	session()->flash('msg', 'Successfully deleted');

    	return redirect()->back();
    }
}
