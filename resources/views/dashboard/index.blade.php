@extends("dashboard.layouts.main")

@section("container")
    <!-- Modal -->
    <div
        data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="staticBackdrop"
        data-te-backdrop="static"
        data-te-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div
            data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5
                        class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="staticBackdropLabel">
                        Add New Book
                    </h5>
                    <!--Close button-->
                    <button
                        type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss
                        aria-label="Close">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form action="{{route("dashboard.books.store")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("POST")
                    <input type="number" name="user_id" value="{{auth()->user()->id}}" hidden>
                <!--Modal body-->
                <div data-te-modal-body-ref class="relative p-4">
                    <!--Input Book Title-->
                    <div class="relative mb-3" data-te-input-wrapper-init>
                        <input
                            type="text"
                            name="book_title"
                            value="{{old("book_title")}}"
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
                            value="{{old("book_available_stock")}}"
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
                        <option value="{{$bc->id}}">{{$bc->category_name}}</option>
                        @empty
                            <option>No category available.</option>
                        @endforelse
                    </select>
                    <label data-te-select-label-ref>Category</label>
                    <!--Input Book Description-->
                    <div class="relative my-3" data-te-input-wrapper-init>
                        <textarea
                              class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                              id="exampleFormControlTextarea1"
                              name="book_description"
                              rows="7"
                              placeholder="Description">{{old("book_desciption")}}</textarea>
                        <label
                            for="exampleFormControlTextarea1"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        >Description</label
                        >
                    </div>
                    <!--Input Book File-->
                    <div class="mb-3">
                        <label
                            for="formFile"
                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                        >Book File</label
                        >
                        <input
                            class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none"
                            name="book_file"
                            type="file"
                            value="{{old("book_file")}}"
                            accept="application/pdf"
                            id="formFile" />
                    </div>
                    <!--Input Book Cover-->
                    <div class="mb-3">
                        <label
                            for="formFile"
                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                        >Book Cover</label
                        >
                        <input
                            class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none"
                            name="book_image_cover"
                            accept="image/*"
                            value="{{old("book_image_cover")}}"
                            type="file"
                            id="formFile" />
                    </div>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button
                        type="reset"
                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Reset
                    </button>
                    <button
                        type="submit"
                        class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Add
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <main id="content" class="px-5 py-10">
        <section id="title" class="flex flex-wrap gap-3 lg:flex-row items-end justify-between border-b border-neutral-400 pb-2">
            <h1 class="font-bold text-2xl">My Books</h1>
            <!-- Button trigger modal -->
            <div class="flex flex-wrap lg:flex-row items-center gap-4">
                <div class="flex gap-2">
                    <button
                        type="button"
                        class="inline-block rounded bg-primary px-3 py-1 text-sm font-medium capitalize leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-toggle="modal"
                        data-te-target="#staticBackdrop"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        <i class="fa-regular fa-square-plus mr-2"></i>
                        Book
                    </button>
                    <a
                        href="{{route("books.download", ['id' => auth()->user()->username])}}?type=excel"
                        type="button"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        class="flex items-center rounded bg-primary px-3 py-1 text-sm font-medium capitalize leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        <i class="fa-solid fa-file-excel mr-2"></i>
                        Print Excel
                    </a>
                </div>
                <form action="" class="flex flex-col">
                    @if($query > 0)
                        <input type="text" name="sb" value="{{$query}}" hidden>
                    @endif
                    <select data-te-select-init data-te-select-filter="true" data-te-select-clear-button="true" name="bc" onchange="if(this.value != 0) { this.form.submit(); } else {this.value = null; this.form.submit();}">
                        <option></option>
                        @forelse($book_categories as $bc)
                        <option value="{{$bc->id}}">{{$bc->category_name}}</option>
                        @empty
                            <option value="{{request()->bc}}" selected>{{$book_category->category_name}}</option>
                        @endforelse
                    </select>
                    <label data-te-select-label-ref>Filter Category</label>
                </form>
            </div>
        </section>

        <!-- Search Result Section -->
        <section id="result">
            @if($query > 0)
                <h3 class="mt-3">Search Result for</h3>
                <h2 class="text-3xl font-bold">{{$query}}</h2>
            @endif
            @if(request()->bc)
                <p class="text-sm font-semibold mt-1 text-blue-900 opacity-75">In category {{$book_category->category_name}}</p>
            @endif
            <div class="py-5 flex flex-wrap gap-4 justify-start items-center">
                @forelse(auth()->user()->books()->filter()->get() as $book)
                <!-- Book Card -->
                <div
                    class="block lg:w-72 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
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
            </div>
                @empty
                <p class="opacity-25 text-5xl">No book added.</p>
                @endforelse
        </section>
    </main>
@endsection
