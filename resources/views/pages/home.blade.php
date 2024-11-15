@extends('template.layout')

@section('content')
<div class="jumbotron d-flex">
    <div class="tagline d-flex align-items-end">
        <div class="row box-tagline p-4 ">
            <div class="col-6">
                <h4>INGIN KULIAH DAN BERKARIR DI LUAR NEGERI ?</h4>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center align-content-center">
                <button type="button" class="btn btn-primary rounded-pill">SELENGKAPNYA<i class="bi bi-chevron-down p-4"></i></button>
            </div>
        </div>
    </div>
</div>
<section id="tentang-kami">
    <div class="container text-center mt-4">
        <div class="row mt-4">
            <div class="col-sm-12">
                <h4>TENTANG KAMI</h4>
            </div>
        </div>
        <div class="row align-items-center align-content-center justify-content-center mt-4">
            <div class="col-sm-6">
                <p>INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.</p>
            </div>
        </div>
    </div>
</section>
<section id="layanan">
    <div class="container text-center mt-4">
        <div class="row">
            <div class="col-12">
                <h4>Layanan Kami</h4>
            </div>

        </div>
        <div class="row layananimg row-cols-3 row-gap-3 mt-4">
            <div class="col">
                <img src="{{asset('/asset/img/img1.png')}}" alt="" srcset="" class="rounded-3">
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img2.png')}}" alt="" srcset="" class="rounded-3">
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img3.png')}}" alt="" srcset="" class="rounded-3">
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img4.png')}}" alt="" srcset="" class="rounded-3">
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img5.png')}}" alt="" srcset="" class="rounded-3">
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img6.png')}}" alt="" srcset="" class="rounded-3">
            </div>
        </div>
    </div>
</section>

<section id="mitrakami">
    <div class="container text-center mt-4 ">
        <div class="row">
            <div class="col-12">
                <h4>MITRA KAMI</h4>
            </div>

        </div>
        <div class="row layananimg align-items-center row-cols-4 row-gap-3 mt-4">
            <div class="col">
                <img src="{{asset('/asset/img/img7.png')}}" alt="" srcset="" class="rounded-3">
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img8.png')}}" alt="" srcset="" class="rounded-3">
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img9.png')}}" alt="" srcset="" class="rounded-3">
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img10.png')}}" alt="" srcset="" class="rounded-3">
            </div>
        </div>
    </div>
</section>

<section id="tengah2">
    <div class="container">
        <div class="row box-tagline align-items-center p-4 rounded-4 ">
            <div class="col-6 gap-0">
                <h4 class="text-white">GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h4>
                <p class="text-white">Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center align-content-center">
                <button type="button" class="btn btn-primary rounded-pill">MULAI KONSULTASI<i class="bi bi-chevron-down p-4"></i></button>
            </div>
        </div>
    </div>
</section>


<section id="artikel">
    <div class="container text-center mt-4 ">
        <div class="row">
            <div class="col-12">
                <h4>ARTIKEL TERBARU</h4>
            </div>
        </div>
        <div class="row layananimg row-cols-2 row-gap-3 mt-4">
            <div class="col">
                <img src="{{asset('/asset/img/img11.png')}}" alt="" srcset="" class="rounded-3">
                <h5>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</h5>
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img12.png')}}" alt="" srcset="" class="rounded-3">
                <h5>Uni Eropa Menghadapi Virus Korona</h5>
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img13.png')}}" alt="" srcset="" class="rounded-3">
                <h5>Belajar Bahasa Jerman Bersama Goethe Insistut</h5>
            </div>
            <div class="col">
                <img src="{{asset('/asset/img/img14.png')}}" alt="" srcset="" class="rounded-3">
                <h5>Apa Itu Gates Cambridge? Yuk Cari Tahu</h5>
            </div>
        </div>
        <div class="container btnartikel">
            <button type="button" class="btn  rounded-pill">ARTIKEL LAINYA</button>
        </div>
    </div>
</section>

<section class="text-center py-5" id="contac">
    <div class="container">
        <h2 class="mb-3">HUBUNGI KAMI</h2>
        <p class="fw-bold">KANTOR PUSAT</p>
        <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
        <p>Phone: (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
        <p>Hotline: +6281519040071 / +62811998167</p>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="#" class="btn btn-gradient px-4 py-2 rounded-pill">LOKASI KAMI</a>
            <a href="#" class="btn btn-outline-gradient px-4 py-2 rounded-pill">KIRIM PESAN</a>
        </div>
    </div>
</section>
@endsection