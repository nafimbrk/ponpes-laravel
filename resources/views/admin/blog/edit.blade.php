<x-layouts>
    <section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4 class="fw-bold fs-3 mb-3">Halaman Edit Artikel</h4>
        
        <form action="{{ route('blog.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="" class="form-label">Masukkan Judul Kegiatan</label>
                <input type="text" name="judul" id="" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $artikel->judul) }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="form-group mb-4">
                <label for="" class="form-label">Pilih Photo Kegiatan</label>
                <input type="hidden" name="old_image" id="" value="{{ $artikel->image }}">
                <div>
                    <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class= "col-lg-4" alt="">
                </div>
                <input type="file" name="image" id="" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}   
                    </div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="" class="form-label">Artikel Berita</label>
                <textarea name="desc" id="summernote" class="form-control" cols="30" rows="10">
                    {{ $artikel->desc }}
                </textarea>
                @error('desc')
                    <div class="text-danger">
                        {{ $message }}   
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
    </section>
</x-layouts>