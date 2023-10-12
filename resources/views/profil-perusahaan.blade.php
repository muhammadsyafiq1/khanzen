@extends('fe.index')

@push('styles')
    <style>
        .btn-primary-dark {
            background-color: #007bff;
        }
    </style>
@endpush
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
                {{-- <div class="col-lg-8">
                    <div class="header-text">
                    <h2><em>Digital</em> Currency for you <br>&amp; Best <em>Crypto</em> Tips</h2>
                    <div class="div-dec"></div>
                    <p>You will see a bunch of free CSS templates when you search on Google. TemplateMo website is probably the best one because it is 100% free. It does not ask you anything in return. You have a total freedom to use any template for any purpose.</p>
                    <div class="buttons">
                        <div class="green-button">
                        <a href="#">Discover More</a>
                        </div>
                        <div class="orange-button">
                        <a href="#">Contact Us</a>
                        </div>
                    </div>
                    </div>
                </div> --}}
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

    <section class="services" id="services">
        <div class="container">
        <div class="row">
            <div class="col-lg-3">
            <div class="service-item" style="height: 420px;">
                {{-- <i class="fas fa-archive"></i> --}}
                <img src="fe/assets/images/keunggulan/1.png" style="height: 150px; margin-bottom: 20px;" alt="">
                <h4>RESPONSIF</h4>
                <p style="font-size: 19px;">Secara sederhana diartikan sebagai cepat tanggap terhadap segala situasi dan keadaan secara positif.</p>
            </div>
            </div>
            <div class="col-lg-3">
            <div class="service-item"  style="height: 420px;">
                {{-- <i class="fas fa-cloud"></i> --}}
                <img src="fe/assets/images/keunggulan/2gambar.png" style="height: 150px; margin-bottom: 20px;" alt="">
                <h4>PROFESIONAL</h4>
                <p style="font-size: 19px;">Menjalankan profesi sesuai dengan job desk dan keahlian masing-masing.</p>
            </div>
            </div>
            <div class="col-lg-3">
            <div class="service-item"  style="height: 420px;">
                {{-- <i class="fas fa-charging-station"></i> --}}
                <img src="fe/assets/images/keunggulan/3.png" style="height: 150px; margin-bottom: 20px;" alt="">
                <h4>CREDIBLE</h4>
                <p style="font-size: 19px;">Kinerja perusahaan dan tim yang dapat dipercaya dengan menerapkan nilai-nilai kejujuran.</p>
            </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item"  style="height: 420px;">
                    {{-- <i class="fas fa-charging-station"></i> --}}
                    <img src="fe/assets/images/keunggulan/4.png" style="height: 150px; margin-bottom: 20px;" alt="">
                    <h4>RESPONSIBILITY</h4>
                    <p style="font-size: 19px;">Bertanggung jawab atas semua yang dilakukan terhadap perusahaan, customer dan lingkungan sekitar.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-heading">
                        <h4 style="margin-bottom: 10px;">Our Training & Certification</h4>
                        <h5>Sertifikasi KEMNAKER RI | Sertifikasi BNSP | Sertifikasi Internal</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="image-container">
                        <img src="fe/assets/images/ourtraining/ourtraining1.webp" alt="">
                        <div class="d-flex justify-content-center">
                            <button type="button" style="margin-top: 20px; background-color: #1c4c95;" class="btn btn-lg btn-block text-white">Daftar Ahli K3 Umum</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-container">
                        <img src="fe/assets/images/ourtraining/ourtraining2.webp" alt="">
                        <div class="d-flex justify-content-center">
                            <button type="button" style="margin-top: 20px; background-color: #1c4c95;" class="btn btn-lg btn-block text-white">Daftar Sertifikasi BSNP</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-container">
                        <img src="fe/assets/images/ourtraining/ourtraining3.webp" alt="">
                        <div class="d-flex justify-content-center">
                            <button type="button" style="margin-top: 20px; background-color: #1c4c95;" class="btn btn-lg btn-block text-white">Daftar K3 Specialist</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="simple-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="fe/assets/images/safetyshoes/merchandise.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="about-us" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h4>Watch Our Videos</h4>
                    </div>
                </div>
                {{-- <div class="container"> --}}
                    <div class="row">
                      <div class="col-md-4">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/ah3S2-kK_VU?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div class="col-md-4">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/ah3S2-kK_VU?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div class="col-md-4">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/ah3S2-kK_VU?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                  {{-- </div>                   --}}
                </div>
            </div>
        </div>
    </section>

    <section class="calculator">
        <div class="container">
        <div class="row">
            <div class="col-lg-7">
            <div class="left-image">
                <img src="fe/assets/images/calculator-image.png" alt="">
            </div>
            </div>
            <div class="col-lg-5">
            <div class="section-heading">
                <h6>Your Freedom</h6>
                <h4>Get a Financial Plan</h4>
            </div>
            <form id="calculate" action="" method="get">
                <div class="row">
                <div class="col-lg-6">
                    <fieldset>
                    <label for="name">Your Name</label>
                    <input type="name" name="name" id="name" placeholder="" autocomplete="on" required>
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset>
                    <label for="email">Your Email</label>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="" required="">
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                    <label for="subject">Subject</label>
                    <input type="subject" name="subject" id="subject" placeholder="" autocomplete="on" >
                    </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                    <label for="chooseOption" class="form-label">Your Reason</label>
                    <select name="Category" class="form-select" aria-label="Default select example" id="chooseOption" onchange="this.form.click()">
                        <option selected>Choose an Option</option>
                        <option type="checkbox" name="option1" value="Online Banking">Online Banking</option>
                        <option value="Financial Control">Financial Control</option>
                        <option value="Yearly Profit">Yearly Profit</option>
                        <option value="Crypto Investment">Crypto Investment</option>
                    </select>
                </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Submit Now</button>
                    </fieldset>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
                <h6>Testimonials</h6>
                <h4>What They Say</h4>
            </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
            <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                <div class="item">
                <i class="fa fa-quote-left"></i>
                <p>“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem. Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus, in euismod ligula. Aliquam vel scelerisque elit.”</p>
                <h4>David Eigenberg</h4>
                <span>CEO of Mexant</span>
                <div class="right-image">
                    <img src="fe/assets/images/testimonials-01.jpg" alt="">
                </div>
                </div>
                <div class="item">
                    <i class="fa fa-quote-left"></i>
                    <p>“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem. Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus, in euismod ligula. Aliquam vel scelerisque elit.”</p>
                    <h4>David Eigenberg</h4>
                    <span>CEO of Mexant</span>
                    <div class="right-image">
                        <img src="fe/assets/images/testimonials-01.jpg" alt="">
                    </div>
                    </div>
                    <div class="item">
                        <i class="fa fa-quote-left"></i>
                        <p>“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem. Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus, in euismod ligula. Aliquam vel scelerisque elit.”</p>
                        <h4>David Eigenberg</h4>
                        <span>CEO of Mexant</span>
                        <div class="right-image">
                            <img src="fe/assets/images/testimonials-01.jpg" alt="">
                        </div>
                        </div>
                <div class="item">
                <i class="fa fa-quote-left"></i>
                <p>“Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.”</p>
                <h4>Andrew Garfield</h4>
                <span>CTO of Mexant</span>
                <div class="right-image">
                    <img src="fe/assets/images/testimonials-01.jpg" alt="">
                </div>
                </div>
                <div class="item">
                <i class="fa fa-quote-left"></i>
                <p>“Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac gravida leo. Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo.”</p>
                <h4>George Lopez</h4>
                <span>Crypto Manager</span>
                <div class="right-image">
                    <img src="fe/assets/images/testimonials-01.jpg" alt="">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection