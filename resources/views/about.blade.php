@extends('layouts.app')

@section('pagetitle', 'About')

@section('hero')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('tagline')
	<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/about.jpg')}});">
					<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
						<span class="icon-play"></span>
					</a>
				</div>
				<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
			<div class="heading-section-bold mb-4 mt-md-5">
			<div class="ml-md-0">
				<h2 class="mb-4">Better Way to Ship Your Products</h2>
			</div>
			</div>
			<div class="pb-md-5">
						<p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
						<div class="row ftco-services">
					<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-002-recommended"></span>
						</div>
						<div class="media-body">
						<h3 class="heading">Refund Policy</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						</div>
					</div>      
					</div>
					<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-001-box"></span>
						</div>
						<div class="media-body">
						<h3 class="heading">Premium Packaging</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						</div>
					</div>    
					</div>
					<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-003-medal"></span>
						</div>
						<div class="media-body">
						<h3 class="heading">Superior Quality</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						</div>
					</div>      
					</div>
				</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('counter')
	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('images/bg_4.jpg')}});">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
@endsection

@section('testimonials')
	<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('images/person_2.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('images/person_3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('newsletter')
	<hr>

    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Subcribe to our Newsletter</h2>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-8">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection