

<x-layouts>

    <section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title" data-aos="fade-up">
                <div class="hero-text">Selamat Datang <br> Di Pesantren Al Hijrah</div>
                <h4 class="fw-semibold fs-5">Pondok Pesantren Modern dengan Konsep Kaffah</h4>
            </div>
        </div>
    </section>

    <section id="program" style="margin-top: -30px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan <br> Berkualitas</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-book.png') }}" alt="" height="55" width="55">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan <br> Berakhlak</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-globe.png') }}" alt="" height="55"
                            width="55">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan <br> Muammalah</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" alt="" height="55"
                            width="55">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan <br> Teknologi</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-komputer.png') }}" alt="" height="55"
                            width="55">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold fs-4">Berita Kegiatan Pondok Pesantren</h2>
            </div>
            <div class="row py-5" data-aos="flip-up">
                @foreach ($artikels as $item)
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/artikel/' . $item->image) }}" alt=""
                            class="img-fluid mb-3 rounded-3">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">{{ $item->created_at->locale('in_id')->diffForHumans() }}</p>
                                <h4 class="fw-bold fs-5 mb-3">{{ $item->judul }}</h4>
                                <hp class="fw-normal mb-3">{{ Str::limit($item->desc, 100) }}</hp>
                                <a href="/berita/{{ $item->slug }}" class="text-decoration-none text-danger mb-3">Selengkapnya</a>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="footer-berita text-center">
                <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
        
    </section>

    <section id="join" class="py-5" data-aos="flip-down">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-"></div>
                        <h5 class="fw-bold fs-4">Daftar Santri</h5>
                    </div>
                    <h1 class="fw-bold fs-6 mb-2">Gabung bersama kami, mewujudkan generasi robbani</h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam numquam totam
                        at dicta quidem,
                        veniam nemo repellat. Omnis, consequatur dolores?</p>
                    <button class="btn btn-outline-danger">Register</button>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/islamic-boarding-school-students-are-reading-koran-courtyard-mosque_368093-3579.jpeg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="py-5">
        <div class="container py-5">
            <div class="d-flex justify-content-center align-items-center" data-aos="zoom-in">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/A927ale9-vI?si=HH1NkI808l88j-oj" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="video_youtube" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold fs-4">Video Kegiatan Pondok Pesantren</h2>
            </div>

            <div class="row py-5" data-aos="zoom-in">
                @foreach ($videos as $item)                   
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                    src="https://www.youtube.com/embed/{{ $item->youtube_code }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; aut
                    oplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Video Lainnya</a>
            </div>
        </div>
    </section>

    <section id="foto" class="section-foto parallax">
        <div class="container" data-aos="zoom-in-up">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-light">Foto lainnya</a>
                </div>
            </div>

            <div class="row">
                @foreach ($photos as $photo)
                <div class="col-lg-3 col-md-6 col mb-2-6">
                    <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
                        <img src="{{ asset('storage/photo/' . $photo->image) }}" alt="" class="img-fluid">
                    </a>
                    <p class="mt-1">{{ $photo->judul }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="fasilitas" class="py-5" data-aos="zoom-in-up">
        <div class="container py-5">
            <div class="text-center">
                <h3 class="fw-bold">Fasilitas Pesantren</h3>
            </div>
            <img src="{{ asset('assets/images/v-hlMjYlPGvrU-unsplash.jpeg') }}" alt=""
                class="img-fluid py-5">

            <div class="text-center">
                <a href="" class="btn btn-outline-danger">Fasilitas Lainnya</a>
            </div>
        </div>
    </section>

</x-layouts>
    

    
