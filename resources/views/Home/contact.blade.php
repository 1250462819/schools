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
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<h style="font-size: 80px; ">{{$name}}    </h>
				<a href="index.html"><img src="/weblog/images/logo-1.png" alt="" /></a>
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
	<!----start-contact---->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>تماس با ما</h3>
			</div>
			<div class="contact-bottom">
				{{--<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d52923.18695937059!2d51.36627955803367!3d34.00025963859646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d33.9850358!2d51.4099625!4m5!1s0x3f969d6a3deb60a5%3A0x95e3a2cfcd892acb!2z2K_Yp9mG2LTar9in2Ycg2qnYp9i02KfZhuKArQ!3m2!1d34.0136234!2d51.366135899999996!5e0!3m2!1sen!2s!4v1549213426836" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
				<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d52923.18695937059!2d51.36627955803367!3d34.00025963859646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d33.9850358!2d51.4099625!4m5!1s0x3f969d6a3deb60a5%3A0x95e3a2cfcd892acb!2z2K_Yp9mG2LTar9in2Ycg2qnYp9i02KfZhuKArQ!3m2!1d34.0136234!2d51.366135899999996!5e0!3m2!1sen!2s!4v1549213426836" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d52923.18695937059!2d51.36627955803367!3d34.00025963859646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d33.9850358!2d51.4099625!4m5!1s0x3f969d6a3deb60a5%3A0x95e3a2cfcd892acb!2z2K_Yp9mG2LTar9in2Ycg2qnYp9i02KfZhuKArQ!3m2!1d34.0136234!2d51.366135899999996!5e0!3m2!1sen!2s!4v1549213426836" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="contact-text">
					<div class="col-md-4 contact-right">
						<h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h4>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
						<div class="address">
							<h4>آدرس</h4>
							<p>مرجع تخصصی برنامه نویسان
							<span>تهران- شریعتی</span>
							خیابان ملک کوچه ایرانیاد</p>
						</div>
					</div>	
					<div class="col-md-8 contact-left">
						<input placeholder="نام" type="text" required>
						<input placeholder="ایمیل" type="text" required>
						<textarea placeholder="پیام" required></textarea>
							<div class="submit-btn">
								<form>
									<input type="submit" value="ارسال">
								</form>
							</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!----end-contact---->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
			<p>

کپی رایت@2015 تمام حقوق مادی و معنوی این سایت متعلق به گروه برنامه نویسان میباشد
<a href="http://www.barnamenevisan.org/" target="_blank">مرجع تخصصی برنامه نویسان</a> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>
