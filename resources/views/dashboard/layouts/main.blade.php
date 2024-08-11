<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Hatta Digital Library</title>
    @include("layouts.css")
</head>
<body>
    <!-- Header -->
    <header class="relative">
        <nav
            class="relative flex w-full flex-wrap items-center justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4">
            <div class="flex w-full flex-wrap gap-3 items-center justify-between px-3">
                <div class="ml-3 flex items-center gap-4" id="content">
                    <!-- Toggler -->
                    <button
                        class="inline-block border border-neutral-500 rounded p-1 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-lg focus:bg-neutral-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-neutral-200"
                        data-te-sidenav-toggle-ref
                        data-te-target="#sidenav-2"
                        aria-controls="#sidenav-2"
                        aria-haspopup="true">
                        <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-neutral-700">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              class="h-5 w-5">
                            <path
                                fill-rule="evenodd"
                                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd" />
                          </svg>
                        </span>
                    </button>
                    <!-- Toggler -->
                    <a
                        class="ml-2 text-xl text-neutral-800 dark:text-neutral-200"
                        href="#"
                    >Dashboard</a
                    >
                </div>
                <form action="{{route("dashboard")}}">
                    <div class="mr-5 flex w-full items-center justify-between">
                        <input
                            type="text"
                            name="sb"
                            value="{{request()->sb}}"
                            class="relative m-0 block min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none motion-reduce:transition-none dark:border-neutral-500 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                            placeholder="Search Book Title"
                            aria-label="Search"
                            aria-describedby="button-addon2" />

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
        </nav>
    </header>

    <!-- Sidenav -->
    <aside
        id="sidenav-2"
        class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
        data-te-sidenav-init
        data-te-sidenav-hidden="true"
        data-te-sidenav-mode="over"
        data-te-sidenav-content="#content">
        <h1 class="text-2xl text-neutral-700 p-5"><a href="{{route("home")}}"><b>Hatta</b> Digital Library</a></h1>
        <p class="text-base text-neutral-700 p-5">Role: {{auth()->user()->is_admin == 1 ? "Admin" : "User"}}</p>
        <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
            <li class="relative">
                <a
                    href="{{route("dashboard")}}"
                    class="flex gap-4 items-center h-12 text-md cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                    data-te-sidenav-link-ref>
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="relative">
                <a
                    href="{{route("dashboard.profile")}}"
                    class="flex gap-4 items-center h-12 text-md cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                    data-te-sidenav-link-ref>
                    <i class="fa-solid fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            @can("admin")
            <li class="relative">
                <a
                    href="{{route("dashboard.admin")}}"
                    class="flex gap-4 items-center h-12 text-md cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                    data-te-sidenav-link-ref>
                    <i class="fa-solid fa-gauge"></i>
                    <span>Administrator</span>
                </a>
            </li>
            @endcan
            <li class="relative">
                <a
                    href="{{route("logout")}}"
                    class="flex gap-4 items-center h-12 text-md cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-red-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-red-800 hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                    data-te-sidenav-link-ref>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
    <!-- Sidenav -->
    @yield("container")
    @include("layouts.js")


    @if(session("success"))
        <script>
            iziToast.success({
                title: 'Success',
                position: "bottomRight",
                timeout:5000,
                message: {{session("success")}}
            });
        </script>
    @endif
    @if(session("failed"))
        <script>
            iziToast.error({
                title: 'Error',
                position: "bottomRight",
                timeout:5000,
                message: {{session("failed")}}
            });
        </script>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error)
            <script>
                iziToast.warning({
                    title: 'Error',
                    position: "bottomRight",
                    timeout: 0,
                    message: '{{$error}}'
                });
            </script>
        @endforeach
    @endif


</body>
</html>
