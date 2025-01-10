<x-layouts>
    <section id="foto" style="margin-top: 100px;" data-aos="zoom-in-up">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center mt-4">
                    <h5 class="fw-bold fs-4 text-dark">Foto Kegiatan</h5>
                </div>
            </div>
            <div class="row">
                @foreach ($photos as $photo)
                <div class="col-lg-3 col-md-6 col mb-4">
                    <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
                        <img src="{{ asset('storage/photo/' . $photo->image) }}" alt="" class="img-fluid rounded-2">
                    </a>
                    <p class="mt-1 text-dark">{{ $photo->judul }}</p> 
                </div>
                @endforeach
                {{ $photos->links() }}
        </div>
    </section>
</x-layouts>