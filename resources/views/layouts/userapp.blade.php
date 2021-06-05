<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>WorkWise Html Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/line-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/line-awesome-font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/jquery.mCustomScrollbar.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/lib/slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/lib/slick/slick-theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/responsive.css') }}">
        </head>
        <body>


            <div class="wrapper">



                <header>
                    <div class="container">
                        <div class="header-data">
                            <div class="logo">
                                <a href="index.html" title=""><img src="images/logo.png" alt=""></a>
                            </div><!--logo end-->
                            <div class="search-bar">
                                <form>
                                    <input type="text" name="search" placeholder="Search...">
                                    <button type="submit"><i class="la la-search"></i></button>
                                </form>
                            </div><!--search-bar end-->
                            <nav>
                                <ul>
                                    <li>
                                        <a href="index.html" title="">
                                            <span><img src="images/icon1.png" alt=""></span>
                                            Page d'acceuil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="companies.html" title="">
                                            <span><img src="images/icon2.png" alt=""></span>
                                            Les entreprises
                                        </a>
                                        <ul>
                                            <li><a href="companies.html" title="">entreprises</a></li>
                                            <li><a href="company-profile.html" title="">Profiles des companies</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="projects.html" title="">
                                            <span><img src="images/icon3.png" alt=""></span>
                                            Projets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profiles.html" title="">
                                            <span><img src="images/icon4.png" alt=""></span>
                                            Profiles
                                        </a>
                                        <ul>
                                            <li><a href="user-profile.html" title="">Profiles des utilisateurs</a></li>
                                            <li><a href="my-profile-feed.html" title="">Mon profile</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="jobs.html" title="">
                                            <span><img src="images/icon5.png" alt=""></span>
                                            Travails
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="" class="not-box-open">
                                            <span><img src="images/icon6.png" alt=""></span>
                                            Messages
                                        </a>
                                        <div class="notification-box msg">
                                            <div class="nt-title">
                                                <h4>Paramétres</h4>
                                                <a href="#" title="">Effacer tout</a>
                                            </div>
                                            <div class="nott-list">
                                                <div class="notfication-details">
                                                      <div class="noty-user-img">
                                                          <img src="images/resources/ny-img1.png" alt="">
                                                      </div>
                                                      <div class="notification-info">
                                                          <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                                          <span>il ya 2 minutes</span>
                                                      </div><!--notification-info -->
                                                  </div>
                                                  <div class="notfication-details">
                                                      <div class="noty-user-img">
                                                          <img src="images/resources/ny-img2.png" alt="">
                                                      </div>
                                                      <div class="notification-info">
                                                          <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                          <p>Lorem ipsum dolor sit amet.</p>
                                                          <span>il ya 2 minutes</span>
                                                      </div><!--notification-info -->
                                                  </div>
                                                  <div class="notfication-details">
                                                      <div class="noty-user-img">
                                                          <img src="images/resources/ny-img3.png" alt="">
                                                      </div>
                                                      <div class="notification-info">
                                                          <h3><a href="messages.html" title="">Jassica William</a></h3>
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                                          <span>il ya 2 minutes</span>
                                                      </div><!--notification-info -->
                                                  </div>
                                                  <div class="view-all-nots">
                                                      <a href="messages.html" title="">Voir tous les messages</a>
                                                  </div>
                                            </div><!--nott-list end-->
                                        </div><!--notification-box end-->
                                    </li>
                                    <li>
                                        <a href="#" title="" class="not-box-open">
                                            <span><img src="images/icon7.png" alt=""></span>
                                            Notification
                                        </a>
                                        <div class="notification-box">
                                            <div class="nt-title">
                                                <h4>Setting</h4>
                                                <a href="#" title="">Effacer tous</a>
                                            </div>
                                            <div class="nott-list">
                                                <div class="notfication-details">
                                                      <div class="noty-user-img">
                                                          <img src="images/resources/ny-img1.png" alt="">
                                                      </div>
                                                      <div class="notification-info">
                                                          <h3><a href="#" title="">Jassica William</a> Commenter dans ton projet</h3>
                                                          <span>il ya 2 minutes</span>
                                                      </div><!--notification-info -->
                                                  </div>
                                                  <div class="notfication-details">
                                                      <div class="noty-user-img">
                                                          <img src="images/resources/ny-img2.png" alt="">
                                                      </div>
                                                      <div class="notification-info">
                                                          <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                          <span>2 min ago</span>
                                                      </div><!--notification-info -->
                                                  </div>
                                                  <div class="notfication-details">
                                                      <div class="noty-user-img">
                                                          <img src="images/resources/ny-img3.png" alt="">
                                                      </div>
                                                      <div class="notification-info">
                                                          <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                          <span>2 min ago</span>
                                                      </div><!--notification-info -->
                                                  </div>
                                                  <div class="notfication-details">
                                                      <div class="noty-user-img">
                                                          <img src="images/resources/ny-img2.png" alt="">
                                                      </div>
                                                      <div class="notification-info">
                                                          <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                          <span>2 min ago</span>
                                                      </div><!--notification-info -->
                                                  </div>
                                                  <div class="view-all-nots">
                                                      <a href="#" title="">Voir toutes les Notifications</a>
                                                  </div>
                                            </div><!--nott-list end-->
                                        </div><!--notification-box end-->
                                    </li>
                                </ul>
                            </nav><!--nav end-->
                            <div class="menu-btn">
                                <a href="#" title=""><i class="fa fa-bars"></i></a>
                            </div><!--menu-btn end-->
                            <div class="user-account">
                                <div class="user-info">
                                    <img src="images/118839270_3478783138855213_4671282241847192183_n.jpg" style="height: 32px;" alt="">
                                    <a href="#" title="">Hedi</a>
                                    <i class="la la-sort-down"></i>
                                </div>
                                <div class="user-account-settingss">
                                    <h3>Statut en ligne</h3>
                                    <ul class="on-off-status">
                                        <li>
                                            <div class="fgt-sec">
                                                <input type="radio" name="cc" id="c5">
                                                <label for="c5">
                                                    <span></span>
                                                </label>
                                                <small>En ligne</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="fgt-sec">
                                                <input type="radio" name="cc" id="c6">
                                                <label for="c6">
                                                    <span></span>
                                                </label>
                                                <small>Hors ligne</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3>Custom Status</h3>
                                    <div class="search_form">
                                        <form>
                                            <input type="text" name="search">
                                            <button type="submit">Ok</button>
                                        </form>
                                    </div><!--search_form end-->
                                    <h3>Setting</h3>
                                    <ul class="us-links">
                                        <li><a href="profile-account-setting.html" title="">Paramétres du compte</a></li>
                                        <li><a href="#" title="">Intimité</a></li>
                                        <li><a href="#" title="">FAQ</a></li>
                                        <li><a href="#" title="">Conditions d'utilisation </a></li>
                                    </ul>
                                    <h3 class="tc"><a href="sign-in.html" title="">Déconnexion</a></h3>
                                </div><!--user-account-settingss end-->
                            </div>
                        </div><!--header-data end-->
                    </div>
                </header><!--header end-->

                                    <main>
                                        @yield('content')
                                    </main>




                <div class="post-popup pst-pj">
                    <div class="post-project">
                        <h3>Post a project</h3>
                        <div class="post-project-fields">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="title" placeholder="Title">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="inp-field">
                                            <select>
                                                <option>Category</option>
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                                <option>Category 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="skills" placeholder="Skills">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="price-sec">
                                            <div class="price-br">
                                                <input type="text" name="price1" placeholder="Price">
                                                <i class="la la-dollar"></i>
                                            </div>
                                            <span>To</span>
                                            <div class="price-br">
                                                <input type="text" name="price1" placeholder="Price">
                                                <i class="la la-dollar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="description" placeholder="Description"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <ul>
                                            <li><button class="active" type="submit" value="post">Post</button></li>
                                            <li><a href="#" title="">Cancel</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!--post-project-fields end-->
                        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                    </div><!--post-project end-->
                </div><!--post-project-popup end-->

                <div class="post-popup job_post">
                    <div class="post-project">
                        <h3>Post a job</h3>
                        <div class="post-project-fields">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="title" placeholder="Title">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="inp-field">
                                            <select>
                                                <option>Category</option>
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                                <option>Category 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="skills" placeholder="Skills">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="price-br">
                                            <input type="text" name="price1" placeholder="Price">
                                            <i class="la la-dollar"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="inp-field">
                                            <select>
                                                <option>Full Time</option>
                                                <option>Half time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="description" placeholder="Description"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <ul>
                                            <li><button class="active" type="submit" value="post">Post</button></li>
                                            <li><a href="#" title="">Cancel</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!--post-project-fields end-->
                        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                    </div><!--post-project end-->
                </div><!--post-project-popup end-->



                <div class="chatbox-list">
                    <div class="chatbox">
                        <div class="chat-mg">
                            <a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a>
                            <span>2</span>
                        </div>
                        <div class="conversation-box">
                            <div class="con-title mg-3">
                                <div class="chat-user-info">
                                    <img src="http://via.placeholder.com/34x33" alt="">
                                    <h3>John Doe <span class="status-info"></span></h3>
                                </div>
                                <div class="st-icons">
                                    <a href="#" title=""><i class="la la-cog"></i></a>
                                    <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                                    <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                                </div>
                            </div>
                            <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                                <div class="chat-msg">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                    <span>Sat, Aug 23, 1:10 PM</span>
                                </div>
                                <div class="date-nd">
                                    <span>Sunday, August 24</span>
                                </div>
                                <div class="chat-msg st2">
                                    <p>Cras ultricies ligula.</p>
                                    <span>5 minutes ago</span>
                                </div>
                                <div class="chat-msg">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                    <span>Sat, Aug 23, 1:10 PM</span>
                                </div>
                            </div><!--chat-list end-->
                            <div class="typing-msg">
                                <form>
                                    <textarea placeholder="Type a message here"></textarea>
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </form>
                                <ul class="ft-options">
                                    <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                                    <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                                </ul>
                            </div><!--typing-msg end-->
                        </div><!--chat-history end-->
                    </div>
                    <div class="chatbox">
                        <div class="chat-mg">
                            <a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a>
                        </div>
                        <div class="conversation-box">
                            <div class="con-title mg-3">
                                <div class="chat-user-info">
                                    <img src="http://via.placeholder.com/34x33" alt="">
                                    <h3>John Doe <span class="status-info"></span></h3>
                                </div>
                                <div class="st-icons">
                                    <a href="#" title=""><i class="la la-cog"></i></a>
                                    <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                                    <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                                </div>
                            </div>
                            <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                                <div class="chat-msg">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                    <span>Sat, Aug 23, 1:10 PM</span>
                                </div>
                                <div class="date-nd">
                                    <span>Sunday, August 24</span>
                                </div>
                                <div class="chat-msg st2">
                                    <p>Cras ultricies ligula.</p>
                                    <span>5 minutes ago</span>
                                </div>
                                <div class="chat-msg">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                                    <span>Sat, Aug 23, 1:10 PM</span>
                                </div>
                            </div><!--chat-list end-->
                            <div class="typing-msg">
                                <form>
                                    <textarea placeholder="Type a message here"></textarea>
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </form>
                                <ul class="ft-options">
                                    <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                                    <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                                </ul>
                            </div><!--typing-msg end-->
                        </div><!--chat-history end-->
                    </div>
                    <div class="chatbox">
                        <div class="chat-mg bx">
                            <a href="#" title=""><img src="images/chat.png" alt=""></a>
                            <span>2</span>
                        </div>
                        <div class="conversation-box">
                            <div class="con-title">
                                <h3>Messages</h3>
                                <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                            </div>
                            <div class="chat-list">
                                <div class="conv-list active">
                                    <div class="usrr-pic">
                                        <img src="http://via.placeholder.com/50x50" alt="">
                                        <span class="active-status activee"></span>
                                    </div>
                                    <div class="usy-info">
                                        <h3>John Doe</h3>
                                        <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                                    </div>
                                    <div class="ct-time">
                                        <span>1:55 PM</span>
                                    </div>
                                    <span class="msg-numbers">2</span>
                                </div>
                                <div class="conv-list">
                                    <div class="usrr-pic">
                                        <img src="http://via.placeholder.com/50x50" alt="">
                                    </div>
                                    <div class="usy-info">
                                        <h3>John Doe</h3>
                                        <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                                    </div>
                                    <div class="ct-time">
                                        <span>11:39 PM</span>
                                    </div>
                                </div>
                                <div class="conv-list">
                                    <div class="usrr-pic">
                                        <img src="http://via.placeholder.com/50x50" alt="">
                                    </div>
                                    <div class="usy-info">
                                        <h3>John Doe</h3>
                                        <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                                    </div>
                                    <div class="ct-time">
                                        <span>0.28 AM</span>
                                    </div>
                                </div>
                            </div><!--chat-list end-->
                        </div><!--conversation-box end-->
                    </div>
                </div><!--chatbox-list end-->

            </div><!--theme-layout end-->


                <script type="text/javascript" src="{{ asset('assets/user/js/jquery.min.js') }}"defer></script>
                <script type="text/javascript" src="{{ asset('assets/user/js/popper.js') }}"defer></script>
                <script type="text/javascript" src="{{ asset('assets/user/js/bootstrap.min.js') }}"defer></script>
                <script type="text/javascript" src="{{ asset('assets/user/js/jquery.mCustomScrollbar.js') }}"defer></script>
                <script type="text/javascript" src="{{ asset('assets/user/lib/slick/slick.min.js') }}"defer></script>
                <script type="text/javascript" src="{{ asset('assets/user/}js/scrollbar.js') }}"defer></script>
                <script type="text/javascript" src="{{ asset('assets/user/js/script.js') }}"defer></script>

                </body>
                </html>
