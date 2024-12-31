<x-layouts>
    <section id="foto" style="margin-top: 100px" class="section-foto parallax" data-aos="zoom-in-up">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-white">Foto lainnya</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col mb-2-6">
                    <a href="{{ asset('assets/images/il-photo-01.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2-6">
                    <a href="{{ asset('assets/images/il-photo-02.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2-6">
                    <a href="{{ asset('assets/images/il-photo-03.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-03.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2-6">
                    <a href="{{ asset('assets/images/il-photo-04.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-04.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts>