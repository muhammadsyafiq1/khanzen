@extends('fe.index')

@push('styles')
    <style>
        .btn-primary-dark {
            background-color: #007bff;
        }
    </style>
@endpush
@section('title')
    Cek Sertifikat
@endsection
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url(fe/assets/images/banner.webp); max-height:670px;">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url(fe/assets/images/banner2.webp)">
            <div class="container">
                <div class="row">
                </div>
            </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url(fe/assets/images/banner3.webp)">
            <div class="container">
                <div class="row">
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <section class="about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-heading">
                        <h4 style="margin-bottom: 10px;">SERTIFIKAT</h4>
                        <h5>Feature berikut dapat digunakan untuk melakukan pengecekan sertifikat para alumni yang telah selesai mengikuti pelatihan di Khanzen Group.</h5>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                <form action="{{route('sertifikat.index')}}">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="mb-2" style="font-weight: bold;" for="input1">Pencarian Berdasarkan</label>
                                <select name="searchBy" id="searchBy" class="form-control">
                                    <option value="namaLengkap"> Nama Lengkap</option>
                                    <option value="nomorSertifikat"> Nomor Sertifikat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="mb-2" style="font-weight: bold;" for="input2">Input</label>
                                <input name="keyword" type="text" class="form-control" id="input2" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-between align-items-end">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Cek Sertifikat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="about-us" style="margin-bottom: 380px;" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @forelse ($data as $item)
                    <div class="card">
                        <div class="card-header" style="background-color: #1c4c95">
                            <h4 class="text-center text-white">
                                Data Sertifikat
                            </h4>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="mb-2">Nomor Sertifkat : {{ $item->nomor_sertifikat }}</h5>
                            <h5 class="mb-2">Nama : {{ $item->nama_lengkap }}</h5>
                            <h5 class="mb-2">Tanggal lahir : {{ $item->tanggal_lahir }}</h5>
                            <h5 class="mb-2">Pelatihan : {{ $item->pelatihan }}</h5>
                            <h5 class="mb-2">Tanggal Pelatihan : {{ $item->tanggal_pelatihan }}</h5>
                            <h5 class="mb-2">Kelas : {{ $item->kelas }}</h5>
                            <h5 class="mb-2">Masa berlaku : {{ $item->masa_berlaku }}</h5>
                        </div>
                    </div>
                    @empty
                        <p>no data</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Periksa apakah ada fragment identifier dalam URL
        if (window.location.hash === "#about-us") {
            // Jika ada, lompat ke elemen dengan ID "about-us"
            document.querySelector("#about-us").scrollIntoView();
        }
    });
</script>
@endpush