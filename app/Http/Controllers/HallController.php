<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        $title = 'Hall';
        $books = Book::all();

        return view('hall', compact('title', 'books'));
    }

    public function GetByBook(Book $book)
    {
        $title = $book->name;

        return dd($book);
    }

    public function GetByCategory(Category $category)
    {
        $title = 'Hall Category';
        $books = Book::where('category_id', $category->id)->get();
        $title = 'Books Of ' . $category->name;
        return view('hall', compact('title', 'books'));
    }

    public function GetByAuthor(Author $author)
    {
        $books = Book::where('author_id', $author->id)->get();
        $title = 'Books By ' . $author->name;
        return view('hall', compact('title', 'books'));
    }
}
