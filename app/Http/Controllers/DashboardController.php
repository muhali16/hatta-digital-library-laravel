<?php

namespace App\Http\Controllers;

use App\Services\Book\BookService;
use App\Services\BookCategory\BookCategoryService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $bookCategoryService;
    protected $bookService;

    public function __construct(BookCategoryService $bookCategoryService, BookService $bookService)
    {
        $this->bookCategoryService = $bookCategoryService;
        $this->bookService = $bookService;
    }

    public function index(Request $request)
    {
        return view("dashboard.index", [
            'query' => $request->sb,
            'book_category' => $this->bookCategoryService->find($request->bc),
            'book_categories' => $this->bookCategoryService->all(),
        ]);
    }

    public function profile()
    {
        return view("dashboard.profile");
    }

    public function admin(Request $request)
    {
        return view("dashboard.admin", [
            'query' => $request->sb,
            'books' => $this->bookService->all(),
            'book_category' => $this->bookCategoryService->find($request->bc),
            'book_categories' => $this->bookCategoryService->all(),
        ]);
    }
}
