@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profil Saya</h1>
    </div>
    <section class="header-section" id="header">
        <div data-aos="fade-up" data-aos-duration="1000">
            <div class="container mb-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6">
                        <h3>Hi I'm {{ $name }}</h3>
                        <h1 class="header-title text-uppercase fw-bold">Mahasiswa Teknologi Informasi Fakultas Ilmu Komputer
                        </h1>
                        <h2 class="header-title text-uppercase">Universitas Jember</h2>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ 'assets/images/fotoku.jpg' }}" alt="" width="400" heigt="400"
                            class="rounded fade-image shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hobby hobby-section" id="hobby">
        <div data-aos="fade-up" data-aos-duration="1000">
            <div class="container mb-5">
                <h3 class="section-title">Hobi</h3>
                <div class="row align-items-center justify-content-between mt-4">
                    <?php
                    $cards = [['Baca Buku', 'Baca buku kalo lagi bosen dan gatau mau ngapain biasanya baca novel', 'assets/images/baca.jpg'], ['Badminton', 'Olahraga tiap weekend biar badan ga kaku dan jadi lebih sehat', 'assets/images/badminton.jpg'], ['Ngegame', 'Main game buat ngilangin stress setelah seharian ngoding', 'assets/images/ml.jpg']];
                    foreach ($cards as $card) {
                        echo '<div class="col-md-4 mb-4">
                                  <div class="card shadow-lg">
                                    <img src="' .
                            $card[2] .
                            '" class="card-img-top" alt="Gambar Card">
                                    <div class="card-body">
                                      <h5 class="card-title">' .
                            $card[0] .
                            '</h5>
                                      <p class="card-text">' .
                            $card[1] .
                            '</p>
                                    </div>
                                  </div>
                                </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
@endsection
