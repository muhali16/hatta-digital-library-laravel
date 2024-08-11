@extends("dashboard.layouts.main")

@section("container")
    <main id="content" class="px-5 py-10">
        <section id="title" class="flex flex-wrap gap-3 lg:flex-row items-end justify-between border-b border-neutral-400 pb-2">
            <h1 class="font-bold text-2xl">Profile</h1>
        </section>

        <!-- Profile Section -->
        <section id="profile">
            <div class="py-5 flex flex-row gap-4 justify-start items-center">
                <div class="text-end">
                    <img
                        src="{{asset("images/user.png")}}"
                        class="mx-auto mb-4 w-32 rounded-lg"
                        alt="Avatar" />
                    <form action="{{route("dashboard.profile.update")}}" method="post" class="w-80">
                        @csrf
                        @method("POST")
                        <!--Input Email-->
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <input
                                type="email"
                                name="email"
                                value="{{auth()->user()->email}}"
                                class="disabled bg-neutral-300 peer block min-h-[auto] w-full rounded border-0 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
                                id="exampleFormControlInputText"
                                placeholder="Email" />
                            <label
                                for="exampleFormControlInputText"
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >
                            </label>
                        </div>
                        <!--Input Username-->
                        <div class="relative mb-3" data-te-input-wrapper-init>
                            <input
                                type="text"
                                name="username"
                                value="{{auth()->user()->username}}"
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
                                value="{{auth()->user()->name}}"
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
                                value="{{auth()->user()->birthday}}"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"
                                placeholder="Birthday" />
                            <label
                                for="floatingInput"
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Birthday</label
                            >
                        </div>
                        <!--Input Occupation-->
                        <select data-te-select-init name="occupation">
                            <option value="Student" {{auth()->user()->occupation == "Student" ? "selected" : ""}}>Student</option>
                            <option value="Lecturer" {{auth()->user()->occupation == "Lecturer" ? "selected" : ""}}>Lecturer</option>
                            <option value="Public" {{auth()->user()->occupation == "Public" ? "selected" : ""}}>Public</option>
                            <option value="Other" {{auth()->user()->occupation == "Other" ? "selected" : ""}}>Other</option>
                        </select>
                        <label data-te-select-label-ref>Occupation</label>
                        <button
                            type="submit"
                            class="mt-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            Edit
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
