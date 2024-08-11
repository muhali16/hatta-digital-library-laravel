<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name'];

    public function scopeFilter(Builder $query): void
    {
        $query->when(request()->bc ?? false, function ($query) {
            return $query->where("category_name", 'like', '%' . request()->bc . "%");
        });
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
