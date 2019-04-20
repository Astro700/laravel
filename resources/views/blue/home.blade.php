@extends("layout.blue")

@section("title","Home Page | Html Theme Conversion ")

@section("home")
<section class="kt-hero-area" id="home">
        <div class="welcome-social-info">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="kt-hero-slides owl-carousel">
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/a1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>WELCOME!</h2>
                                <p>Make a reservation at your favourite table. </p>
                                <a href="#reservation" class="btn kt-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/b1.jpg);"></div>
            </div>
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/b1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>WELCOME!</h2>
                                <p>Make a reservation at your favourite table. </p>
                                <a href="#reservation" class="btn kt-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/a17.jpg);"></div>
            </div>
			 <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/a17.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>WELCOME!</h2>
                                <p>Make a reservation at your favourite table. </p>
                                <a href="#reservation" class="btn kt-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/d1.jpg);"></div>
            </div>
			 <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/d1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>WELCOME!</h2>
                                <p>Make a reservation at your favourite table. </p>
                                <a href="#reservation" class="btn kt-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/a1.jpg);"></div>
            </div>
        </div>
    </section>
@endsection

@section("menu")
<section class="kt-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Today's Special</h2>
                    </div>
                    <a href="menu.html" class="btn kt-btn"><span></span> View The Menu</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="kt-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/FireShot/pizza/c2.jpg" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Mushroom pizza</h6>
                            <p class="dish-price">45 ₹</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="kt-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="img/FireShot/pasta/b2.jpg" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Pasta</h6>
                            <p class="dish-price">45 ₹</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="kt-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/FireShot/burger/a2.jpg" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Chicken Burger </h6>
                            <p class="dish-price">45 ₹</p>
                        </div>
                    </div>
                </div>
				<div class="col-12 col-sm-6 col-md-4">
                    <div class="kt-single-dish wow fadeInUp" data-wow-delay="2.0s">
                        <img src="img/FireShot/biryani/a3.jpg" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">hyderabad chicken biryani </h6>
                            <p class="dish-price">120 ₹</p>
                        </div>
                    </div>
                </div>
				<div class="col-12 col-sm-6 col-md-4">
                    <div class="kt-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/FireShot/sandwitch/a4.jpg" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Chicken Sandwitch </h6>
                            <p class="dish-price">70 ₹</p>
                        </div>
                    </div>
                </div>
				<div class="col-12 col-sm-6 col-md-4">
                    <div class="kt-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/FireShot/ice-cream/a5.jpg" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Chocochips 500ml Family Pack</h6>
                            <p class="dish-price">45 ₹</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("reservation")
<section class="kt-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <h2>Reservation</h2>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="time" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="number" class="form-control" placeholder="Select Persons">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="col-12">
                            <textarea name="reservation-message" class="form-control" id="reservationMessage" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn kt-btn"><span></span> Reserve Your Desk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="img/bg-img/e1.jpg" alt="">
        </div>
    </section>
@endsection