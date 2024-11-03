<!--Untuk Memanggil Navbar di components/navbar.blade.php-->
<x-navbar></x-navbar>

<!--Untuk Memanggil Header di components/header.blade.php-->
<x-header>Dashboard Admin</x-header>

<!--Untuk Memanggil Layout di components/layout.blade.php-->
<x-layout>
    <a href="{{ route('admin.table-film') }}" class="btn">Ga jadi edit deh mager!</a>
    <div class="container">
        <h1>Edit Film</h1>
        <form action="{{ route('admin.proses-update-film', $film->id) }}" method="POST" enctype="multipart/form-data">
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
            <div class="form-group"> <!--Gausah Di buka Ini Select untuk memilih kategori-->
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Action" {{ old('kategori') == 'Action' ? 'selected' : '' }}>Action</option>
                    <option value="Adventure" {{ old('kategori') == 'Adventure' ? 'selected' : '' }}>Adventure</option>
                    <option value="Comedy" {{ old('kategori') == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                    <option value="Drama" {{ old('kategori') == 'Drama' ? 'selected' : '' }}>Drama</option>
                    <option value="Fantasy" {{ old('kategori') == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                    <option value="Horror" {{ old('kategori') == 'Horror' ? 'selected' : '' }}>Horror</option>
                    <option value="Romance" {{ old('kategori') == 'Romance' ? 'selected' : '' }}>Romance</option>
                    <option value="Sci-Fi" {{ old('kategori') == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
                    <option value="Thriller" {{ old('kategori') == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                    <option value="Documentary" {{ old('kategori') == 'Documentary' ? 'selected' : '' }}>Documentary
                    </option>
                </select>
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
                <select name="negara" class="form-control" required>
                    @php
                        $countries = [
                            'Afghanistan',
                            'Albania',
                            'Algeria',
                            'Andorra',
                            'Angola',
                            'Antigua and Barbuda',
                            'Argentina',
                            'Armenia',
                            'Australia',
                            'Austria',
                            'Azerbaijan',
                            'Bahamas',
                            'Bahrain',
                            'Bangladesh',
                            'Barbados',
                            'Belarus',
                            'Belgium',
                            'Belize',
                            'Benin',
                            'Bhutan',
                            'Bolivia',
                            'Bosnia and Herzegovina',
                            'Botswana',
                            'Brazil',
                            'Brunei',
                            'Bulgaria',
                            'Burkina Faso',
                            'Burundi',
                            'Cabo Verde',
                            'Cambodia',
                            'Cameroon',
                            'Canada',
                            'Central African Republic',
                            'Chad',
                            'Chile',
                            'China',
                            'Colombia',
                            'Comoros',
                            'Congo, Democratic Republic of the',
                            'Congo, Republic of the',
                            'Costa Rica',
                            'Croatia',
                            'Cuba',
                            'Cyprus',
                            'Czech Republic',
                            'Denmark',
                            'Djibouti',
                            'Dominica',
                            'Dominican Republic',
                            'Ecuador',
                            'Egypt',
                            'El Salvador',
                            'Equatorial Guinea',
                            'Eritrea',
                            'Estonia',
                            'Eswatini',
                            'Ethiopia',
                            'Fiji',
                            'Finland',
                            'France',
                            'Gabon',
                            'Gambia',
                            'Georgia',
                            'Germany',
                            'Ghana',
                            'Greece',
                            'Grenada',
                            'Guatemala',
                            'Guinea',
                            'Guinea-Bissau',
                            'Guyana',
                            'Haiti',
                            'Honduras',
                            'Hungary',
                            'Iceland',
                            'India',
                            'Indonesia',
                            'Iran',
                            'Iraq',
                            'Ireland',
                            'Israel',
                            'Italy',
                            'Jamaica',
                            'Japan',
                            'Jordan',
                            'Kazakhstan',
                            'Kenya',
                            'Kiribati',
                            'Korea, North',
                            'Korea, South',
                            'Kosovo',
                            'Kuwait',
                            'Kyrgyzstan',
                            'Laos',
                            'Latvia',
                            'Lebanon',
                            'Lesotho',
                            'Liberia',
                            'Libya',
                            'Liechtenstein',
                            'Lithuania',
                            'Luxembourg',
                            'Madagascar',
                            'Malawi',
                            'Malaysia',
                            'Maldives',
                            'Mali',
                            'Malta',
                            'Marshall Islands',
                            'Mauritania',
                            'Mauritius',
                            'Mexico',
                            'Micronesia',
                            'Moldova',
                            'Monaco',
                            'Mongolia',
                            'Montenegro',
                            'Morocco',
                            'Mozambique',
                            'Myanmar',
                            'Namibia',
                            'Nauru',
                            'Nepal',
                            'Netherlands',
                            'New Zealand',
                            'Nicaragua',
                            'Niger',
                            'Nigeria',
                            'North Macedonia',
                            'Norway',
                            'Oman',
                            'Pakistan',
                            'Palau',
                            'Palestine',
                            'Panama',
                            'Papua New Guinea',
                            'Paraguay',
                            'Peru',
                            'Philippines',
                            'Poland',
                            'Portugal',
                            'Qatar',
                            'Romania',
                            'Russia',
                            'Rwanda',
                            'Saint Kitts and Nevis',
                            'Saint Lucia',
                            'Saint Vincent and the Grenadines',
                            'Samoa',
                            'San Marino',
                            'Sao Tome and Principe',
                            'Saudi Arabia',
                            'Senegal',
                            'Serbia',
                            'Seychelles',
                            'Sierra Leone',
                            'Singapore',
                            'Slovakia',
                            'Slovenia',
                            'Solomon Islands',
                            'Somalia',
                            'South Africa',
                            'South Sudan',
                            'Spain',
                            'Sri Lanka',
                            'Sudan',
                            'Suriname',
                            'Sweden',
                            'Switzerland',
                            'Syria',
                            'Taiwan',
                            'Tajikistan',
                            'Tanzania',
                            'Thailand',
                            'Timor-Leste',
                            'Togo',
                            'Tonga',
                            'Trinidad and Tobago',
                            'Tunisia',
                            'Turkey',
                            'Turkmenistan',
                            'Tuvalu',
                            'Uganda',
                            'Ukraine',
                            'United Arab Emirates',
                            'United Kingdom',
                            'United States',
                            'Uruguay',
                            'Uzbekistan',
                            'Vanuatu',
                            'Vatican City',
                            'Venezuela',
                            'Vietnam',
                            'Yemen',
                            'Zambia',
                            'Zimbabwe',
                        ];
                    @endphp

                    @foreach ($countries as $country)
                        <option value="{{ $country }}" {{ $film->negara == $country ? 'selected' : '' }}>
                            {{ $country }}</option>
                    @endforeach
                </select>
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
