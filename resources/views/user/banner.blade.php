
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="{{ asset('assets/images/stp.png') }}" type="">

    <title>Profile</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/banner_upload.css') }}" rel="stylesheet">

    <style>
        label[for="logo-upload"] {
        display: none;
        }

        #logo-upload{
            width: 100px;
            height: 100px;
        }

        @keyframes pulseHighlight {
        0% {
            background-color: #b3e5fc;
            box-shadow: 0 0 10px rgba(3, 169, 244, 0.5);
        }
        50% {
            background-color: #81d4fa;
            box-shadow: 0 0 20px rgba(3, 169, 244, 0.6);
        }
        100% {
            background-color: #b3e5fc;
            box-shadow: 0 0 10px rgba(3, 169, 244, 0.5);
        }
        }

        .temp-highlight {
        border-radius: 6px;
        animation: pulseHighlight 1s ease-in-out 2;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="margin-left: 0px;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('user.dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Welcome</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-coins"></i>
                    <span>Upload Profile</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Upload Profile:</h6>
                        <a class="collapse-item" href="{{ route('user.profile') }}">Profile</a>
                        <a class="collapse-item" href="{{ route('user.proposalStatus') }}">Proporsal Status</a>
                        <a class="collapse-item active" href="{{ route('user.banner') }}">Banner</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-coins"></i>
                    <span>News</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">News:</h6>
                        <a class="collapse-item" href="{{ route('user.blog') }}">Blog</a>
                        <a class="collapse-item" href="{{ route('user.your-blog') }}">Your Blog</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Logout</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        {{-- <a class="collapse-item" href="{{ route('register') }}">Register</a>
                        <a class="collapse-item" href="{{ route('forgot.password') }}">Forgot Password</a> --}}
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
						onsubmit="return false;">
						<div class="input-group">
							<input type="text" id="search_input" class="form-control bg-light border-0 small"
								placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" id="search_button" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

                    {{-- Modal Search --}}
                    <div class="modal fade" id="noResultsModal" tabindex="-1" aria-labelledby="noResultsModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content shadow rounded-4 border-0 animate__animated animate__fadeInDown">
                            <div class="modal-body text-center p-5">
                                <div class="mb-3">
                                <i class="fas fa-search-minus fa-4x text-danger"></i>
                                </div>
                                <h5 class="mb-2">Oops! Tidak Ditemukan</h5>
                                <p class="text-muted mb-4">
                                Kami tidak menemukan elemen Judul yang cocok dengan kata tersebut.
                                </p>
                                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" id="closeModalBtn" data-bs-dismiss="modal">
                                    Coba Lagi
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            {{-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div> --}}
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            {{-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('assets/images/undraw_profile_1.svg') }}"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('assets/images/undraw_profile_2.svg') }}"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"src="{{ asset('assets/images/undraw_profile_3.svg') }}"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div> --}}
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $user->nama_tim }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('assets/images/itpln2.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('user.profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('user.banner') }}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
					<div class="container mt-4">
    <h2 class="mb-4">Upload Banner & Logo Tim</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('user.upload.banner') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Banner Upload Section -->
                    <div class="col-md-8">
                        <div class="upload-container mb-4">
                            <div class="banner-preview-container">
                                @if($user->banner && Storage::exists('public/'.$user->banner->banner_path))
                                    <img src="{{ asset('storage/' . $user->banner->banner_path) }}"
                                         alt="Banner Preview"
                                         id="banner-preview"
                                         class="img-fluid rounded">
                                @else
                                    <img src="{{ asset('assets/images/upload_banner.png') }}"
                                         alt="Banner Preview"
                                         id="banner-preview"
                                         class="img-fluid rounded">
                                @endif
                                <div class="upload-overlay">
                                    <span class="upload-text">Upload Banner</span>
                                    <input type="file" id="banner-upload" name="banner"
                                           accept="image/*" required class="d-none">
                                </div>
                            </div>
                            <small class="text-muted">Format: JPEG, PNG, JPG, GIF | Maksimal: 2MB</small>
                        </div>
                    </div>

                    <!-- Logo Upload Section -->
                    <div class="col-md-4">
                        <div class="upload-container">
                            <div class="logo-preview-container mx-auto">
                                @if($user->banner && Storage::exists('public/'.$user->banner->logo_path))
                                    <img src="{{ asset('storage/' . $user->banner->logo_path) }}"
                                         alt="Logo Preview"
                                         id="logo-preview"
                                         class="rounded-circle">
                                @else
                                    <img src="{{ asset('assets/images/upload_logo.png') }}"
                                         alt="Logo Preview"
                                         id="logo-preview"
                                         class="rounded-circle">
                                @endif
                                <div class="upload-overlay rounded-circle">
                                    <span class="upload-text">Upload Logo</span>
                                    <input type="file" id="logo-upload" name="logo"
                                           accept="image/*" required class="d-none">
                                </div>
                            </div>
                            <small class="text-muted d-block text-center mt-2">Format: JPEG, PNG, JPG, GIF | Maksimal: 1MB</small>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('user.dashboard') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-upload me-2"></i>Upload Banner & Logo
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .upload-container {
        position: relative;
    }

    .banner-preview-container {
        position: relative;
        height: 250px;
        overflow: hidden;
        border: 2px dashed #ddd;
        border-radius: 8px;
        background-color: #f8f9fa;
    }

    .logo-preview-container {
        position: relative;
        width: 150px;
        height: 150px;
        border: 2px dashed #ddd;
        border-radius: 50%;
        background-color: #f8f9fa;
    }

    #banner-preview, #logo-preview {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .upload-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
        cursor: pointer;
    }

    .upload-overlay:hover {
        opacity: 1;
    }

    .upload-text {
        color: white;
        font-weight: bold;
    }
</style>

<script>
    // Banner Preview
    const bannerUpload = document.getElementById('banner-upload');
    const bannerPreview = document.getElementById('banner-preview');
    const bannerOverlay = document.querySelector('.banner-preview-container .upload-overlay');

    bannerOverlay.addEventListener('click', () => bannerUpload.click());
    bannerUpload.addEventListener('change', function(e) {
        if (e.target.files.length) {
            const reader = new FileReader();
            reader.onload = function(e) {
                bannerPreview.src = e.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });

    // Logo Preview
    const logoUpload = document.getElementById('logo-upload');
    const logoPreview = document.getElementById('logo-preview');
    const logoOverlay = document.querySelector('.logo-preview-container .upload-overlay');

    logoOverlay.addEventListener('click', () => logoUpload.click());
    logoUpload.addEventListener('change', function(e) {
        if (e.target.files.length) {
            const reader = new FileReader();
            reader.onload = function(e) {
                logoPreview.src = e.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });
</script>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                <!-- End Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Raven Project 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/layer1.js') }}"></script>
    <script src="{{ asset('assets/js/banner.js') }}"></script>
    <script src="{{ asset('assets/js/viewimages.js') }}"></script>

	{{-- <script>
		// Cegah kembali ke halaman sebelumnya (misalnya halaman login)
		history.pushState(null, null, location.href);
		window.onpopstate = function () {
			history.pushState(null, null, location.href);
		};
	</script> --}}

<script>
	 // Fungsi untuk menampilkan gambar banner yang diunggah
		document.getElementById("banner-upload").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("banner-img").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Fungsi untuk menampilkan gambar logo yang diunggah
        document.getElementById("logo-upload").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("logo-img").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

	</script>

    <script>
        window.addEventListener('pageshow', function(event) {
            if (event.persisted || (window.performance && window.performance.navigation.type === 2)) {
                // Kalau halaman di-load dari bfcache, reload halaman
                window.location.reload();
            }
        });
    </script>

    <script>
        function performSearch() {
            const keyword = document.getElementById('search_input').value.trim().toLowerCase();
            const headings = document.querySelectorAll('h1, h2, h3, h4');
            let found = false;

            if (!keyword) return;

            // Reset highlight sebelumnya
            headings.forEach(h => h.style.backgroundColor = '');

            // Cek dan highlight
            headings.forEach(h => {
                if (h.textContent.toLowerCase().includes(keyword)) {
                    h.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    h.style.backgroundColor = '#ffff88';
                    found = true;
                }
            });

            if (!found) {
                const modal = new bootstrap.Modal(document.getElementById('noResultsModal'));
                modal.show();
            }
        }

        // Trigger on button click
        document.getElementById('search_button').addEventListener('click', performSearch);

        // Trigger on Enter key
        document.getElementById('search_input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch();
            }
        });

        document.getElementById('closeModalBtn').addEventListener('click', function () {
            console.log('Modal ditutup.'); // atau aksi lainnya
        });

        function performSearch() {
            const keyword = document.getElementById('search_input').value.trim().toLowerCase();
            const headings = document.querySelectorAll('h1, h2, h3, h4');
            let found = false;

            if (!keyword) return;

            headings.forEach(h => {
                // Reset dulu
                h.classList.remove('temp-highlight');

                // Cek apakah cocok
                if (h.textContent.toLowerCase().includes(keyword)) {
                    h.classList.add('temp-highlight');
                    h.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    found = true;

                    // Hapus highlight setelah 3 detik
                    setTimeout(() => {
                        h.classList.remove('temp-highlight');
                    }, 3000);
                }
            });

            if (!found) {
                const notFoundModal = new bootstrap.Modal(document.getElementById('noResultsModal'));
                notFoundModal.show();
            }
        }


    </script>

    {{-- <script>
        // Clear cache saat halaman dimuat
        window.onload = function() {
            if (performance.navigation.type === 2) {
                // Jika navigasi melalui tombol back/forward
                window.location.reload();
            }
        };

        // Mencegah cache halaman
        if (window.history && window.history.pushState) {
            window.history.pushState('', null, './');
            window.addEventListener('popstate', function() {
                window.history.pushState('', null, './');
            });
        }
    </script> --}}

</body>

</html>
