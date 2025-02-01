<x-layouts title="Berita">
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8 w-50">
            <div class="mb-3 link-berita">
                <a href="/" class="text-primary">Home</a> / <a href="/berita" class="text-primary">Berita</a> / <a href="{{ url('/berita/' . $artikel->judul) }}" class="text-primary">{{ $artikel->judul }}</a>
            </div>
            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" alt="" class="img-fluid mb-3 rounded-3" height="600" width="600">
            <div class="konten-berita">
                <p class="mb-3 text-secondary">{{ $artikel->created_at->format('d/m/Y') }}</p>
                <h4 class="fw-bold fs-3 mb-3">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>
    </section>
    <style>
        .link-berita a:hover {
            text-decoration: underline
        }
    </style>
</x-layouts>