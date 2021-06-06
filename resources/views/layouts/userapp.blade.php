<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>WorkWise Html Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- icons -->
	<link href="{{asset('assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/line-awesome-font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/font-awesome.min.css') }}">


	<!--bootstrap -->
	<!-- data tables -->
	<link href="{{asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/plugins/flatpicker/css/flatpickr.min.css')}}" />

	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
	<!-- Theme Styles -->
	<link href="{{asset('assets/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/pages/formlayout.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/animate.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/jquery.mCustomScrollbar.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/lib/slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/lib/slick/slick-theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/style.css') }}">


	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/assets/smart/source/assets/img/favicon.ico" />
</head>
<!-- end head -->


        <body>


            <div class="wrapper">


                @include('layouts.navbar')

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
