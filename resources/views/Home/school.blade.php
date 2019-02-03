<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unica - University Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Unica University Template">
    <meta name="keywords" content="event, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/themify-icons.css"/>
    <link rel="stylesheet" href="/css/magnific-popup.css"/>
    <link rel="stylesheet" href="/css/animate.css"/>
    <link rel="stylesheet" href="/css/owl.carousel.css"/>
    <link rel="stylesheet" href="/css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- header section -->
<header class="header-section">
    <div class="container">
        <!-- logo -->
        <a href="index.html" class="site-logo"><img src="/img/logo.png" alt=""></a>
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div class="header-info">
            <div class="hf-item">
                <p>دبیرستان {{$name}}</p>
            </div>
            <div class="hf-item">
                <i class="fa fa-clock-o"></i>
                <p><span>ساعات کاری:</span>شنبه - چهارشنبه: 7 صبح تا 2 بعد از ظهر</p>
            </div>
            <div class="hf-item">
                <i class="fa fa-map-marker"></i>
                @foreach($addresses as $address)
                <p><span>آدرس:</span>{{$address->city}}-{{$address->street}}-{{$address->province}}</p>
                @endforeach
            </div>
        </div>
    </div>
</header>
<!-- header section end-->


<!-- Header section  -->
<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            <a href=""><i class="fa fa-search"></i></a>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
        </div>
        <ul class="main-menu">
            <li class="active"><a href="#">خانه</a></li>
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">رویدادها</a></li>
            <li><a href="/home/{{$name}}/classroom">کلاس ها</a></li>
            <li><a href="/home/{{$name}}/student">دانش آموزان</a></li>
            <li><a href="/home/{{$name}}/teacher">اساتید</a></li>
            <li><a href="#">ارتباط با ما</a></li>
        </ul>
    </div>
</nav>
<!-- Header section end -->


<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="/img/hero-slider/1.jpg">
            <div class="hs-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hs-subtitle">امکانات مجموعه آموزشی</div>
                            <h2 class="hs-title">سرمایه گذاری روی  دانش بیشترین علاقه مندی را ایجاد میکند.</h2>
                            <p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
                            <div class="site-btn">شروع کنید</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="/img/hero-slider/2.jpg">
            <div class="hs-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hs-subtitle">Award Winning UNIVERSITY</div>
                            <h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
                            <p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
                            <div class="site-btn">GET STARTED</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- Counter section  -->
<section class="counter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="big-icon">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <div class="counter-content">
                    <h2>NEXT COUSRE: Sales & Marketing Alignment</h2>
                    <p><i class="fa fa-calendar-o"></i>07:00 PM - 09:00 PM</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="counter">
                    <div class="counter-item"><h4>20</h4>Days</div>
                    <div class="counter-item"><h4>08</h4>Hrs</div>
                    <div class="counter-item"><h4>40</h4>Mins</div>
                    <div class="counter-item"><h4>56</h4>secs</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter section end -->


<!-- Services section -->
<section class="service-section spad">
    <div class="container services">
        <div class="section-title text-center">
            <h3>امکانات ما</h3>
            <p>ما این فرصت را برای شما فراهم میکنیم تا برای زندگی آماده شوید.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="/img/services-icons/1.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>استودیوی نقاشی</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="/img/services-icons/2.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>امکانات کامل</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="/img/services-icons/3.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>مجتمع ورزشی</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="/img/services-icons/4.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>کاملا واجد شرایط</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="/img/services-icons/5.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>برنامه ریزی  انعظاف پذیر</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="/img/services-icons/6.png" alt="1">
                </div>
                <div class="service-content">
                    <h4>آزمایشگاه شیمی</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section end -->


<!-- Enroll section -->
<section class="enroll-section spad set-bg" data-setbg="img/enroll-bg.jpg">
    <div class="container">
        <div class="row">

            <div class="col-lg-5">
                <div class="section-title text-white">
                    <h3>نام نویسی</h3>
                    <p>با ما شروع کن تا هیجان را درک کنی</p>
                </div>
                <div class="enroll-list text-white">
                    <div class="enroll-list-item">
                        <span>1</span>
                        <h5>ارتباط با ما</h5>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                    </div>
                    <div class="enroll-list-item">
                        <span>2</span>
                        <h5>مشاوره</h5>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                    </div>
                    <div class="enroll-list-item">
                        <span>3</span>
                        <h5>ثبت نام</h5>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                <img src="/img/encroll-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Enroll section end -->


<!-- Courses section -->
<section class="courses-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>دوره های ما</h3>
            <p>ساختن دنیایی بهتر، یک دوره در هر زمان</p>
        </div>
        <div class="row">
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="/img/course/1.jpg" alt="">
                    <div class="course-cat">
                        <span>کسب و کار</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>Certificate Course in Writing<br>for a Global Market</h4>
                    <h4 class="cource-price">$100<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="/img/course/2.jpg" alt="">
                    <div class="course-cat">
                        <span>بازاریابی</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>Google AdWords: Get More<br> Customers with Search Marketing </h4>
                    <h4 class="cource-price">$150<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="/img/course/3.jpg" alt="">
                    <div class="course-cat">
                        <span>طراحی</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>The Ultimate Drawing Course<br> Beginner to Advanced</h4>
                    <h4 class="cource-price">$180<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="/img/course/4.jpg" alt="">
                    <div class="course-cat">
                        <span>پایگاه داده</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</h4>
                    <h4 class="cource-price">$150<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="/img/course/5.jpg" alt="">
                    <div class="course-cat">
                        <span>برنامه نویسی</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>دوره تکمیلی طراحی وب<br>ساختن برنامه‌های تحت وب</h4>
                    <h4 class="cource-price">$250<span>/month</span></h4>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="/img/course/6.jpg" alt="">
                    <div class="course-cat">
                        <span>تحلیل داده</span>
                    </div>
                </div>
                <div class="course-info">
                    <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                    <h4>How to Start an Amazon<br>FBA Store on a Tight Budget</h4>
                    <h4 class="cource-price">$150<span>/month</span></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses section end-->


<!-- Fact section -->
<section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-crown"></i>
                </div>
                <div class="fact-text">
                    <h2>50</h2>
                    <p>سال</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-briefcase"></i>
                </div>
                <div class="fact-text">
                    <h2>80</h2>
                    <p>دوره</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-user"></i>
                </div>
                <div class="fact-text">
                    <h2>500</h2>
                    <p>دانش‌آموز</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-pencil-alt"></i>
                </div>
                <div class="fact-text">
                    <h2>800+</h2>
                    <p>درس</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fact section end-->


<!-- Event section -->
<section class="event-section spad">
    <div class="container">
        <div class="section-title text-center event-title">
            <h3>رویدادهای ما</h3>
            <p>دپارتمان ما یک سری از رویدادها را آغاز می‌کند.</p>
        </div>
        <div class="row">
            <div class="col-md-6 event-item">
                <div class="event-thumb">
                    <img src="/img/event/1.jpg" alt="">
                    <div class="event-date">
                        <span>24 Mar 2018</span>
                    </div>
                </div>
                <div class="event-info">
                    <h4>بایدها و نبایدها برای نوشتن پروپوزال<br>statement for languages</h4>
                    <p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
                    <a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 event-item">
                <div class="event-thumb">
                    <img src="/img/event/2.jpg" alt="">
                    <div class="event-date">
                        <span>22 Mar 2018</span>
                    </div>
                </div>
                <div class="event-info">
                    <h4>نکات مربوط به مصاحبه دانشگاه :<br>confidence won't make up for flannel</h4>
                    <p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
                    <a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event section end -->


<!-- Gallery section -->
<div class="gallery-section">
    <div class="gallery">
        <div class="grid-sizer"></div>
        <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/1.jpg">
            <a class="img-popup" href="/img/gallery/1.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/2.jpg">
            <a class="img-popup" href="/img/gallery/2.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
            <a class="img-popup" href="/img/gallery/3.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/5.jpg">
            <a class="img-popup" href="/img/gallery/5.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/8.jpg">
            <a class="img-popup" href="/img/gallery/8.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/4.jpg">
            <a class="img-popup" href="/img/gallery/4.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="img/gallery/6.jpg">
            <a class="img-popup" href="/img/gallery/6.jpg"><i class="ti-plus"></i></a>
        </div>
        <div class="gallery-item set-bg" data-setbg="/img/gallery/7.jpg">
            <a class="img-popup" href="/img/gallery/7.jpg"><i class="ti-plus"></i></a>
        </div>
    </div>
</div>
<!-- Gallery section -->


<!-- Blog section -->
<section class="blog-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>آخرین اخبار</h3>
            <p>دریافت آخرین اخبار & بهترین داستان‌‌های امروز</p>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="blog-item">
                    <div class="blog-thumb set-bg" data-setbg="/img/blog/1.jpg"></div>
                    <div class="blog-content">
                        <h4>Parents who try to be their children’s best friends</h4>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                            <span><i class="fa fa-user"></i> Owen Wilson</span>
                        </div>
                        <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="blog-item">
                    <div class="blog-thumb set-bg" data-setbg="/img/blog/2.jpg"></div>
                    <div class="blog-content">
                        <h4>Graduations could be delayed as external examiners</h4>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
                            <span><i class="fa fa-user"></i> Owen Wilson</span>
                        </div>
                        <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="blog-item">
                    <div class="blog-thumb set-bg" data-setbg="/img/blog/3.jpg"></div>
                    <div class="blog-content">
                        <h4>Private schools adopt a Ucas style application system</h4>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                            <span><i class="fa fa-user"></i> Owen Wilson</span>
                        </div>
                        <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="blog-item">
                    <div class="blog-thumb set-bg" data-setbg="/img/blog/4.jpg"></div>
                    <div class="blog-content">
                        <h4>Cambridge digs in at the top of university league table</h4>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
                            <span><i class="fa fa-user"></i> Owen Wilson</span>
                        </div>
                        <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog section -->


<!-- Newsletter section -->
<section class="newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-7">
                <div class="section-title mb-md-0">
                    <h3>مجله خبری</h3>
                    <p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
                </div>
            </div>
            <div class="col-md-7 col-lg-5">
                <form class="newsletter">
                    <input type="text" placeholder="ایمیل خود را وارد کنید">
                    <button class="site-btn">دنبال کردن</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter section end -->


<!-- Footer section -->
<footer class="footer-section">
    <div class="container footer-top">
        <div class="row">
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <div class="about-widget">
                    <img src="/img/logo-light.png" alt="">
                    <p>orem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</p>
                    <div class="social pt-1">
                        <a href=""><i class="fa fa-twitter-square"></i></a>
                        <a href=""><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-google-plus-square"></i></a>
                        <a href=""><i class="fa fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-rss-square"></i></a>
                    </div>
                </div>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">USEFUL LINK</h6>
                <div class="dobule-link">
                    <ul>
                        <li><a href="">خانه</a></li>
                        <li><a href="">درباره ما</a></li>
                        <li><a href="">امکانات</a></li>
                        <li><a href="">رویدادها</a></li>
                        <li><a href="">امکانات</a></li>
                    </ul>
                    <ul>
                        <li><a href="">قوانین</a></li>
                        <li><a href="">شرایط</a></li>
                        <li><a href="">راهنمایی</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">نقشه سایت</a></li>
                    </ul>
                </div>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">آخرین مقالات</h6>
                <ul class="recent-post">
                    <li>
                        <p>Snackable study:How to break <br> up your master's degree</p>
                        <span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
                    </li>
                    <li>
                        <p>Open University plans major <br> cuts to number of staff</p>
                        <span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
                    </li>
                </ul>
            </div>
            <!-- widget -->
            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">ارتباط با ما</h6>
                <ul class="contact">
                    <li><p><i class="fa fa-map-marker"></i> 40 Baria Street 133/2, NewYork City,US</p></li>
                    <li><p><i class="fa fa-phone"></i> (+88) 111 555 666</p></li>
                    <li><p><i class="fa fa-envelope"></i> infodeercreative@gmail.com</p></li>
                    <li><p><i class="fa fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://zilouchian.org" target="_blank">TechnoTeam</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</footer>
<!-- Footer section end-->



<!--====== Javascripts & Jquery ======-->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.countdown.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>