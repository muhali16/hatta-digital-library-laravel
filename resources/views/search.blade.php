@extends("layouts.main")

@section("container")
    @include("layouts.header")
    <main class="lg:px-24 py-28">
        <!-- Header Search Result Section -->
        <section id="result" class="px-5">
            <div class="flex flex-col gap-3 lg:items-center lg:flex-row">
                @if(request()->bc)
                    <div class="lg:w-3/4">
                        <h3>Result</h3>
                        @if(request()->sb)
                            <h2 class="text-3xl font-bold">{{$query}}</h2>
                        @endif
                        @if(request()->bc)
                            <p class="text-sm font-semibold mt-1 text-blue-900 opacity-75">In category {{$book_category->category_name}}</p>
                        @endif
                    </div>
                @endif
                @if(!request()->bc)
                    <div class="lg:w-1/4">
                        <form action="" class="flex flex-col">
                            <input type="text" name="sb" value="{{$query}}" hidden>
                            <select data-te-select-init data-te-select-filter="true" data-te-select-clear-button="true" name="bc" onchange="if(this.value != 0) { this.form.submit(); } else {this.value = null; this.form.submit();}">
                                <option></option>
                                @foreach($book_categories as $bc)
                                    <option value="{{$bc->id}}">{{$bc->category_name}}</option>
                                @endforeach
                            </select>
                            <label data-te-select-label-ref>Filter Category</label>
                        </form>
                    </div>
                @endif
            </div>
        </section>

        <!-- Search Result Section -->
        <section id="result" class="py-10 px-5">
            <div class="flex flex-wrap gap-4 justify-start">
                @forelse($books as $book)
                    <!-- Book Card -->
                    <div
                        class="lg:w-72 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                        <div
                            class="relative overflow-hidden bg-cover bg-no-repeat h-80"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            <img
                                class="rounded-t-lg w-full"
                                src="{{asset("storage/" . $book->book_image_cover)}}"
                                alt="Book Cover" />
                            <a href="{{route("books.show", ['id' => $book->id])}}">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                            </a>
                        </div>
                        <div class="p-6">
                            @auth()
                                @if(auth()->user()->id == $book->user_id || auth()->user()->is_admin === 1)
                                    <div class="flex gap-3 mb-3">
                                        <a
                                            href="{{route('dashboard.books.edit', ['id' => $book->id])}}"
                                            class="rounded bg-yellow-500 px-3 py-1 text-sm font-medium uppercase text-white transition duration-150 ease-in-out hover:bg-yellow-600 focus:bg-yellow-600 active:bg-yellow-600">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a
                                            href="{{route("dashboard.books.delete", ['id' => $book->id])}}"
                                            class="rounded bg-red-500 px-3 py-1 text-sm font-medium uppercase text-white transition duration-150 ease-in-out hover:bg-red-600 focus:bg-red-600 active:bg-red-600">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                @endif
                            @endauth
                            <a
                                href="{{route("books.show", ['id' => $book->id])}}"
                                class="my-2 text-xl font-bold leading-tight text-blue-950 hover:text-blue-800">
                                {{$book->book_title}}
                            </a>
                            <a
                                href="#!"
                                class="block mt-1 flex items-center hover:text-blue-700"
                            ><i class="fa-regular fa-user mr-2 w-5"></i>{{$book->user->name}}</a>
                            <div class="mt-4 flex flex-row items-center justify-between gap-3">
                                <a
                                    href="{{route('category', ['id' => $book->book_category->id ?? 1])}}"
                                    class="rounded-md bg-primary-100 px-4 py-2 text-center text-sm font-bold text-primary-700 hover:border hover:border-blue-800"
                                ><i class="fa-regular fa-bookmark mr-3"></i>{{$book->book_category->category_name}}</a>
                                <p class="text-md font-medium"><span class="opacity-50 mr-2">Available</span> <span class="font-semibold">{{$book->book_available_stock}}</span></p>
                            </div>
                        </div>
                    </div>
                @empty
            </div>
            <p class="opacity-25 text-5xl">No result for {{$query}}</p>
               @endforelse
        </section>
    </main>
    @include("layouts.footer")
@endsection
