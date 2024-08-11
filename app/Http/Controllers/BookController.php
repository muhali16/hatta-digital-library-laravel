<?php

namespace App\Http\Controllers;

use App\Exports\BookExport;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Services\Book\BookService;
use App\Services\BookCategory\BookCategoryService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BookController extends Controller
{
    protected $bookService;
    protected $bookCategoryService;

    public function __construct(BookService $bookService, BookCategoryService $bookCategoryService)
    {
        $this->bookService = $bookService;
        $this->bookCategoryService = $bookCategoryService;
    }

    public function store(StoreBookRequest $request)
    {
        $book = $this->bookService->create($request->validated());
        if ($book)
        {
            return redirect()->back()->with("success", "Book added.");
        }
    }

    public function show($id)
    {
        return view("books.show", [
            'book' => $this->bookService->find($id),
        ]);
    }

    public function edit($id)
    {
        return view("dashboard.books.edit", [
            "book" => $this->bookService->find($id),
            "book_categories" => $this->bookCategoryService->all(),
        ]);
    }

    public function update($id, UpdateBookRequest $request)
    {
        $update = $this->bookService->update($id, $request->validated());
        if ($update)
        {
            return redirect()->back()->with("success", "Book updated");
        }
    }

    public function delete($id)
    {
        $this->bookService->delete($id);

        return redirect()->back()->with("success", "Book deleted.");
    }

    public function download($id, Request $request)
    {
        $book = $this->bookService->find($id);
        if ($request->type == 'pdf')
        {
            $pdf = Pdf::loadView('books.pdf', [
                'book' => $book,
            ]);
            $filenamePDF = now() . "_" . $book->book_title . ".pdf";
            return $pdf->download($filenamePDF);
        }

        if ($request->type == 'excel')
        {
            $filenameEXCEL = now() . "_BOOKS_" . auth()->user()->username . ".xlsx";
            return Excel::download(new BookExport, $filenameEXCEL);
        }

        return back()->with('failed', "Action no provided.");
    }
}
