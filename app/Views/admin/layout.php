<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/logos/favicon.png') ?> " />
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.min.css') ?> " />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css">

    <style>
        /* pengaturan untuk summernote */
        .note-editor .dropdown-toggle::after {
            all: unset;
        }

        .note-editor .note-dropdown-menu {
            box-sizing: content-box;
        }

        .note-editor .note-modal-footer {
            box-sizing: content-box;
        }

        .name-container {
            position: relative;
        }

        .detail-link {
            display: none;
            margin-top: 5px;
        }

        .name-container:hover .detail-link {
            display: block;
        }

        .logo-home {
            font-size: 23px;
            color: gray;
            font-weight: 700;
        }
    </style>

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="<?= base_url('admin/home') ?>" class="text-nowrap logo-img d-flex align-items-center">
                        <img src="<?= base_url('assets/images/logos/favicon.png') ?> " width="30" alt="" />
                        <span class="logo-home"> Novyantory<span class="text-primary">Blog</span></span>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/home') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Contents</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/artikel') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-news"></i>
                                </span>
                                <span class="hide-menu">All Articles</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/myartikel') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">My Article</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Manage Data</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/kategori') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-category"></i>
                                </span>
                                <span class="hide-menu">Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/slides') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-slideshow"></i>
                                </span>
                                <span class="hide-menu">Slides</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/tags') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-tag"></i>
                                </span>
                                <span class="hide-menu">Tags</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Profile & Settings</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/profile') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('admin/users') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="<?= base_url('assets/images/profile/user-1.jpg') ?> " alt="" width="50" height="50" class="rounded-circle mt-0">




                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="<?= base_url('admin/profile') ?>" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="<?= base_url('logout') ?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                            <div class="ms-2">
                                <span class="w-100 text-uppercase"><?= session()->get('username') ?></span><small class="text-muted d-block"><?= session()->get('role_id') ?></small>
                            </div>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->

            <!-- main content -->
            <div class="card">
                <div class="card-body">
                    <p class="mb-0"></p>
                </div>
            </div>

            <div class="container-fluid p-0">
                <?= $this->renderSection('content') ?>
            </div>
            <!-- end content -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
    <!-- Summernote javascript -->
    <script>
        $(document).ready(function() {
            console.log('document is ready');
            $('#summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['mybutton', ['imagelist']]
                ],

                buttons: {
                    imagelist: function(context) {
                        var ui = $.summernote.ui;
                        var button = ui.button({
                            contents: '<i class="note-icon-picture"/> ',
                            tooltip: 'Image List',
                            click: function() {
                                loadImageList();
                            }
                        });
                        return button.render();
                    }
                },

                callbacks: {
                    onImageUpload: function(files) {
                        uploadImages(files);
                    },
                    onMediaDelete: function(target) {
                        $.delete(target[0].src);
                    }
                }
            });
        });

        function uploadImages(files) {
            var formData = new FormData();
            $.each(files, function(i, file) {
                formData.append('images[]', file);
            });
            $.ajax({
                url: '<?= base_url('upload-images') ?> ',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $.each(response.images, function(i, imageUrl) {
                        $('#summernote').summernote('insertImage', imageUrl);
                    });
                }
            });
        }

        $.delete = function(imageUrl) {
            $.ajax({
                url: '<?= base_url('delete-gambar') ?>',
                type: 'POST',
                data: {
                    imageUrl: imageUrl
                },
                success: function(response) {
                    console.log('Image deleted:', response);
                },
                error: function(xhr, status, error) {
                    console.error('Error deleting image', error);
                }
            });
        }

        function loadImageList() {
            console.log('Loading image list...');
            $.ajax({
                url: '<?= base_url('list-images') ?> ',
                type: 'GET',
                success: function(response) {
                    console.log(response);
                    var imageListHtml = '<div>';
                    $.each(response.images, function(i, imageUrl) {
                        imageListHtml += '<img src="' + imageUrl + '" style="width: 100px; margin: 5px;">';
                    });
                    imageListHtml += '</div>';
                    $('#summernote').summernote('editor.pasteHTML', imageListHtml);
                },
                error: function(xhr, status, error) {
                    console.error('List Image  Error: ' + error);
                }
            });
        }
    </script>


    <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?> "></script>
    <script src="<?= base_url('assets/js/sidebarmenu.js') ?> "></script>
    <script src="<?= base_url('assets/js/app.min.js') ?> "></script>
    <script src="<?= base_url('assets/libs/apexcharts/dist/apexcharts.min.js') ?> "></script>
    <script src="<?= base_url('assets/libs/simplebar/dist/simplebar.js') ?> "></script>
    <script src="<?= base_url('assets/js/dashboard.js') ?> "></script>



    <!-- datatables -->
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //datatables
        $(document).ready(function() {
            $('#datatables').DataTable();
        });

        //sweetalert berhasil
        $(function() {
            <?php if (session()->has('berhasil')) { ?>
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: "<?= $_SESSION['berhasil'] ?>"
                });
            <?php } ?>
        })

        //membuat slug kategori otomatis
        $('#nama_kategori').on('input', function() {
            let nama_kategori = $(this).val();
            let slug_kategori = nama_kategori.toLowerCase() //ubah ke huruf kecil
                .replace(/[^a-z0-9\s-]/g,
                    '') //hapus karakter non-alphanumeric
                .replace(/\s+/g, '-') //ganti spasi dengan "-"
                .replace(/-+/g, '-'); //ganti tanda "-" yang berlebihan

            //cek slug secara real-time menggunakan AJAX
            $.ajax({
                url: '<?= base_url('admin/kategori/checkslug') ?>', //Endpoint untuk mengecek slug di backend
                method: 'POST',
                data: {
                    slug_kategori: slug_kategori
                },
                success: function(response) {
                    $('#slug_kategori').val(response.slug_kategori); //update field slug dengan slug yang valid
                }
            });
            // $('#slug_kategori').val(slug_kategori);
        });

        //membuat slug tag otomatis
        $('#nama_tag').on('input', function() {
            let nama_tag = $(this).val();
            let slug_tag = nama_tag.toLowerCase() //ubah ke huruf kecil
                .replace(/[^a-z0-9\s-]/g,
                    '') //hapus karakter non-alphanumeric
                .replace(/\s+/g, '-') //ganti spasi dengan "-"
                .replace(/-+/g, '-'); //ganti tanda "-" yang berlebihan

            //cek slug secara real-time menggunakan AJAX
            $.ajax({
                url: '<?= base_url('admin/tags/checkslug') ?>', //Endpoint untuk mengecek slug di backend
                method: 'POST',
                data: {
                    slug_tag: slug_tag
                },
                success: function(response) {
                    $('#slug_tag').val(response.slug_tag); //update field slug dengan slug yang valid
                }
            });
            // $('#slug_kategori').val(slug_kategori);
        });

        //membuat slug kategori otomatis untuk post artikel
        $('#keyword').on('input', function() {
            let keyword = $(this).val();
            let slug_artikel = keyword.toLowerCase() //ubah ke huruf kecil
                .replace(/[^a-z0-9\s-]/g,
                    '') //hapus karakter non-alphanumeric
                .replace(/\s+/g, '-') //ganti spasi dengan "-"
                .replace(/-+/g, '-'); //ganti tanda "-" yang berlebihan

            //cek slug secara real-time menggunakan AJAX
            $.ajax({
                url: '<?= base_url('admin/artikel/checkslug') ?>', //Endpoint untuk mengecek slug di backend
                method: 'POST',
                data: {
                    slug_artikel: slug_artikel
                },
                success: function(response) {
                    $('#slug_artikel').val(response.slug_artikel); //update field slug dengan slug yang valid
                }
            });
            // $('#slug_kategori').val(slug_kategori);
        });

        //sweetalert konfirmasi hapus
        $('.tombol-hapus').on('click', function() {
            var getLink = $(this).attr('href');

            Swal.fire({
                title: "Yakin hapus?",
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = getLink
                    // Swal.fire({
                    //     title: "Deleted!",
                    //     text: "Your file has been deleted.",
                    //     icon: "success"
                    // });
                }
            });
            return false;
        });
    </script>
</body>

</html>