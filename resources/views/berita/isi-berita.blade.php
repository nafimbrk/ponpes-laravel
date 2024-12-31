<x-layouts>
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8 w-50">
            <div class="d-flex mb-3">
                <h1 class="fw-bold fs-1">{{ $artikel->judul }}</h1>
            </div>
            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" alt="" class="img-fluid mb-3" height="600" width="600">
            <div class="konten-berita">
                <p class="mb-3 text-secondary">{{ $artikel->created_at }}</p>
                <h4 class="fw-bold mb-3">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{{ $artikel->desc }}</p>
            </div>
        </div>
    </section>
</x-layouts>