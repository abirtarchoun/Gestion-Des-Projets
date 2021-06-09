@extends('layouts.admin')
@section('main')
            <!-- start page content -->
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Font Icons</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="{{ route('admin.dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">UI Elements</a>&nbsp;<i
                                        class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Icons</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">Font gittawesome
                                            Icons</a></li>
									<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Simple Line
                                            Icons</a></li>
								</ul>
                    <!--<div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <ul class="nav customtab nav-tabs" role="tablist">
                                    <li class="nav-item"><a href="#tab1" class="nav-link active"
                                            data-toggle="tab">Fontawesome
                                            Icons</a></li>
                                    <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Simple Line
                                            Icons</a></li>
                                </ul>-->
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">41 New Icons in 4.7</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-address-book"></i> fa fa-address-book
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-address-book-o"></i> fa fa-address-book-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-address-card"></i> fa fa-address-card
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-address-card-o"></i> fa fa-address-card-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bandcamp"></i> fa fa-bandcamp
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bath"></i> fa fa-bath
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bathtub"></i> fa fa-bathtub
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-drivers-license"></i> fa fa-drivers-license
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-drivers-license-o"></i> fa fa-drivers-license-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-eercast"></i> fa fa-eercast
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-envelope-open"></i> fa fa-envelope-open
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-envelope-open-o"></i> fa fa-envelope-open-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-etsy"></i> fa fa-etsy
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-free-code-camp"></i> fa fa-free-code-camp
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-grav"></i> fa fa-grav
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-handshake-o"></i> fa fa-handshake-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-id-badge"></i> fa fa-id-badge
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-id-card"></i> fa fa-id-card
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-id-card-o"></i> fa fa-id-card-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-imdb"></i> fa fa-imdb
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-linode"></i> fa fa-linode
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-meetup"></i> fa fa-meetup
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-microchip"></i> fa fa-microchip
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-podcast"></i> fa fa-podcast
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-quora"></i> fa fa-quora
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ravelry"></i> fa fa-ravelry
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-s15"></i> fa fa-s15
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-shower"></i> fa fa-shower
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-snowflake-o"></i> fa fa-snowflake-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-superpowers"></i> fa fa-superpowers
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-telegram"></i> fa fa-telegram
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer"></i> fa fa-thermometer
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-0"></i> fa fa-thermometer-0
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-1"></i> fa fa-thermometer-1
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-2"></i> fa fa-thermometer-2
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-3"></i> fa fa-thermometer-3
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-4"></i> fa fa-thermometer-4
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-empty"></i> fa fa-thermometer-empty
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-full"></i> fa fa-thermometer-full
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-half"></i> fa fa-thermometer-half
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-quarter"></i> fa fa-thermometer-quarter
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thermometer-three-quarters"></i> fa
                                                    fa-thermometer-three-quarters
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-times-rectangle"></i> fa fa-times-rectangle
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-times-rectangle-o"></i> fa fa-times-rectangle-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-user-circle"></i> fa fa-user-circle
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-user-circle-o"></i> fa fa-user-circle-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-user-o"></i> fa fa-user-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-vcard"></i> fa fa-vcard
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-vcard-o"></i> fa fa-vcard-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-window-close"></i> fa fa-window-close
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-window-close-o"></i> fa fa-window-close-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-window-maximize"></i> fa fa-window-maximize
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-window-minimize"></i> fa fa-window-minimize
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-window-restore"></i> fa fa-window-restore
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wpexplorer"></i> fa fa-wpexplorer
                                                </div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Web Application Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-adjust"></i>
                                                    fa-adjust</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-anchor"></i>
                                                    fa-anchor</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-archive"></i>
                                                    fa-archive</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-arrows"></i>
                                                    fa-arrows</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-arrows-h"></i>
                                                    fa-arrows-h</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-arrows-v"></i>
                                                    fa-arrows-v</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-asterisk"></i>
                                                    fa-asterisk</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-automobile"></i>
                                                    fa-automobile <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-ban"></i>
                                                    fa-ban</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-bank"></i>
                                                    fa-bank <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-bar-chart-o"></i>
                                                    fa-bar-chart-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-barcode"></i>
                                                    fa-barcode</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-bars"></i>
                                                    fa-bars</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-beer"></i>
                                                    fa-beer</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-bell"></i>
                                                    fa-bell</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-bell-o"></i>
                                                    fa-bell-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-bolt"></i>
                                                    fa-bolt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-bomb"></i>
                                                    fa-bomb</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-book"></i>
                                                    fa-book</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-bookmark"></i>
                                                    fa-bookmark</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-bookmark-o"></i>
                                                    fa-bookmark-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-briefcase"></i>
                                                    fa-briefcase</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-bug"></i>
                                                    fa-bug</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-building"></i>
                                                    fa-building</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-building-o"></i>
                                                    fa-building-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-bullhorn"></i>
                                                    fa-bullhorn</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-bullseye"></i>
                                                    fa-bullseye</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-cab"></i>
                                                    fa-cab <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-calendar"></i>
                                                    fa-calendar</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-calendar-o"></i>
                                                    fa-calendar-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-camera"></i>
                                                    fa-camera</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-camera-retro"></i>
                                                    fa-camera-retro</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-car"></i>
                                                    fa-car</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-caret-square-o-down"></i>
                                                    fa-caret-square-o-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-caret-square-o-left"></i>
                                                    fa-caret-square-o-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-caret-square-o-right"></i>
                                                    fa-caret-square-o-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-caret-square-o-up"></i>
                                                    fa-caret-square-o-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-certificate"></i>
                                                    fa-certificate</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-check"></i>
                                                    fa-check</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-check-circle"></i>
                                                    fa-check-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-check-circle-o"></i>
                                                    fa-check-circle-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-check-square"></i>
                                                    fa-check-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-check-square-o"></i>
                                                    fa-check-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-child"></i>
                                                    fa-child</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-circle"></i>
                                                    fa-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-circle-o"></i>
                                                    fa-circle-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-circle-o-notch"></i>
                                                    fa-circle-o-notch</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-circle-thin"></i>
                                                    fa-circle-thin</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-clock-o"></i>
                                                    fa-clock-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-cloud"></i>
                                                    fa-cloud</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-cloud-download"></i>
                                                    fa-cloud-download</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-cloud-upload"></i>
                                                    fa-cloud-upload</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-code"></i>
                                                    fa-code</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-code-fork"></i>
                                                    fa-code-fork</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-coffee"></i>
                                                    fa-coffee</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-cog"></i>
                                                    fa-cog</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-cogs"></i>
                                                    fa-cogs</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-comment"></i>
                                                    fa-comment</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-comment-o"></i>
                                                    fa-comment-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-comments"></i>
                                                    fa-comments</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-comments-o"></i>
                                                    fa-comments-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-compass"></i>
                                                    fa-compass</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-credit-card"></i>
                                                    fa-credit-card</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-crop"></i>
                                                    fa-crop</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-crosshairs"></i>
                                                    fa-crosshairs</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-cube"></i>
                                                    fa-cube</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-cubes"></i>
                                                    fa-cubes</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-cutlery"></i>
                                                    fa-cutlery</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-dashboard"></i>
                                                    fa-dashboard <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-database"></i>
                                                    fa-database</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-desktop"></i>
                                                    fa-desktop</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-dot-circle-o"></i>
                                                    fa-dot-circle-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-download"></i>
                                                    fa-download</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-edit"></i>
                                                    fa-edit <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-ellipsis-h"></i>
                                                    fa-ellipsis-h</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-ellipsis-v"></i>
                                                    fa-ellipsis-v</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-envelope"></i>
                                                    fa-envelope</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-envelope-o"></i>
                                                    fa-envelope-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-envelope-square"></i>
                                                    fa-envelope-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-eraser"></i>
                                                    fa-eraser</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-exchange"></i>
                                                    fa-exchange</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-exclamation"></i>
                                                    fa-exclamation</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-exclamation-circle"></i>
                                                    fa-exclamation-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-exclamation-triangle"></i>
                                                    fa-exclamation-triangle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-external-link"></i>
                                                    fa-external-link</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-external-link-square"></i>
                                                    fa-external-link-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-eye"></i>
                                                    fa-eye</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-eye-slash"></i>
                                                    fa-eye-slash</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-fax"></i>
                                                    fa-fax</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-female"></i>
                                                    fa-female</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-fighter-jet"></i>
                                                    fa-fighter-jet</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-archive-o"></i>
                                                    fa-file-archive-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-audio-o"></i>
                                                    fa-file-audio-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-code-o"></i>
                                                    fa-file-code-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-excel-o"></i>
                                                    fa-file-excel-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-image-o"></i>
                                                    fa-file-image-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-movie-o"></i>
                                                    fa-file-movie-o <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-pdf-o"></i>
                                                    fa-file-pdf-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-photo-o"></i>
                                                    fa-file-photo-o <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-picture-o"></i>
                                                    fa-file-picture-o <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-powerpoint-o"></i>
                                                    fa-file-powerpoint-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-sound-o"></i>
                                                    fa-file-sound-o <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-video-o"></i>
                                                    fa-file-video-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-word-o"></i>
                                                    fa-file-word-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-file-zip-o"></i>
                                                    fa-file-zip-o <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-film"></i>
                                                    fa-film</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-filter"></i>
                                                    fa-filter</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-fire"></i>
                                                    fa-fire</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-fire-extinguisher"></i>
                                                    fa-fire-extinguisher</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-flag"></i>
                                                    fa-flag</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-flag-checkered"></i>
                                                    fa-flag-checkered</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-flag-o"></i>
                                                    fa-flag-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-flash"></i>
                                                    fa-flash <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-flask"></i>
                                                    fa-flask</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-folder"></i>
                                                    fa-folder</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-folder-o"></i>
                                                    fa-folder-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-folder-open"></i>
                                                    fa-folder-open</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-folder-open-o"></i>
                                                    fa-folder-open-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-frown-o"></i>
                                                    fa-frown-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-gamepad"></i>
                                                    fa-gamepad</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-gavel"></i>
                                                    fa-gavel</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-gear"></i>
                                                    fa-gear <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-gears"></i>
                                                    fa-gears <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-gift"></i>
                                                    fa-gift</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-glass"></i>
                                                    fa-glass</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-globe"></i>
                                                    fa-globe</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-graduation-cap"></i>
                                                    fa-graduation-cap</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-group"></i>
                                                    fa-group <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-hdd-o"></i>
                                                    fa-hdd-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-headphones"></i>
                                                    fa-headphones</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-heart"></i>
                                                    fa-heart</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-heart-o"></i>
                                                    fa-heart-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-history"></i>
                                                    fa-history</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-home"></i>
                                                    fa-home</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-image"></i>
                                                    fa-image <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-inbox"></i>
                                                    fa-inbox</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-info"></i>
                                                    fa-info</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-info-circle"></i>
                                                    fa-info-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-institution"></i>
                                                    fa-institution <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-key"></i>
                                                    fa-key</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-keyboard-o"></i>
                                                    fa-keyboard-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-language"></i>
                                                    fa-language</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-laptop"></i>
                                                    fa-laptop</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-leaf"></i>
                                                    fa-leaf</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-legal"></i>
                                                    fa-legal <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-lemon-o"></i>
                                                    fa-lemon-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-level-down"></i>
                                                    fa-level-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-level-up"></i>
                                                    fa-level-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-life-bouy"></i>
                                                    fa-life-bouy <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-life-ring"></i>
                                                    fa-life-ring</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-life-saver"></i>
                                                    fa-life-saver <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-lightbulb-o"></i>
                                                    fa-lightbulb-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-location-arrow"></i>
                                                    fa-location-arrow</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-lock"></i>
                                                    fa-lock</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-magic"></i>
                                                    fa-magic</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-magnet"></i>
                                                    fa-magnet</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-mail-forward"></i>
                                                    fa-mail-forward <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-mail-reply"></i>
                                                    fa-mail-reply <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-mail-reply-all"></i>
                                                    fa-mail-reply-all <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-male"></i>
                                                    fa-male</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-map-marker"></i>
                                                    fa-map-marker</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-meh-o"></i>
                                                    fa-meh-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-microphone"></i>
                                                    fa-microphone</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-microphone-slash"></i>
                                                    fa-microphone-slash</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-minus"></i>
                                                    fa-minus</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-minus-circle"></i>
                                                    fa-minus-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-minus-square"></i>
                                                    fa-minus-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-minus-square-o"></i>
                                                    fa-minus-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-mobile"></i>
                                                    fa-mobile</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-mobile-phone"></i>
                                                    fa-mobile-phone <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-money"></i>
                                                    fa-money</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-moon-o"></i>
                                                    fa-moon-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-mortar-board"></i>
                                                    fa-mortar-board <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-music"></i>
                                                    fa-music</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-navicon"></i>
                                                    fa-navicon <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-paper-plane"></i>
                                                    fa-paper-plane</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-paper-plane-o"></i>
                                                    fa-paper-plane-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-paw"></i>
                                                    fa-paw</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-pencil"></i>
                                                    fa-pencil</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-pencil-square"></i>
                                                    fa-pencil-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-pencil-square-o"></i>
                                                    fa-pencil-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-phone"></i>
                                                    fa-phone</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-phone-square"></i>
                                                    fa-phone-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-photo"></i>
                                                    fa-photo <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-picture-o"></i>
                                                    fa-picture-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-plane"></i>
                                                    fa-plane</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-plus"></i>
                                                    fa-plus</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-plus-circle"></i>
                                                    fa-plus-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-plus-square"></i>
                                                    fa-plus-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-plus-square-o"></i>
                                                    fa-plus-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-power-off"></i>
                                                    fa-power-off</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-print"></i>
                                                    fa-print</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-puzzle-piece"></i>
                                                    fa-puzzle-piece</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-qrcode"></i>
                                                    fa-qrcode</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-question"></i>
                                                    fa-question</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-question-circle"></i>
                                                    fa-question-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-quote-left"></i>
                                                    fa-quote-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-quote-right"></i>
                                                    fa-quote-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-random"></i>
                                                    fa-random</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-recycle"></i>
                                                    fa-recycle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-refresh"></i>
                                                    fa-refresh</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-reorder"></i>
                                                    fa-reorder <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-reply"></i>
                                                    fa-reply</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-reply-all"></i>
                                                    fa-reply-all</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-retweet"></i>
                                                    fa-retweet</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-road"></i>
                                                    fa-road</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-rocket"></i>
                                                    fa-rocket</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-rss"></i>
                                                    fa-rss</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-rss-square"></i>
                                                    fa-rss-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-search"></i>
                                                    fa-search</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-search-minus"></i>
                                                    fa-search-minus</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-search-plus"></i>
                                                    fa-search-plus</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-send"></i>
                                                    fa-send <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-send-o"></i>
                                                    fa-send-o <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-share"></i>
                                                    fa-share</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-share-alt"></i>
                                                    fa-share-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-share-alt-square"></i>
                                                    fa-share-alt-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-share-square"></i>
                                                    fa-share-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-share-square-o"></i>
                                                    fa-share-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-shield"></i>
                                                    fa-shield</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-shopping-cart"></i>
                                                    fa-shopping-cart</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sign-in"></i>
                                                    fa-sign-in</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sign-out"></i>
                                                    fa-sign-out</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-signal"></i>
                                                    fa-signal</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sitemap"></i>
                                                    fa-sitemap</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sliders"></i>
                                                    fa-sliders</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-smile-o"></i>
                                                    fa-smile-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-sort"></i>
                                                    fa-sort</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-alpha-asc"></i>
                                                    fa-sort-alpha-asc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-alpha-desc"></i>
                                                    fa-sort-alpha-desc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-amount-asc"></i>
                                                    fa-sort-amount-asc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-amount-desc"></i>
                                                    fa-sort-amount-desc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-asc"></i>
                                                    fa-sort-asc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-desc"></i>
                                                    fa-sort-desc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-down"></i>
                                                    fa-sort-down <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-numeric-asc"></i>
                                                    fa-sort-numeric-asc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-numeric-desc"></i>
                                                    fa-sort-numeric-desc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sort-up"></i>
                                                    fa-sort-up <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-space-shuttle"></i>
                                                    fa-space-shuttle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-spinner"></i>
                                                    fa-spinner</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-spoon"></i>
                                                    fa-spoon</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-square"></i>
                                                    fa-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-square-o"></i>
                                                    fa-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-star"></i>
                                                    fa-star</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-star-half"></i>
                                                    fa-star-half</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-star-half-empty"></i>
                                                    fa-star-half-empty <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-star-half-full"></i>
                                                    fa-star-half-full <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-star-half-o"></i>
                                                    fa-star-half-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-star-o"></i>
                                                    fa-star-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-suitcase"></i>
                                                    fa-suitcase</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-sun-o"></i>
                                                    fa-sun-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-support"></i>
                                                    fa-support <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-tablet"></i>
                                                    fa-tablet</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-tachometer"></i>
                                                    fa-tachometer</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-tag"></i>
                                                    fa-tag</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-tags"></i>
                                                    fa-tags</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-tasks"></i>
                                                    fa-tasks</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-taxi"></i>
                                                    fa-taxi</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-terminal"></i>
                                                    fa-terminal</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-thumb-tack"></i>
                                                    fa-thumb-tack</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-thumbs-down"></i>
                                                    fa-thumbs-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-thumbs-o-down"></i>
                                                    fa-thumbs-o-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-thumbs-o-up"></i>
                                                    fa-thumbs-o-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-thumbs-up"></i>
                                                    fa-thumbs-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-ticket"></i>
                                                    fa-ticket</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-times"></i>
                                                    fa-times</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-times-circle"></i>
                                                    fa-times-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-times-circle-o"></i>
                                                    fa-times-circle-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-tint"></i>
                                                    fa-tint</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-toggle-down"></i>
                                                    fa-toggle-down <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-toggle-left"></i>
                                                    fa-toggle-left <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-toggle-right"></i>
                                                    fa-toggle-right <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-toggle-up"></i>
                                                    fa-toggle-up <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-trash-o"></i>
                                                    fa-trash-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-tree"></i>
                                                    fa-tree</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-trophy"></i>
                                                    fa-trophy</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-truck"></i>
                                                    fa-truck</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-umbrella"></i>
                                                    fa-umbrella</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-university"></i>
                                                    fa-university</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-unlock"></i>
                                                    fa-unlock</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-unlock-alt"></i>
                                                    fa-unlock-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-unsorted"></i>
                                                    fa-unsorted <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-upload"></i>
                                                    fa-upload</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i class="fa fa-user"></i>
                                                    fa-user</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-users"></i>
                                                    fa-users</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-video-camera"></i>
                                                    fa-video-camera</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-volume-down"></i>
                                                    fa-volume-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-volume-off"></i>
                                                    fa-volume-off</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-volume-up"></i>
                                                    fa-volume-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-warning"></i>
                                                    fa-warning <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-wheelchair"></i>
                                                    fa-wheelchair</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12"><i
                                                        class="fa fa-wrench"></i>
                                                    fa-wrench</div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Accessibility Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-american-sign-language-interpreting"></i>
                                                    fa-american-sign-language-interpreting
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-asl-interpreting"></i> fa-asl-interpreting
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-assistive-listening-systems"></i>
                                                    fa-assistive-listening-systems
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-audio-description"></i> fa-audio-description
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-blind"></i> fa-blind
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-braille"></i> fa-braille
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc"></i> fa-cc
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-deaf"></i> fa-deaf
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-deafness"></i> fa-deafness
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hard-of-hearing"></i> fa-hard-of-hearing
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-low-vision"></i> fa-low-vision
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-question-circle-o"></i> fa-question-circle-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-sign-language"></i> fa-sign-language
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-signing"></i> fa-signing
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-tty"></i> fa-tty
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-universal-access"></i> fa-universal-access
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-volume-control-phone"></i> fa-volume-control-phone
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wheelchair"></i> fa-wheelchair
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wheelchair-alt"></i> fa-wheelchair-alt
                                                </div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Hand Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-grab-o"></i> fa-hand-grab-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-lizard-o"></i> fa-hand-lizard-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-o-down"></i> fa-hand-o-down
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-o-left"></i> fa-hand-o-left
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-o-right"></i> fa-hand-o-right
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-o-up"></i> fa-hand-o-up
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-paper-o"></i> fa-hand-paper-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-peace-o"></i> fa-hand-peace-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-pointer-o"></i> fa-hand-pointer-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-rock-o"></i> fa-hand-rock-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-scissors-o"></i> fa-hand-scissors-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-spock-o"></i> fa-hand-spock-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-stop-o"></i> fa-hand-stop-o
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thumbs-down"></i> fa-thumbs-down
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-thumbs-up"></i> fa-thumbs-up
                                                </div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Transportation Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ambulance"></i> fa-ambulance</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-automobile"></i> fa-automobile
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bicycle"></i> fa-bicycle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bus"></i> fa-bus</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cab"></i> fa-cab
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-car"></i> fa-car</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-motorcycle"></i> fa-motorcycle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-plane"></i> fa-plane</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-rocket"></i> fa-rocket</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ship"></i> fa-ship</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-space-shuttle"></i> fa-space-shuttle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-subway"></i> fa-subway</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-taxi"></i> fa-taxi</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-train"></i> fa-train</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-truck"></i> fa-truck</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wheelchair-alt"></i>wheelchair-alt</div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Gender Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-genderless"></i> fa-genderless</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-intersex"></i> fa-intersex
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-mars"></i> fa-mars</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-mars-double"></i> fa-mars-double</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-mars-stroke"></i> fa-mars-stroke</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-mars-stroke-h"></i> fa-mars-stroke-h</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-mars-stroke-v"></i> fa-mars-stroke-v</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-mercury"></i> fa-mercury</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-neuter"></i> fa-neuter</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-transgender"></i> fa-transgender</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-transgender-alt"></i> fa-transgender-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-venus"></i> fa-venus</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-venus-double"></i> fa-venus-double</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-venus-mars"></i> fa-venus-mars</div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">File Type Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file"></i> fa-file</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-archive-o"></i> fa-file-archive-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-audio-o"></i> fa-file-audio-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-code-o"></i> fa-file-code-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-excel-o"></i> fa-file-excel-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-image-o"></i> fa-file-image-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-movie-o"></i> fa-file-movie-o
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-o"></i> fa-file-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-photo-o"></i> fa-file-photo-o
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-picture-o"></i> fa-file-picture-o
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-sound-o"></i> fa-file-sound-o
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-text"></i> fa-file-text</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-text-o"></i> fa-file-text-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-video-o"></i> fa-file-video-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-word-o"></i> fa-file-word-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-zip-o"></i> fa-file-zip-o
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Spinner Icons</h3>
                                            <div class="alert alert-success">
                                                <ul class="fa-ul">
                                                    <li>
                                                        <i class="fa fa-info-circle fa-lg fa-li"></i> These icons work
                                                        great with the <code>fa-spin</code> class. </li>
                                                </ul>
                                            </div>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cog"></i> fa-cog</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-gear"></i> fa-gear
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-refresh"></i> fa-refresh</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-spinner"></i> fa-spinner</div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Form Control Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-check-square"></i> fa-check-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-circle"></i> fa-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-circle-o"></i> fa-circle-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-minus-square"></i> fa-minus-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-plus-square"></i> fa-plus-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-square"></i> fa-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-square-o"></i> fa-square-o</div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Payment Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-amex"></i> fa-cc-amex</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-diners-club"></i> fa-cc-diners-club</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-discover"></i> fa-cc-discover</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-jcb"></i> fa-cc-jcb</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-paypal"></i> fa-cc-paypal</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-stripe"></i> fa-cc-stripe</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-visa"></i> fa-cc-visa</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-credit-card"></i> fa-credit-card</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-credit-card-alt"></i> fa-credit-card-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-google-wallet"></i> fa-google-wallet</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-paypal"></i> fa-paypal</div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Chart Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-area-chart"></i> area-chart</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bar-chart"></i> fa-bar-chart</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bar-chart-o"></i> fa-bar-chart-o
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-line-chart"></i> fa-line-chart</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-pie-chart"></i> fa-pie-chart</div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Currency Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bitcoin"></i> fa-bitcoin
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-btc"></i> fa-btc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cny"></i> fa-cny
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-dollar"></i> fa-dollar
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-eur"></i> fa-eur</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-euro"></i> fa-euro
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-gbp"></i> fa-gbp</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-gg"></i> fa-gg</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-gg-circle"></i> fa-gg-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ils"></i> fa-ils</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-inr"></i> fa-inr</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-jpy"></i> fa-jpy</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-krw"></i> fa-krw</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-money"></i> fa-money</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-rmb"></i> fa-rmb
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-rouble"></i> fa-rouble
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-rub"></i> fa-rub</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ruble"></i> fa-ruble
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-rupee"></i> fa-rupee
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-shekel"></i> fa-shekel
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-sheqel"></i> fa-sheqel
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-try"></i> fa-try</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-turkish-lira"></i> fa-turkish-lira
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-usd"></i> fa-usd</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-won"></i> fa-won
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-yen"></i> fa-yen
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Text Editor Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-align-center"></i> fa-align-center</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-align-justify"></i> fa-align-justify</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-align-left"></i> fa-align-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-align-right"></i> fa-align-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bold"></i> fa-bold</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chain"></i> fa-chain
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chain-broken"></i> fa-chain-broken</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-clipboard"></i> fa-clipboard</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-columns"></i> fa-columns</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-copy"></i> fa-copy
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cut"></i> fa-cut
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-dedent"></i> fa-dedent
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-eraser"></i> fa-eraser</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file"></i> fa-file</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-o"></i> fa-file-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-text"></i> fa-file-text</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-file-text-o"></i> fa-file-text-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-files-o"></i> fa-files-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-floppy-o"></i> fa-floppy-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-font"></i> fa-font</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-header"></i> fa-header</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-indent"></i> fa-indent</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-italic"></i> fa-italic</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-link"></i> fa-link</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-list"></i> fa-list</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-list-alt"></i> fa-list-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-list-ol"></i> fa-list-ol</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-list-ul"></i> fa-list-ul</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-outdent"></i> fa-outdent</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-paperclip"></i> fa-paperclip</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-paragraph"></i> fa-paragraph</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-paste"></i> fa-paste
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-repeat"></i> fa-repeat</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-rotate-left"></i> fa-rotate-left
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-rotate-right"></i> fa-rotate-right
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-save"></i> fa-save
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-scissors"></i> fa-scissors</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-strikethrough"></i> fa-strikethrough</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-subscript"></i> fa-subscript</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-superscript"></i> fa-superscript</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-table"></i> fa-table</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-text-height"></i> fa-text-height</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-text-width"></i> fa-text-width</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-th"></i> fa-th</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-th-large"></i> fa-th-large</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-th-list"></i> fa-th-list</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-underline"></i> fa-underline</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-undo"></i> fa-undo</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-unlink"></i> fa-unlink
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Directional Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angle-down"></i> fa-angle-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angle-left"></i> fa-angle-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angle-right"></i> fa-angle-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angle-up"></i> fa-angle-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-down"></i> fa-arrow-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-left"></i> fa-arrow-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-right"></i> fa-arrow-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrow-up"></i> fa-arrow-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrows"></i> fa-arrows</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-caret-down"></i> fa-caret-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-caret-left"></i> fa-caret-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-caret-right"></i> fa-caret-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-caret-up"></i> fa-caret-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chevron-down"></i> fa-chevron-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chevron-left"></i> fa-chevron-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chevron-right"></i> fa-chevron-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chevron-up"></i> fa-chevron-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-exchange"></i> fa-exchange</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-toggle-down"></i> fa-toggle-down
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-toggle-left"></i> fa-toggle-left
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-toggle-right"></i> fa-toggle-right
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-toggle-up"></i> fa-toggle-up
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Video Player Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-backward"></i> fa-backward</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-compress"></i> fa-compress</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-eject"></i> fa-eject</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-expand"></i> fa-expand</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-fast-backward"></i> fa-fast-backward</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-fast-forward"></i> fa-fast-forward</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-forward"></i> fa-forward</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-pause"></i> fa-pause</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-play"></i> fa-play</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-play-circle"></i> fa-play-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-random"></i> fa-random</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-step-backward"></i> fa-step-backward</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-step-forward"></i> fa-step-forward</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-stop"></i> fa-stop</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Brand Icons</h3>
                                            <div class="alert alert-warning">
                                                <h4>
                                                    <i class="fa fa-warning"></i> Warning!</h4> Apparently, Adblock
                                                Plus can remove Font Awesome brand icons with their "Remove Social
                                                Media Buttons" setting. We will not use hacks to force them to display.
                                                Please report an issue with Adblock Plus if you believe this to be an
                                                error. To work around this, you'll need to modify the social icon class
                                                names.
                                            </div>
                                            <div class="row fontawesome-icon-list mg-bottom-lg">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-500px"></i> fa-500px</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-adn"></i> fa-adn</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-amazon"></i> fa-amazon</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-android"></i> fa-android</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-angellist"></i> fa-angellist</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-apple"></i> fa-apple</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-behance"></i> fa-behance</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-behance-square"></i> fa-behance-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bitbucket"></i> fa-bitbucket</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-bitcoin"></i> fa-bitcoin
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-black-tie"></i> fa-black-tie</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-btc"></i> fa-btc</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-buysellads"></i> fa-buysellads</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-amex"></i> fa-cc-amex</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-diners-club"></i> fa-cc-diners-club</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-discover"></i> fa-cc-discover</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-jcb"></i> fa-cc-jcb</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-paypal"></i> fa-cc-paypal</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-stripe"></i> fa-cc-stripe</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-cc-visa"></i> fa-cc-visa</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-chrome"></i> fa-chrome</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-codepen"></i> fa-codepen</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-connectdevelop"></i> fa-connectdevelop</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-contao"></i> fa-contao</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-css3"></i> fa-css3</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-dashcube"></i> fa-dashcube</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-delicious"></i> fa-delicious</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-deviantart"></i> fa-deviantart</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-digg"></i> fa-digg</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-dribbble"></i> fa-dribbble</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-dropbox"></i> fa-dropbox</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-drupal"></i> fa-drupal</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-empire"></i> fa-empire</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-expeditedssl"></i> fa-expeditedssl</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-facebook"></i> fa-facebook</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-facebook-f"></i> fa-facebook-f
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-facebook-official"></i> fa-facebook-official</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-facebook-square"></i> fa-facebook-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-firefox"></i> fa-firefox</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-flickr"></i> fa-flickr</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-fonticons"></i> fa-fonticons</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-forumbee"></i> fa-forumbee</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-foursquare"></i> fa-foursquare</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ge"></i> fa-ge
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-get-pocket"></i> fa-get-pocket</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-gg"></i> fa-gg</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-gg-circle"></i> fa-gg-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-git"></i> fa-git</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-git-square"></i> fa-git-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-github"></i> fa-github</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-github-alt"></i> fa-github-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-github-square"></i> fa-github-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-gittip"></i> fa-gittip
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-google"></i> fa-google</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-google-plus"></i> fa-google-plus</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-google-wallet"></i> fa-google-wallet</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-gratipay"></i> fa-gratipay</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hacker-news"></i> fa-hacker-news</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-houzz"></i> fa-houzz</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-html5"></i> fa-html5</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-instagram"></i> fa-instagram</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-internet-explorer"></i> fa-internet-explorer</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ioxhost"></i> fa-ioxhost</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-joomla"></i> fa-joomla</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-jsfiddle"></i> fa-jsfiddle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-lastfm"></i> fa-lastfm</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-lastfm-square"></i> fa-lastfm-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-leanpub"></i> fa-leanpub</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-linkedin"></i> fa-linkedin</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-linux"></i> fa-linux</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-maxcdn"></i> fa-maxcdn</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-meanpath"></i> fa-meanpath</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-medium"></i> fa-medium</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-odnoklassniki"></i> fa-odnoklassniki</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-odnoklassniki-square"></i> fa-odnoklassniki-square
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-opencart"></i> fa-opencart</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-openid"></i> fa-openid</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-opera"></i> fa-opera</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-optin-monster"></i> fa-optin-monster</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-pagelines"></i> fa-pagelines</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-paypal"></i> fa-paypal</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-pied-piper"></i> fa-pied-piper</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-pied-piper-alt"></i> fa-pied-piper-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-pinterest"></i> fa-pinterest</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-pinterest-p"></i> fa-pinterest-p</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-qq"></i> fa-qq</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ra"></i> fa-ra
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-rebel"></i> fa-rebel</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-reddit"></i> fa-reddit</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-reddit-square"></i> fa-reddit-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-renren"></i> fa-renren</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-safari"></i> fa-safari</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-sellsy"></i> fa-sellsy</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-share-alt"></i> fa-share-alt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-share-alt-square"></i> fa-share-alt-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-shirtsinbulk"></i> fa-shirtsinbulk</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-simplybuilt"></i> fa-simplybuilt</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-skyatlas"></i> fa-skyatlas</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-skype"></i> fa-skype</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-slack"></i> fa-slack</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-slideshare"></i> fa-slideshare</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-soundcloud"></i> fa-soundcloud</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-spotify"></i> fa-spotify</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-steam"></i> fa-steam</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-steam-square"></i> fa-steam-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-stumbleupon"></i> fa-stumbleupon</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-stumbleupon-circle"></i> fa-stumbleupon-circle</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-tencent-weibo"></i> fa-tencent-weibo</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-trello"></i> fa-trello</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-tripadvisor"></i> fa-tripadvisor</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-tumblr"></i> fa-tumblr</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-twitch"></i> fa-twitch</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-twitter"></i> fa-twitter</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-twitter-square"></i> fa-twitter-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-viacoin"></i> fa-viacoin</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-vimeo"></i> fa-vimeo</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-vine"></i> fa-vine</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-vk"></i> fa-vk</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wechat"></i> fa-wechat
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-weibo"></i> fa-weibo</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-weixin"></i> fa-weixin</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-whatsapp"></i> fa-whatsapp</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wikipedia-w"></i> fa-wikipedia-w</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-windows"></i> fa-windows</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wordpress"></i> fa-wordpress</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-xing"></i> fa-xing</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-xing-square"></i> fa-xing-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-y-combinator"></i> fa-y-combinator</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-y-combinator-square"></i> fa-y-combinator-square
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-yahoo"></i> fa-yahoo</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-yc"></i> fa-yc
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-yc-square"></i> fa-yc-square
                                                    <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-yelp"></i> fa-yelp</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-youtube"></i> fa-youtube</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-youtube-square"></i> fa-youtube-square</div>
                                            </div>
                                            <div class="alert alert-success">
                                                <ul class="mg-bottom-none padding-left-lg">
                                                    <li>All brand icons are trademarks of their respective owners.
                                                    </li>
                                                    <li>The use of these trademarks does not indicate endorsement of
                                                        the trademark holder by Font Awesome, nor vice versa.</li>
                                                    <li>Brand icons should only be used to represent the company or
                                                        product to which they refer.</li>
                                                    <li class="strong">Please do not use brand logos for any purpose
                                                        except to represent that particular brand or service.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">Medical Icons</h3>
                                            <div class="row fontawesome-icon-list">
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-ambulance"></i> fa-ambulance</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-h-square"></i> fa-h-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-heart"></i> fa-heart</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-heart-o"></i> fa-heart-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-heartbeat"></i> fa-heartbeat</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-hospital-o"></i> fa-hospital-o</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-medkit"></i> fa-medkit</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-plus-square"></i> fa-plus-square</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-stethoscope"></i> fa-stethoscope</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-user-md"></i> fa-user-md</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                                                <div class="fa-item col-md-3 col-sm-4 col-12">
                                                    <i class="fa fa-wheelchair-alt"></i> fa-wheelchair-alt</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="borderBox light bordered">
                                            <h3 class="page-header">189 Simple Line Icons</h3>
                                            <div class="sl-iconsdemo">
                                                <span class="item-box"> <span class="item"> <span aria-hidden="true"
                                                            class="icon-user "></span> &nbsp;.icon-user
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-people "></span>
                                                        &nbsp;.icon-people
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-user-female "></span>
                                                        &nbsp;.icon-user-female
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-user-follow "></span>
                                                        &nbsp;.icon-user-follow
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-user-following "></span>
                                                        &nbsp;.icon-user-following
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-user-unfollow "></span>
                                                        &nbsp;.icon-user-unfollow
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-login "></span>
                                                        &nbsp;.icon-login
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-logout "></span>
                                                        &nbsp;.icon-logout
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-emotsmile "></span>
                                                        &nbsp;.icon-emotsmile
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-phone "></span>
                                                        &nbsp;.icon-phone
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-call-end "></span>
                                                        &nbsp;.icon-call-end
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-call-in "></span>
                                                        &nbsp;.icon-call-in
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-call-out "></span>
                                                        &nbsp;.icon-call-out
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-map "></span> &nbsp;.icon-map
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-location-pin "></span>
                                                        &nbsp;.icon-location-pin
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-direction "></span>
                                                        &nbsp;.icon-direction
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-directions "></span>
                                                        &nbsp;.icon-directions
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-compass "></span>
                                                        &nbsp;.icon-compass
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-layers "></span>
                                                        &nbsp;.icon-layers
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-menu "></span>
                                                        &nbsp;.icon-menu
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-list "></span>
                                                        &nbsp;.icon-list
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-options-vertical "></span>
                                                        &nbsp;.icon-options-vertical
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-options "></span>
                                                        &nbsp;.icon-options
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-arrow-down "></span>
                                                        &nbsp;.icon-arrow-down
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-arrow-left "></span>
                                                        &nbsp;.icon-arrow-left
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-arrow-right "></span>
                                                        &nbsp;.icon-arrow-right
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-arrow-up "></span>
                                                        &nbsp;.icon-arrow-up
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-arrow-up-circle "></span>
                                                        &nbsp;.icon-arrow-up-circle
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-arrow-left-circle "></span>
                                                        &nbsp;.icon-arrow-left-circle
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-arrow-right-circle "></span>
                                                        &nbsp;.icon-arrow-right-circle
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-arrow-down-circle "></span>
                                                        &nbsp;.icon-arrow-down-circle
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-check "></span>
                                                        &nbsp;.icon-check
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-clock "></span>
                                                        &nbsp;.icon-clock
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-plus "></span>
                                                        &nbsp;.icon-plus
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-minus "></span>
                                                        &nbsp;.icon-minus
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-close "></span>
                                                        &nbsp;.icon-close
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-event "></span>
                                                        &nbsp;.icon-event
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-exclamation "></span>
                                                        &nbsp;.icon-exclamation
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-organization "></span>
                                                        &nbsp;.icon-organization
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-trophy "></span>
                                                        &nbsp;.icon-trophy
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-screen-smartphone "></span>
                                                        &nbsp;.icon-screen-smartphone
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-screen-desktop "></span>
                                                        &nbsp;.icon-screen-desktop
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-plane "></span>
                                                        &nbsp;.icon-plane
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-notebook "></span>
                                                        &nbsp;.icon-notebook
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-mustache "></span>
                                                        &nbsp;.icon-mustache
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-mouse "></span>
                                                        &nbsp;.icon-mouse
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-magnet "></span>
                                                        &nbsp;.icon-magnet
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-energy "></span>
                                                        &nbsp;.icon-energy
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-disc "></span>
                                                        &nbsp;.icon-disc
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-cursor "></span>
                                                        &nbsp;.icon-cursor
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-cursor-move "></span>
                                                        &nbsp;.icon-cursor-move
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-crop "></span>
                                                        &nbsp;.icon-crop
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-chemistry "></span>
                                                        &nbsp;.icon-chemistry
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-speedometer "></span>
                                                        &nbsp;.icon-speedometer
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-shield "></span>
                                                        &nbsp;.icon-shield
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-screen-tablet "></span>
                                                        &nbsp;.icon-screen-tablet
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-magic-wand "></span>
                                                        &nbsp;.icon-magic-wand
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-hourglass "></span>
                                                        &nbsp;.icon-hourglass
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-graduation "></span>
                                                        &nbsp;.icon-graduation
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-ghost "></span>
                                                        &nbsp;.icon-ghost
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-game-controller "></span>
                                                        &nbsp;.icon-game-controller
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-fire "></span>
                                                        &nbsp;.icon-fire
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-eyeglass "></span>
                                                        &nbsp;.icon-eyeglass
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-envelope-open "></span>
                                                        &nbsp;.icon-envelope-open
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-envelope-letter "></span>
                                                        &nbsp;.icon-envelope-letter
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-bell "></span>
                                                        &nbsp;.icon-bell
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-badge "></span>
                                                        &nbsp;.icon-badge
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-anchor "></span>
                                                        &nbsp;.icon-anchor
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-wallet "></span>
                                                        &nbsp;.icon-wallet
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-vector "></span>
                                                        &nbsp;.icon-vector
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-speech "></span>
                                                        &nbsp;.icon-speech
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-puzzle "></span>
                                                        &nbsp;.icon-puzzle
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-printer "></span>
                                                        &nbsp;.icon-printer
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-present "></span>
                                                        &nbsp;.icon-present
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-playlist "></span>
                                                        &nbsp;.icon-playlist
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-pin "></span> &nbsp;.icon-pin
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-picture "></span>
                                                        &nbsp;.icon-picture
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-handbag "></span>
                                                        &nbsp;.icon-handbag
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-globe-alt "></span>
                                                        &nbsp;.icon-globe-alt
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-globe "></span>
                                                        &nbsp;.icon-globe
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-folder-alt "></span>
                                                        &nbsp;.icon-folder-alt
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-folder "></span>
                                                        &nbsp;.icon-folder
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-film "></span>
                                                        &nbsp;.icon-film
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-feed "></span>
                                                        &nbsp;.icon-feed
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-drop "></span>
                                                        &nbsp;.icon-drop
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-drawer "></span>
                                                        &nbsp;.icon-drawer
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-docs "></span>
                                                        &nbsp;.icon-docs
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-doc "></span> &nbsp;.icon-doc
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-diamond "></span>
                                                        &nbsp;.icon-diamond
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-cup "></span> &nbsp;.icon-cup
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-calculator "></span>
                                                        &nbsp;.icon-calculator
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-bubbles "></span>
                                                        &nbsp;.icon-bubbles
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-briefcase "></span>
                                                        &nbsp;.icon-briefcase
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-book-open "></span>
                                                        &nbsp;.icon-book-open
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-basket-loaded "></span>
                                                        &nbsp;.icon-basket-loaded
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-basket "></span>
                                                        &nbsp;.icon-basket
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-bag "></span> &nbsp;.icon-bag
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-action-undo "></span>
                                                        &nbsp;.icon-action-undo
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-action-redo "></span>
                                                        &nbsp;.icon-action-redo
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-wrench "></span>
                                                        &nbsp;.icon-wrench
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-umbrella "></span>
                                                        &nbsp;.icon-umbrella
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-trash "></span>
                                                        &nbsp;.icon-trash
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-tag "></span> &nbsp;.icon-tag
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-support "></span>
                                                        &nbsp;.icon-support
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-frame "></span>
                                                        &nbsp;.icon-frame
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-size-fullscreen "></span>
                                                        &nbsp;.icon-size-fullscreen
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-size-actual "></span>
                                                        &nbsp;.icon-size-actual
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-shuffle "></span>
                                                        &nbsp;.icon-shuffle
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-share-alt "></span>
                                                        &nbsp;.icon-share-alt
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-share "></span>
                                                        &nbsp;.icon-share
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-rocket "></span>
                                                        &nbsp;.icon-rocket
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-question "></span>
                                                        &nbsp;.icon-question
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-pie-chart "></span>
                                                        &nbsp;.icon-pie-chart
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-pencil "></span>
                                                        &nbsp;.icon-pencil
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-note "></span>
                                                        &nbsp;.icon-note
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-loop "></span>
                                                        &nbsp;.icon-loop
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-home "></span>
                                                        &nbsp;.icon-home
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-grid "></span>
                                                        &nbsp;.icon-grid
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-graph "></span>
                                                        &nbsp;.icon-graph
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-microphone "></span>
                                                        &nbsp;.icon-microphone
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-music-tone-alt "></span>
                                                        &nbsp;.icon-music-tone-alt
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-music-tone "></span>
                                                        &nbsp;.icon-music-tone
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-earphones-alt "></span>
                                                        &nbsp;.icon-earphones-alt
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-earphones "></span>
                                                        &nbsp;.icon-earphones
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-equalizer "></span>
                                                        &nbsp;.icon-equalizer
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-like "></span>
                                                        &nbsp;.icon-like
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-dislike "></span>
                                                        &nbsp;.icon-dislike
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-control-start "></span>
                                                        &nbsp;.icon-control-start
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-control-rewind "></span>
                                                        &nbsp;.icon-control-rewind
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-control-play "></span>
                                                        &nbsp;.icon-control-play
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-control-pause "></span>
                                                        &nbsp;.icon-control-pause
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-control-forward "></span>
                                                        &nbsp;.icon-control-forward
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-control-end "></span>
                                                        &nbsp;.icon-control-end
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-volume-1 "></span>
                                                        &nbsp;.icon-volume-1
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-volume-2 "></span>
                                                        &nbsp;.icon-volume-2
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-volume-off "></span>
                                                        &nbsp;.icon-volume-off
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-calendar "></span>
                                                        &nbsp;.icon-calendar
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-bulb "></span>
                                                        &nbsp;.icon-bulb
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-chart "></span>
                                                        &nbsp;.icon-chart
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-ban "></span> &nbsp;.icon-ban
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-bubble "></span>
                                                        &nbsp;.icon-bubble
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-camrecorder "></span>
                                                        &nbsp;.icon-camrecorder
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-camera "></span>
                                                        &nbsp;.icon-camera
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-cloud-download "></span>
                                                        &nbsp;.icon-cloud-download
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-cloud-upload "></span>
                                                        &nbsp;.icon-cloud-upload
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-envelope "></span>
                                                        &nbsp;.icon-envelope
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-eye "></span> &nbsp;.icon-eye
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-flag "></span>
                                                        &nbsp;.icon-flag
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-heart "></span>
                                                        &nbsp;.icon-heart
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-info "></span>
                                                        &nbsp;.icon-info
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-key "></span> &nbsp;.icon-key
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-link "></span>
                                                        &nbsp;.icon-link
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-lock "></span>
                                                        &nbsp;.icon-lock
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-lock-open "></span>
                                                        &nbsp;.icon-lock-open
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-magnifier "></span>
                                                        &nbsp;.icon-magnifier
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-magnifier-add "></span>
                                                        &nbsp;.icon-magnifier-add
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-magnifier-remove "></span>
                                                        &nbsp;.icon-magnifier-remove
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-paper-clip "></span>
                                                        &nbsp;.icon-paper-clip
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-paper-plane "></span>
                                                        &nbsp;.icon-paper-plane
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-power "></span>
                                                        &nbsp;.icon-power
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-refresh "></span>
                                                        &nbsp;.icon-refresh
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-reload "></span>
                                                        &nbsp;.icon-reload
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-settings "></span>
                                                        &nbsp;.icon-settings
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-star "></span>
                                                        &nbsp;.icon-star
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-symbol-female "></span>
                                                        &nbsp;.icon-symbol-female
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-symbol-male "></span>
                                                        &nbsp;.icon-symbol-male
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-target "></span>
                                                        &nbsp;.icon-target
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-credit-card "></span>
                                                        &nbsp;.icon-credit-card
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-paypal "></span>
                                                        &nbsp;.icon-paypal
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-tumblr "></span>
                                                        &nbsp;.icon-social-tumblr
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-twitter "></span>
                                                        &nbsp;.icon-social-twitter
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-facebook "></span>
                                                        &nbsp;.icon-social-facebook
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-instagram "></span>
                                                        &nbsp;.icon-social-instagram
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-linkedin "></span>
                                                        &nbsp;.icon-social-linkedin
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-pinterest "></span>
                                                        &nbsp;.icon-social-pinterest
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-github "></span>
                                                        &nbsp;.icon-social-github
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-google "></span>
                                                        &nbsp;.icon-social-google
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-reddit "></span>
                                                        &nbsp;.icon-social-reddit
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-skype "></span>
                                                        &nbsp;.icon-social-skype
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-dribbble "></span>
                                                        &nbsp;.icon-social-dribbble
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-behance "></span>
                                                        &nbsp;.icon-social-behance
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-foursqare "></span>
                                                        &nbsp;.icon-social-foursqare
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-soundcloud "></span>
                                                        &nbsp;.icon-social-soundcloud
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-spotify "></span>
                                                        &nbsp;.icon-social-spotify
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-stumbleupon "></span>
                                                        &nbsp;.icon-social-stumbleupon
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-youtube "></span>
                                                        &nbsp;.icon-social-youtube
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-dropbox "></span>
                                                        &nbsp;.icon-social-dropbox
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-vkontakte "></span>
                                                        &nbsp;.icon-social-vkontakte
                                                    </span>
                                                </span> <span class="item-box"> <span class="item"> <span
                                                            aria-hidden="true" class="icon-social-steam "></span>
                                                        &nbsp;.icon-social-steam
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i
                                    class="material-icons">chat</i>Chat
                                <span class="badge badge-danger">4</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i
                                    class="material-icons">settings</i>
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start User Chat -->
                        <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
                            id="quick_sidebar_tab_1">
                            <div class="chat-sidebar-list">
                                <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                    data-wrapper-class="chat-sidebar-list">
                                    <div class="chat-header">
                                        <h5 class="list-heading">Online</h5>
                                    </div>
                                    <ul class="media-list list-items">
                                        <li class="media"><img class="media-object" src="../assets/img/prof/prof3.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">John Deo</h5>
                                                <div class="media-heading-sub">Spine Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">5</span>
                                            </div> <img class="media-object" src="../assets/img/prof/prof1.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Rajesh</h5>
                                                <div class="media-heading-sub">Director</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="../assets/img/prof/prof5.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="away dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jacob Ryan</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-danger">8</span>
                                            </div> <img class="media-object" src="../assets/img/prof/prof4.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Kehn Anderson</h5>
                                                <div class="media-heading-sub">CEO</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="../assets/img/prof/prof2.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="busy dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Sarah Smith</h5>
                                                <div class="media-heading-sub">Anaesthetics</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="../assets/img/prof/prof7.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="online dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Vlad Cardella</h5>
                                                <div class="media-heading-sub">Cardiologist</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-header">
                                        <h5 class="list-heading">Offline</h5>
                                    </div>
                                    <ul class="media-list list-items">
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-warning">4</span>
                                            </div> <img class="media-object" src="../assets/img/prof/prof6.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jennifer Maklen</h5>
                                                <div class="media-heading-sub">Nurse</div>
                                                <div class="media-heading-small">Last seen 01:20 AM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="../assets/img/prof/prof8.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Lina Smith</h5>
                                                <div class="media-heading-sub">Ortho Surgeon</div>
                                                <div class="media-heading-small">Last seen 11:14 PM</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                                <span class="badge badge-success">9</span>
                                            </div> <img class="media-object" src="../assets/img/prof/prof9.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Jeff Adam</h5>
                                                <div class="media-heading-sub">Compounder</div>
                                                <div class="media-heading-small">Last seen 3:31 PM</div>
                                            </div>
                                        </li>
                                        <li class="media"><img class="media-object" src="../assets/img/prof/prof10.jpg"
                                                width="35" height="35" alt="...">
                                            <i class="offline dot"></i>
                                            <div class="media-body">
                                                <h5 class="media-heading">Anjelina Cardella</h5>
                                                <div class="media-heading-sub">Physiotherapist</div>
                                                <div class="media-heading-small">Last seen 7:45 PM</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End User Chat -->
                        <!-- Start Setting Panel -->
                        <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                            <div class="chat-sidebar-settings-list slimscroll-style">
                                <div class="chat-header">
                                    <h5 class="list-heading">Layout Settings</h5>
                                </div>
                                <div class="chatpane inner-content ">
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Position</div>
                                            <div class="setting-set">
                                                <select
                                                    class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Header</div>
                                            <div class="setting-set">
                                                <select
                                                    class="page-header-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Footer</div>
                                            <div class="setting-set">
                                                <select
                                                    class="page-footer-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">Account Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Notifications</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-1">
                                                        <input type="checkbox" id="switch-1" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Show Online</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-7">
                                                        <input type="checkbox" id="switch-7" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Status</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-2">
                                                        <input type="checkbox" id="switch-2" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">2 Steps Verification</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-3">
                                                        <input type="checkbox" id="switch-3" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">General Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Location</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-4">
                                                        <input type="checkbox" id="switch-4" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Save Histry</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-5">
                                                        <input type="checkbox" id="switch-5" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Auto Updates</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-6">
                                                        <input type="checkbox" id="switch-6" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
@endsection