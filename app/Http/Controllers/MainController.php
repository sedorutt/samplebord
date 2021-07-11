<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('main' , ['posts' => $posts]);
    }
    public function addPost()
    {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        $p = new Post();
        $p->name = $name;
        $p->message = $message;
        $p->save();

        return redirect('/');
    }
}
