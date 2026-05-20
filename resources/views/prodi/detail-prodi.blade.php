<x-layout>

    <section class="bg-light min-vh-100 py-5 d-flex align-items-center">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-7">

                    <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

                        {{-- HEADER --}}
                        <div class="bg-primary bg-gradient text-white position-relative p-5">

                            <div class="position-absolute top-0 end-0 opacity-10"
                                 style="font-size:120px; margin-top:-10px; margin-right:20px;">
                                🎓
                            </div>

                            <div class="d-flex align-items-center">

                                <div class="bg-white text-primary rounded-circle d-flex justify-content-center align-items-center shadow me-4"
                                     style="width:85px;height:85px;font-size:38px;">
                                    📘
                                </div>

                                <div>

                                    <h2 class="fw-bold mb-2">
                                        Detail Program Studi
                                    </h2>

                                    <p class="mb-0 text-light">
                                        Informasi lengkap data Program Studi
                                    </p>

                                </div>

                            </div>

                        </div>

                        {{-- BODY --}}
                        <div class="card-body p-5">

                            {{-- ITEM --}}
                            <div class="mb-4">

                                <small class="text-uppercase text-muted fw-semibold">
                                    Nama Program Studi
                                </small>

                                <div class="bg-light rounded-4 p-4 mt-2 shadow-sm">

                                    <h4 class="fw-bold text-dark mb-0">
                                        {{ $prodi->nama_prodi }}
                                    </h4>

                                </div>

                            </div>

                            {{-- ITEM --}}
                            <div class="mb-4">

                                <small class="text-uppercase text-muted fw-semibold">
                                    Ketua Program Studi
                                </small>

                                <div class="bg-light rounded-4 p-4 mt-2 shadow-sm">

                                    <h4 class="fw-bold text-dark mb-0">
                                        {{ $prodi->nama_kaprodi }}
                                    </h4>

                                </div>

                            </div>

                            {{-- ITEM --}}
                            <div class="mb-5">

                                <small class="text-uppercase text-muted fw-semibold">
                                    Alias / Kode Program Studi
                                </small>

                                <div class="bg-light rounded-4 p-4 mt-2 shadow-sm">

                                    <span class="badge bg-primary fs-6 px-4 py-3 rounded-pill shadow-sm">

                                        {{ $prodi->alias_prodi }}

                                    </span>

                                </div>

                            </div>

                            {{-- ACTION BUTTON --}}
                            <div class="d-flex flex-wrap gap-3">

                                <a href="{{ route('prodi.index') }}"
                                   class="btn btn-outline-secondary rounded-4 px-4 py-3">

                                    ← Kembali

                                </a>

                                <a href="{{ route('prodi.edit', $prodi->id) }}"
                                   class="btn btn-warning text-white rounded-4 px-4 py-3 shadow">

                                    ✏️ Edit Data

                                </a>

                                <form action="{{ route('prodi.destroy', $prodi->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')"
                                            class="btn btn-danger rounded-4 px-4 py-3 shadow-sm">

                                        🗑️ Hapus

                                    </button>

                                </form>

                            </div>

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