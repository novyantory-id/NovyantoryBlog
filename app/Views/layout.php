<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/frontend/mystyle.css') ?>">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/frontend/responsive.css') ?>">

    <!-- Logo Title Bar -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/frontend/favicon.png') ?>" type="image/x-icon">

    <!-- Fonts Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <title><?= $title ?></title>

    <!-- Datatables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <!-- Datatables JS CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/images/frontend/favicon.png') ?>" alt="" width="30" height="24" class="me-2">
                <span>NovyantoryBlog</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="/#beranda">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/#artikel-utama">Artikel</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/#categories">Categories</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/#contact">Contact</a>
                    </li>
                </ul>
                <div>
                    <button class="button-primary">
                        Masuk
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main Content -->
    <?= $this->renderSection('content') ?>
    <!-- Main Content End -->

    <footer class="d-flex align-items-center position-relative overflow-hidden">
        <div class="container-fluid">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-7 d-flex align-items-center justify-content-lg-start justify-content-center">
                        <img src="<?= base_url('assets/images/frontend/favicon.png') ?>" alt="" width="30" height="24"><a href="<?= base_url('/') ?>" class="ms-3"> NovyantoryBlog</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="<?= base_url('/') ?>">Beranda</a>
                        <a href="<?= base_url('artikel') ?>">Article</a>
                        <a href="<?= base_url('/#categories') ?>">Categories</a>
                        <a href="/#contact">Contact</a>
                    </div>
                </div>
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">
                        <p class="text-center">Created by Novyantory - Design Inspired by Creative Academy Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            var itemsPerPage = 5; // Jumlah item per halaman
            var items = $(".card-artikel"); // Elemen item yang akan difilter
            var filteredItems = items; // Untuk menyimpan hasil filter
            var currentPage = 1;

            function showPage(page) {
                var startIndex = (page - 1) * itemsPerPage;
                var endIndex = page * itemsPerPage;

                // Sembunyikan semua item
                items.hide();

                // Tampilkan item berdasarkan hasil filter dan pagination
                filteredItems.slice(startIndex, endIndex).show();
            }

            function updatePagination() {
                var totalPages = Math.ceil(filteredItems.length / itemsPerPage);
                $("#pagination-container").empty();

                if (totalPages > 1) {
                    // Tambah tombol "Previous"
                    $("#pagination-container").append('<button id="prev-btn">Previous</button>');

                    // Tambah tombol pagination
                    for (var i = 1; i <= totalPages; i++) {
                        var activeClass = (i == currentPage) ? 'active' : '';
                        $("#pagination-container").append('<button class="page-btn ' + activeClass + '" data-page="' + i + '">' + i + '</button>');
                    }

                    // Tambah tombol "Next"
                    $("#pagination-container").append('<button id="next-btn">Next</button>');

                    // Disable tombol jika di halaman pertama atau terakhir
                    if (currentPage == 1) {
                        $("#prev-btn").attr("disabled", true);
                    }
                    if (currentPage == totalPages) {
                        $("#next-btn").attr("disabled", true);
                    }
                }

                showPage(currentPage);
            }

            // Fungsi pencarian
            $("#search").on("keyup", function() {
                var searchQuery = $(this).val().toLowerCase();
                filteredItems = items.filter(function() {
                    return $(this).text().toLowerCase().includes(searchQuery);
                });

                currentPage = 1; // Reset ke halaman pertama
                updatePagination(); // Update pagination sesuai hasil pencarian
            });

            // Event klik untuk pagination
            $(document).on("click", ".page-btn", function() {
                currentPage = $(this).data("page");
                updatePagination();
            });

            // Event klik tombol Previous
            $(document).on("click", "#prev-btn", function() {
                if (currentPage > 1) {
                    currentPage--;
                    updatePagination();
                }
            });

            // Event klik tombol Next
            $(document).on("click", "#next-btn", function() {
                var totalPages = Math.ceil(filteredItems.length / itemsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    updatePagination();
                }
            });

            // Inisialisasi pagination pertama kali
            updatePagination();
        });
    </script>

    <script src="<?= base_url('assets/js/frontend/script.js') ?>"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>