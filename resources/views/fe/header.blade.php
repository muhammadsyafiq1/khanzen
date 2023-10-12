<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="fe/assets/images/logo/logo.jpg" alt="" style="width: 200px;" height="50px;">
                    </a>
                    <ul class="nav">
                        <li class="has-sub">
                            <a href="javascript:void(0)">Tentang Kami</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('profil-perushaan') }}">Profil Perusahaan</a></li>
                                <li><a href="contact-us.html">Gallery Training</a></li>
                                <li><a href="contact-us.html">Blog</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Training</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('publik-training') }}">Publik Training</a></li>
                                <li><a href="our-services.html">Inhouse Training</a></li>
                                <li><a href="contact-us.html">Kursus Operator Forklift</a></li>
                                <li><a href="contact-us.html">Kursus Mekanik Forklift</a></li>
                                <li><a href="contact-us.html">Training Sales</a></li>
                                <li><a href="contact-us.html">Cek Alumni Khazhen</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Sale</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('new-unit-forklift') }}">New Unit Forklift</a></li>
                                <li><a href="our-services.html">Second Unit Forklift</a></li>
                                <li><a href="contact-us.html">Attachment Forklift</a></li>
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Services & Maintenance</a>     
                            <ul class="sub-menu">
                                <li><a href="{{ url('service-devision-program') }}">Service Devision Program</a></li>
                                <li><a href="contact-us.html">Perbaikan Forklift</a></li>
                                <li><a href="contact-us.html">Rekondisi Forklift</a></li>
                                <li><a href="contact-us.html">Service Periodik</a></li>
                                <li><a href="contact-us.html">Maintenance Contract</a></li>
                                <li><a href="contact-us.html">Modifikasi Forklift</a></li>
                                <li><a href="contact-us.html">Oncall Service</a></li>
                            </ul>       
                        </li>
                        <li class="scroll-to-section"><a href="#about">Riksa Uji</a></li>
                        <li class="scroll-to-section"><a href="{{ route('sertifikat.index') }}">Cek Sertifikat</a></li>
                        <li class="scroll-to-section"><a href="{{ url('login') }}">Login</a></li>
                        {{-- <li><a href="contact-us.html">Lihat Jadwal 2023</a></li>  --}}
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>