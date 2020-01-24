@extends('layouts.app')

@section('pagetitle', 'Blog')

@section('hero')
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
				<div class="col-lg-8 ftco-animate">
					<div class="row">
						
						@foreach ($posts as $post)
							
						<div class="col-md-12 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex">
							<a href="{{route('blog.show', $post->slug)}}" class="block-20" style="background-image: url('{{Voyager::image($post->image)}}');">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3">
										<div><a href="#">{{$post->created_at->diffForHumans()}}</a></div>
										<div><a href="#">{{$post->user->name}}</a></div>
									</div>
									<h3 class="heading"><a href="#">{{$post->title}}</a></h3>
									<p>{!!$post->excerpt !!}</p>
									<p><a href="{{route('blog.show', $post->slug)}}" class="btn btn-primary py-2 px-3">Read more</a></p>
								</div>
							</div>
						</div>
						
						@endforeach
					
					</div>
				</div> <!-- .col-md-8 -->
				<div class="col-lg-4 sidebar ftco-animate">
					<div class="sidebar-box">
					<form action="#" class="search-form">
						<div class="form-group">
						<span class="icon ion-ios-search"></span>
						<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
						</div>
					</form>
					</div>
					<div class="sidebar-box ftco-animate">
						<h3 CLASS="heading">Categories</h3>
					<ul class="categories">
						<li><a href="#">Bags <span>(12)</span></a></li>
						<li><a href="#">Shoes <span>(22)</span></a></li>
						<li><a href="#">Dress <span>(37)</span></a></li>
						<li><a href="#">Accessories <span>(42)</span></a></li>
						<li><a href="#">Makeup <span>(14)</span></a></li>
						<li><a href="#">Beauty <span>(140)</span></a></li>
					</ul>
					</div>

					<div class="sidebar-box ftco-animate">
					<h3 CLASS="heading">Recent Blog</h3>
					<div class="block-21 mb-4 d-flex">
						<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
						<div class="text">
						<h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<div class="meta">
							<div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
							<div><a href="#"><span class="icon-person"></span> Admin</a></div>
							<div><a href="#"><span class="icon-chat"></span> 19</a></div>
						</div>
						</div>
					</div>
					<div class="block-21 mb-4 d-flex">
						<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
						<div class="text">
						<h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<div class="meta">
							<div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
							<div><a href="#"><span class="icon-person"></span> Admin</a></div>
							<div><a href="#"><span class="icon-chat"></span> 19</a></div>
						</div>
						</div>
					</div>
					<div class="block-21 mb-4 d-flex">
						<a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
						<div class="text">
						<h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<div class="meta">
							<div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
							<div><a href="#"><span class="icon-person"></span> Admin</a></div>
							<div><a href="#"><span class="icon-chat"></span> 19</a></div>
						</div>
						</div>
					</div>
					</div>

					<div class="sidebar-box ftco-animate">
					<h3 CLASS="heading">Tag Cloud</h3>
					<div class="tagcloud">
						<a href="#" class="tag-cloud-link">shop</a>
						<a href="#" class="tag-cloud-link">products</a>
						<a href="#" class="tag-cloud-link">shirt</a>
						<a href="#" class="tag-cloud-link">jeans</a>
						<a href="#" class="tag-cloud-link">shoes</a>
						<a href="#" class="tag-cloud-link">dress</a>
						<a href="#" class="tag-cloud-link">coats</a>
						<a href="#" class="tag-cloud-link">jumpsuits</a>
					</div>
					</div>

					<div class="sidebar-box ftco-animate">
					<h3 class="heading">Paragraph</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
					</div>
				</div>

        	</div>
      </div>
    </section> <!-- .section -->
@endsection