@extends('fe.index')

@push('styles')
    <style>
        .btn-primary-dark {
            background-color: #007bff;
        }
    </style>
@endpush
@section('title')
    New unit forklift
@endsection
@section('content')
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

    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="fe/assets/images/pp.jpg" style="height: 500px; margin-bottom: 20px;" alt="">
                </div>
                <div class="col-lg-6">
                    <h4  class="mb-3">Tentang Perusahaan Kami</h4>
                    <p style="font-size: 19px;">
                        Kami hadir untuk membantu Perusahaan, Lembaga, perorangan maupun corporasi yang memiliki komitmen dalam mengimplementasikan budaya K3 dalam pelaksanaannya berdasarkan Undang-Undang No 1 Tahun 1970 tentang Keselamatan Kerja.
                        Fokus kami adalah melakukan pengujian dan pemeriksaan pesawat angkat & Pesawat angkut (PAPA) Pesawat tenaga produksi (PTP) dan mesin-mesin industry lainnya. Dalam rangka Melindungi dan menjamin keselamatan setiap tenaga kerja dan orang lain di tempat kerja. Menjamin setiap sumber produksi dapat digunakan secara aman dan efisien. Serta Meningkatkan kesejahteraan dan produktivitas Nasional.
                    </p>
                    <button class="btn btn-block text-white mt-2" style="background-color: #1c4c95;">
                        Unduh Compro
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-headingg text-center mb-3">
                        <h4>Visi-Misi </h4>
                    </div>
                    <p style="font-size: 19px;" class="text-center">
                        Menjadi perusahaan jasa pelatihan sumber daya manusia dan sertifikasi alat-alat industri No.1 di Indonesia.

Misi kami mampu memberikan nilai ekonomi kepada para stake holder serta menciptakan manfaat dan solusi melakukan sertifikasi 1000 alat berat dan industri di indonesia setiap tahunnya.

Menyelenggarakan beragam jenis pelatihan sumber daya manusia untuk masyarakat Indonesia, Individu, Perusahaan maupun Instansi sehingga tercipta manusia Indonesia yang unggul dan kompeten berdaya saing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us" id="about" style="margin-bottom: 90px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-headingg text-center mb-3">
                        <h4>Keunggulan Kami </h4>
                    </div>
                        <div class="row">
                            <div class="col-6 mb-4" style="display: flex; align-items: center; flex-direction: row;">
                                <img src="fe/assets/images/1.png" style="width: 500px; margin-right: 10px;" alt="">
                                <div>
                                    <h6 style="font-weight: bold;" class="mb-3">1. PJK3 RESMI KEMNAKER</h6>
                                    <p style="font-size: 19px;">
                                        PT Khazhen Global Indonesia adalah Perusahaan Jasa K3 Resmi ditunjuk oleh Kementerian Tenaga Kerja Republik Indonesia memiliki SKP (surat keputusan penunjukan) sejak tahun 2019.
                                    </p>
                                </div>
                            </div>                            
                            <div class="col-6 mb-4" style="display: flex; align-items: center; flex-direction: row;">
                                <img src="fe/assets/images/2.png" style="width: 500px; margin-right: 10px;" alt="">
                                <div>
                                    <h6 style="font-weight: bold;" class="mb-3">2. TENAGA AHLI K3</h6>
                                    <p style="font-size: 19px;">
                                        Team uji riksa adalah tenaga ahli K3 yang telah mengikuti Pendidikan dan pelatihan sesuai dengan kompetensi dan keahlian dibidangnya.
                                    </p>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-6 mb-4" style="display: flex; align-items: center; flex-direction: row;">
                                <img src="fe/assets/images/3.png" style="width: 500px; margin-right: 10px;" alt="">
                                <div>
                                    <h6 style="font-weight: bold;" class="mb-3">3. PELAYANAN SECARA PROFESIONAL</h6>
                                    <p style="font-size: 19px;">
                                        Setiap kebutuhan dari customer akan dilayani secara professional dengan mengacu kepada peraturan dan perundangan tentang pengujian dan pemeriksaan.
                                    </p>
                                </div>
                            </div> 
                            <div class="col-6 mb-4" style="display: flex; align-items: center; flex-direction: row;">
                                <img src="fe/assets/images/3.png" style="width: 500px; margin-right: 10px;" alt="">
                                <div>
                                    <h6 style="font-weight: bold;" class="mb-3">3. PELAYANAN SECARA PROFESIONAL</h6>
                                    <p style="font-size: 19px;">
                                        Bukan hanya sebatas pekerjaan yang kami selesaikan tetapi juga kami siap memberikan nilai tambah yaitu memberikan arahan, konsultasi, dan berbagi pengetahuan & Keterampilan dalam rangka meningkatkan sumber daya manusia para klien kami.
                                    </p>
                                </div>
                            </div> 
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us mb-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="image-container">
                        <img src="fe/assets/images/ourtraining/ourtraining1.webp" style="height: 600px;" alt="">
                        <div class="d-flex justify-content-center">
                            {{-- <button type="button" style="margin-top: 20px; background-color: #1c4c95;" class="btn btn-lg btn-block text-white">Daftar Ahli K3 Umum</button> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-container">
                        <img src="fe/assets/images/ourtraining/ourtraining2.webp" style="height: 600px;" alt="">
                        <div class="d-flex justify-content-center">
                            {{-- <button type="button" style="margin-top: 20px; background-color: #1c4c95;" class="btn btn-lg btn-block text-white">Daftar Sertifikasi BSNP</button> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-container">
                        <img src="fe/assets/images/ourtraining/ourtraining3.webp" style="height: 600px;" alt="">
                        <div class="d-flex justify-content-center">
                            {{-- <button type="button" style="margin-top: 20px; background-color: #1c4c95;" class="btn btn-lg btn-block text-white">Daftar K3 Specialist</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection