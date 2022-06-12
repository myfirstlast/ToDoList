<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // return view('index');

        $todolists = Todolist::all();
        return view('index', compact('todolists'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);
        
        Todolist::create($data);
        return back();
    }

    public function edit()
    {
        return 'Hello return';
        return view('edit');
    }
    
    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return back();
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function work() {
        return view('work');
    }
}
