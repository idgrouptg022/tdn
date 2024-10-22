<nav class="navbar">
    <section class="brand-container">
        <div class="menu-icon">
            <img src="{{ asset('assets/icons/feather/menu.svg') }}" alt="menu icon" id="menuIcon">
        </div>
        <a class="brand-logo">
            <img src="{{ asset('assets/images/logo1.png') }}" alt="Logo TDN">
        </a>
        <div class="desktop-menu">
            <ul class="desktop-menu-list">
                <li class="desktop-menu-item">
                    <a href="{{ route('guest.home') }}" class="desktop-menu-link">Accueil</a>
                </li>
                <li class="desktop-menu-item">
                    <a href="" class="desktop-menu-link">A Propos</a>
                </li>
                <li class="desktop-menu-item">
                    <a href="{{ route('guest.news.index') }}" class="desktop-menu-link">Actualités</a>
                </li>
                <li class="desktop-menu-item">
                    <a href="" class="desktop-menu-link">Evénements</a>
                </li>
                <li class="desktop-menu-item dropdown-menu">
                    <a href="" class="desktop-menu-link">Institutions <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown__wrapper">
                        <div class="dropdown">
                            <ul class="list-items-with-description">
                                <li>
                                    <div class="item-title">
                                        <a href="#">
                                            <h3>La cour constitutionnelle</h3>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-title">
                                        <a href="#">
                                            <h3>Le parlement</h3>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-title">
                                        <a href="#">
                                            <h3>La présidence</h3>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-title">
                                        <a href="#">
                                            <h3>Le Gouvernement</h3>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-title">
                                        <a href="#">
                                            <h3>Les ministres</h3>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="item-title">
                                        <a href="#">
                                            <h3>Le haut conseil de l'audio visuel et de la communication</h3>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="desktop-menu-item">
                    <a href="" class="desktop-menu-link">Contact</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="menu-user-container">
        <a href="" class="login-menu">
            <img src="{{ asset('assets/icons/feather/user.svg') }}" alt="">
            <span>Se connecter</span>
        </a>
        <span>|</span>
        <a href="" class="client-menu">Devenir client</a>
    </section>
</nav>
<div class="navbar-mobile">
    <ul class="menu-mobile">
        <li class="menu-mobile-item">
            <a href="{{ route('guest.home') }}" class="menu-mobile-link">Accueil</a>
        </li>
        <li class="menu-mobile-item">
            <a href="#" class="menu-mobile-link">A Propos</a>
        </li>
        <li class="menu-mobile-item">
            <a href="{{ route('guest.news.index') }}" class="menu-mobile-link">Actualités</a>
        </li>
        <li class="menu-mobile-item">
            <a href="#" class="menu-mobile-link">Evénements</a>
        </li>
        <li class="menu-mobile-item">
            <a href="#" class="menu-mobile-link">Institutions</a>
        </li>
        <li class="menu-mobile-item">
            <a href="#" class="menu-mobile-link">Contact</a>
        </li>
    </ul>
</div>
