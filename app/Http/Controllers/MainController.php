<?php

namespace App\Http\Controllers;

use App\Services\Book\BookService;
use App\Services\BookCategory\BookCategoryService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $bookCategoryService;
    protected $bookService;

    public function __construct(BookCategoryService $bookCategoryService, BookService $bookService)
    {
        $this->bookCategoryService = $bookCategoryService;
        $this->bookService = $bookService;
    }

    public function index()
    {
        return view("index", [
            "book_categories" => $this->bookCategoryService->all(),
        ]);
    }

    public function search(Request $request)
    {
        return view("search", [
            'query' => $request->sb,
            'books' => $this->bookService->all(),
            'book_category' => $this->bookCategoryService->find($request->bc),
            'book_categories' => $this->bookCategoryService->all(),
        ]);
    }

    public function category($id)
    {
        return view("category", [
            'category' => $this->bookCategoryService->find($id),
        ]);
    }
}
