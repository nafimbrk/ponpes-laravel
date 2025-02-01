<x-layouts title="Video">
    <section id="video_youtube" style="margin-top:200px;" data-aos="zoom-in">
        <div class="container">
            <div class="text-center">
                <h2 class="fw-bold fs-4">Video Kegiatan Pondok Pesantren</h2>
            </div>

            <div class="row py-5">
                @foreach ($videos as $item)                   
                <div class="col-lg-4 mb-4">
                    <iframe width="100%" height="215"
                    src="https://www.youtube.com/embed/{{ $item->youtube_code }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>
            
            <div class="d-flex justify-content-md-center justify-content-center" style="margin-bottom: 80px">
                {{ $videos->links() }}
            </div>
        </div>
    </section>
</x-layouts>
