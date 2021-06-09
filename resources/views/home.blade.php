@extends('layouts.userapp')

@section('content')
@extends('layouts.navbar')
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
