<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item ">
            <a class="nav-link" data-bs-target="#users-nav" data-bs-toggle="collapse"
                href="{{ url('#') }}">
                <i class="ri-admin-fill"></i><span>Users</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('user.create') }}">
                        <i class="bi bi-circle"></i><span>Add User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="bi bi-circle"></i><span>List User</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#packages-nav" data-bs-toggle="collapse"
                href="{{ url('#') }}">
                <i class="bi bi-menu-button-wide"></i><span>Travel Packages</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="packages-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('travel.create') }}">
                        <i class="bi bi-circle"></i><span>Add Packages</span>
                    </a>
                </li>
            </ul>
            <ul id="packages-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('travel.index') }}">
                        <i class="bi bi-circle"></i><span>List Packages</span>
                    </a>
                </li>
            </ul>
            <ul id="packages-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('gallery.store') }}">
                        <i class="bi bi-circle"></i><span>Add Gallery</span>
                    </a>
                </li>
            </ul>
            <ul id="packages-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('gallery.index') }}">
                        <i class="bi bi-circle"></i><span>List Gallery</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('users-profile.html') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('pages-faq.html') }}">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('pages-contact.html') }}">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('pages-register.html') }}">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('pages-login.html') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('pages-error-404.html') }}">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('pages-blank.html') }}">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->