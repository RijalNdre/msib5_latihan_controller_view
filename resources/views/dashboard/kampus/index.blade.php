@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Informasi Kampus Saya</h1>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000">
        <div>
            <img src="{{ 'assets/images/unej.png' }}" style="max-width: 100%; max-height:100%;" alt="gambar" class="rounded">
        </div>
        <div class="mt-3">
            <p style="font-size: 20px; text-align: justify;"> {{ $description }} </p>
        </div>
    </div>
@endsection
