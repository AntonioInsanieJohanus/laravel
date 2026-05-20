<x-layout>

    <section class="bg-light min-vh-100 py-5 d-flex align-items-center">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-8">

                    <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

                        {{-- HEADER --}}
                        <div class="bg-warning bg-gradient text-dark p-5 position-relative">

                            <div class="position-absolute top-0 end-0 opacity-10"
                                 style="font-size:120px; margin-top:-10px; margin-right:20px;">
                                ✏️
                            </div>

                            <div class="d-flex align-items-center">

                                <div class="bg-white text-warning rounded-circle d-flex justify-content-center align-items-center shadow me-4"
                                     style="width:85px;height:85px;font-size:38px;">

                                    📘

                                </div>

                                <div>

                                    <h2 class="fw-bold mb-2">
                                        Edit Program Studi
                                    </h2>

                                    <p class="mb-0 text-dark-emphasis">
                                        Perbarui informasi Program Studi
                                    </p>

                                </div>

                            </div>

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
                            <form action="{{ route('prodi.update', $prodi->id) }}"
                                  method="POST">

                                @csrf
                                @method('PUT')

                                {{-- NAMA PRODI --}}
                                <div class="mb-4">

                                    <label for="nama_prodi"
                                           class="form-label fw-semibold text-dark">

                                        Nama Program Studi

                                    </label>

                                    <input
                                        type="text"
                                        id="nama_prodi"
                                        name="nama_prodi"
                                        class="form-control form-control-lg rounded-4 border-0 shadow-sm @error('nama_prodi') is-invalid @enderror"
                                        placeholder="Masukkan nama program studi"
                                        value="{{ old('nama_prodi', $prodi->nama_prodi) }}"
                                    >

                                </div>

                                {{-- NAMA KAPRODI --}}
                                <div class="mb-4">

                                    <label for="nama_kaprodi"
                                           class="form-label fw-semibold text-dark">

                                        Nama Ketua Program Studi

                                    </label>

                                    <input
                                        type="text"
                                        id="nama_kaprodi"
                                        name="nama_kaprodi"
                                        class="form-control form-control-lg rounded-4 border-0 shadow-sm @error('nama_kaprodi') is-invalid @enderror"
                                        placeholder="Masukkan nama kaprodi"
                                        value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}"
                                    >

                                </div>

                                {{-- ALIAS --}}
                                <div class="mb-5">

                                    <label for="alias_prodi"
                                           class="form-label fw-semibold text-dark">

                                        Pilih Alias / Kode Prodi

                                    </label>

                                    @php
                                        $currentAlias = old('alias_prodi', $prodi->alias_prodi);
                                    @endphp

                                    <select
                                        name="alias_prodi"
                                        id="alias_prodi"
                                        class="form-select form-select-lg rounded-4 border-0 shadow-sm @error('alias_prodi') is-invalid @enderror"
                                    >

                                        <option value="SI"
                                            {{ $currentAlias == 'SI' ? 'selected' : '' }}>

                                            Sistem Informasi (SI)

                                        </option>

                                        <option value="TI"
                                            {{ $currentAlias == 'TI' ? 'selected' : '' }}>

                                            Teknik Informatika (TI)

                                        </option>

                                        <option value="SK"
                                            {{ $currentAlias == 'SK' ? 'selected' : '' }}>

                                            Sistem Komputer (SK)

                                        </option>

                                    </select>

                                </div>

                                {{-- BUTTON --}}
                                <div class="d-flex flex-wrap gap-3">

                                    <a href="{{ route('prodi.index') }}"
                                       class="btn btn-outline-secondary rounded-4 px-4 py-3">

                                        ← Kembali

                                    </a>

                                    <button
                                        type="submit"
                                        class="btn btn-warning text-white rounded-4 px-5 py-3 shadow fw-semibold"
                                    >

                                        💾 Update Data

                                    </button>

                                </div>

                            </form>

                        </div>

                        {{-- FOOTER --}}
                        <div class="card-footer bg-white border-0 text-center py-4">

                            <small class="text-muted">

                                © {{ date('Y') }} Sistem Informasi Program Studi

                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</x-layout>