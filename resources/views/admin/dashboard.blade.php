<!--Untuk Memanggil Navbar di components/navbar.blade.php-->
<x-navbar></x-navbar>

<!--Untuk Memanggil Header di components/header.blade.php-->
<x-header>Dashboard Admin</x-header>

<!--Untuk Memanggil Layout di components/layout.blade.php-->
<x-layout>
    Ini adalah Dashboard Admin
    <a href="{{ route('admin.table-film') }}" class="btn">Table Film</a>
</x-layout>
