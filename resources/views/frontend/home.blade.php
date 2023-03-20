@extends('layouts.master-frontend')
@section('title', 'Toko Online')
@section('content')
    <div class="page-content-wrapper">
        <!-- Hero Wrapper -->
        <div class="hero-wrapper">
            <div class="container">
                <div class="pt-3">
                    <div class="hero-slides owl-carousel">
                        {{-- @foreach ($banner as $row) --}}
                        <div class="single-hero-slide"
                            style="background-image: url('https://designing-world.com/suha-v3.0/img/bg-img/2.jpg')">
                        </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="product-catagories-wrapper py-3">
            <div class="container">
                <div class="row g-2 rtl-flex-d-row-r">
                    <div class="col-3">
                        <div class="card catagory-card">
                            <div class="card-body px-2">
                                <a href="">
                                    <img src="{{ asset('frontend/default.png') }}" alt="Buat Laporan Baru">
                                    <span>Buat Laporan Baru</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card catagory-card">
                            <div class="card-body px-2">
                                <a href="">
                                    <img src="{{ asset('frontend/default.png') }}" alt="Buat Laporan Baru">
                                    <span>History Laporan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card catagory-card">
                            <div class="card-body px-2">
                                <a href="">
                                    <img src="{{ asset('frontend/default.png') }}" alt="Buat Laporan Baru">
                                    <span>Fasilitas Kesehatan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card catagory-card">
                            <div class="card-body px-2">
                                <a href="">
                                    <img src="{{ asset('frontend/default.png') }}" alt="Buat Laporan Baru">
                                    <span>Inventaris Alat</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card catagory-card">
                            <div class="card-body px-2">
                                <a href="">
                                    <img src="{{ asset('frontend/default.png') }}" alt="Buat Laporan Baru">
                                    <span>List Metode Kerja</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="dark-mode-wrapper mt-3 bg-img p-4 p-lg-5">
                <center>
                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </center>
            </div>
        </div>
    </div>
@endsection