<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    //
    public function index()
    {
        $books = Book::all();
        return view('books.index', ["books"=>$books]);
    }
    public function show($isbn){
        $book = Book::whereisbn($isbn)->first();
        return view("books.show", ["book"=>$book]);
    }
    public function create(){
        return view("books.create");
    }
    public function edit($isbn){
        $book = Book::whereisbn($isbn)->first();
        return view("books.edit", ["book"=>$book]);
    }
    public function store(Request $request){
        $book = new Book();
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->auhtor = $request->author;
        $book->price = $request->price;
        $book->publish_year= intval($request->publish_at);
        $book->stock= intval($request->stock);
        $book->price= intval($request->price);
        $book->save();
        return redirect()->route('books.index');
    }
    public function update($isbn){
        $request=request();
        $title= $request->title;
        $isbn = $request->isbn;
        $author= $request->author;
        $publish_year= intval($request->publish_at);
        $stock= intval($request->stock);
        $price= intval($request->price);
         Book::where('isbn',$isbn)->update([
            'isbn'=> $isbn,
            'title'=> $title,
            'auhtor'=> $author,
            'publish_year'=> $publish_year,
            'stock'=> $stock,
            'price'=> $price
            
        ]);


return to_route('books.index');


    }
    public function destroy($isbn){
        Book::where('isbn',$isbn)->delete();
        return to_route('books.index');
    }

}
