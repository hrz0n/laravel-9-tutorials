<nav class="navbar top-navbar">
    <div class="container">
        <div class="navbar-content">
            <a href="#" class="navbar-brand">
                Laravel<span>Tutorial</span>
            </a>
            <form class="search-form">
                <div class="input-group">
                    <div class="input-group-text">
                        <i data-feather="search"></i>
                    </div>
                    <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="grid"></i>
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                        <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                            <p class="mb-0 fw-bold">Web Apps</p>
                            <a href="javascript:;" class="text-muted">Edit</a>
                        </div>
                        <div class="row g-0 p-1">
                            <div class="col-3 text-center">
                                <a href="pages/apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i><p class="tx-12">Chat</p></a>
                            </div>
                            <div class="col-3 text-center">
                                <a href="pages/apps/calendar.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i><p class="tx-12">Calendar</p></a>
                            </div>
                            <div class="col-3 text-center">
                                <a href="pages/email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i><p class="tx-12">Email</p></a>
                            </div>
                            <div class="col-3 text-center">
                                <a href="pages/general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i><p class="tx-12">Profile</p></a>
                            </div>
                        </div>
                        <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="shopping-bag"></i>
                        <div class="indicator">
                            <div class="circle"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                        <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                            <p>6 New Notifications</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="p-1">
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="gift"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>New Order Recieved</p>
                                    <p class="tx-12 text-muted">30 min ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="alert-circle"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>Server Limit Reached!</p>
                                    <p class="tx-12 text-muted">1 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="../assets/images/faces/face6.jpg" alt="userr">
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>New customer registered</p>
                                    <p class="tx-12 text-muted">2 sec ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="layers"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>Apps are ready for update</p>
                                    <p class="tx-12 text-muted">5 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="download"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>Download completed</p>
                                    <p class="tx-12 text-muted">6 hrs ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="wd-30 ht-30 rounded-circle" src="{{asset('img/bg-login.jpg')}}" alt="profile">
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                        <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                            <div class="mb-3">
                                <img class="wd-80 ht-80 rounded-circle" src="{{asset('img/bg-login.jpg')}}" alt="">
                            </div>
                            <div class="text-center">
                                <p class="tx-16 fw-bolder">Harison</p>
                                <p class="tx-12 text-muted">harisonmatondang@gmail.com</p>
                            </div>
                        </div>
                        <ul class="list-unstyled p-1">
                            <li class="dropdown-item py-2">
                                <a href="#" class="text-body ms-0">
                                    <i class="me-2 icon-md" data-feather="log-out"></i>
                                    <span>Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <i data-feather="menu"></i>
            </button>
        </div>
    </div>
</nav>
