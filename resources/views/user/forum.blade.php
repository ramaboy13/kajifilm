<x-navuser :user="$user"></x-navuser>
<x-layoutku2>
    <section class="forum-section">
        <div class="container">
            <h2 class="teksku">Forum Diskusi</h2>

            <div class="forum-content">
                <div class="discussions">
                    @foreach ($diskusis as $diskusi)
                        <div class="discussion">
                            <img src="../../assets/user.png" alt="Profile Picture" class="profile-picture-forum">
                            <div class="discussion-info">
                                <h3 class="discussion-title">
                                    <a
                                        href="{{ route('user.forum-show', $diskusi->diskusiID) }}">{{ $diskusi->topik }}</a>
                                </h3>
                                <p class="discussion-user">{{ $diskusi->user->nama }}</p>
                                <p class="discussion-excerpt">{{ Str::limit($diskusi->isi, 100) }}</p>
                            </div>
                            <div class="discussion-stats">
                                <span><i class="fas fa-comments"></i> {{ $diskusi->replies->count() }} replies</span>
                                <span class="discussion-date">{{ $diskusi->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <aside class="forum-sidebar">
                    <div class="forum-rules">
                        <h3 class="text-white">Peraturan Forum</h3>
                        <ul>
                            <li>1. Pengguna wajib bersikap sopan dalam setiap interaksi di forum diskusi.</li>
                            <li>2. Dilarang keras mengeluarkan pernyataan, komentar, atau konten yang mengandung unsur
                                rasisme.</li>
                            <li>3. Dilarang menyebarkan berita bohong, hoaks, atau informasi yang menyesatkan.</li>
                            <li>4. Jangan membagikan informasi pribadi seperti alamat, nomor telepon, atau detail
                                identitas lainnya di forum.</li>
                            <li>5. Setiap pelanggaran terhadap peraturan ini akan ditangani oleh moderator.</li>
                            <li>6. Pelanggar dapat dikenakan sanksi mulai dari peringatan hingga larangan akses
                                sementara atau permanen dari forum.</li>
                            <li>7. Setiap pelanggaran terhadap peraturan ini akan ditangani oleh moderator.</li>
                        </ul>
                    </div>

                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>

                    <div class="new-discussion">
                        <h2>Mulai Diskusi Baru</h2>
                        <form action="{{ route('user.forum-store') }}" method="POST">
                            @csrf
                            <input type="text" name="topik" placeholder="Enter title here..">
                            <textarea name="isi" rows="4" placeholder="Enter text here..."></textarea>
                            <button type="submit">Submit new discussion</button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</x-layoutku2>
<x-footer></x-footer>
<style>
    .profile-picture-forum {
        width: 80px;
        height: 80px;
    }
</style>
