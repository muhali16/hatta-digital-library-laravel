@extends("layouts.main")

@section("container")
    @include("layouts.header")
    <main>
        <!-- Hero Section -->
        <section id="hero" class="px-9 lg:px-24 py-36" style="background-image: url('{{asset("images/hero-bg.jpg")}}')">
            <div class="h-fit relative">
                <h1 class="text-center text-5xl font-thin text-white"><span class="font-bold">Hatta</span> Digital Library</h1>
                <p class="mt-2 text-white text-center text-xl text-white/30 tracking-widest">Free and open digital library for all.</p>

                <!-- Slider main container -->
                <div class="swiper mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="lg:px-40">
                                <h1 class="text-white text-2xl text-center">"Discover Endless Possibilities: Your Gateway to a Comprehensive Digital Library."</h1>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lg:px-40">
                                <h1 class="text-white text-2xl text-center">"Immerse Yourself in a Universe of Books, Journals, and More."</h1>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lg:px-40">
                                <h1 class="text-white text-2xl text-center">"Where Curiosity Meets Knowledge: Your Premium Source for Digital Literature."</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Search Section -->
                <div id="search" class="absolute translate-y-3/4 w-full z-20">
                    <form action="{{route('search')}}" class="p-7 border-2 border-blue-500 rounded-lg mx-7 lg:mx-24 bg-white shadow-xl">
                        <div class="relative mb-4 flex flex-wrap items-stretch">
                            <input
                                type="text"
                                name="sb"
                                required
                                class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-lg text-neutral-900 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none"
                                placeholder="Search Book, Journal, Article"
                                aria-label="Search Book, Journal, Article" />
                            <button
                                class="z-[2] flex flex-row rounded-r items-center bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-xl text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:z-[3] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                type="submit">
                                <i class="fa-solid fa-magnifying-glass mr-2"></i><span class="hidden lg:block">Search</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Category Section -->
        <section id="category" class="px-9 lg:px-36 py-36">
            <h1 class="text-4xl font-bold text-blue-800 text-right ms-auto mr-24 border-b border-blue-700 p-4 lg:w-1/2">
                Category</h1>

            <div class="mt-7 flex flex-wrap justify-center gap-6 lg:px-24">
                @forelse($book_categories as $bc)
                <a
                    href="{{route('category', ['id' => $bc->id])}}"
                    class="rounded-md bg-primary-100 px-4 py-2 text-center text-lg font-bold text-primary-700 hover:border-2 hover:border-blue-800"
                ><i class="fa-regular fa-bookmark mr-3"></i>{{$bc->category_name}}</a>
                @empty
                    <p class="text-xl font-normal text-gray-700">No Category Available.</p>
                @endforelse
            </div>
        </section>
    </main>

    @include("layouts.footer")

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            height: 200,
            slidesPerView: 1,
            spaceBetween: 30,
            effect: "fade",
            centeredSlides: true,
            fadeEffect: { crossFade: true },
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection
