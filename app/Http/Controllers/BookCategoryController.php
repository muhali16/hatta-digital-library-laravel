<?php

namespace App\Http\Controllers;

use App\Services\BookCategory\BookCategoryService;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    protected $bookCategoryService;

    public function __construct(BookCategoryService $bookCategoryService)
    {
        $this->bookCategoryService = $bookCategoryService;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_name' => "required|min:3|max:255"
        ]);

        $category = $this->bookCategoryService->create($data);
        if ($category) {
            return redirect()->back()->with("success", "Book category added.");
        }
    }

    public function delete($id)
    {
        $this->bookCategoryService->delete($id);

        return redirect()->back()->with("success", "Book category deleted");
    }
}
