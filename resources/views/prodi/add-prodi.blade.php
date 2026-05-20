<x-layout>

    <section class="bg-light min-vh-100 d-flex align-items-center py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-8">

                    <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

                        {{-- HEADER --}}
                        <div class="bg-primary bg-gradient text-white text-center p-5">

                            <div class="mb-3">

                                <div class="bg-white text-primary rounded-circle d-inline-flex justify-content-center align-items-center shadow"
                                     style="width:80px;height:80px;font-size:35px;">
                                    🎓
                                </div>

                            </div>

                            <h2 class="fw-bold mb-2">
                                Form Data Program Studi
                            </h2>

                            <p class="mb-0 text-light">
                                Lengkapi informasi Program Studi dengan benar
                            </p>

                        </div>

                        {{-- BODY --}}
                        <div class="card-body p-5">

                            {{-- ERROR --}}
                            @if ($errors->any())

                                <div class="alert alert-danger border-0 rounded-4 shadow-sm">

                                    <div class="fw-bold mb-2">
                                        Terjadi Kesalahan:
                                    </div>

                                    <ul class="mb-0 ps-3">

                                        @foreach ($errors->all() as $error)

                                            <li>{{ $error }}</li>

                                        @endforeach

                                    </ul>

                                </div>

                            @endif

                            {{-- FORM --}}
                            <form action="{{ route('prodi.store') }}" method="POST">

                                @csrf

                                {{-- NAMA PRODI --}}
                                <div class="mb-4">

                                    <label class="form-label fw-semibold text-dark mb-2">
                                        Nama Program Studi
                                    </label>

                                    <input
                                        type="text"
                                        name="nama_prodi"
                                        class="form-control form-control-lg rounded-4 border-0 shadow-sm"
                                        placeholder="Contoh: Sistem Informasi"
                                        value="{{ old('nama_prodi') }}"
                                    >

                                </div>

                                {{-- NAMA KAPRODI --}}
                                <div class="mb-4">

                                    <label class="form-label fw-semibold text-dark mb-2">
                                        Nama Ketua Program Studi
                                    </label>

                                    <input
                                        type="text"
                                        name="nama_kaprodi"
                                        class="form-control form-control-lg rounded-4 border-0 shadow-sm"
                                        placeholder="Contoh: Dr. Budi Santoso"
                                        value="{{ old('nama_kaprodi') }}"
                                    >

                                </div>

                                {{-- ALIAS PRODI --}}
                                <div class="mb-5">

                                    <label class="form-label fw-semibold text-dark mb-2">
                                        Pilih Alias Program Studi
                                    </label>

                                    <select
                                        name="alias_prodi"
                                        class="form-select form-select-lg rounded-4 border-0 shadow-sm"
                                    >

                                        <option disabled selected>
                                            -- Pilih Program Studi --
                                        </option>

                                        <option value="SI">
                                            Sistem Informasi (SI)
                                        </option>

                                        <option value="IF">
                                            Informatika (IF)
                                        </option>

                                        <option value="MJ">
                                            Manajemen (MJ)
                                        </option>

                                        <option value="AK">
                                            Akuntansi (AK)
                                        </option>

                                    </select>

                                </div>

                                {{-- BUTTON --}}
                                <div class="d-grid">

                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-lg rounded-4 py-3 shadow"
                                    >
                                        💾 Simpan Data Program Studi
                                    </button>

                                </div>

                            </form>

                        </div>

                        {{-- FOOTER --}}
                        <div class="card-footer bg-white border-0 text-center py-4">

                            <small class="text-muted">
                                © {{ date('Y') }} Sistem Informasi Fakultas
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</x-layout>