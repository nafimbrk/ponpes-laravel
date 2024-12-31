<x-layouts>
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">

            <h4 class="fs-3 fw-bold mb-3">Halaman Blog Artikel</h4>

            <a href="{{ route('blog.create') }}" class="btn btn-primary">Buat Artikel</a>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>Informasi</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($artikels as $artikel)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ asset('storage/artikel/' . $artikel->image) }}" alt=""
                                        height="100" width="200">
                                </td>
                                <td>
                                    {{ $artikel->judul }}
                                </td>
                                <td>
                                    {{ Str::limit($artikel->desc, 50) }}
                                </td>
                                <td>
                                    <a href="{{ route('blog.edit', $artikel->id) }}"
                                        class="btn btn-warning me-1">Edit</a>
                                    <form action="{{ route('blog.destroy', $artikel->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit"
                                            onclick="return confirm('Apakah yakin ingin menghapus data?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $artikels->links() }}
            </div>
        </div>

    </section>
</x-layouts>
