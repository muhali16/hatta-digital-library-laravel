<!-- Header -->
<header class="relative z-50">
    <nav
        class="fixed top-0 flex w-full flex-nowrap items-center justify-between bg-[#001D70] py-5 shadow-lg hover:text-neutral-700 focus:text-neutral-700 lg:flex-wrap lg:justify-start lg:px-24"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-5 lg:px-0">
            <div class="mr-12">
                <a class="text-2xl font-thin text-white" href="{{route("home")}}"
                ><span class="font-bold">Hatta </span>Digital Library</a
                >
            </div>
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                type="button"
                data-te-collapse-init
                data-te-target="#navbarSupportedContent14"
                aria-controls="navbarSupportedContent14"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-7 w-7">
                            <path
                                fill-rule="evenodd"
                                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
            </button>

            <!-- Collapsible navbar container -->
            <div
                class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto lg:justify-between"
                id="navbarSupportedContent14"
                data-te-collapse-item>
                <!-- Left links -->
                <ul
                    class="list-style-none mt-3 items-baseline flex flex-col pl-0 lg:mt-1 lg:flex-row"
                    data-te-navbar-nav-ref>
                    <!-- Link -->
                    <li
                        class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1"
                        data-te-nav-item-ref>
                        <a
                            class="p-0 text-white transition duration-200 hover:text-blue-200 hover:ease-in-out focus:text-blue-200 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
                            href="{{url("/")}}#hero"
                            data-te-nav-link-ref
                        >Search</a
                        >
                    </li>
                    <li
                        class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1"
                        data-te-nav-item-ref>
                        <a
                            class="p-0 text-white transition duration-200 hover:text-blue-200 hover:ease-in-out focus:text-blue-200 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
                            href="{{url("/")}}#category"
                            data-te-nav-link-ref
                        >Category</a
                        >
                    </li>
                </ul>
                <div class="flex flex-col gap-3 lg:items-center lg:flex-row">
                    @auth()
                    <div class="relative" data-te-dropdown-ref>
                        <button
                            class="flex items-center whitespace-nowrap rounded-full bg-transparent px-6 pb-2 pt-2.5 text-xs font-medium capitalize leading-normal text-white transition duration-150 ease-in-out hover:bg-blue-900  focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] active:bg-blue-900 motion-reduce:transition-none"
                            type="button"
                            id="dropdownMenuButton1"
                            data-te-dropdown-toggle-ref
                            aria-expanded="false"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            <img
                                src="{{asset("images/user.png")}}"
                                class="w-7 mr-3 rounded-full"
                                alt="Avatar" /> {{auth()->user()->username ?? auth()->user()->email}}
                            <span class="ml-2 w-2">
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20"
                                  fill="currentColor"
                                  class="h-5 w-5">
                                <path
                                    fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                              </svg>
                            </span>
                        </button>
                        <ul
                            class="absolute z-[1000] float-left m-0 mt-3 py-3 hidden w-full list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton1"
                            data-te-dropdown-menu-ref>
                            <li>
                                <a
                                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                    href="{{route("dashboard")}}"
                                    data-te-dropdown-item-ref
                                >Dashboard</a
                                >
                            </li>
                            <li>
                                <a
                                    class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-red-700 hover:bg-red-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                    href="{{route("logout")}}"
                                    data-te-dropdown-item-ref
                                >Logout</a
                                >
                            </li>
                        </ul>
                    </div>
                    @endauth
                    @guest()
                    <a
                        href="{{route("login")}}"
                        class="inline-block rounded-full border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Sign in
                    </a>
                    <a
                        href="{{asset("register")}}"
                        class="inline-block rounded-full border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Sign up
                    </a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
</header>
