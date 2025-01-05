<x-layouts>
    <section id="video_youtube" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center mt-3">
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
            {{ $videos->links() }}
        </div>
    </section>
</x-layouts>