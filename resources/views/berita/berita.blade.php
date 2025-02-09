<x-layouts title="Berita">
    <section id="berita" style="margin-top: 100px" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold fs-3">Berita Kegiatann Pondok Pesantren</h2>
            </div>
            <div class="row py-5" data-aos="flip-up">
                @foreach ($artikels as $item)
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/artikel/' . $item->image) }}" alt=""
                        class="img-fluid mb-3 rounded-3" style="height: 200px; object-fit: cover; width: 100%;">
                            <div class="konten-berita mb-3">
                                <p class="mb-3 text-secondary">{{ $item->created_at->format('d/m/Y') }}</p>
                            <h4 class="fw-bold fs-5 mb-1">{{ $item->judul }}</h4>
                            <a href="/berita/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-md-center justify-content-center">
    {{ $artikels->links() }}
</div>



        </div>
    </section>
</x-layouts>
