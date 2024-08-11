<?php

namespace App\Http\Middleware;

use App\Models\Book;
use Closure;
use Illuminate\Http\Request;

class UpdateBookMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $bookId = $request->route('id');
        $book = Book::find($bookId);

        if ($book->user_id === auth()->id() || auth()->user()->is_admin == 1) {
            return $next($request);
        }

        return abort(403, "You are not admin or the uploader this book.");
    }
}
