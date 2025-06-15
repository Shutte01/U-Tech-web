
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="https://www.unpad.ac.id/">
            <img src="{{ asset('img/logo-unpad.png') }}" alt="Universitas Padjadjaran" height="50" class="d-inline-block align-text-top">
        </a>
        <a class="navbar-brand" href="/" style="font-size: 220%">
            <img src="{{ asset('img/logo-utech.png') }}" alt="U-Tech" width="50" class="d-inline-block align-text-top">
            <b>U-Tech</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/" style="color: {{ ($title === "Home") ? 'black' : 'white' }}; font-weight:{{ ($title === "Home") ? 'bold' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "News") ? 'active' : ''}}" href="/news" style="color: {{ ($title === "News") ? 'black' : 'white' }}; font-weight:{{ ($title === "News") ? 'bold' : '' }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About") ? 'active' : ''}}" href="/about" style="color: {{ ($title === "About") ? 'black' : 'white' }}; font-weight:{{ ($title === "About") ? 'bold' : '' }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Contact") ? 'active' : ''}}" href="/contact" style="color: {{ ($title === "Contact") ? 'black' : 'white' }}; font-weight:{{ ($title === "Contact") ? 'bold' : '' }}">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns"></i> Dashboard</a></li>
                            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person"></i> Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/signout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sign Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Sign In") ? 'active' : ''}}" href="/signin" style="color: {{ ($title === "Sign In") ? 'black' : 'white' }}; font-weight:{{ ($title === "Sign In") ? 'bold' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
