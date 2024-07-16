<x-navuser :user="$user"></x-navuser>
<x-layoutku>
    <!--Isi detail film-->
    <div class="list-film">
        <section>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->poster }}">

                </div>
                <div class="col-md-8">
                    <h1 class="mt-3">{{ $film->judul }}</h1>
                    <p><strong>Director:</strong> {{ $film->director }}</p>
                    <p><strong>Producer:</strong> {{ $film->producer }}</p>
                    <p><strong>Negara:</strong> {{ $film->negara }}</p>
                    <div class="d-flex flex-wrap mt-2">
                        @foreach (explode(',', $film->kategori) as $kategori)
                            <span class="badge badge-secondary m-1">{{ $kategori }}</span>
                        @endforeach
                    </div><br>
                    <h2 class="mt-4">Sinopsis Film</h2>
                    <p class="">{{ $film->deskripsi }}</p>
                    <h2 class="mt-4">Rating User</h2>
                    @if ($ulasans->isEmpty())
                        <p>Film ini belum ada yang mengulas, silahkan masukan ulasan anda</p>
                    @else
                        <div class="rating d-flex align-items-center">
                            <span class="text-warning h2 mb-0">
                                <span class="stars">
                                    {{ str_repeat('★', floor($averageRating)) }}{{ str_repeat('☆', 5 - floor($averageRating)) }}
                                </span>
                            </span>

                            <span class="ml-2 averagerating">
                                {{ $ulasans->count() }} Pemberi Rating - Average rating Film:
                                {{ number_format($averageRating, 1) }}
                            </span>
                        </div>
                    @endif

                    <div class="mt-2">
                        <h5 class="averagerating">Ayo <span>{{ $user->nama }}</span> berikan Rating dan ulasan versi
                            kamu!</h5>

                        <form action="{{ route('user.ulasan-store', $film->id) }}" method="POST">
                            @csrf
                            <div class="rating-range mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="rating" class="form-label">Rating 0 -> 5</label>
                                        <input type="range" id="rating" name="rating" min="1"
                                            max="5">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nilai_cerita" class="form-label">Cerita 0 -> 10</label>
                                        <input type="range" id="nilai_cerita" name="nilai_cerita" min="1"
                                            max="10">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nilai_audio" class="form-label">Audio Cerita 0 -> 10</label>
                                        <input type="range" id="nilai_audio" name="nilai_audio" min="1"
                                            max="10">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nilai_karakter" class="form-label">Karakter Cerita 0 -> 10</label>
                                        <input type="range" id="nilai_karakter" name="nilai_karakter" min="1"
                                            max="10">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cinematography" class="form-label">Cinematography Cerita 0 ->
                                            10</label>
                                        <input type="range" id="cinematography" name="cinematography" min="1"
                                            max="10">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ending" class="form-label">Ending Film Cerita 0 -> 10</label>
                                        <input type="range" id="ending" name="ending" min="1"
                                            max="10">
                                    </div>
                                </div>
                                <div class="mt-3 review-section">
                                    <textarea id="ulasan" name="ulasan" rows="4" class="form-control" placeholder="Tulis ulasanmu di sini..."></textarea>
                                </div>
                                <button type="submit" class="btn custom-button mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
        </section>

        <!--Ini ulasan Section-->
        <section>
            <div class="review-page">
                <div class="title-section">
                    <h1 class="title">Ulasan Pilihan</h1>
                    <div class="page-number">Halaman 1</div>
                </div>
                <div class="reviews">
                    @foreach ($ulasans as $ulasan)
                        <div class="review">
                            <div class="rating">
                                <span class="stars">
                                    {{ str_repeat('★', $ulasan->rating) }}{{ str_repeat('☆', 5 - $ulasan->rating) }}
                                </span>
                                <span class="upload-time">{{ $ulasan->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="user-info">
                                <img src="../../assets/user.png" alt="Profile Picture" class="profile-picture">
                                <div class="user-details">
                                    <span class="user-name">{{ $ulasan->user->nama }}</span>
                                    <p class="user-review">{{ $ulasan->ulasan }}</p>
                                    <div class="actions">
                                        <button
                                            class="helpful-button text-white py-1.5 px-3 hover:bg-blue-600 hover:scale-105 hover:shadow text-center border border-blue-600 rounded-md h-8 text-sm flex items-center gap-1 lg:gap-2">
                                            <svg class="w-4 h-4 ml-1.5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z">
                                                </path>
                                            </svg>
                                            <span>{{ $ulasan->helpful_count }} Membantu</span>
                                        </button>
                                        <button
                                            class="report-button py-1.5 px-3 hover:text-red-600 hover:scale-105 hover:shadow text-center border border-grey-300 rounded-md border-grey-400 h-8 text-sm flex items-center gap-1 lg:gap-2">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25a12.05 12.05 0 00-5.227-6.212C11.228 1.45 8.772 1.45 6.454 2.713a12.051 12.051 0 00-5.227 6.212C1.078 10.26.75 11.618.75 13.031c0 1.05.206 2.055.607 3a11.998 11.998 0 002.55 3.782M3 3l18 18">
                                                </path>
                                            </svg>
                                            Laporkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-layoutku>

<x-footer></x-footer>
