<!--Untuk Memanggil Navbar di components/navbar.blade.php-->
<x-navbar></x-navbar>

<!--Untuk Memanggil Header di components/header.blade.php-->
<x-header>Dashboard Admin</x-header>

<!--Untuk Memanggil Layout di components/layout.blade.php-->
<x-layout>
    <a href="{{ route('admin.table-film') }}" class="btn">Ga jadi edit deh mager!</a>
    <div class="container">
        <h1>Edit Film</h1>
        <form action="{{ route('proses-update-film', $film->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $film->judul }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required>{{ $film->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $film->kategori }}" required>
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" name="director" class="form-control" value="{{ $film->director }}" required>
            </div>
            <div class="form-group">
                <label for="producer">Producer</label>
                <input type="text" name="producer" class="form-control" value="{{ $film->producer }}" required>
            </div>
            <div class="form-group">
                <label for="negara">Negara</label>
                <input type="text" name="negara" class="form-control" value="{{ $film->negara }}" required>
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" name="poster" class="form-control">
                @if ($film->poster)
                    <img src="{{ asset('storage/' . $film->poster) }}" alt="Poster" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-layout>
