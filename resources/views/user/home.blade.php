<x-navuser :user="$user"></x-navuser>

<x-layoutku>
    <!--Hero Section-->
    <section class="heroku relative bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>
        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-bold text-white sm:text-5xl">
                    Halo <span>{{ $user->nama }}</span> Selamat datang di platform kami
                    <strong class="block font-extrabold text-rose-500 border-spacing-1 border-black"> KAJIFILM </strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed text-white">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus numquam
                    ea!
                </p>
                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#list-film"
                        class="custom-bg block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">Get
                        Started</a>
                    <a href="#"
                        class="custom-bg block w-full rounded bg-white/10 px-12 py-3 text-sm font-medium text-white shadow hover:text-white/75 focus:outline-none focus:ring active:text-opacity-75 sm:w-auto">Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>

    <!--Section untuk menampilkan semua film di database-->
    <section id="list-film" class="film-list py-12">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl text-white">Cari Film Favorit Anda</h2>
                <form action="{{ route('user.home') }}" method="GET" class="flex items-center">
                    <input type="text" name="search" placeholder="Cari film..."
                        class="px-4 py-2 rounded-l-lg focus:outline-none">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 focus:outline-none">
                        Cari
                    </button>
                </form>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($films as $film)
                    <div
                        class="filmcard rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <a href="{{ route('user.detail-film', $film->id) }}">
                            <img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->poster }}"
                                class="w-full h-auto object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold">{{ $film->judul }}</h3> 
                                <a href="{{ route('user.detail-film', $film->id) }}"
                                    class="block mt-4 hover:underline">Check Now!</a>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="mt-8">
                {{ $films->links() }}
            </div>

            <!-- Category Filters -->
            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-white">Categories</h2>
                <div class="flex flex-wrap gap-4 mt-4">
                    <a href="{{ route('user.home') }}"
                        class="block rounded bg-gray-700 px-4 py-2 text-sm font-medium text-white hover:bg-gray-600">All</a>
                    <a href="{{ route('user.home', ['kategori' => 'Action']) }}"
                        class="block rounded bg-gray-700 px-4 py-2 text-sm font-medium text-white hover:bg-gray-600">Action</a>
                    <a href="{{ route('user.home', ['kategori' => 'Drama']) }}"
                        class="block rounded bg-gray-700 px-4 py-2 text-sm font-medium text-white hover:bg-gray-600">Drama</a>
                    <a href="{{ route('user.home', ['kategori' => 'Comedy']) }}"
                        class="block rounded bg-gray-700 px-4 py-2 text-sm font-medium text-white hover:bg-gray-600">Comedy</a>
                    <!-- Add more categories as needed -->
                </div>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</x-layoutku>
<x-footer></x-footer>
