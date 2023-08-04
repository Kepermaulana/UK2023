@extends('layouts.app')

@section('content')

<main data-spy="scroll" data-target=".area" data-offset=50>
    <div class="area" style="background:transparent url('') no-repeat;background-size: cover;">
        <div class="card card-body border-0" style="background-color:rgba(24, 145, 201, 0.7);">
            <div class="masthead">
                <div class="text-center" style="margin-bottom :300px;margin: top 120px;">
                    <div class="masthead-subheading">
                        <h1 class="text-uppercase font-weight-bold" style="color:gold;;">
                            Aplikasi Pengaduan Masyarakat
                        </h1>
                        <!-- <h3 class="font-weight-bold">Kota Magelang</h3> -->
                        <div class="container">
                            <h5 class="text-white text-center">
                                <strong>Aplikasi Pengaduan Masyrakat</strong> Kota Magelang adalah aplikasi pelaporan dan penyaranan berbasis web yang akan memudahkan warga kota magelang untuk <strong>mengadukan keluhan ataupun memberi saran</strong>untuk kota magelang lebh baik
                            </h5>
                        </div>
                        <a href="fiturfitur" style="background-image:linear-gradient(to right, gold, #fff700);" class="btn mt-4 text-dark font-weight-bold p-3">Yuk Pelajari</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fitur fitur -->
    <section class="page-section mb-4 mt-4" id="fiturfitur">
        <div class="container">
            <div class="mt-4 text-center">
                <h1 class="text-uppercase font-weight-bold" style="color:#1890c8">Keunggulan</h1>
                <hr style="border-color:#1890c8;border-width:2px;">
            </div>
            <div class="row mt-4 text-center">
                <div class="col-md-4">
                    <span class="fas fa-comments fa-6x p-3 rounded" style="background-image:linear-gradient(to right, #1890c8, #1aa6e1, #1890c8);color:white"></span>
                    <h2 style="color:#1890c8">Respon Cepat</h2>
                    <p style="color:#1890c8">Petugas yang siap standby di depan layar akan merespon laporan kamu</p>
                </div>
                <div class="col-md-4">
                    <span class="fas fa-clock fa-6x p-3 rounded" style="background-image:linear-gradient(to right, #1890c8, #1aa6e1, #1890c8);color:white"></span>
                    <h2 style="color:#1890c8">Layanan 12 Jam</h2>
                    <p style="color:#1890c8">Kamu akan dilayani oleh petugas desa mulai jam 7 pagi sampai jam 5 sore</p>
                </div>
                <div class="col-md-4">
                    <span class="fas fa-volume-mute fa-6x p-3 rounded" style="background-image:linear-gradient(to right, #1890c8, #1aa6e1, #1890c8);color:white"></span>
                    <h2 style="color:#1890c8">Aduanmu Aman</h2>
                    <p style="color:#1890c8">Kami tidak akan membocorkan tentang pengaduan permasalahanmu selain kepada pihak yang berwajib</p>
                </div>
            </div>
        </div>
    </section>
    <!-- tahapan proses laporan -->
    <section class="page-section mb-4 mt-4">
        <div class="card card-body border" style="background-image:linear-gradient(to right, #0b4761,#0e5c7d, #0b4761);">
            <div class="card-body">
                <div class="mt-4 text-center">
                    <h1 class="text-uppercase font-weight-bold text-white">Tahapan Proses laporan</h1>
                    <hr style="border-color:white;border-width:2px;"><>
                </div>
                <div class="row mt-4 text-center">
                    <div class="col-md-4">
                        <span class="fas fa-pencil-alt fa-5px p-3 rounded bg-white" style="color:#0e5c7d"></span>
                        <h3 style="color:white">1. Anda Menulis Laporan</h3>
                    </div>
                    <div class="col-md-4">
                        <span class="fas fa-check fa-5px p-3 rounded bg-white" style="color:#0e5c7d"></span>
                        <h3 style="color:white">2. Petugas Melakukan Validasi</h3>
                    </div>
                    <div class="col-md-4">
                        <span class="fas fa-comments fa-5px p-3 rounded bg-white" style="color:#0e5c7d"></span>
                        <h3 style="color:white">3. Petugas Memberikan Tanggapan yang artinya laporan sudah di verifikasi</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tahapan proses laporan next -->
</main>
<footer class="text-center text-white p-2 sticky-footer" style="background-image:linear-gradient(to right, #0b4761, #0e5c7d, #0b4761); color:white">
    <h5 class="text-uppercase">Copyright 2021 - Created by Rifqi Maulana</h5>
    <p class="text-uppercase">Find Me</p>
    <div class="form-inline justify-content-center">
        <a href="https://github.com/KeperMaulana" target="_blank">
            <i class="fab fa-github-alt mx-3 fa-2x text-white"></i>
        </a>
        <a href="https://isntagram.com/rifqixmaulana_" target="_blank">
            <i class="fab fa-instagram-alt mx-3 fa-2x text-white"></i>
        </a>
        <a href="https://github.com/KeperMaulana" target="_blank">
            <i class="fab fa-facebook-alt mx-3 fa-2x text-white"></i>
        </a>
    </div>
    <p class="small mt-3">Blues theme created by Rifqi Maulana - inspired from <a href="https://startbootstrap.com" target="_blank" class="text-white"><u>startbootstrap.com</u></a></p>
</footer>

@endsection