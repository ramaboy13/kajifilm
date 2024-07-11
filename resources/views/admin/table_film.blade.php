<!--Untuk Memanggil Navbar di components/navbar.blade.php-->
<x-navbar></x-navbar>

<!--Untuk Memanggil Header di components/header.blade.php-->
<x-header>Tabel Film</x-header>

<!--Untuk Memanggil Layout di components/layout.blade.php-->
<x-layout>
    <div class="m-4">
        <a href="{{ route('admin.form-film') }}" class="btn btn-primary mb-3">Post New Film</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="GET" action="{{ route('admin.table-film') }}">
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Search..."
                        value="{{ request('search') }}">
                </div>
                <div class="col-md-4">
                    <select class="form-control" name="category">
                        <option value="">Pilih Kategori</option>
                        <option value="Action" {{ request('category') == 'Action' ? 'selected' : '' }}>Action</option>
                        <option value="Adventure" {{ request('category') == 'Adventure' ? 'selected' : '' }}>Adventure
                        </option>
                        <option value="Comedy" {{ request('category') == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                        <option value="Drama" {{ request('category') == 'Drama' ? 'selected' : '' }}>Drama</option>
                        <option value="Fantasy" {{ request('category') == 'Fantasy' ? 'selected' : '' }}>Fantasy
                        </option>
                        <option value="Horror" {{ request('category') == 'Horror' ? 'selected' : '' }}>Horror</option>
                        <option value="Romance" {{ request('category') == 'Romance' ? 'selected' : '' }}>Romance
                        </option>
                        <option value="Sci-Fi" {{ request('category') == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
                        <option value="Thriller" {{ request('category') == 'Thriller' ? 'selected' : '' }}>Thriller
                        </option>
                        <option value="Documentary" {{ request('category') == 'Documentary' ? 'selected' : '' }}>
                            Documentary</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Poster</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Director</th>
                    <th>Producer</th>
                    <th>Negara</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($films->count() > 0)
                    @foreach ($films as $film)
                        <tr>
                            <td>{{ $film->id }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $film->poster) }}" alt="Poster" width="100">
                            </td>
                            <td>{{ $film->judul }}</td>
                            <td>{{ $film->deskripsi }}</td>
                            <td>{{ $film->kategori }}</td>
                            <td>{{ $film->director }}</td>
                            <td>{{ $film->producer }}</td>
                            <td>{{ $film->negara }}</td>
                            <td>
                                <a href="{{ route('admin.form-edit-film', $film->id) }}"
                                    class="btn btn-primary">Update</a>
                                <button class="btn btn-danger"
                                    onclick="openDeleteModal({{ $film->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">Tidak ada data film yang tersedia.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        {{ $films->links() }}
    </div>

    <!-- Tambahkan modal delete -->
    <x-delete-modal />
    <!-- Tambahkan link JS Bootstrap atau custom JS di sini -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</x-layout>
