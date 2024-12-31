<x-layouts>
    <section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4 class="fw-bold fs-3 mb-3">Halaman Buat Artikel</h4>
        
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="" class="form-label">Masukkan Judul Kegiatan</label>
            <input type="text" name="judul" id="" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
            @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}   
                </div>
            @enderror
        </div>
        
        <div class="form-group mb-4">
            <label for="" class="form-label">Pilih Photo Kegiatan</label>
            <input type="file" name="image" id="" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}   
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Artikel Berita</label> <br>
            <textarea name="desc" id="summernote" class="form-control" cols="30" rows="10">{{ old('desc') }}</textarea>
            @error('desc')
                <div class="text-danger">
                    {{ $message }}   
                </div>
            @enderror
        </div>

        <a href="{{ route('blog') }}" class="btn btn-warning me-1">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </section>
</x-layouts>