@extends('layouts.master')

@section('title', 'Contact')

@section('content')

	<!-- Title Page -->
<!-- 	<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
		<div class="bg1-overlay t-center p-t-170 p-b-165">
			<h2 class="tit4 t-center">
				Contact Us
			</h2>
		</div>
	</div> -->
	<!-- Slide1 -->
	<section class="section-slide">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro-01.jpg);">

			<h2 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Contact Us
			</h2>
		</div>
	</section>

	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-60 p-b-80">
		<br/>
		<div class="container t-center">
		<span class="tit21 t-center">
			Contact us about anything related to our company or services. We'll do our best to get back to you as soon as possible. 
		</span>
		</div>
		<br>
		<br>
		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-60">
				Send us a Message
			</h3>

			<form class="wrap-form-reservation size22 m-l-r-auto">
				<div class="row">
					<div class="col-md-4">
						<!-- Name -->
						<span class="txt9">
							Name
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Your Name">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Phone -->
						<span class="txt9">
							Phone
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone Number">
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9">
							Message
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Send
					</button>
				</div>
			</form>

			<div class="row p-t-135">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

							<span class="txt23 size38">
								Jalan Kebon Jeruk 19 <p></p>
								10130 Jakarta - Petojo Utara
								Jakarta - Indonesia
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

							<span class="txt23 size38">
								(+1) 96 716 6879
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/mail.png" width="25px" height="25px" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Email
							</span>

							<span class="txt23 size38">
								<!-- 09:30 AM – 11:00 PM <br/>Every Day -->
								wiratama_cemerlang@gmail.com
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection