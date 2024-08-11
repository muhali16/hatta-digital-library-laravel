<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        "book_category_id",
        "book_identifier_number",
        "book_title",
        "book_available_stock",
        "book_description",
        "book_file",
        "book_image_cover",
    ];

    public function scopeFilter(Builder $query)
    {
        $query->when(request()->sb ?? false, function ($query) {
            return $query->where("book_title", 'like', '%' . request()->sb . "%");
        })->when(request()->bc ?? false, function ($query) {
            return $query->where("book_category_id", request()->bc);
        });
    }

    public function book_category()
    {
        return $this->belongsTo(BookCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
