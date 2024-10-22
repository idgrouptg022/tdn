@extends('guest.layout')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/guest/pages/news/show.css') }}">
@endsection

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
    <section class="news-container">
        <div class="news-information">
            <figure class="news-image-appeared">
                <img src="{{ asset('assets/images/news1.jpg') }}" alt="information image">
            </figure>
            <div class="news-content-appeared">
                <h2 class="news-title-appeared">L'Arcep inflige une amende de 1,2 milliard FCFA à Moov pour indisponibilité de ses services</h2>
                <div class="news-share-date-appeared">
                    <span class="news-published-at">Publié le 28/08/2024</span>
                    <span class="news-share-like">
                        <img src="{{ asset('assets/icons/feather/heart.svg') }}" alt="Like image" class="like-icon">
                        <span class="share">
                            <img src="{{ asset('assets/icons/feather/share-2.svg') }}" alt="">
                            <span>Partager</span>
                        </span>
                    </span>
                </div>
                <div class="news-content-appeared">
                    <p>
                        (Togo Officiel) - Plus de deux ans après avoir mis en demeure Moov Africa Togo pour des faits d’indisponibilité de ses services,
                        l’Autorité de régulation des communications électroniques et postes (Arcep) a infligé mercredi 24 juillet, une amende de 1,26
                        milliard FCFA à l’opérateur, correspondant à 2% de son chiffre d’affaires certifié de l’exercice 2023.
                    </p>
                    <p>
                        La sanction, décidée par le comité de direction, a été actée à l’issue d’une audience publique et contradictoire organisée le
                        même jour à Lomé, au cours de laquelle l’opérateur a été mis en situation de se défendre.
                    </p>
                    <p>
                        Concrètement, il est reproché à la filiale du groupe Atlantique Telecom, des manquements à son “obligation de disponibilité
                        permanente, continue et régulière des services de communications électroniques”, mentionnée dans son cahier des charges,
                        ainsi qu’une dégradation du réseau de l’opérateur.
                    </p>
                    <p>
                        Dans les faits, il a été dénombré 7.247 cas de violation des indicateurs de disponibilité, entre le 1er septembre 2022,
                        date de fin de la période de mise en demeure, et le 31 mai 2024. Au cours de la même période, “l’opérateur a transmis
                        à l’Arcep 33 courriers de notifications faisant cas d’indisponibilité de services sur son réseau”, a précisé le
                        gendarme des télécommunications.
                    </p>
                    <p>
                        En dehors de cette sanction, la seconde après celle d’un montant de 600 millions FCFA prononcée en mai 2021,
                        Moov Africa Togo devra mettre en œuvre, dans un délai de six mois, les procédures, acquérir les équipements,
                        protections et redondances nécessaires pour garantir la disponibilité permanente, continue et régulière de ses services,
                        a enjoint l’Autorité.
                    </p>
                    <p>
                        Pour rappel, l’amende devra être payée dans un délai de 30 jours sous peine d’une astreinte journalière de 50 millions
                        FCFA par jour de retard.
                    </p>
                </div>
            </div>
        </div>
        <div class="other-news">
            <div class="facebook-widget">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FTogoBreakingNews%2Fposts%2Fpfbid02beLMhbnzbhV6zNUZvt753Y4TPUzjwDFaMqmEVboj1gW9J528UJa1jBUUa3nK6TKJl&show_text=true&width=500" height="544" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="other-news-list">
                @for ($i = 0; $i < 3; $i++)
                    <div class="other-news-item">
                        <figure class="other-news-item-image">
                            <img src="{{ asset('assets/images/news3.jpeg') }}" alt="News image">
                            <div class="other-news-item-region">Maritime</div>
                        </figure>
                        <div class="other-news-item-content">
                            <h3>Titre de l'article</h3>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
