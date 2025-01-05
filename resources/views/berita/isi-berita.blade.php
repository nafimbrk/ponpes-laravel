<x-layouts>
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8 w-50">
            <div class="d-flex mb-3">
            </div>
            <h4 class="fw-bold fs-3 mb-3">{{ $artikel->judul }}</h4>
            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" alt="" class="img-fluid mb-3" height="600" width="600">
            <div class="konten-berita">
                <p class="mb-3 text-secondary">{{ $artikel->created_at->format('d/m/Y') }}</p>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>
    </section>
    {{-- <style>
        a:hover {
            text-decoration: underline
        }
        a:hover {
            color: blue
        }
    </style> --}}
</x-layouts>