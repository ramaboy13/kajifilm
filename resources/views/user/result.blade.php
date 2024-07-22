<x-navuser :user="$user"></x-navuser>
<x-layoutku2>
    <section class="comparison-container">
        <div class="pt-6 text-center">
            <h1 class="teksku">Hasil Compare</h1>
        </div>
        <div class="comparison-header text-center d-flex justify-content-around align-items-center">
            <div>
                <img src="{{ asset('storage/' . $film1->poster) }}" class="img-fluid rounded resultimg">
                <div class="movie-title mt-2">{{ $film1->judul }}</div>
                <div><span class="rating-star">⭐</span> {{ number_format($ulasan1->avg('rating'), 1) }}
                    Rating dari user</div>
            </div>

            <h1 class="font-extrabold font-weight-bolder">VS</h1>

            <div>
                <img src="{{ asset('storage/' . $film2->poster) }}" alt="Film 2" class="img-fluid rounded resultimg">
                <div class="movie-title mt-2">{{ $film2->judul }}</div>
                <div><span class="rating-star">⭐</span> {{ number_format($ulasan2->avg('rating'), 1) }}
                    Rating dari user</div>
            </div>
        </div>

        <h3 class="text-center mt-4 font-extrabold font-weight-bolder">{{ $film1->judul }} VS {{ $film2->judul }}</h3>

        <div class="overall-rating m-5 p-10 bg-gray-600 rounded-lg ">
            <h4 class="sub-title">Nilai Keseluruhan</h4>
            <div class="rating-bar mb-3">
                <span>{{ $film1->judul }}</span>
                <div class="progress bg-secondary">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $film1AverageRating }}%;"
                        aria-valuenow="{{ $film1AverageRating }}" aria-valuemin="0" aria-valuemax="10">
                        {{ number_format($film1AverageRating / 10, 1) }}/10</div>
                </div>

            </div>
            <div class="rating-bar">
                <span>{{ $film2->judul }}</span>
                <div class="progress bg-secondary">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $film2AverageRating }}%;"
                        aria-valuenow="{{ $film2AverageRating }}" aria-valuemin="0" aria-valuemax="10">
                        {{ number_format($film2AverageRating / 10, 1) }}/10</div>
                </div>

            </div>
        </div>



        <div class="m-5 p-10 bg-gray-600 rounded-lg ">
            <h4 class="text-center">Hasil penilaian</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="rating-bar mb-2">
                        <span>Cerita</span>
                        <div class="progress bg-secondary">
                            <div class="progress-bar bg-primary" role="progressbar"
                                style="width: {{ number_format($ulasan1->avg('nilai_cerita'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan1->avg('nilai_cerita'), 1) }}" aria-valuemin="0"
                                aria-valuemax="10">
                                {{ number_format($ulasan1->avg('nilai_cerita'), 1) }}
                            </div>
                        </div>
                        <div class="progress bg-secondary mt-2">
                            <div class="progress-bar bg-danger" role="progressbar"
                                style="width: {{ number_format($ulasan2->avg('nilai_cerita'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan2->avg('nilai_cerita'), 1) }}" aria-valuemin="0"
                                aria-valuemax="10">
                                {{ number_format($ulasan2->avg('nilai_cerita'), 1) }}
                            </div>
                        </div>
                    </div>
                    <div class="rating-bar mb-2">
                        <span>Cinematography</span>
                        <div class="progress bg-secondary">
                            <div class="progress-bar bg-primary" role="progressbar"
                                style="width: {{ number_format($ulasan1->avg('cinematography'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan1->avg('cinematography'), 1) }}"
                                aria-valuemin="0" aria-valuemax="10">
                                {{ number_format($ulasan1->avg('cinematography'), 1) }}
                            </div>
                        </div>
                        <div class="progress bg-secondary mt-2">
                            <div class="progress-bar bg-danger" role="progressbar"
                                style="width: {{ number_format($ulasan2->avg('cinematography'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan2->avg('cinematography'), 1) }}"
                                aria-valuemin="0" aria-valuemax="10">
                                {{ number_format($ulasan2->avg('cinematography'), 1) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rating-bar mb-2">
                        <span>Music</span>
                        <div class="progress bg-secondary">
                            <div class="progress-bar bg-primary" role="progressbar"
                                style="width: {{ number_format($ulasan1->avg('nilai_audio'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan1->avg('nilai_audio'), 1) }}" aria-valuemin="0"
                                aria-valuemax="10">
                                {{ number_format($ulasan1->avg('nilai_audio'), 1) }}
                            </div>
                        </div>
                        <div class="progress bg-secondary mt-2">
                            <div class="progress-bar bg-danger" role="progressbar"
                                style="width: {{ number_format($ulasan2->avg('nilai_audio'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan2->avg('nilai_audio'), 1) }}" aria-valuemin="0"
                                aria-valuemax="10">
                                {{ number_format($ulasan2->avg('nilai_audio'), 1) }}
                            </div>
                        </div>
                    </div>
                    <div class="rating-bar mb-2">
                        <span>Karakter</span>
                        <div class="progress bg-secondary">
                            <div class="progress-bar bg-primary" role="progressbar"
                                style="width: {{ number_format($ulasan1->avg('nilai_karakter'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan1->avg('nilai_karakter'), 1) }}"
                                aria-valuemin="0" aria-valuemax="10">
                                {{ number_format($ulasan1->avg('nilai_karakter'), 1) }}</div>
                        </div>
                        <div class="progress bg-secondary mt-2">
                            <div class="progress-bar bg-danger" role="progressbar"
                                style="width: {{ number_format($ulasan2->avg('nilai_karakter'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan2->avg('nilai_karakter'), 1) }}"
                                aria-valuemin="0" aria-valuemax="10">
                                {{ number_format($ulasan2->avg('nilai_karakter'), 1) }}</div>
                        </div>
                    </div>
                    <div class="rating-bar mb-2 justify-center ">
                        <span>Ending Cerita</span>
                        <div class="progress bg-secondary">
                            <div class="progress-bar bg-primary" role="progressbar"
                                style="width: {{ number_format($ulasan1->avg('ending'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan1->avg('ending'), 1) }}" aria-valuemin="0"
                                aria-valuemax="10">
                                {{ number_format($ulasan1->avg('ending'), 1) }}</div>
                        </div>
                        <div class="progress bg-secondary mt-2">
                            <div class="progress-bar bg-danger" role="progressbar"
                                style="width: {{ number_format($ulasan2->avg('ending'), 1) * 10 }}%;"
                                aria-valuenow="{{ number_format($ulasan2->avg('ending'), 1) }}" aria-valuemin="0"
                                aria-valuemax="10">
                                {{ number_format($ulasan2->avg('ending'), 1) }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="platforms mt-4">
                <h4>Kalian bisa nonton di</h4>
                <a href="https://www.hotstar.com/id/onboarding?ref=%2Fid">
                    <img src="../../assets/disney_hotstar_logo.png" alt="Disney Hotstar" class="platform-logo">
                </a>
                <a href="https://www.netflix.com/">
                    <img src="../../assets/netflix_logo.png" alt="Netflix" class="platform-logo">
                </a>
                <a href="https://www.hbomax.com/">
                    <img src="../../assets/hbo_max_logo.png" alt="HBO Max" class="platform-logo">
                </a>
                <a href="https://www.apple.com/apple-tv-plus/">
                    <img src="../../assets/apple_tv_logo.png" alt="Apple TV+" class="platform-logo">
                </a>
                <a href="https://www.vidio.com/">
                    <img src="../../assets/vidio_logo.png" alt="Vidio" class="platform-logo">
                </a>
                <a href="https://www.iflix.com/">
                    <img src="../../assets/iflix_logo.png" alt="Iflix" class="platform-logo">
                </a>
                <a href="https://21cineplex.com/">
                    <img src="../../assets/xxi_logo.png" alt="XXI" class="platform-logo">
                </a>

            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-layoutku2>
<x-footer></x-footer>
<style>
    .platforms {
        text-align: center;
        margin-top: 40px;
    }

    .platform-logo {
        display: inline-block;
        margin: 0 15px;
        vertical-align: middle;
        max-width: 150px;
        /* Adjust the max-width as needed */
    }
</style>
