<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>مرجغ تخصصی برنامه نویسان</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/weblog/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/weblog/css/style.css" rel='stylesheet' type='text/css' />
<script src="/weblog/js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="/weblog/js/move-top.js"></script>
<script type="text/javascript" src="/weblog/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
	<!--script-->
	<script src="/weblog/js/modernizr.custom.97074.js"></script>
<script src="/weblog/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="/weblog/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
		<script type="text/javascript" src="/weblog/js/jquery.hoverdir.js"></script>
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<h style="font-size: 80px; ">{{$name}}    </h>
				<a href="#"><img src="/weblog/images/logo-1.png" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span>
				<ul class="navig">
					<li><a href="#" class="active">صفحه اصلی</a></li>
					<li><a href="/home/{{$name}}/about">درباره ما</a></li>
					<li><a href="/home/{{$name}}/gallery">گالری</a></li>
					<li><a href="/home/{{$name}}/classroom">کلاس ها</a></li>
					<li><a href="/home/{{$name}}/teacher">معلم ها</a></li>
					<li><a href="/home/{{$name}}/contact">تماس با ما</a></li>
				</ul>
			</div>
			<div class="header-left">
				<div class="search-bar">
					<input type="text" value="جستجو" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				@foreach($sliders as $slider)
					<img src="/weblog/images/{{$slider->pic}}" style="width: 100%;height:600px">
				@endforeach
				<div class="banner-text">
					<h2>

						لورم ایپسوم</h2>
					<h1>

						لورم ایپسوم یا طرح‌نما</h1>

					<div class="banner-btn">
						<a href="single.html">
							ادامه مطلب
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--welcome-starts-->
	<div class="welcome">
		<div class="container">
			<div class="welcome-top heading">
				<h3>خوش آمدید</h3>
				<div class="welcome-bottom">
					@foreach($schools as $school)
						<p>نام:{{$school->name}}</p>
						<p>تلفن:{{$school->phone}}</p>
					@endforeach
						@foreach($addresses as $address)
							<p>آدرس:{{$address->city}}-{{$address->province}}-{{$address->street}}</p>
						@endforeach
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>
				</div>
			</div>
		</div>
	</div>
	<!--welcome-end-->
	<!--team-starts-->
	<div class="team">
		<div class="container">
		<div class="team-top heading">
			<h3>معلم های ما</h3>
		</div>
			<div class="team-bottom">
				@foreach($teachers as $teacher)
					<div class="col-md-3 team-right">
						<img src="/weblog/images/t-4.jpg" alt="" />
						<h4>{{$teacher->user->name}}</h4>
						{{--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>--}}
					@endforeach
					@foreach($results as $result)
						<tr>
							<h>ایشان دارای سابقه علمی در درس</h>
							<td>{{ $result->name }}</td><br>
							<h>می باشند</h>
							{{--<td>{{ $result->teacher_name}}</td><br>--}}
							{{--<td>{{ $result->classroom_name }}</td>--}}
				@endforeach
					</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--team-end-->
	<!--slide-starts-->
	<div class="slide">
		<div class="container">
			<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="/weblog/images/s-1.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="/weblog/images/s-2.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>			
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="/weblog/images/s-3.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>		
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="/weblog/images/s-4.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>	
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="/weblog/images/s-5.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>	
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="/weblog/images/s-6.jpg" class="img-responsive" alt="">
						</div>
					</a>
				</li>				
			</ul>
							
							 <script type="text/javascript">
								$(window).load(function() {
									
									$("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
								</script>
								<script type="text/javascript" src="/weblog/js/jquery.flexisel.js"></script>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
			<p>

کپی رایت@2019 تمام حقوق مادی و معنوی این سایت متعلق به گروه ما میباشد
</p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>
