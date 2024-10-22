@extends('guest.layout')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/guest/pages/news/index.css') }}">
@endsection

{{-- @section('banniere')
    <section class="banniere-container swiper" id="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere1.jpg') }}')">
                <div class="swiper-slide-cover">
                    <div class="slide-welcome-news">
                        <div class="welcome-news-content">
                            <h1 class="welcome-text">
                                <span>Bienvenue sur TDN</span>
                                <span>(Togo Denyigban Nyawo)</span>
                            </h1>
                            <div class="subtitle-container">
                                <div class="welcome-subtitle">
                                    La première plateforme de partage de nouvelles et d'informations en ligne. La première plateforme de partage de nouvelles et d'informations en ligne. La première plateforme de partage de nouvelles et d'informations en ligne.
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere2.jpg') }}')">
                <div class="swiper-slide-cover">
                    <div class="slide-welcome-news">
                        <div class="welcome-news-content">
                            <h1 class="welcome-text">
                                <span>Bienvenue sur TDN</span>
                                <span>(Togo Denyigban Nyawo)</span>
                            </h1>
                            <div class="subtitle-container">
                                <div class="welcome-subtitle">
                                    La première plateforme de partage de nouvelles et d'informations en ligne. La première plateforme de partage de nouvelles et d'informations en ligne. La première plateforme de partage de nouvelles et d'informations en ligne.
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/banniere3.jpg') }}')">
                <div class="swiper-slide-cover">
                    <div class="slide-welcome-news">
                        <div class="welcome-news-content">
                            <h1 class="welcome-text">
                                <span>Bienvenue sur TDN</span>
                                <span>(Togo Denyigban Nyawo)</span>
                            </h1>
                            <div class="subtitle-container">
                                <div class="welcome-subtitle">
                                    La première plateforme de partage de nouvelles et d'informations en ligne. La première plateforme de partage de nouvelles et d'informations en ligne. La première plateforme de partage de nouvelles et d'informations en ligne.
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>
@endsection --}}

@section('content')
    <section class="news-header">
        <h1 class="news-title">Actualités</h1>
        <form action="" method="post">
            @csrf
            <input type="text" name="news-search" id="news-search" class="form-control" placeholder="Rechercher...">
        </form>
    </section>
    <section class="news-subheader">
        <ul class="news-categories">
            <li class="news-category"><a href="#">Santé</a></li>
            <li class="news-category"><a href="#">Commerce</a></li>
            <li class="news-category"><a href="#">Transport</a></li>
            <li class="news-category"><a href="#">Informatique</a></li>
            <li class="news-category"><a href="#">Téléphonies et TV</a></li>
            <li class="news-category"><a href="#">Nettoyage et entretien</a></li>
            <li class="news-category"><a href="#">Urbanisme et construction</a></li>
            <li class="news-category"><a href="#">Secteurs privés</a></li>
        </ul>
    </section>
    <section class="news-grid">
        @for ($i = 0; $i < 4; $i++)
            <div class="news-grid-item">
                <figure class="news-grid-item-image">
                    <img src="{{ asset('assets/images/news1.jpg') }}" alt="">
                    <div class="news-grid-item-region">Plateau</div>
                </figure>
                <div class="news-grid-item-body">
                    <span class="news-grid-item-published-at">Publié le 24/08/2024</span>
                    <h1 class="news-grid-item-title">L'Arcep inflige une amende de 1,2 milliard FCFA à Moov pour indisponibilité de ses services</h1>
                    <a href="{{ route('guest.news.show') }}" class="news-grid-item-link">Lire plus</a>
                </div>
            </div>
        @endfor
    </section>
@endsection
