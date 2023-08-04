<nav class="navbar navbar-expand-lg navbar-dark" style="background-image:linear-gradient(to right, #1890c8, #1aa6e1, #1890c8);">
    <a href="/" class="navbar-brand ml-1 p-0">APP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto mr-3">
            <a href="/" class="nav-link text-white">Home</a>
            <a href="/pengaduan" class="nav-link text-white">Buat Laporan</a>
            <a href="/laporanku" class="nav-link text-white">Laporanku</a>
            <!-- fitur logout -->
            <!-- <a href="/logout" class="nav-link text-white">Logout</a> -->
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link text-white dropdown-toggle active" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Namaku</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-clipboard fa-sm fa-fw mr-2">Laporanku</i>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fas fas-sign-out-alt fa-sm fa-fw mr-2">Logout</i>
                    </a>
                </div>
            </li>
            @if(!Auth()->guard('masyarakat')->check())
            <a href="/login" class="nav-link btn text-dark" style="background-image:linear-gradient(to right, gold, #fff700);">Login</a>
            @endif
        </div>
    </div>
</nav>