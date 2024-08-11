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
                        Add New Book Category
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

                <form action="{{route('dashboard.bookCategory.store')}}" method="post">
                    @csrf
                    @method("POST")
                    <!--Modal body-->
                    <div data-te-modal-body-ref class="relative p-4">
                        <!--Input Book Title-->
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <input
                                type="text"
                                name="category_name"
                                autofocus
                                autocapitalize="words"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleFormControlInputText"
                                placeholder="Title" />
                            <label
                                for="exampleFormControlInputText"
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Title
                            </label>
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
            <h1 class="font-bold text-2xl">Administrator</h1>
        </section>

        <!-- Search Result Section -->
        <section id="result" class="flex flex-col gap-3 lg:flex-row">
            <div class="py-5 lg:w-1/3">
                <!-- Book Category Table -->
                <h1 class="font-semibold text-lg border-b border-black pb-2">Book Categories Table</h1>
                <form action="" class="mt-4">
                    <button
                        type="button"
                        class="inline-block rounded bg-primary mb-3 px-3 py-1 text-sm font-medium capitalize leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-toggle="modal"
                        data-te-target="#staticBackdrop"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        <i class="fa-regular fa-square-plus mr-2"></i>
                        Book Category
                    </button>
                </form>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-medium">
                                    <thead class="border-b font-medium">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">#</th>
                                        <th scope="col" class="px-6 py-4">Category Name</th>
                                        <th scope="col" class="px-6 py-4">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($book_categories as $bc)
                                    <tr
                                        class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{$loop->iteration}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$bc->category_name}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <a
                                                href="{{route('dashboard.bookCategory.delete', ['id' => $bc->id])}}"
                                                class="rounded bg-red-500 p-2 text-sm font-medium uppercase text-white transition duration-150 ease-in-out hover:bg-red-600 focus:bg-red-600 active:bg-red-600">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No book category added.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {{$book_categories->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 lg:w-2/3">
                <!-- Book Category Table -->
                <h1 class="font-semibold text-lg border-b border-black pb-2">Books Table</h1>
                <div class="mt-4 w-full flex flex-wrap lg:flex-row items-center text-right gap-4">
                    <div class="">
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
                        @if(request()->sb > 0)
                            <input type="text" name="sb" value="{{request()->sb}}" hidden>
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
                    <form action="">
                        <div class="mr-5 flex w-full items-center justify-between">
                            <input
                                type="text"
                                name="sb"
                                value="{{request()->sb}}"
                                class="relative m-0 block min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none motion-reduce:transition-none dark:border-neutral-500 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                placeholder="Search Book Title"
                                aria-label="Search"
                                aria-describedby="button-addon2" />

                            @if(request()->fb > 0)
                                <input type="text" name="fb" value="{{request()->fb}}" hidden>
                            @endif

                            <!--Search icon-->
                            <button
                                type="submit"
                                class="input-group-text flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-neutral-700 dark:text-neutral-200"
                                id="basic-addon2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    class="h-5 w-5">
                                    <path
                                        fill-rule="evenodd"
                                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-medium">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4 w-10">#</th>
                                        <th scope="col" class="px-6 py-4">Title</th>
                                        <th scope="col" class="px-6 py-4">Category</th>
                                        <th scope="col" class="px-6 py-4">Author</th>
                                        <th scope="col" class="px-6 py-4">Available</th>
                                        <th scope="col" class="px-6 py-4">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($books as $book)
                                        <tr
                                            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$loop->iteration}}</td>
                                            <td class="text-wrap px-6 py-4">{{$book->book_title}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->book_category->category_name}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->user->username}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->book_available_stock}}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a
                                                    href="{{route('dashboard.books.edit', ['id' => $book->id])}}"
                                                    class="rounded bg-yellow-500 p-2 text-sm font-medium uppercase text-white transition duration-150 ease-in-out hover:bg-yellow-600 focus:bg-yellow-600 active:bg-yellow-600">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a
                                                    href="{{route('dashboard.books.delete', ['id' => $book->id])}}"
                                                    class="rounded bg-red-500 p-2 text-sm font-medium uppercase text-white transition duration-150 ease-in-out hover:bg-red-600 focus:bg-red-600 active:bg-red-600">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No Book Added.</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
