<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="@route('home')">
                <img src="@assets('images/logo-light.png')" width="220" alt="" class="logo-light">
                <img src="@assets('images/logo-dark.png')" width="220" alt="" class="logo-dark">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Site Audit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@route('discovery-page')">Discovery Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@route('services')">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">About</a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="@route('about.our-stories')">Our Story</a></li>
                            <li><a class="dropdown-item" href="@route('about.core-values')">Core Values</a></li>
                            <li><a class="dropdown-item" href="@route('about.team')">Team</a></li>
                            <li><a class="dropdown-item" href="@route('about.partnerships')">Partnerships</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@route('contact-us')">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
