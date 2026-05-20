<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Fakultas</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    {{-- Custom CSS --}}
    <style>

        body{
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fb;
        }

        /* Navbar */
        .navbar{
            background: linear-gradient(90deg, #0d6efd, #0b5ed7);
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .navbar-brand{
            font-size: 24px;
            font-weight: 700;
            color: white !important;
        }

        .nav-link{
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-link:hover{
            color: #ffc107 !important;
        }

        /* Main Content */
        main{
            min-height: 100vh;
        }

        /* Card */
        .card{
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }

        /* Button */
        .btn{
            border-radius: 12px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn:hover{
            transform: translateY(-2px);
        }

        /* Footer */
        footer{
            background: #0d1117;
            color: #aaa;
            padding: 20px 0;
            margin-top: 50px;
        }

    </style>

</head>

<body>

    {{-- NAVBAR --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top py-3">

    <div class="container">

        {{-- LOGO --}}
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2"
           href="/">

            <div class="bg-primary rounded-3 d-flex justify-content-center align-items-center shadow"
                 style="width:40px;height:40px;font-size:18px;">

                🎓

            </div>

            <span class="fs-4">
                Sistem<br>Universitas
            </span>

        </a>

        {{-- TOGGLE --}}
        <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        {{-- MENU --}}
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-2 mt-4 mt-lg-0">

                {{-- HOME --}}
                <li class="nav-item">

                    <a class="nav-link nav-hover px-3"
                       href="/">

                        🏠 Home

                    </a>

                </li>

                {{-- FAKULTAS --}}
                <li class="nav-item">

                    <a class="nav-link nav-hover px-3"
                       href="/fakultas">

                        🏢 Fakultas

                    </a>

                </li>

                {{-- PRODI --}}
                <li class="nav-item">

                    <a class="nav-link nav-hover px-3"
                       href="{{ route('prodi.index') }}">

                        📘 Prodi

                    </a>

                </li>

                {{-- TAMBAH PRODI --}}
                <li class="nav-item">

                    <a href="{{ route('prodi.create') }}"
                       class="btn btn-info text-white rounded-pill px-4 py-2 shadow-sm fw-semibold">

                        ➕ Tambah Prodi

                    </a>

                </li>

                {{-- TAMBAH FAKULTAS --}}
                <li class="nav-item">

                    <a href="/fakultas/create"
                       class="btn btn-warning text-dark rounded-pill px-4 py-2 shadow fw-semibold">

                        🚀 Tambah Fakultas

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>


    {{-- CONTENT --}}
    <main>
        {{ $slot }}
    </main>


    

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>