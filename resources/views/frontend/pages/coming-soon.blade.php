@extends('frontend.layouts.app')
@section('content')

        <!-- Start Coming Soon Area -->
        <div class="coming-soon-area">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="coming-soon-content">
							<h1>Coming Soon</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>

							<div id="timer">
								<div id="days"></div>
								<div id="hours"></div>
								<div id="minutes"></div>
								<div id="seconds"></div>
							</div>
							
							<form class="newsletter-form" data-toggle="validator">
								<input type="email" class="input-newsletter" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
			
								<button type="submit" class="default-btn btn-bg-three">
									Notify Me
								</button>
								<div id="validator-newsletter" class="form-result"></div>
							</form> 

							<ul class="header-content-right">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-pinterest-alt"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- End Coming Soon Area -->

@endsection