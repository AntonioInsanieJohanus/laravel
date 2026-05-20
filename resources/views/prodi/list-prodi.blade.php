<x-layout>

    <section class="bg-light min-vh-100 py-5">

        <div class="container">

            {{-- SUCCESS ALERT --}}
            @if (session('success'))

                <div class="alert alert-success border-0 shadow-sm rounded-4 d-flex align-items-center justify-content-between px-4 py-3 mb-4">

                    <div>
                        ✅ {{ session('success') }}
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>

                </div>

            @endif

            {{-- HEADER --}}
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center mb-5 gap-3">

                <div>

                    <span class="text-primary fw-semibold text-uppercase">
                        Dashboard Akademik
                    </span>

                    <h1 class="fw-bold display-6 mb-2">
                        📚 Program Studi
                    </h1>

                    <p class="text-muted mb-0">
                        Kelola seluruh data program studi universitas
                        secara modern dan profesional
                    </p>

                </div>

                {{-- BUTTON --}}
                <a href="{{ route('prodi.create') }}"
                   class="btn btn-primary btn-lg rounded-4 px-4 py-3 shadow fw-semibold">

                    ➕ Tambah Program Studi

                </a>

            </div>

            {{-- CARD --}}
            <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

                {{-- TOP BAR --}}
                <div class="bg-primary bg-gradient text-white p-4">

                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                        <div>

                            <h4 class="fw-bold mb-1">
                                Data Program Studi
                            </h4>

                            <small class="text-light">
                                Informasi lengkap seluruh program studi
                            </small>

                        </div>

                        <div class="bg-white text-primary rounded-pill px-4 py-2 fw-semibold shadow-sm">

                            Total :
                            {{ $prodis->count() }} Prodi

                        </div>

                    </div>

                </div>

                {{-- BODY --}}
                <div class="card-body p-4">

                    <div class="table-responsive">

                        <table class="table align-middle table-hover">

                            <thead>

                                <tr class="table-light">

                                    <th class="py-3 text-secondary">
                                        #
                                    </th>

                                    <th class="py-3 text-secondary">
                                        Program Studi
                                    </th>

                                    <th class="py-3 text-secondary">
                                        Ketua Prodi
                                    </th>

                                    <th class="py-3 text-secondary">
                                        Alias
                                    </th>

                                    <th class="py-3 text-center text-secondary">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse ($prodis as $item)

                                    <tr>

                                        {{-- NUMBER --}}
                                        <td class="fw-bold text-primary">
                                            {{ $loop->iteration }}
                                        </td>

                                        {{-- PRODI --}}
                                        <td>

                                            <div class="d-flex align-items-center gap-3">

                                                <div class="bg-primary-subtle text-primary rounded-circle d-flex justify-content-center align-items-center shadow-sm"
                                                     style="width:50px;height:50px;">

                                                    🎓

                                                </div>

                                                <div>

                                                    <div class="fw-bold text-dark">

                                                        {{ $item->nama_prodi }}

                                                    </div>

                                                    <small class="text-muted">

                                                        Program Studi Universitas

                                                    </small>

                                                </div>

                                            </div>

                                        </td>

                                        {{-- KAPRODI --}}
                                        <td>

                                            <span class="fw-semibold text-dark">

                                                {{ $item->nama_kaprodi }}

                                            </span>

                                        </td>

                                        {{-- ALIAS --}}
                                        <td>

                                            <span class="badge bg-dark rounded-pill px-3 py-2">

                                                {{ $item->alias_prodi }}

                                            </span>

                                        </td>

                                        {{-- ACTION --}}
                                        <td>

                                            <div class="d-flex justify-content-center flex-wrap gap-2">

                                                {{-- DETAIL --}}
                                                <a href="{{ route('prodi.show', $item->id) }}"
                                                   class="btn btn-info text-white btn-sm rounded-pill px-3 shadow-sm">

                                                    👁 Detail

                                                </a>

                                                {{-- EDIT --}}
                                                <a href="{{ route('prodi.edit', $item->id) }}"
                                                   class="btn btn-warning text-white btn-sm rounded-pill px-3 shadow-sm">

                                                    ✏ Edit

                                                </a>

                                                {{-- DELETE --}}
                                                <form action="{{ route('prodi.destroy', $item->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-danger btn-sm rounded-pill px-3 shadow-sm">

                                                        🗑 Hapus

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="5"
                                            class="text-center py-5">

                                            <div class="d-flex flex-column align-items-center">

                                                <div class="mb-3"
                                                     style="font-size:60px;">

                                                    📂

                                                </div>

                                                <h5 class="fw-bold text-muted">

                                                    Belum Ada Data Prodi

                                                </h5>

                                                <p class="text-muted mb-0">

                                                    Silakan tambahkan data program studi terlebih dahulu

                                                </p>

                                            </div>

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

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

    </section>

</x-layout>