<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandingkan Film</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>KajiFilm</title>
    <link rel="icon" href="../../assets/LOGO.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #201658;
        }

        .modal {
            display: none;
        }

        .modal.active {
            display: block;
        }

        .poster-result {
            width: 200px;
            height: 200px;
            border-radius: 10px;
        }

        .pku {
            padding-right: 48px;
            padding-left: 48px;
            font-family: "Poppins", sans-serif;
            text-align: justify;
        }

        .teksku {
            font-size: 3rem;
            /* Sesuaikan ukuran teks sesuai kebutuhan Anda */
            font-weight: bold;
            /* Sesuaikan berat teks sesuai kebutuhan Anda */
            background: linear-gradient(90deg, rgb(195, 61, 34) 0%, rgb(0, 241, 80) 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-left: 48px;
        }
    </style>
</head>

<body class=" text-white min-h-screen flex items-center justify-center">
    <x-navuser :user="$user"></x-navuser>
    <div class="mt-4">
        <h1 class="teksku">Bandingkan Film Favorite anda!</h1>
        <p class="mb-8 pku">Halo Kak {{ $user->nama }}! Bingung memilih film untuk ditonton?
            Gunakan KajiFilm untuk membandingkan film-film terbaru! Dengan fitur bandingkan kami, anda dapat
            membandingkan dua film dengan 5 parameter, yaitu cerita, audio, karakter, cinematography, dan ending.
            Temukan film yang paling cocok untuk Anda dengan mudah dan cepat di KajiFilm!</p>

        <form id="compareForm" action="{{ route('user.compare-proses') }}" method="POST">
            @csrf
            <div class="flex justify-center gap-8 mb-8">
                <div class="bg-gray-700 p-4 rounded-lg">
                    <button type="button" id="chooseFilm1"
                        class="w-full h-48 bg-gray-600 rounded-lg flex items-center justify-center">
                        <span id="film1Text" class="text-2xl">Pilih Film ke 1</span>
                    </button>
                    <input type="hidden" name="film1" id="film1Id">
                </div>
                <div class="bg-gray-700 p-4 rounded-lg">
                    <button type="button" id="chooseFilm2"
                        class="w-full h-48 bg-gray-600 rounded-lg flex items-center justify-center">
                        <span id="film2Text" class="text-2xl">Pilih Film ke 2</span>
                    </button>
                    <input type="hidden" name="film2" id="film2Id">
                </div>
            </div>

            <center><button id="compareButton" class="bg-black text-white px-4 py-2 rounded" disabled>Bandingkan
                    Film</button></center>
        </form>

        <div class="flex justify-center gap-4 mt-8">
            <a href="{{ route('user.home', ['kategori' => 'Romance']) }}"
                class="bg-red-500 px-4 py-2 rounded text-white">Romance</a>
            <a href="{{ route('user.home', ['kategori' => 'Cartoon']) }}"
                class="bg-blue-400 px-4 py-2 rounded text-white">Cartoon</a>
            <a href="{{ route('user.home', ['kategori' => 'Horror']) }}"
                class="bg-gray-800 px-4 py-2 rounded text-white">Horror</a>
            <a href="{{ route('user.home', ['kategori' => 'Comedy']) }}"
                class="bg-yellow-500 px-4 py-2 rounded text-white">Comedy</a>
            <a href="{{ route('user.home', ['kategori' => 'Action']) }}"
                class="bg-green-500 px-4 py-2 rounded text-white">Action</a>
        </div>
    </div>

    <!-- Modal -->
    <div id="filmModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center ">
        <div class="bg-white text-black p-8 rounded-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Cari Film</h2>
            <form id="searchForm">
                <input type="text" id="searchInput" class="w-full p-2 mb-4 border border-gray-300 rounded"
                    placeholder="Masukkan judul film...">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
            </form>
            <div id="searchResults" class="space-y-2 mt-4"></div>
            <button id="closeModal" class="mt-4 bg-gray-500 text-white px-4 py-2 rounded">Tutup</button>
        </div>
    </div>
    <script>
        let selectedFilmButton = null;
        const filmModal = document.getElementById('filmModal');
        const chooseFilm1 = document.getElementById('chooseFilm1');
        const chooseFilm2 = document.getElementById('chooseFilm2');
        const closeModal = document.getElementById('closeModal');
        const searchForm = document.getElementById('searchForm');
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');
        const film1Text = document.getElementById('film1Text');
        const film2Text = document.getElementById('film2Text');
        const film1Id = document.getElementById('film1Id');
        const film2Id = document.getElementById('film2Id');
        const compareButton = document.getElementById('compareButton');

        function openModal(button) {
            selectedFilmButton = button;
            filmModal.classList.add('active');
        }

        function closeModalFunc() {
            filmModal.classList.remove('active');
        }

        chooseFilm1.addEventListener('click', () => openModal('film1'));
        chooseFilm2.addEventListener('click', () => openModal('film2'));
        closeModal.addEventListener('click', closeModalFunc);

        searchForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const query = searchInput.value;
            if (query.length > 0) {
                fetch(`{{ route('user.form-compare') }}?search=${query}`, {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.films.length > 0) {
                            const results = data.films.map(film => `
                            <button data-id="${film.id}" data-title="${film.judul}" data-poster="{{ asset('storage/${film.poster}') }}" class="film-result w-full text-left bg-gray-200 p-2 rounded hover:bg-gray-300">${film.judul}</button>
                        `).join('');
                            searchResults.innerHTML = results;
                        } else {
                            searchResults.innerHTML =
                                '<p class="text-red-500">Film yang Anda cari tidak ada atau belum tersedia.</p>';
                        }
                    });
            } else {
                searchResults.innerHTML = '';
            }
        });

        searchResults.addEventListener('click', function(event) {
            if (event.target.classList.contains('film-result')) {
                const filmId = event.target.getAttribute('data-id');
                const filmTitle = event.target.getAttribute('data-title');
                const filmPoster = event.target.getAttribute('data-poster');

                if (selectedFilmButton === 'film1') {
                    film1Id.value = filmId;
                    film1Text.innerHTML =
                        `<img src="${filmPoster}" alt="${filmTitle}" class="poster-result w-full h-full object-cover">`;
                } else if (selectedFilmButton === 'film2') {
                    film2Id.value = filmId;
                    film2Text.innerHTML =
                        `<img src="${filmPoster}" alt="${filmTitle}" class="poster-result w-full h-full object-cover">`;
                }

                closeModalFunc();
                updateCompareButton();
            }
        });

        function updateCompareButton() {
            if (film1Id.value && film2Id.value) {
                compareButton.disabled = false;
            } else {
                compareButton.disabled = true;
            }
        }
    </script>
</body>

</html>
