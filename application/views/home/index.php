<?php 
$this->load->view('template/header');
?>


<!-- Slider 1 Area Start Here -->               
<div class="slider1-area">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">   
            <img src="<?php echo $assert_path; ?>img/slider/slide2-1.jpg" alt="slider" title="#slider-direction-1"/>
            <img src="<?php echo $assert_path; ?>img/slider/slide2-2.jpg" alt="slider" title="#slider-direction-2"/>
            <img src="<?php echo $assert_path; ?>img/slider/slide2-3.jpg" alt="slider" title="#slider-direction-3"/>
        </div>
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="title-container s-tb-c">
                    <h1 class="title1">Delicious Beef Shawarma</h1>
                    <p>Dorem Ipsum is simply dummy of the printing and typesetting 's standard dummy when.</p>
                    <div class="slider-btn-area">
                        <a href="#" class="ghost-btn">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-2" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-2">
                 <div class="title-container s-tb-c">
                    <h1 class="title1">Grilled Shawarma Sandwiches </h1>
                    <p>Dorem Ipsum is simply dummy of the printing and typesetting 's standard dummy when.</p>
                    <div class="slider-btn-area">
                        <a href="#" class="ghost-btn">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-3" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-3">
                 <div class="title-container s-tb-c">
                    <h1 class="title1">Leeds <span>Red</span> Chilli Restaurant</h1>
                    <p>Dorem Ipsum is simply dummy of the printing and typesetting 's standard dummy when.</p>
                    <div class="slider-btn-area">
                        <a href="#" class="ghost-btn">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
<!-- Slider 1 Area End Here -->
<!-- Table Reservation 2 Area Start Here -->
<div class="table-reservation2-area">
    <div class="container">                    
        <div class="table-reservation2-inner">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="table-reservation2-left wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="reservation-form2"> 
                        <span>Take A</span>
                        <h2>RESERVATION</h2>
                        <form id="reservation-form">                                        
                            <div class="reservation-input-box">
                                <input type="text" class="form-control" placeholder="Name" name="name" id="form-name" data-error="Subject field is required" required />
                            </div>
                            <div class="reservation-input-box">
                                <input type="text" class="form-control" placeholder="E-mail" name="email" id="form-subject" data-error="Subject field is required" required/>
                            </div>
                            <div class="reservation-input-box">
                                <input type="text" class="form-control" placeholder="Phone" name="phone" id="form-phone" data-error="Subject field is required" required/>
                            </div>
                            <div class="reservation-input-box">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input type="text" class="form-control rt-date" placeholder="Date" name="date" id="form-date" data-error="Subject field is required" required/>
                            </div>
                            <div class="reservation-input-box">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <input type="text" class="form-control rt-time" placeholder="Time" name="time" id="form-time" data-error="Subject field is required" required/>
                            </div>
                             <div class="reservation-input-box">
                                <textarea class="form-control" placeholder="Message" name="message" rows="2" id="form-message" data-error="Message field is required" required></textarea>
                            </div>
                            <button type="submit" class="book-now-btn">Book A Table</button>
                            <div class='form-response'></div>
                        </form>                                 
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                 <div class="table-reservation2-right"> 
                    <h2>MArk Willy</h2>
                    <p><span>Head Chef</span></p>
                    <p>Rorem ipsum dolor sit amet, consectetur adipisicing elitsed eiusmod tempor incididunt.</p> 
                    <img src="<?php echo $assert_path; ?>img/signature.png" class="img-responsive" alt="signature">
                     <div class="reservation2-banner"> 
                        <img src="<?php echo $assert_path; ?>img/reservation-banner.png" class="img-responsive" alt="reservation-banner"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table Reservation 2 Area End Here -->
<!-- Special Dish Area Start Here -->
<div class="special-dish-area">
    <div class="container">
        <h2 class="title">Special Dishes Today</h2>
        <span class="subtitle-color">Let’s Discover Food</span>
        <div class="row">
            <div class="rc-carousel"
                data-loop="true"
                data-items="4"
                data-margin="15"
                data-autoplay="true"
                data-autoplay-timeout="10000"
                data-smart-speed="2000"
                data-dots="false"
                data-nav="true"
                data-nav-speed="false"
                data-r-x-small="1"
                data-r-x-small-nav="false"
                data-r-x-small-dots="true"
                data-r-x-medium="1"
                data-r-x-medium-nav="false"
                data-r-x-medium-dots="true"
                data-r-small="3"
                data-r-small-nav="true"
                data-r-small-dots="false"
                data-r-medium="4"
                data-r-medium-nav="true"
                data-r-medium-dots="false">                        
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
                <div class="special-dish-box">
                    <span>$20</span>
                    <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/dish/1.png" alt="dish"></a>
                    <h3 class="title-small title-bar-small-center"><a href="#">Menu Title Here</a></h3>
                    <p>A cup of tea brings to you serene beauty stant plantations.</p>
                    <a href="#" class="ghost-semi-color-btn">Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Special Dish Area End Here -->
<!-- Tasty Menu Area Start Here -->
<div class="tasty-menu-area">
    <div class="container">   
        <div class="row">
        <h2 class="title">Tasty Menu Today</h2>
        <span class="subtitle">Chef Selection</span>                 
            <div class="tasty-menu-inner">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3 class="inner-sub-title title-bar-full-width">Lunch Menu</h3>
                    <ul>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$12</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$12</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$12</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$12</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$12</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3 class="inner-sub-title title-bar-full-width">Dinner Menu</h3>
                    <ul>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$20</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$20</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$20</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$20</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/dish/2.png" alt="client" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Menu Title Here</a></h4>
                                    <p>We create, make and serve fresho </p>  
                                    <span>$20</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tasty Menu Area End Here -->
<!-- Expert Chefs Area Start Here -->
<div class="expert-chefs-area">
    <img class="img-responsive section-back" src="<?php echo $assert_path; ?>img/team/section-back.png" alt="Sestion Back">
    <div class="container">
        <h2 class="title-color">Our Expert Chefs</h2>
        <span class="subtitle-color">Professional Cook Team</span>
        <div class="rc-carousel"
            data-loop="true"
            data-items="3"
            data-margin="30"
            data-autoplay="true"
            data-autoplay-timeout="10000"
            data-smart-speed="2000"
            data-dots="false"
            data-nav="true"
            data-nav-speed="false"
            data-r-x-small="2"
            data-r-x-small-nav="false"
            data-r-x-small-dots="true"
            data-r-x-medium="2"
            data-r-x-medium-nav="false"
            data-r-x-medium-dots="true"
            data-r-small="2"
            data-r-small-nav="true"
            data-r-small-dots="false"
            data-r-medium="3"
            data-r-medium-nav="true"
            data-r-medium-dots="false">                    
            <div class="expert-chefs-box">
                <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/team/1.jpg" alt="team"></a>
                <div class="expert-chefs-box-content">
                    <span></span>
                    <h3><a href="#">Richard Mark</a></h3>
                    <p>Fish Chef</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
             <div class="expert-chefs-box">
                <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/team/2.jpg" alt="team"></a>
                <div class="expert-chefs-box-content">
                    <span></span>
                    <h3><a href="#">Laizy Pauel</a></h3>
                    <p>Taste Checker</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
             <div class="expert-chefs-box">
                <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/team/3.jpg" alt="team"></a>
                <div class="expert-chefs-box-content">
                    <span></span>
                    <h3><a href="#">Mark Li</a></h3>
                    <p>Waiter</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
             <div class="expert-chefs-box">
                <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/team/1.jpg" alt="team"></a>
                <div class="expert-chefs-box-content">
                    <span></span>
                    <h3><a href="#">Richard Mark</a></h3>
                    <p>Fish Chef</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
             <div class="expert-chefs-box">
                <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/team/2.jpg" alt="team"></a>
                <div class="expert-chefs-box-content">
                    <span></span>
                    <h3><a href="#">Laizy Pauel</a></h3>
                    <p>Taste Checker</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
             <div class="expert-chefs-box">
                <a href="#"><img class="img-responsive" src="<?php echo $assert_path; ?>img/team/3.jpg" alt="team"></a>
                <div class="expert-chefs-box-content">
                    <span></span>
                    <h3><a href="#">Mark Li</a></h3>
                    <p>Waiter</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Expert Chefs Area End Here -->
<!-- Award Area Start Here -->
<div class="award1-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="award1-area-box">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                    <h2 class="about-counter" data-num="5030">5030</h2>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="award1-area-box">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <h2 class="about-counter" data-num="2030">2030</h2>
                    <p>Love People</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="award1-area-box">
                    <i class="fa fa-coffee" aria-hidden="true"></i>
                    <h2 class="about-counter" data-num="3030">3030</h2>
                    <p>Cup Of Coffee</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="award1-area-box">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <h2 class="about-counter" data-num="5030">5030</h2>
                    <p>Chef Recipes</p>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Award Area End Here -->
<!-- Recipe of the day 2 Area Start Here -->
<div class="recipe-of-the-day2-area">
    <img src="<?php echo $assert_path; ?>img/recipe-of-the-day2-banner.png" class="img-responsive section-back" alt="recipe-of-the-day2-banner">
    <div class="container">
        <h2 class="title-color">Recipe Of The Day</h2>
        <span class="subtitle-color">Chef Unique Recipes</span>                    
        <div class="rc-carousel"
            data-loop="true"
            data-items="3"
            data-margin="30"
            data-autoplay="false"
            data-autoplay-timeout="10000"
            data-smart-speed="2000"
            data-dots="false"
            data-nav="true"
            data-nav-speed="false"
            data-r-x-small="1"
            data-r-x-small-nav="false"
            data-r-x-small-dots="true"
            data-r-x-medium="2"
            data-r-x-medium-nav="false"
            data-r-x-medium-dots="true"
            data-r-small="2"
            data-r-small-nav="true"
            data-r-small-dots="false"
            data-r-medium="3"
            data-r-medium-nav="true"
            data-r-medium-dots="false">                    
            <div class="recipe-box2">
                <ul class="recipe-box2-social">
                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                </ul>                               
                <div class="recipe-box2-img-holder">                                   
                    <a href="#"><img src="<?php echo $assert_path; ?>img/recipe-box2-1.jpg" alt="Recipe" class="img-responsive"></a>
                </div>
                <div class="recipe-box2-bottom-content-holder">
                    <h3><a href="#">Recipe Title Here</a></h3>
                    <p>A wonderful serenity has taken ossession of my entire souls terenity.</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>20 Mins</span></a></li>
                        <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>05 People</span></a></li>
                    </ul> 
                </div>
            </div>
            <div class="recipe-box2">
                <ul class="recipe-box2-social">
                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                </ul>                               
                <div class="recipe-box2-img-holder">                                   
                    <a href="#"><img src="<?php echo $assert_path; ?>img/recipe-box2-2.jpg" alt="Recipe" class="img-responsive"></a>
                </div>
                <div class="recipe-box2-bottom-content-holder">
                    <h3><a href="#">Recipe Title Here</a></h3>
                    <p>A wonderful serenity has taken ossession of my entire souls terenity.</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>20 Mins</span></a></li>
                        <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>05 People</span></a></li>
                    </ul> 
                </div>
            </div>
            <div class="recipe-box2">
                <ul class="recipe-box2-social">
                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                </ul>                               
                <div class="recipe-box2-img-holder">                                   
                    <a href="#"><img src="<?php echo $assert_path; ?>img/recipe-box2-3.jpg" alt="Recipe" class="img-responsive"></a>
                </div>
                <div class="recipe-box2-bottom-content-holder">
                    <h3><a href="#">Recipe Title Here</a></h3>
                    <p>A wonderful serenity has taken ossession of my entire souls terenity.</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>20 Mins</span></a></li>
                        <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>05 People</span></a></li>
                    </ul> 
                </div>
            </div>
            <div class="recipe-box2">
                <ul class="recipe-box2-social">
                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                </ul>                               
                <div class="recipe-box2-img-holder">                                   
                    <a href="#"><img src="<?php echo $assert_path; ?>img/recipe-box2-1.jpg" alt="Recipe" class="img-responsive"></a>
                </div>
                <div class="recipe-box2-bottom-content-holder">
                    <h3><a href="#">Recipe Title Here</a></h3>
                    <p>A wonderful serenity has taken ossession of my entire souls terenity.</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>20 Mins</span></a></li>
                        <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>05 People</span></a></li>
                    </ul> 
                </div>
            </div>
            <div class="recipe-box2">
                <ul class="recipe-box2-social">
                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                </ul>                               
                <div class="recipe-box2-img-holder">                                   
                    <a href="#"><img src="<?php echo $assert_path; ?>img/recipe-box2-2.jpg" alt="Recipe" class="img-responsive"></a>
                </div>
                <div class="recipe-box2-bottom-content-holder">
                    <h3><a href="#">Recipe Title Here</a></h3>
                    <p>A wonderful serenity has taken ossession of my entire souls terenity.</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Time: <span>20 Mins</span></a></li>
                        <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Serving: <span>05 People</span></a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recipe of the day 2 Area End Here -->
<!-- Client Reviews Area Start Here -->
<div class="client-reviews-area">
    <div class="container-fluid">
        <div class="row products-container">
            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                <div class="client-reviews-left">
                    <img class="img-responsive" src="<?php echo $assert_path; ?>img/client/left-back.jpg" alt="client">    
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                <div class="client-reviews-right">
                    <h2>Client Reviews</h2>
                    <p>What Client Say</p>
                    <div class="rc-carousel"
                        data-loop="true"
                        data-items="3"
                        data-margin="30"
                        data-autoplay="false"
                        data-autoplay-timeout="10000"
                        data-smart-speed="2000"
                        data-dots="false"
                        data-nav="false"
                        data-nav-speed="false"
                        data-r-x-small="1"
                        data-r-x-small-nav="false"
                        data-r-x-small-dots="true"
                        data-r-x-medium="1"
                        data-r-x-medium-nav="false"
                        data-r-x-medium-dots="true"
                        data-r-small="1"
                        data-r-small-nav="false"
                        data-r-small-dots="true"
                        data-r-medium="1"
                        data-r-medium-nav="false"
                        data-r-medium-dots="true">
                        <ul>
                            <li>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="<?php echo $assert_path; ?>img/client/1.png" alt="client" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Daina Rose</a></h3>
                                        <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                                        <ul class="rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="<?php echo $assert_path; ?>img/client/2.png" alt="client" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Daina Rose</a></h3>
                                        <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                                        <ul class="rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul> 
                        <ul>
                            <li>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="<?php echo $assert_path; ?>img/client/1.png" alt="client" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Daina Rose</a></h3>
                                        <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                                        <ul class="rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="<?php echo $assert_path; ?>img/client/3.png" alt="client" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Daina Rose</a></h3>
                                        <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                                        <ul class="rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="<?php echo $assert_path; ?>img/client/2.png" alt="client" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Daina Rose</a></h3>
                                        <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                                        <ul class="rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="<?php echo $assert_path; ?>img/client/3.png" alt="client" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Daina Rose</a></h3>
                                        <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                                        <ul class="rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>      
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client Reviews Area End Here -->
<!-- Brand Area Start Here -->
<div class="brand-area">
    <img class="img-responsive section-back" src="<?php echo $assert_path; ?>img/brand/back-logo.png" alt="back-logo">
    <div class="container">
        <div class="row">                         
            <div class="rc-carousel"
                data-loop="true"
                data-items="6"
                data-margin="15"
                data-autoplay="true"
                data-autoplay-timeout="10000"
                data-smart-speed="2000"
                data-dots="false"
                data-nav="true"
                data-nav-speed="false"
                data-r-x-small="2"
                data-r-x-small-nav="false"
                data-r-x-small-dots="true"
                data-r-x-medium="3"
                data-r-x-medium-nav="false"
                data-r-x-medium-dots="true"
                data-r-small="4"
                data-r-small-nav="true"
                data-r-small-dots="false"
                data-r-medium="6"
                data-r-medium-nav="true"
                data-r-medium-dots="false"> 
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/1.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/2.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/3.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/4.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/5.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/6.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/7.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/8.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/9.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/10.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/1.png" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo $assert_path; ?>img/brand/2.png" alt="brand"></a>
                </div>
            </div>  
        </div>  
    </div>  
</div>  
<!-- Brand Area End Here -->
<!-- Footer Area Start Here -->
<footer>
    <div class="footer-area-top section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">About Cafe</h3>
                        <div class="footer-about">
                            <p>We aim to home-produce as much as possiblefor the best quality, and to reduce food mcious cakes, traditional Devon soups, sauces and accompanimentsion.We aim to home-produce as much as possiblefor the best quality, and to reduce food mcious cakes.</p>
                        </div>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">Blog Posts</h3>
                        <div class="footer-blog-post">
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/footer-blog1.jpg" alt="footer-blog" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Beef Burger Daily Special Foods That</a></h4>
                                    <p>20 Aug, 2016</p>
                                </div>
                            </div>
                        </div>
                         <div class="footer-blog-post">
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/footer-blog2.jpg" alt="footer-blog" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Beef Burger Daily Special Foods That</a></h4>
                                    <p>20 Aug, 2016</p>
                                </div>
                            </div>
                        </div>
                         <div class="footer-blog-post">
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img src="<?php echo $assert_path; ?>img/footer-blog3.jpg" alt="footer-blog" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h4><a href="#">Beef Burger Daily Special Foods That</a></h4>
                                    <p>20 Aug, 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">Opening Hours</h3>
                        <ul class="opening-schedule">
                            <li>Monday<span> 5pm - 11pm</span></li>
                            <li>Tuesday<span> 5pm - 11pm</span></li>
                            <li>Wednesday <span> Closed</span></li>
                            <li>Thursday<span> 5pm - Midnight</span></li>
                            <li>Friday<span> 4:30pm - Midnight</span></li>
                            <li>Saturday <span> 5pm - 11pm</span></li>
                            <li>Sunday<span> 5pm - 11pm</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <p>&copy; 2016 RedChili All Rights Reserved. &nbsp; Designed by<a target="_blank" href="http://radiustheme.com"> RadiusTheme</a>.com</p>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
</div>



<?php 
$this->load->view('template/footer');
?>