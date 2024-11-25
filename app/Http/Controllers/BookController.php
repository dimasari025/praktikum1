<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books =[
        ['id'=> 1, 'title'=>'To kill a Mockingbird', 'author'=>'harper lee'],
        ['id'=> 2, 'title'=>'1984', 'author'=>'Georg Orwell'],
        ['id'=> 3, 'title'=>'the great gatsby', 'author'=>'F. Scott Fitzgerald']
    ];

    public function index(){
        return view('books.index', ['books' => $this->books]);
    }
    public function show($id){
        $book =collect($this->books)->firstWhere('id',$id);
        if(!$book){
            abort(404);
        }
        return view('books.show', ['book' => $book]);
    }

    public function store(){
        $id = count($this->books)+1;
        $new = [
            'id' => $id,

        ];
    }
}
