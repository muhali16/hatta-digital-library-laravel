@extends("layouts.main")
@section("container")
<main class="h-screen mx-10 lg:px-80">
    <div class="h-full">
        <!-- Left column container with background-->
        <div
            class="g-6 flex h-full flex-wrap items-center justify-between">
            <!-- Right column container -->
            <div>
                <form action="{{route("login.post")}}" method="post">
                    @csrf
                    @method("POST")
                    <!--Sign in section-->
                    <div>
                        <p class="mb-0 mr-4 text-2xl font-bold">Sign in</p>
                    </div>

                    <!-- Separator between social media sign in and email/password sign in -->
                    <div
                        class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
                    </div>

                    <!-- Email input -->
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input
                            type="email"
                            name="email"
                            required
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput2"
                            placeholder="Email address" />
                        <label
                            for="exampleFormControlInput2"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        >Email address
                        </label>
                    </div>

                    <!-- Password input -->
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input
                            type="password"
                            name="password"
                            required
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput22"
                            placeholder="Password" />
                        <label
                            for="exampleFormControlInput22"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        >Password
                        </label>
                    </div>

                    <!-- Login button -->
                    <div class="text-left">
                        <button
                            type="submit"
                            class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            Login
                        </button>

                        <!-- Register link -->
                        <p class="mb-0 mt-2 pt-1 text-sm font-semibold">
                            Don't have an account?
                            <a
                                href="{{route("register")}}"
                                class="text-danger transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700"
                            >Register</a
                            >
                        </p>
                    </div>
                </form>
            </div>
        </div
            class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
    </div>
</main>
@endsection
