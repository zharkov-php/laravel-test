<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ArticleController extends Controller
{
    public function index(){
        $article = App\Articles::incomplete();
           return view('hello', [
               'name' => 'Andrey',
               'old' => '12',
           ], compact('article'));
//});
    }

    public function show($id){
        $article = App\Articles::find($id);
        return view('articles.show', compact('article'));
    }
}
