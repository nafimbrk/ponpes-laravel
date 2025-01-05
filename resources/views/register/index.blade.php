<x-layouts2>
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">
            <div class="d-flex justify-content-between">
                <h4 class="fs-3 fw-bold">Data Register Santri</h4>
                <a href="{{ route('register.export') }}" class="btn btn-primary"><i class="bi bi-box-arrow-right"></i> Export</a>
            </div>
            <div class="table-responsive my-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($registers as $register)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $register->nama_lengkap }}
                                </td>
                                <td>
                                    {{ $register->jenis_kelamin }}
                                </td>
                                <td>
                                    {{ $register->tempat_lahir }}
                                </td>
                                <td>
                                    {{ date('d-m-Y', strtotime($register->tanggal_lahir)) }}
                                </td>
                                <td>
                                    {{-- <a href="{{ route('register.show', $register->id) }}" --}}
                                    <a href="#"
                                        class="btn btn-success me-1" data-bs-target="#detailModal{{ $register->id }}" data-bs-toggle="modal"><i class="bi bi-eye"></i></a>
                                        <div class="modal fade" id="detailModal{{ $register->id }}" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="detailModalLabel">Modal Detail</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{-- <form action="{{ route('photo.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            
                                                            <input type="hidden" name="id_photo" value="{{ $item->id }}">
                                                            
                                                            <div class="form-group mb-3">
                                                                <label for="">Pilih Photo</label>
                                                                <div class="col-lg-4 mb-3">
                                                                    <img src="{{ asset('storage/photo/' . $item->image) }}" alt="Foto Lama" height="150">
                                                                </div>
                                                                <input type="hidden" name="old_image" value="{{ $item->image }}">
                                                                <input type="file" name="image" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group mb-3">
                                                                <label for="">Nama Kegiatan</label>
                                                                <input type="text" name="judul" class="form-control" value="{{ $item->judul }}">
                                                            </div>
                                                            
                                                            <button type="submit" class="btn btn-success">Update</button>
                                                        </form> --}}
                                                        <ol class="list-group">
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Nama Lengkap</div>
                                                                    {{ $register->nama_lengkap }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Jenis Kelamin</div>
                                                                    {{ $register->jenis_kelamin }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Tempat Lahir</div>
                                                                    {{ $register->tempat_lahir }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Tanggal Lahir</div>
                                                                    {{ date("d-m-Y", strtotime($register->tanggal_lahir)); }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Alamat</div>
                                                                    {{ $register->alamat }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Domisili</div>
                                                                    {{ $register->domisili }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Kode Pos</div>
                                                                    {{ $register->kode_pos }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Status Dalam Keluarga</div>
                                                                    {{ $register->status_dalam_keluarga }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Anak Ke</div>
                                                                    {{ $register->anak_ke }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Jumlah Saudara Kandung</div>
                                                                    {{ $register->jumlah_saudara_kandung }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Sekolah Asal</div>
                                                                    {{ $register->sekolah_asal }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Alamat Sekolah Asal</div>
                                                                    {{ $register->alamat_sekolah_asal }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">NIK</div>
                                                                    {{ $register->nik }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Nama Ayah</div>
                                                                    {{ $register->nama_ayah }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Tempat Lahir Ayah</div>
                                                                    {{ $register->tempat_lahir_ayah }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Tanggal Lahir Ayah</div>
                                                                    {{ date("d-m-Y", strtotime($register->tanggal_lahir_ayah)); }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Pekerjaan Ayah</div>
                                                                    {{ $register->pekerjaan_ayah }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Pendidikan Ayah</div>
                                                                    {{ $register->pendidikan_ayah }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Penghasilan Bulanan Ayah</div>
                                                                    {{ $register->penghasilan_bulanan_ayah }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Nama Ibu</div>
                                                                    {{ $register->nama_ibu }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Tempat Lahir Ibu</div>
                                                                    {{ $register->tempat_lahir_ibu }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Tanggal Lahir Ibu</div>
                                                                    {{ date("d-m-Y", strtotime($register->tanggal_lahir_ibu)); }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Pekerjaan Ibu</div>
                                                                    {{ $register->pekerjaan_ibu }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Pendidikan Ibu</div>
                                                                    {{ $register->pendidikan_ibu }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Penghasilan Bulanan Ibu</div>
                                                                    {{ $register->penghasilan_bulanan_ibu }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Program Pesantren</div>
                                                                    {{ $register->program_pesantren }}
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                <div class="ms-2 me-auto">
                                                                    <div class="fw-bold">Nomor Telepon Ortu</div>
                                                                    {{ $register->no_telp_ortu }}
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $registers->links() }}
            </div>
        </div>
    </section>
</x-layouts2>


