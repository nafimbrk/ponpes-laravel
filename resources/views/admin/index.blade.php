<x-layouts2>
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold fs-3 mb-2">Dashboard Admin</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Artikel</h5>
                            <p class="card-text mb-2">Atur dan Kelola Artikel Kegiatan Pesantren</p>
                            <a href="{{ route('blog') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-berita-03.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Photo Kegiatan</h5>
                            <p class="card-text mb-2">Atur dan Kelola Photo Kegiatan Pesantren</p>
                            <a href="{{ route('photo') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-berita-03.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Video Kegiatan</h5>
                            <p class="card-text mb-2">Atur dan Kelola Video Kegiatan Pesantren</p>
                            <a href="{{ route('video') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-berita-03.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Data Register</h5>
                            <p class="card-text mb-2">Atur dan Kelola Data Pendaftaran Santri</p>
                            <a href="{{ route('register.index') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts2>
