<nav id="mainNavbar" class="navbar navbar-expand-lg py-3 fixed-top 
    {{ Request::segment(1) == '' ? 'navbar-dark' : 'bg-white shadow navbar-light' }}">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/yoiki/logo.webp') }}" alt="" height="55" width="55">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/" class="nav-link active" aria-current="page">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="/berita" class="nav-link active">Berita</a>
                </li>
                <li class="nav-item">
                    <a href="/foto" class="nav-link active">Foto</a>
                </li>
                <li class="nav-item">
                    <a href="/videos" class="nav-link active">Video</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link active">About</a>
                </li>
                <li class="nav-item">
                    <a href="/kontak" class="nav-link active">Kontak</a>
                </li>
            </ul>

            <div class="button-navbar d-flex">
                @auth
                <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link active">Dashboard</a>
                    </li>
                </ul>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger logout">Logout</button>
                    </form>
                @else
                    <a href="{{ route('register.create.user') }}" class="btn btn-danger">Daftar</a>
                @endauth
            </div>
        </div>
    </div>
</nav>


<style>
    .navbar-dark .nav-link {
    color: white;
    transition: color 0.3s;
}

.navbar-light .nav-link {
    color: black;
    transition: color 0.3s;
}
#mainNavbar {
    max-width: 100%; /* Batasi lebar navbar ke 100% viewport */
    overflow-x: hidden; /* Hilangkan scroll horizontal */
    box-sizing: border-box;
}
#mainNavbar .container-fluid {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}
* {
    /* outline: 1px solid red; */
}
.navbar-collapse {
    display: flex;
    justify-content: space-between;
    flex-wrap: nowrap;
}

@media (max-width: 991px) { /* Berlaku untuk layar mobile */
    .navbar-collapse {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-nav {
        flex-grow: 1; /* Biar navbar menyesuaikan ukuran */
    }

    .d-flex {
        margin-left: auto; /* Supaya tetap di kanan */
        display: flex;
        align-items: center;
    }

    .d-flex .btn {
        white-space: nowrap; /* Mencegah tombol turun ke bawah */
    }

}

#mainNavbar {
    /* outline: 2px solid red; */
}
    
    @media (max-width: 991px) { /* Berlaku untuk layar mobile */
    .d-flex {
        flex-direction: column; /* Membalikkan urutan elemen */
        align-items: flex-start; /* Supaya rata kiri */
        gap: 5px; /* Beri jarak antara Dashboard dan Logout */
    }

    .d-flex form {
        width: 100%; /* Agar tombol logout tetap rapi */
    }

    .button-navbar {
        margin-bottom: 150px;
    }

    .logout {
        margin-left: 16px;
    }
}

</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.getElementById("mainNavbar");

        // Cek apakah ini halaman utama
        const isHomePage = navbar.classList.contains("navbar-dark");

        if (isHomePage) {
            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) {
                    navbar.classList.add("bg-white", "shadow", "navbar-light");
                    navbar.classList.remove("navbar-dark");
                } else {
                    navbar.classList.remove("bg-white", "shadow", "navbar-light");
                    navbar.classList.add("navbar-dark");
                }
            });
        }
    });
</script>

