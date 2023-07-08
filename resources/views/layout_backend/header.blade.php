
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('backend/img/user.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('backend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ route('dashboard') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHBOARD</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Moooooooor</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item" >
                        {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Admin</a> --}}
<hr>
                            <h5 style="mb-5"><a  href="{{ route('dashboard.all_user') }}" class="dropdown-item">All Admin</a></h5>
                    </div>
                    <div class="nav-item">
                        {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Category</a> --}}
                        <h5 style="mb-5"><a href="{{ route('dashboard.all_category') }}" class="dropdown-item">All Category</a></h5>
                            <h5 style="mb-5"><a href="{{ route('dashboard.all_category.create') }}" class="dropdown-item">Add Category</a></h5>
                    </div>
                    <div class="nav-item">
                        {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-alt me-2"></i>Contact</a> --}}
                        <h5 style="mb-5"> <a href="{{ route('dashboard.all_ask') }}" class="dropdown-item">All Contact</a></h5>
                    </div>

                    <div class="nav-item">
                        {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-hashtag me-2"></i>Posts</a> --}}
                        <h5 style="mb-5"> <a href="{{ route('dashboard.all_posts') }}" class="dropdown-item">All Posts</a></h5>
                            <h5 style="mb-5"><a href="{{ route('dashboard.all_posts.create') }}" class="dropdown-item">Add Post</a></h5>
                    </div>
                    <div class="nav-item">
                        {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Data</a> --}}
                        <h5 style="mb-5">  <a href="{{ route('dashboard.all_data') }}" class="dropdown-item">All Data</a></h5>
                    </div>

                    <div class="nav-item">
                        {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Facts</a> --}}
                        <h5 style="mb-5"><a href="{{ route('dashboard.all_facts') }}" class="dropdown-item">All Facts</a></h5>
                    </div>

                    <div class="nav-item">
                        {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Service</a> --}}
                        <h5 style="mb-5">  <a href="{{ route('dashboard.all_service') }}" class="dropdown-item">All Service</a></h5>
                            <h5 style="mb-5"> <a href="{{ route('dashboard.all_service.create') }}" class="dropdown-item">Add Service</a></h5>
                    </div>

                    <div class="nav-item">
                        {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdowwwn"><i class="fa fa-hashtag me-2"></i>Skills</a> --}}
                        <h5 style="mb-5"><a href="{{ route('dashboard.all_skills') }}" class="dropdown-item">All Skills</a></h5>
                            <h5 style="mb-5">   <a href="{{ route('dashboard.all_skills.create') }}" class="dropdown-item">Add Skills</a></h5>

                    </div>




                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">

                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdowndd">
                        <a href="{{ route('logout') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdowndd">
                            <img class="rounded-circle me-lg-2" src="{{ asset('backend/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">logout</span>
                        </a>
                        {{-- <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                        </div> --}}
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
