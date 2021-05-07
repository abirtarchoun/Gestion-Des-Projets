@extends('layouts.app')
 @section('content')
	 

 
     <!-- Favicons -->
  <link href="{{ asset('img/favicon.png')}}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png')}}"  rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/templete.css') }}" rel="stylesheet">
  <link href="{{ asset('icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('animate.css/animate.min.css')}}"rel="stylesheet">-->
  <link href="{{ asset('aos/aos.css')}}" rel="stylesheet">
<div class="tab-content">
  <div class="tab-pane active fontawesome-demo" id="tab1">
	<div class="row">
		<div class="col-md-12">
		    <div class="table-scrollable">									
			     <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"	id="example4">
			            <thead>
					           <tr>
										<th> Picture</th>
										<th> First Name</th>
										<th> LastName</th>
										<th> Mobile </th>
										<th> Email </th>
										<th> Action </th>
										</tr>
										</thead>
										<tbody>
										<tr class="odd gradeX">
														<td class="patient-img">
												<img src="../assets/img/std/std1.jpg"alt="">
														</td>
															<td>Rajesh Bhatt</td>
															<td class="left">Mechanical</td>
															<td><a href="tel:4444565756">4444565756 </a></td>
																		
															<td><a href=""> abir@gmail.com </a></td>
																<td>
																<a href="edit_professor.html"
																class="btn btn-primary btn-xs">
																<i class="fa fa-pencil"></i>
																</a>
																<button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button>
																			</td>
					
																	</tr>
																	</tbody>
@endsection																	