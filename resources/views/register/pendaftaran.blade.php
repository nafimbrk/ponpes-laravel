<x-layouts title="Pendaftaran">
    <div>

        <section class="px-0 d-flex align-items-center" style="min-height: 100vh; margin-top: 50px;">
            <div class="container text-center text-black" style="margin: 100px;"> <!-- Tambahkan margin atas & bawah -->
                <div class="d-flex flex-column align-items-center gap-4">
                    <img src="{{ asset('assets/brosur/1.jpg') }}" alt="Brosur 1" class="img-fluid" style="width: 60%">
                    <img src="{{ asset('assets/brosur/2.jpg') }}" alt="Brosur 2" class="img-fluid" style="width: 60%">
                    <img src="{{ asset('assets/brosur/3.jpg') }}" alt="Brosur 3" class="img-fluid" style="width: 60%">
                </div>
                <h4>Brosur Ditauh Disini</h4>
                <a href="{{ route('register.create.user') }}" class="nav-link active">Pendaftaran</a>
            </div>
        </section>

    </div>
</x-layouts>


