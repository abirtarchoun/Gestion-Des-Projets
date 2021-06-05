@extends('layouts.userapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <!--place session variables /alerts   -->
                            {{ session('status') }}
                        </div>
                    @endif
                    <main>
                        <div class="main-section">
                            <div class="container">
                                <div class="main-section-data">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                                            <div class="main-left-sidebar no-margin">
                                                <div class="user-data full-width">
                                                    <div class="user-profile">
                                                        <div class="username-dt">
                                                            <div class="usr-pic">
                                                                <img src="images/118839270_3478783138855213_4671282241847192183_n.jpg" alt="">
                                                            </div>
                                                        </div><!--username-dt end-->
                                                        <div class="user-specs">
                                                            <h3>Mohamed Hedi Belkhouja</h3>
                                                            <span>Développeur Wordpress senior

                                                            </span>
                                                        </div>
                                                    </div><!--user-profile end-->
                                                    <ul class="user-fw-status">
                                                        <li>
                                                            <h4>Abonnements</h4>
                                                            <span>34</span>
                                                        </li>
                                                        <li>
                                                            <h4>Abonnées</h4>
                                                            <span>155</span>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="">Voir le profile</a>
                                                        </li>
                                                    </ul>
                                                </div><!--user-data end-->
                                                <div class="suggestions full-width">
                                                    <div class="sd-title">
                                                        <h3>Suggestions</h3>
                                                        <i class="la la-ellipsis-v"></i>
                                                    </div><!--sd-title end-->
                                                    <div class="suggestions-list">
                                                        <div class="suggestion-usd">
                                                            <img src="images/oussema.jpg" style="height: 40px; " alt="">
                                                            <div class="sgt-text">
                                                                <h4>Oussema ben abid</h4>
                                                                <span>Graphic Designer</span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="suggestion-usd">
                                                            <img src="images/wassim.jpg"  style="height: 40px; " alt="">
                                                            <div class="sgt-text">
                                                                <h4>Hachani  Wassim</h4>
                                                                <span>Developpeur PHP</span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="suggestion-usd">
                                                            <img   src="http://via.placeholder.com/35x35"  style="height: 40px;; "alt="">
                                                            <div class="sgt-text">
                                                                <h4>Haroun najlaoui</h4>
                                                                <span>Developpeur Wordpress</span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="suggestion-usd">
                                                            <img  src="images/jessica.webp"  style="height: 40px; " alt="">
                                                            <div class="sgt-text">
                                                                <h4>Jessica William</h4>
                                                                <span>Graphic Designer</span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="suggestion-usd">
                                                            <img src="images/jhon.jpg"   style="height: 40px;; "alt="">
                                                            <div class="sgt-text">
                                                                <h4>John Doe</h4>
                                                                <span>Developpeur PHP</span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="view-more">
                                                            <a href="#" title="">Voir plus</a>
                                                        </div>
                                                    </div><!--suggestions-list end-->
                                                </div><!--suggestions end-->
                                                <div class="tags-sec full-width">
                                                    <ul>
                                                        <li><a href="#" title="">Centre d'aide</a></li>
                                                        <li><a href="#" title="">A propos</a></li>
                                                        <li><a href="#" title="">politique de confidentialité
                                                        </a></li>
                                                        <li><a href="#" title="">Règles de la communauté
                                                        </a></li>
                                                        <li><a href="#" title="">Politique de cookies
                                                        </a></li>
                                                        <li><a href="#" title="">Carrière
                                                        </a></li>
                                                        <li><a href="#" title="">Langue</a></li>
                                                        <li><a href="#" title="">Politique de copyright
                                                        </a></li>
                                                    </ul>
                                                    <div class="cp-sec">
                                                        <img src="images/logo2.png" alt="">
                                                        <p><img src="images/cp.png" alt="">Copyright 2018</p>
                                                    </div>
                                                </div><!--tags-sec end-->
                                            </div><!--main-left-sidebar end-->
                                        </div>
                                        <div class="col-lg-6 col-md-8 no-pd">
                                            <div class="main-ws-sec">
                                                <div class="post-topbar">
                                                    <div class="user-picy">
                                                        <img src="http://via.placeholder.com/100x100" alt="">
                                                    </div>
                                                    <div class="post-st">
                                                        <ul>
                                                            <li><a class="post_project" href="#" title="">Poster un projet</a></li>
                                                            <li><a class="post-jb active" href="#" title="">Poster un travail</a></li>
                                                        </ul>
                                                    </div><!--post-st end-->
                                                </div><!--post-topbar end-->
                                                <div class="posts-section">
                                                    <div class="post-bar">
                                                        <div class="post_topbar">
                                                            <div class="usy-dt">
                                                                <img src="images/118839270_3478783138855213_4671282241847192183_n.jpg" style="height: 100px;" alt="">
                                                                <div class="usy-name">
                                                                    <br> <br>
                                                                    <h3>Mohamed Hedi Belkhouja</h3>
                                                                    <span><img src="images/clock.png" alt="">il ya 3 minutes</span>
                                                                </div>
                                                            </div>
                                                            <div class="ed-opts">
                                                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                                <ul class="ed-options">
                                                                    <li><a href="#" title="">Modifier la publication</a></li>
                                                                    <li><a href="#" title="">Ne pas enregistrer</a></li>
                                                                    <li><a href="#" title="">défaire
                                                                    </a></li>
                                                                    <li><a href="#" title="">Fermer</a></li>
                                                                    <li><a href="#" title="">Cacher</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="epi-sec">
                                                            <ul class="descp">
                                                                <li><img src="images/icon8.png" alt=""><span>codeur épique
                                                                </span></li>
                                                                <li><img src="images/icon9.png" alt=""><span>Tunisie</span></li>
                                                            </ul>
                                                            <ul class="bk-links">
                                                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="job_descp">
                                                            <h3>Développeur Wordpress senior
                                                            </h3>
                                                            <ul class="job-dt">
                                                                <li><a href="#" title="">À plein temps
                                                                </a></li>
                                                            </ul>
                                                            <p>Je suis un jeune développeur Wordpress et je cherche un travail dans mon domaine , je travaille à plein temps et j'espére que je vais trouver un traivail ... <a href="#" title="">view more</a></p>
                                                            <ul class="skill-tags">
                                                                <li><a href="#" title="">HTML</a></li>
                                                                <li><a href="#" title="">PHP</a></li>
                                                                <li><a href="#" title="">CSS</a></li>
                                                                <li><a href="#" title="">Javascript</a></li>
                                                                <li><a href="#" title="">Wordpress</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="job-status-bar">
                                                            <ul class="like-com">
                                                                <li>
                                                                    <a href="#"><i class="la la-heart"></i> Like</a>
                                                                    <img src="images/liked-img.png" alt="">
                                                                    <span>25</span>
                                                                </li>
                                                                <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Commenter 15</a></li>
                                                            </ul>
                                                            <a><i class="la la-eye"></i>50 Vues</a>
                                                        </div>
                                                    </div><!--post-bar end-->
                                                    <div class="top-profiles">
                                                        <div class="pf-hd">
                                                            <h3>Top Profiles</h3>
                                                            <i class="la la-ellipsis-v"></i>
                                                        </div>
                                                        <div class="profiles-slider">
                                                            <div class="user-profy">
                                                                <img src="images/oussema.jpg" style="height: 60px;" alt="">
                                                                <h3>Oussema Abid</h3>
                                                                <span>Graphic Designer</span>
                                                                <ul>
                                                                    <li><a href="#" title="" class="followw">Follow</a></li>
                                                                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                                </ul>
                                                                <a href="#" title="">View Profile</a>
                                                            </div><!--user-profy end-->
                                                            <div class="user-profy">
                                                                <img src="images/jhon.jpg" style="height: 60px;" alt="">
                                                                <h3>Jhon Doe</h3>
                                                                <span>Graphic Designer</span>
                                                                <ul>
                                                                    <li><a href="#" title="" class="followw">Follow</a></li>
                                                                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                                </ul>
                                                                <a href="#" title="">Voir le profile</a>
                                                            </div><!--user-profy end-->
                                                            <div class="user-profy">
                                                                <img src="http://via.placeholder.com/57x57"  style="height: 60px;" alt="">
                                                                <h3>Maria Angelina</h3>
                                                                <span>Graphic Designer</span>
                                                                <ul>
                                                                    <li><a href="#" title="" class="followw">Abonner</a></li>
                                                                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                                </ul>
                                                                <a href="#" title="">View Profile</a>
                                                            </div><!--user-profy end-->
                                                            <div class="user-profy">
                                                                <img src="http://via.placeholder.com/57x57"  style="height: 60px;"alt="">
                                                                <h3>John Doe</h3>
                                                                <span>Graphic Designer</span>
                                                                <ul>
                                                                    <li><a href="#" title="" class="followw">Abonner</a></li>
                                                                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                                </ul>
                                                                <a href="#" title="">View Profile</a>
                                                            </div><!--user-profy end-->
                                                            <div class="user-profy">
                                                                <img src="http://via.placeholder.com/57x57" style="height: 60px;" alt="">
                                                                <h3>Mark leman</h3>
                                                                <span>Developpeur  javascript</span>
                                                                <ul>
                                                                    <li><a href="#" title="" class="followw">Abonner</a></li>
                                                                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                                </ul>
                                                                <a href="#" title="">View Profile</a>
                                                            </div><!--user-profy end-->
                                                            <div class="user-profy">
                                                                <img src="images/wassim.jpg" style="height: 60px;" alt="">
                                                                <h3>Wassim Hachani</h3>
                                                                <span>Developpeur PHP</span>
                                                                <ul>
                                                                    <li><a href="#" title="" class="followw">Abonner</a></li>
                                                                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                                </ul>
                                                                <a href="#" title="">Voir les profiles</a>
                                                            </div><!--user-profy end-->
                                                        </div><!--profiles-slider end-->
                                                    </div><!--top-profiles end-->
                                                    <div class="post-bar">

                                                    </div><!--post-bar end-->
                                                    <div class="posty">
                                                        <div class="post-bar no-margin">
                                                            <div class="post_topbar">


                                                            </div>

                                                            <div class="job-status-bar">

                                                            </div>
                                                        </div><!--post-bar end-->
                                                        <div class="comment-section">
                                                            <div class="">
                                                                <i ></i>
                                                            </div>
                                                            <div class="comment-sec">
                                                                <ul>
                                                                    <li>
                                                                        <div class="comment-list">

                                                                        </div><!--comment-list end-->
                                                                        <ul>
                                                                            <li>

                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="comment-list">

                                                                        </div><!--comment-list end-->
                                                                    </li>
                                                                </ul>
                                                            </div><!--comment-sec end-->
                                                            <div class="post-comment">

                                                            </div><!--post-comment end-->
                                                        </div><!--comment-section end-->
                                                    </div><!--posty end-->
                                                    <div class="process-comm">
                                                        <div class="spinner">
                                                            <div class="bounce1"></div>
                                                            <div class="bounce2"></div>
                                                            <div class="bounce3"></div>
                                                        </div>
                                                    </div><!--process-comm end-->
                                                </div><!--posts-section end-->
                                            </div><!--main-ws-sec end-->
                                        </div>
                                        <div class="col-lg-3 pd-right-none no-pd">
                                            <div class="right-sidebar">

                                                <div class="widget widget-jobs">
                                                    <div class="sd-title">
                                                        <h3>Top Travails</h3>
                                                        <i class="la la-ellipsis-v"></i>
                                                    </div>
                                                    <div class="jobs-list">
                                                        <div class="job-info">
                                                            <div class="job-details">
                                                                <h3>Concepteur de produits senior
                                                                </h3>
                                                                <p></p>
                                                            </div>
                                                            <div class="hr-rate">
                                                            </div>
                                                        </div><!--job-info end-->
                                                        <div class="job-info">
                                                            <div class="job-details">
                                                                <h3>Senior UI / UX Designer
                                                                </h3>
                                                                <p></p>
                                                            </div>
                                                            <div class="hr-rate">
                                                            </div>
                                                        </div><!--job-info end-->
                                                        <div class="job-info">
                                                            <div class="job-details">
                                                                <h3>Designer SEO junior
                                                                </h3>
                                                                <p></p>
                                                            </div>
                                                            <div class="hr-rate">
                                                            </div>
                                                        </div><!--job-info end-->
                                                        <div class="job-info">
                                                            <div class="job-details">
                                                                <h3>	Concepteur PHP senior</h3>
                                                                <p></p>
                                                            </div>
                                                            <div class="hr-rate">
                                                            </div>
                                                        </div><!--job-info end-->
                                                        <div class="job-info">
                                                            <div class="job-details">
                                                                <h3>Concepteur développeur senior
                                                                </h3>
                                                                <p></p>
                                                            </div>
                                                            <div class="hr-rate">
                                                            </div>
                                                        </div><!--job-info end-->
                                                    </div><!--jobs-list end-->
                                                </div><!--widget-jobs end-->

                                                <div class="widget suggestions full-width">
                                                    <div class="sd-title">
                                                        <h3>Les profiles les plus vues</h3>
                                                        <i class="la la-ellipsis-v"></i>
                                                    </div><!--sd-title end-->
                                                    <div class="suggestions-list">
                                                        <div class="suggestion-usd">
                                                            <img src="images/ludo.jpg"  style="height: 40px;" alt="">
                                                            <div class="sgt-text">
                                                                <h4>Ludovic Champenois
                                                                </h4>
                                                                <span>Graphic Designer</span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="suggestion-usd">
                                                            <img src="images/pat.png" style="height: 40px;" alt="">
                                                            <div class="sgt-text">
                                                                <h4>Patrick Chanezon </h4>
                                                                <span>Developpeur PHP </span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="suggestion-usd">
                                                            <img src="images/fra.jpg"  style="height: 40px;" alt="">
                                                            <div class="sgt-text">
                                                                <h4>François Beaufort </h4>
                                                                <span>Developpeur Wordpress</span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="suggestion-usd">
                                                            <img src="images/ced.jpg" style="height: 40px;" alt="">
                                                            <div class="sgt-text">
                                                                <h4>Cédric Beust
                                                                </h4>
                                                                <span>Developpeur C &amp; C++ </span>
                                                            </div>
                                                            <span><i class="la la-plus"></i></span>
                                                        </div>
                                                        <div class="view-more">
                                                            <a href="#" title="">Voir plus</a>
                                                        </div>
                                                    </div><!--suggestions-list end-->
                                                </div>
                                            </div><!--right-sidebar end-->
                                        </div>
                                    </div>
                                </div><!-- main-section-data end-->
                            </div>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
