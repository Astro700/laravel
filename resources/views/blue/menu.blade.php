@extends("layout.blue")

@section("title","menu | Html Theme Conversion ")



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

