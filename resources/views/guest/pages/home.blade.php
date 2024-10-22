@extends("guest.layout")

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/guest/pages/home.css') }}">
@endsection

@section('banniere')
    <section class="banniere-container swiper" id="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere1.jpg') }}')">
                <div class="swiper-slide-cover">
                    <div class="slide-welcome-news">
                        <div class="welcome-news-content">
                            <h1 class="welcome-text">
                                <span>Bienvenue sur TƉN<i class="fas fa-map-marker-alt"></i> news:</span>
                                <span>(Togo Ɖènyígbá Nyàwo)</span>
                            </h1>
                            <div class="subtitle-container">
                                <div class="welcome-subtitle">
                                    Site national d'informations publicitaires diverses, structurées et geolocalisées pour offrir
                                    à nos clients et à notre pays une meilleure revalorisation en visibilité des patrimoines naturels originaux,
                                    du savoir vivre et faire locale,  aux togolais, aux touristes, et aux opérateurs économiques,
                                    amis et partenaires de l'or de l'humanité. Un creset d'exposition, et un vrais repère d'infos
                                    sur l'actualité mosaique des richesses du Togo Ɖègnígbá.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-tag">
                        <div class="slide-tag-header">
                            <h3 class="slide-tag-title">En actualité</h3>
                        </div>
                        <div class="slide-tag-service-label">
                            <span>Politique</span>
                            <div class="slide-tag-region-label">Maritime</div>
                        </div>
                        <div class="slide-tag-body">
                            <p>Un extrait du corps de l'actualité sera renseigné ici, un estrait de l'actualité sera renseigné ici. Un extrait sera renseigné</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere2.jpg') }}')">
                <div class="swiper-slide-cover">
                    <div class="slide-welcome-news">
                        <div class="welcome-news-content">
                            <h1 class="welcome-text">
                                <span>Bienvenue sur TƉN<i class="fas fa-map-marker-alt"></i> news:</span>
                                <span>(Togo Ɖènyígbá Nyàwo)</span>
                            </h1>
                            <div class="subtitle-container">
                                <div class="welcome-subtitle">
                                    Site national d'informations publicitaires diverses, structurées et geolocalisées pour offrir
                                    à nos clients et à notre pays une meilleure revalorisation en visibilité des patrimoines naturels originaux,
                                    du savoir vivre et faire locale,  aux togolais, aux touristes, et aux opérateurs économiques,
                                    amis et partenaires de l'or de l'humanité. Un creset d'exposition, et un vrais repère d'infos
                                    sur l'actualité mosaique des richesses du Togo Ɖègnígbá.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-tag">
                        <div class="slide-tag-header">
                            <h3 class="slide-tag-title">En actualité</h3>
                        </div>
                        <div class="slide-tag-service-label">
                            <span>Politique</span>
                            <div class="slide-tag-region-label">Maritime</div>
                        </div>
                        <div class="slide-tag-body">
                            <p>Un extrait du corps de l'actualité sera renseigné ici, un estrait de l'actualité sera renseigné ici. Un extrait sera renseigné</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere3.jpg') }}')">
                <div class="swiper-slide-cover">
                    <div class="slide-welcome-news">
                        <div class="welcome-news-content">
                            <h1 class="welcome-text">
                                <span>Bienvenue sur TƉN<i class="fas fa-map-marker-alt"></i> news:</span>
                                <span>(Togo Ɖènyígbá Nyàwo)</span>
                            </h1>
                            <div class="subtitle-container">
                                <div class="welcome-subtitle">
                                    Site national d'informations publicitaires diverses, structurées et geolocalisées pour offrir
                                    à nos clients et à notre pays une meilleure revalorisation en visibilité des patrimoines naturels originaux,
                                    du savoir vivre et faire locale,  aux togolais, aux touristes, et aux opérateurs économiques,
                                    amis et partenaires de l'or de l'humanité. Un creset d'exposition, et un vrais repère d'infos
                                    sur l'actualité mosaique des richesses du Togo Ɖègnígbá.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-tag">
                        <div class="slide-tag-header">
                            <h3 class="slide-tag-title">En actualité</h3>
                        </div>
                        <div class="slide-tag-service-label">
                            <span>Politique</span>
                            <div class="slide-tag-region-label">Maritime</div>
                        </div>
                        <div class="slide-tag-body">
                            <p>Un extrait du corps de l'actualité sera renseigné ici, un estrait de l'actualité sera renseigné ici. Un extrait sera renseigné</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>
@endsection

@section('content')
    <section class="news-container">
        <section class="news-header">
            <h1 class="news-title">Actualités</h1>
            <form action="" method="post">
                @csrf
                <input type="text" name="news-search" id="news-search" class="form-control" placeholder="Rechercher...">
            </form>
        </section>
        <section class="news-subheader">
            <ul class="news-categories">
                <li class="news-category"><a href="#">Royaumes & Cheferies</a></li>
                <li class="news-category"><a href="#">Cultures & traditions</a></li>
                <li class="news-category"><a href="#">Spiritualité & Religions</a></li>
                <li class="news-category"><a href="#">Musés & Histoire</a></li>
                <li class="news-category"><a href="#">Politique & Associations</a></li>
                <li class="news-category"><a href="#">Education / Formations</a></li>
                <li class="news-category"><a href="#">Santé: Medecine traditionnelle et occidentale</a></li>
                <li class="news-category"><a href="#">Evénementiels</a></li>
                <li class="news-category"><a href="#">Tourisme</a></li>
                <li class="news-category"><a href="#">Hotellerie & Restauration</a></li>
                <li class="news-category"><a href="#">Mode: Couture / Coiffure</a></li>
                <li class="news-category"><a href="#">Medias & Communications (Audio, visuelle et écrite)</a></li>
                <li class="news-category"><a href="#">BTP: Urbanisme / Construction</a></li>
                <li class="news-category"><a href="#">Commerce</a></li>
                <li class="news-category"><a href="#">Arts / Artisanat & Decorations</a></li>
                <li class="news-category"><a href="#">Agriculture</a></li>
                <li class="news-category"><a href="#">Elevage</a></li>
                <li class="news-category"><a href="#">Pêche et autres activités rurales</a></li>
                <li class="news-category"><a href="#">Musique & Danse</a></li>
                <li class="news-category"><a href="#">Sports et autres loisirs</a></li>
            </ul>
            <ul class="news-regions">
                <li class="news-region"><a href="#">Maritime</a></li>
                <li class="news-region"><a href="#">Plateau</a></li>
                <li class="news-region"><a href="#">Centrale</a></li>
                <li class="news-region"><a href="#">Kara</a></li>
                <li class="news-region"><a href="#">Savanes</a></li>
            </ul>
        </section>
        <section class="news-content">
            <div class="front-news">
                <div class="principal-news">
                    <h1 class="news-title">L'Arcep inflige une amende de 1,2 milliard FCFA à Moov pour indisponibilité de ses services</h1>
                    <figure class="news-image">
                        <img src="{{ asset('assets/images/news1.jpg') }}" alt="News Image">
                    </figure>
                    <div class="news-text-container">
                        <p>(Togo Officiel) - Plus de deux ans après avoir mis en demeure Moov Africa Togo pour des faits d’indisponibilité de ses services, l’Autorité de régulation des communications électroniques et...</p>
                        <span><a href="#">Lire la suite</a></span>
                    </div>
                </div>
                <div class="subprincipal-news">
                    <div class="modal-news-container">
                        <figure class="modal-news-image">
                            <img src="{{ asset('assets/images/news2.jpg') }}" alt="Logo news2">
                        </figure>
                        <div class="modal-news-content">
                            <div class="modal-news-content-header">
                                <div class="label-region">Maritime</div>
                                <div class="label-service">Santé</div>
                            </div>
                            <div class="modal-news-content-subheader">
                                <h1 class="modal-news-title">Ouverture des concours d'entrée à l'ENAM, l'ENSF et l'ENAS</h1>
                                <div class="modal-news-content-header-info">
                                    <span class="modal-news-date">Publié le 12/02/2023</span>
                                    <span class="modal-news-share">
                                        <img src="{{ asset('assets/icons/feather/share-2.svg') }}" alt="">
                                        <span>Partager</span>
                                    </span>
                                </div>
                                <div class="modal-news-subtitle">
                                    <p>Le gouvernement vient de lancer pour le compte du secteur de la santé, les concours d'entrée à l'Ecole Nationale des Auxiliaires Médicaux </p>
                                </div>
                                <a href="#" class="modal-news-learn-more">Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-grid">
                @for ($i = 0; $i < 3; $i++)
                    <div class="news-grid-item">
                        <figure class="grid-news-image">
                            <img src="{{ asset('assets/images/news3.jpeg') }}" alt="News Image" loading="lazy">
                        </figure>
                        <div class="grid-news-content">
                            <div class="grid-news-content-header">
                                <div class="label-region">Maritime</div>
                                <div class="label-service">Santé</div>
                            </div>
                            <div class="grid-news-content-subheader">
                                <h1 class="grid-news-title">Ouverture des concours d'entrée à l'ENAM, l'ENSF et l'ENAS à l'ENAM, l'ENSF et l'ENAS</h1>
                                <div class="grid-news-content-header-info">
                                    <span class="grid-news-date">Publié le 12/02/2023</span>
                                    <span class="grid-news-share">
                                        <img src="{{ asset('assets/icons/feather/share-2.svg') }}" alt="">
                                        <span>Partager</span>
                                    </span>
                                </div>
                                <div class="grid-news-subtitle">
                                    <p>Le gouvernement vient de lancer pour le compte du secteur de la santé, les concours d'entrée à l'Ecole Nationale des Auxiliaires Médicaux </p>
                                </div>
                                <a href="#" class="grid-news-learn-more">Lire plus</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>
    </section>
    <section class="ads-container-section">
        <figure class="ads-logo">
            <img src="{{ asset('assets/images/logo-white.png') }}" alt="Logo TDN blanc">
        </figure>
        <div class="ads-content-section swiper" id="swiper-ads">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere1.jpg') }}')">
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere2.jpg') }}')">
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere3.jpg') }}')">
                </div>
            </div>
            <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="events-container">
        <section class="events-header">
            <h1 class="events-title">Evénements</h1>
            <form action="" method="post">
                @csrf
                <input type="text" name="events-search" id="events-search" class="form-control" placeholder="Rechercher...">
            </form>
        </section>

        <section class="events-subheader">
            <ul class="events-categories">
                <li class="events-category"><a href="#">Royaumes & Cheferies</a></li>
                <li class="events-category"><a href="#">Cultures & traditions</a></li>
                <li class="events-category"><a href="#">Spiritualité & Religions</a></li>
                <li class="events-category"><a href="#">Musés & Histoire</a></li>
                <li class="events-category"><a href="#">Politique & Associations</a></li>
                <li class="events-category"><a href="#">Education / Formations</a></li>
                <li class="events-category"><a href="#">Santé: Medecine traditionnelle et occidentale</a></li>
                <li class="events-category"><a href="#">Evénementiels</a></li>
                <li class="events-category"><a href="#">Tourisme</a></li>
                <li class="events-category"><a href="#">Hotellerie & Restauration</a></li>
                <li class="events-category"><a href="#">Mode: Couture / Coiffure</a></li>
                <li class="events-category"><a href="#">Medias & Communications (Audio, visuelle et écrite)</a></li>
                <li class="events-category"><a href="#">BTP: Urbanisme / Construction</a></li>
                <li class="events-category"><a href="#">Commerce</a></li>
                <li class="events-category"><a href="#">Arts / Artisanat & Decorations</a></li>
                <li class="events-category"><a href="#">Agriculture</a></li>
                <li class="events-category"><a href="#">Elevage</a></li>
                <li class="events-category"><a href="#">Pêche et autres activités rurales</a></li>
                <li class="events-category"><a href="#">Musique & Danse</a></li>
                <li class="events-category"><a href="#">Sports et autres loisirs</a></li>
            </ul>
            <ul class="events-regions">
                <li class="events-region"><a href="#">Maritime</a></li>
                <li class="events-region"><a href="#">Plateau</a></li>
                <li class="events-region"><a href="#">Centrale</a></li>
                <li class="events-region"><a href="#">Kara</a></li>
                <li class="events-region"><a href="#">Savanes</a></li>
            </ul>
        </section>

        <section class="events-content">
            <div class="events-grid">
                <div class="events-grid-item">
                    <figure class="events-grid-item-image">
                        <img src="{{ asset('assets/images/events1.jpeg') }}" alt="Evenement Image" loading="lazy">
                        <div class="events-grid-item-content">
                            <h2 class="events-grid-item-title">Reconstitution du grand marché de Lomé : fin des gros oeuvres, les travaux avancent</h2>
                            <a href="#" class="event-read-link">Lire plus</a>
                        </div>
                    </figure>
                </div>
                <div class="events-grid-item">
                    <figure class="events-grid-item-image">
                        <img src="{{ asset('assets/images/events2.jpg') }}" alt="Evenement Image" loading="lazy">
                        <div class="events-grid-item-content">
                            <h2 class="events-grid-item-title">Reconstitution du grand marché de Lomé : fin des gros oeuvres, les travaux avancent</h2>
                            <a href="#" class="event-read-link">Lire plus</a>
                        </div>
                    </figure>
                </div>
                <div class="events-grid-item">
                    <figure class="events-grid-item-image">
                        <img src="{{ asset('assets/images/events1.jpeg') }}" alt="Evenement Image" loading="lazy">
                        <div class="events-grid-item-content">
                            <h2 class="events-grid-item-title">Reconstitution du grand marché de Lomé : fin des gros oeuvres, les travaux avancent</h2>
                            <a href="#" class="event-read-link">Lire plus</a>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="events-read-more-content">
                <a href="#" class="events-read-more">Voir plus d'événements</a>
            </div>
        </section>
    </section>

    <section class="stay-connected-container">
        <h2 class="stay-connected-title">Restez informés</h2>
        <p class="stay-connected-text">Inscrivez-vous à notre newsletter </p>
        <form action="" method="post" id="newsletter-form">
            @csrf
            <div class="newsletter-form-group">
                <input type="email" name="email" id="newsletter-email" placeholder="Entrer votre email" class="form-control">
                <button type="submit" class="newsletter-button">S'inscrire</button>
            </div>
        </form>
    </section>
@endsection
