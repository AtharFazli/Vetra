<!-- header section strats -->
<header class="header_section">
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{ url('index.html') }}">
                    <span>
                        Inance
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                @auth
                                    {{ auth()->user()->username }}

                                    @else
                                    Masuk
                                @endauth
                            </button>
                            <ul class="dropdown-menu">
                                @auth
                                @if (auth()->user()->role !== 'client' )
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                    
                                @endif
                                
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item">Logout</button></li>

                                </form>
                                @else
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>

                                @endauth
                            </ul>
                        </div>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Gallery <span class="sr-only"></span></a>
                        </li>
                        


                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- end header section -->
