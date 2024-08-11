@extends("layouts.main")
@section("container")
    <main class="h-screen mx-10 lg:px-80">
        <div class="h-full">
            <!-- Left column container with background-->
            <div
                class="g-6 flex h-full flex-wrap items-center justify-between">
                <!-- Right column container -->
                <div>
                    <form action="{{route("completeAccount.post")}}" method="post">
                        @csrf
                        @method("POST")
                        <!--Sign in section-->
                        <div>
                            <p class="mb-0 mr-4 text-2xl font-bold">Complete your new account.</p>
                        </div>

                        <!-- Separator between social media sign in and email/password sign in -->
                        <div
                            class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
                        </div>

                        <!--Input Username-->
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <input
                                type="text"
                                name="username"
                                value="{{old('username')}}"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
                                id="exampleFormControlInputText"
                                placeholder="Username" />
                            <label
                                for="exampleFormControlInputText"
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Username
                            </label>
                        </div>
                        <!--Input Name-->
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <input
                                type="text"
                                name="name"
                                value="{{old('name')}}"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
                                id="exampleFormControlInputText"
                                placeholder="Name" />
                            <label
                                for="exampleFormControlInputText"
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Name
                            </label>
                        </div>
                        <!-- Input Birthday -->
                        <div
                            class="relative mb-3"
                            data-te-input-wrapper-init>
                            <input
                                type="date"
                                name="birthday"
                                value="{{old('birthday')}}"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"/>
                            <label
                                for="floatingInput"
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Birthday</label
                            >
                        </div>
                        <!--Input Occupation-->
                        <select data-te-select-init name="occupation">
                            <option value="Student">Student</option>
                            <option value="Lecturer">Lecturer</option>
                            <option value="Public">Public</option>
                            <option value="Other">Other</option>
                        </select>
                        <label data-te-select-label-ref>Occupation</label>

                        <!-- Login button -->
                        <div class="text-left mt-3">
                            <button
                                type="submit"
                                class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div
                class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
        </div>
    </main>
@endsection
