<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Book::select('book_title', 'book_description', 'book_available_stock', 'book_file', 'book_image_cover')->where("user_id", auth()->user()->id)->get();

        return $data->map(function($value, $index) {
            return [
                'Judul' => $value->book_title,
                'Description' => $value->book_description,
                'Stock' => $value->book_available_stock,
                'Download Book' => asset('storage/' . $value->book_file),
                'Book Cover' => asset('storage/' . $value->book_image_cover),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Judul',
            'Description',
            'Stock',
            'Download Book',
            'Book Cover',
        ];
    }
}
