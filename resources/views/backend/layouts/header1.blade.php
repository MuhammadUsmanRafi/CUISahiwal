
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') - CUI Sahiwal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../frontend/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../frontend/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="../backend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../backend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../backend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../backend/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../backend/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../backend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../backend/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../backend/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/admin') }}" class="logo d-flex align-items-center">
                <img src="../frontend/images/favicon/apple-touch-icon.png" alt="">
                <span class="d-none d-lg-block">CUI Sahiwal</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul>

                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="..//img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="../backend/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="../backend/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="../frontend/images/10.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Muhammad Usman</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Muhammad Usman</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/admin/profile') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/admin/profile') }}">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/admin/logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

    </header>

    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-heading">Pages</li>

            <!-- Blogs -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#blogs-submenu" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i>
                    <span>Blogs</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="blogs-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/admin/blogs') }}">
                            <i class="bi bi-circle"></i><span>All Blogs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/add-blog') }}">
                            <i class="bi bi-circle"></i><span>Add Blog</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Speakers -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#speakers-submenu" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-mic"></i>
                    <span>Speakers</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="speakers-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/admin/speakers') }}">
                            <i class="bi bi-circle"></i><span>All Speakers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/add-speaker') }}">
                            <i class="bi bi-circle"></i><span>Add Speaker</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Events -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#events-submenu" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-calendar-event"></i>
                    <span>Events</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="events-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/admin/events') }}">
                            <i class="bi bi-circle"></i><span>All Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/add-event') }}">
                            <i class="bi bi-circle"></i><span>Add Event</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Features -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#features-submenu" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-lightbulb"></i>
                    <span>Features</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="features-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/admin/features') }}">
                            <i class="bi bi-circle"></i><span>All Features</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/add-feature') }}">
                            <i class="bi bi-circle"></i><span>Add Feature</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Sessions -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#sessions-submenu" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clock"></i>
                    <span>Sessions</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="sessions-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/admin/sessions') }}">
                            <i class="bi bi-circle"></i><span>All Sessions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/add-session') }}">
                            <i class="bi bi-circle"></i><span>Add Session</span>
                        </a>
                    </li>
                </ul>
            </li>



            <!-- FAQs -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#faqs-submenu" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-question-circle"></i>
                    <span>FAQs</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="faqs-submenu" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/admin/faqs') }}">
                            <i class="bi bi-circle"></i><span>All FAQs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/add-faq') }}">
                            <i class="bi bi-circle"></i><span>Add FAQ</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- User Register -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/user-register') }}">
                    <i class="bi bi-person-check"></i>
                    <span>User Register</span>
                </a>
            </li>
            <!-- Contact -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/contact') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>

            <!-- Profile -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/profile') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </aside>
