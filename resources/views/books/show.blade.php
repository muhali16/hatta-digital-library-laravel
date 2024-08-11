@extends("layouts.main")

@section("container")
    @include("layouts.header")
    <main class="lg:px-24 py-28">
        <section id="bookShow" class="py-10 px-5">
            <h1 class="text-3xl text-neutral-700 font-bold">{{$book->book_title}}</h1>
            <div class="flex flex-wrap items-start mt-5">
                <div class="lg:w-1/3 p-5">
                    <img
                        src="{{asset("storage/" . $book->book_image_cover)}}"
                        class="mx-auto mb-4 w-64 rounded-lg"
                        alt="Book Cover" />
                </div>
                <div class="lg:w-2/3">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-md font-normal">
                                        <tbody>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Title</td>
                                            <td class="text-wrap px-6 py-4">{{$book->book_title}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Uploaded By</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->user->name}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Available Stock</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->book_available_stock}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Category</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->book_category->category_name}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Description</td>
                                            <td class="px-6 py-4 text-wrap">{{$book->book_description}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Download</td>
                                            <td class="px-6 py-4 text-wrap"><a href="{{asset("storage/" . $book->book_file)}}" class="text-blue-500"><i class="fa-regular fa-file-pdf"></i> Click here</a><br><a class="text-blue-500" href="{{route('books.download', ['id' => $book->id])}}?type=pdf"><i class="fa-regular fa-file-pdf"></i> Download Book Data</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Preview Section -->
        <section id="preview" class="w-full mt-5">
            <div class="py-5 flex flex-row gap-4 justify-start items-center">
                <iframe src="{{asset("storage/" . $book->book_file)}}" width="100%" height="900px" frameborder="0"></iframe>
            </div>
        </section>
    </main>
    @include("layouts.footer")
@endsection
