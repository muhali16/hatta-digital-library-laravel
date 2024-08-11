@extends("dashboard.layouts.main")

@section("container")
    <main id="content" class="px-5 py-10">
        <section id="title" class="flex flex-wrap gap-3 lg:flex-row items-end justify-between border-b border-neutral-400 pb-2">
            <h1 class="font-bold text-2xl">Edit Book</h1>
        </section>

        <!-- Edit Section -->
        <section id="result w-full">
            <div class="py-5 flex flex-row gap-4 justify-start items-center">
                <div class="w-full flex flex-col lg:flex-row">
                    <div class="pr-20 lg:w-1/2">
                        <p class="mb-2">Book Cover</p>
                        <img
                            src="{{asset("storage/" . $book->book_image_cover)}}"
                            class="mx-auto mb-4 w-44 rounded-lg"
                            alt="Book Cover" />
                        <form action="{{route('dashboard.books.update', ['id' => $book->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!--Input Book Cover-->
                            <div class="mb-3">
                                <label
                                    for="formFile"
                                    class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                                >Book Cover Upload</label
                                >
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none"
                                    name="book_image_cover"
                                    accept="image/*"
                                    type="file"
                                    id="formFile"
                                    onchange="if(this.value != null) { this.form.submit(); }"/>
                            </div>
                        </form>
                        <p>Book File</p>
                        <a href="{{asset("storage/" . $book->book_file)}}" target="_blank" class="mb-4 text-blue-600">Click here for view the book file.</a>
                        <form action="{{route('dashboard.books.update', ['id' => $book->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!--Input Book File-->
                            <div class="mb-3">
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none"
                                    name="book_file"
                                    type="file"
                                    accept="application/pdf"
                                    id="formFile"
                                    onchange="if(this.value != null) { this.form.submit(); }"/>
                            </div>
                        </form>
                    </div>
                    <div class="lg:w-1/2">
                        <form action="{{route('dashboard.books.update', ['id' => $book->id])}}" method="post" enctype="multipart/form-data" class="text-end mt-4 border border-gray-700 p-5 rounded-lg">
                            @csrf
                            @method("POST")
                            <!--Input Book Title-->
                            <div class="relative mb-3" data-te-input-wrapper-init>
                                <input
                                    type="text"
                                    name="book_title"
                                    value="{{$book->book_title}}"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="exampleFormControlInputText"
                                    placeholder="Title" />
                                <label
                                    for="exampleFormControlInputText"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                >Title
                                </label>
                            </div>
                            <!--Input Book Available Stock-->
                            <div class="relative mb-3" data-te-input-wrapper-init>
                                <input
                                    type="number"
                                    name="book_available_stock"
                                    value="{{$book->book_available_stock}}"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="exampleFormControlInputText"
                                    placeholder="Available Stock" />
                                <label
                                    for="exampleFormControlInputText"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                >Available Stock
                                </label>
                            </div>
                            <!--Select Book Category-->
                            <select data-te-select-init data-te-select-filter="true" data-te-select-clear-button="true" name="book_category_id">
                                @forelse($book_categories as $bc)
                                    <option value="{{$bc->id}}" {{$bc->id == $book->book_category->id ? "selected" : ""}}>{{$bc->category_name}}</option>
                                @empty
                                    <option>No Category.</option>
                                @endforelse
                            </select>
                            <label data-te-select-label-ref>Category</label>
                            <!--Input Book Description-->
                            <div class="relative my-3" data-te-input-wrapper-init>
                        <textarea
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlTextarea1"
                            name="book_description"
                            rows="10"
                            placeholder="Description">{{$book->book_description}}</textarea>
                                <label
                                    for="exampleFormControlTextarea1"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                >Description</label
                                >
                            </div>
                            <button
                                type="submit"
                                class="mt-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                Edit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Preview Section -->
        <section id="result" class="w-full mt-5">
            <div class="py-5 flex flex-row gap-4 justify-start items-center">
                <iframe src="{{asset("storage/" . $book->book_file)}}" width="100%" height="900px" frameborder="0"></iframe>
            </div>
        </section>
    </main>
@endsection
