<html>
   <head>
       <title> Job Portal </title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
       <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">  

       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
        
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
       
       <link rel="Ajax" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
       <link rel="icons" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="script" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">

       <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
       <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
       <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
       <script>
           $(document).ready(function() {

$('.owl-carousel').owlCarousel({
mouseDrag:false,
loop:true,
margin:2,
nav:true,
responsive:{
0:{
items:1
},
600:{
items:1
},
1000:{
items:3
}
}
});

$('.owl-prev').click(function() {
$active = $('.owl-item .item.show');
$('.owl-item .item.show').removeClass('show');
$('.owl-item .item').removeClass('next');
$('.owl-item .item').removeClass('prev');
$active.addClass('next');
if($active.is('.first')) {
$('.owl-item .last').addClass('show');
$('.first').addClass('next');
$('.owl-item .last').parent().prev().children('.item').addClass('prev');
}
else {
$active.parent().prev().children('.item').addClass('show');
if($active.parent().prev().children('.item').is('.first')) {
$('.owl-item .last').addClass('prev');
}
else {
$('.owl-item .show').parent().prev().children('.item').addClass('prev');
}
}
});

$('.owl-next').click(function() {
$active = $('.owl-item .item.show');
$('.owl-item .item.show').removeClass('show');
$('.owl-item .item').removeClass('next');
$('.owl-item .item').removeClass('prev');
$active.addClass('prev');
if($active.is('.last')) {
$('.owl-item .first').addClass('show');
$('.owl-item .first').parent().next().children('.item').addClass('prev');
}
else {
$active.parent().next().children('.item').addClass('show');
if($active.parent().next().children('.item').is('.last')) {
$('.owl-item .first').addClass('next');
}
else {
$('.owl-item .show').parent().next().children('.item').addClass('next');
}
}
});

});
       </script>
    </head>
   <body>
       <!-- Top Section Start -->
       <div class="banner">
           <!-- Navbar Section start  -->
           <div class="container">
               <nav class="navbar navbar-expand-md sticky-top">
                  <a class="navbar-brand" href="#">< Codesoftic ></a>  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                     <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                      <ul class="navbar-nav " >
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">About</a>
                                 <a class="dropdown-item" href="#">Contact Us</a>
                                 <a class="dropdown-item" href="#">Updates | FAQ</a>
                                 <a class="dropdown-item" href="#">Signup</a>
                               </div>
                          </li>
                          <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Jobs</a>
                               <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">About</a>
                                  <a class="dropdown-item" href="#">Contact Us</a>
                                  <a class="dropdown-item" href="#">Updates | FAQ</a>
                                  <a class="dropdown-item" href="#">Signup</a>
                               </div>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Career Tips</a>
                          </li>
                          <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Company</a>
                               <div class="dropdown-menu">
                                   <a class="dropdown-item" href="#">About</a>
                                   <a class="dropdown-item" href="#">Contact Us</a>
                                   <a class="dropdown-item" href="#">Updates | FAQ</a>
                                   <a class="dropdown-item" href="#">Signup</a>
                               </div>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Blog</a>
                          </li>
                          <li class="nav-item">   
                               <a class="nav-link" href="#">Updates | FAQ</a>
                          </li>
                          <li class="nav-item new-item">   
                              <a class="nav-link" href="#"><i class="fa fa-user"></i> Signup | Login</a>
                          </li>
                      </ul>
                  </div>
                  <ul class="navbar-nav "   id="collapsibleNavbar">
                      <li class="nav-item  signup-item"  >   
                          <div >
                              <a class="" href="#"> <i class="fa fa-user"></i> Signup | Login</a>
                          </div> 
                      </li>
                  </ul>
              </nav>
           </div>
           <!-- Navbar Section start  -->

           <!-- Banner Section Start -->
            <div class="container-fluid banner-sec mt-3 pb-5">
                <div class="row">
                    <div class="col-md-12">
                       <div class="banner-text text-left pb-5">
                         <h1 class="text-white pb-2">We Help you to achive your dream Employe and Employer </h1>
                         <p class="mt-5 text-white pb-5">Search your dream jobs by locations, jobs by skills, jobs by role, international jobs, part-time jobs, walk-in-jobs, freelancer jobs, non-technical jobs.......</p>
                           <!-- <div class="input-button pt-2 pb-5 mb-5" >
                              <div class="input-group">
                                 <input type="text" class="form-control" placeholder=" Enter Your working Email">
                                 <span class="input-group-btn">
                                     <button class="btn btn-success btn-color" type="button">Subscribe</button>
                                 </span>
                              </div>
                           </div> -->
                           <div class="input-button pt-2 pb-2 mb-4 pl-2 pr-2 bg-white"  style="">
                        <div class="input-group bg-white">
                            <!-- <i class="fas fa-envelope"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>    
                            </svg>
                            <input type="text" class="form-control subscribe-input " placeholder=" Enter Your working Email">
                            <span class="input-group-btn ml-1">
                                <button class="btn btn-success btn-color" type="button">Subscribe</button>
                            </span>
                        </div>
                    </div>
                       </div>
                    </div>
                </div>
            </div>  
            <!-- Banner Section Start -->
      </div> 
      <!-- Top Section Ends --> 

      <!-- Employers Section start -->
      <div class="container-fluid mt-5">
           <div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
               <div class="testimonial_095_header">
                  <h1 class="employers-title">Top Employers of your choice</h1>
               </div> 
               <ol class="carousel-indicators" >
                   <li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
                   <li data-target="#testimonial_095" data-slide-to="1"></li>
                   <li data-target="#testimonial_095" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner" role="listbox">
                   <!-- First Slide -->
                   <div class="carousel-item active">
                       <div class="row pt-4">
                           <div class="col-md-2 mt-3">
                               <img src="images/logo1.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt-3">
                               <img src="images/logo2.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt4">
                               <img src="images/logo4.png" alt="" class="img-fluid mt-4">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo5.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                           </div>
                       </div>
                   </div>
                   <!-- End of First Slide -->
                   <!-- Second Slide -->
                   <div class="carousel-item">
                       <div class="row pt-4">
                           <div class="col-md-2 mt-3">
                              <img src="images/logo1.png" alt="" class="img-fluid">
                           </div>
                            <div class="col-md-2 mt-3">
                               <img src="images/logo2.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt4">
                               <img src="images/logo4.png" alt="" class="img-fluid mt-4">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo5.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                           </div>
                       </div>
                   </div> 
                   <!-- End of Second Slide -->

                   <!-- Third Slide -->
                   <div class="carousel-item">
                       <div class="row pt-4">
                           <div class="col-md-2 mt-3">
                               <img src="images/logo1.png" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-2 mt-3">
                               <img src="images/logo2.png" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-2 mt4">
                               <img src="images/logo4.png" alt="" class="img-fluid mt-4">
                          </div>
                          <div class="col-md-2 mt-4">
                               <img src="images/logo5.png" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                          </div>
                       </div>    
                  </div> 
                  <!-- End of Third Slide -->
              </div>
          </div>
      </div>
      <!-- Employers Section Ends -->

      <!-- notification section start -->
        <div class="container notification-container mt-5">
          <div class="row notification">
              <div  class=" col-md-12 notification-text" style="color:#ffffff;">
                    <h1 class='mt-5 pt-1 mb-5'>Subscribe for New Updates</h1>
                    <div class="input-button pt-2 pb-5 mb-4"  style="">
                        <div class="input-group subscribe-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>    
                            </svg>
                            <input type="text" class="form-control subscribe-input " placeholder=" Enter Your working Email">
                            <span class="input-group-btn ml-1">
                                <button class="btn btn-success btn-color" type="button">Subscribe</button>
                            </span>
                        </div>
                    </div>
              </div>
           </div>
        </div>
      <!-- notification section start -->

      <!-- Recent Jobs Section  Start -->
      <!-- <div class="container-fluid mt-5 pl-2 pr-2">
           <div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
               <div class="testimonial_095_header">
                  <h1 class="employers-title">Recent Jobs</h1>
               </div> 
               <ol class="carousel-indicators mt-5" style="bottom:1px!important;" >
                   <li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
                   <li data-target="#testimonial_095" data-slide-to="1"></li>
                   <li data-target="#testimonial_095" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner" role="listbox">
                  
                   <div class="carousel-item active">
                       <div class="row pt-4 ">
                           <div class="col-md-4 mt-3 " >
                               <div class="pl-2 pr-2" style="border:1px solid black">
                                   <h5 class="text-color">IT (Software Developer)</h5>
                                   <h6 class="mb-5 ">React Developer</h6>
                                   <p ><span class="text-color"> Company : </span>Codesoftic Tech PVT LTD.</p>
                                   <p><span class="text-color"> Experiance : </span>2 - 4 Years</p>
                                   <p><span class="text-color"> Location : </span>Mohali</p>
                               </div>
                           </div>
                           <div class="col-md-4 mt-3 " >
                               <div class="pl-2 pr-2" style="border:1px solid black">
                                   <h5 class="text-color">IT (Software Developer)</h5>
                                   <h6 class="mb-5 ">React Developer</h6>
                                   <p ><span class="text-color"> Company : </span>Codesoftic Tech PVT LTD.</p>
                                   <p><span class="text-color"> Experiance : </span>2 - 4 Years</p>
                                   <p><span class="text-color"> Location : </span>Mohali</p>
                               </div>
                           </div>
                           <div class="col-md-4 mt-3 " >
                               <div class="pl-2 pr-2" style="border:1px solid black">
                                   <h5 class="text-color">IT (Software Developer)</h5>
                                   <h6 class="mb-5 ">React Developer</h6>
                                   <p ><span class="text-color"> Company : </span>Codesoftic Tech PVT LTD.</p>
                                   <p><span class="text-color"> Experiance : </span>2 - 4 Years</p>
                                   <p><span class="text-color"> Location : </span>Mohali</p>
                               </div>
                           </div>
                           
                       </div>
                   </div>
                  
                   
                   <div class="carousel-item">
                       <div class="row pt-4">
                           <div class="col-md-2 mt-3">
                              <img src="images/logo1.png" alt="" class="img-fluid">
                           </div>
                            <div class="col-md-2 mt-3">
                               <img src="images/logo2.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt4">
                               <img src="images/logo4.png" alt="" class="img-fluid mt-4">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo5.png" alt="" class="img-fluid">
                           </div>
                           <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                           </div>
                       </div>
                   </div> 
                  

                   <div class="carousel-item">
                       <div class="row pt-4">
                           <div class="col-md-2 mt-3">
                               <img src="images/logo1.png" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-2 mt-3">
                               <img src="images/logo2.png" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-2 mt4">
                               <img src="images/logo4.png" alt="" class="img-fluid mt-4">
                          </div>
                          <div class="col-md-2 mt-4">
                               <img src="images/logo5.png" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-2 mt-4">
                               <img src="images/logo3.png" alt="" class="img-fluid">
                          </div>
                       </div>    
                  </div>  
              </div>
          </div>
      </div> -->
      <!-- Recent Jobs Section End -->


      <!-- Premium Service section Start -->
         <div class="container mt-5 text-center">
           <div class="row">
              <div class="col-md-12 mt-5">
                 <h1 class="text-center">Premium Service</h1>
              </div>
           </div>
           <div class="row mt-5">
              <div class="col-md-4 mt-4">
                   <div class="first-card">
                       <img src="images/bot.png" alt="" class="img-fluid">
                       <h5>Right Resume</h5>
                       <p class="pl-3 pr-3">Get the power of two in one and speed up for your job search.</p>
                    </div>
              </div>
              <div class="col-md-4 mt-4">
                   <div class="first-card">
                       <img src="images/socialmedia.png" alt="" class="img-fluid">
                       <h5>Right Resume</h5>
                       <p class="pl-3 pr-3">Get the power of two in one and speed up for your job search.</p>
                    </div>
              </div>
              <div class="col-md-4 mt-4">
                   <div class="first-card">
                       <img src="images/writer.png" alt="" class="img-fluid">
                       <h5>Right Resume</h5>
                       <p class="pl-3 pr-3">Get the power of two in one and speed up for your job search.</p>
                    </div>
              </div>
           </div>
           <div class="row mt-5">
              <div class='col-md-12 mt-3'>
                 <button class="services-button pt-2 pb-2 pr-5 pl-5">View &nbsp;All &nbsp;Services</button>
              </div>
           </div>
         </div>
      <!-- Premium Service Section End -->
     

      <!-- Review Section Start -->
      <div class=" mt-5 customer-review" id="customer-review-background">
            <div  id="testimonial_095" class="customer-review-background carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                <!-- Header of Slider -->
                <div class="testimonial_095_header testimonial_095_header-sec mb-5">
                    <h1 class="pt-5 pb-5">What Our Customers Say About Us</h1>
                    <hr style="width: 100%; margin-top:-30px!important; margin-bottom: 2px!important;">
                </div> <!-- /Header of Slider -->
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonial_095" data-slide-to="0" ></li>
                    <li data-target="#testimonial_095" data-slide-to="1"></li>
                    <li data-target="#testimonial_095" data-slide-to="2"></li>
                </ol> <!-- Wrapper For Slides -->
                <div class="carousel-inner mt-5" role="listbox">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <!-- Text Layer -->
                        <div class="row ">
                            <div class="col-md-6 mb-3">
                                <div class="card review-card"   >
                                    <div class="quote " style=" border-radius: 10px;">
                                        <blockquote>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                                            </p>
                                            <hr style="width: 100%; margin-top:2px!important; margin-bottom: 2px!important;">
                                        </blockquote>                        
                                    </div>
                                    <div class="quote-footer text-right mt-4">
                                        <div class="quote-author-img">
                                            <img class='mrl-2' src="images/testimonials.png" alt="">
                                        </div>
                                        <h4 class="mt-4">Anetasia melinda</h4>
                                        <p>
                                            <strong>Content Writer</strong>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card review-card"   >
                                    <div class="quote " style=" border-radius: 10px;">
                                        <blockquote>
                                            <p>
                                                With this site I can easily manage not only one but six social networks simultaneously. This means I don't have to login or even open my other social accounts.
                                            </p>
                                            <hr style="width: 100%; margin-top:2px!important; margin-bottom: 2px!important;">
                                        </blockquote>                        
                                    </div>
                                    <div class="quote-footer text-right mt-4">
                                        <div class="quote-author-img">
                                            <img class='mrl-2' src="images/user.jpg" alt="">
                                        </div>
                                        <h4 class="mt-4"> Andrew Anthone</h4>
                                        <p>
                                            <strong>Content Writer</strong>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                        <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of First Slide -->
                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <!-- Text Layer -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card review-card"   >
                                    <div class="quote " style=" border-radius: 10px;">
                                        <blockquote>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                                            </p>
                                            <hr style="width: 100%; margin-top:2px!important; margin-bottom: 2px!important;">
                                        </blockquote>                  
                                    </div>
                                    <div class="quote-footer text-right mt-4">
                                        <div class="quote-author-img">
                                            <img class='mrl-2' src="images/testimonials.png" alt="">
                                        </div>
                                        <h4 class="mt-4">Anetasia melinda</h4>
                                        <p>
                                            <strong>Content Writer</strong>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card review-card"   >
                                    <div class="quote " style=" border-radius: 10px;">
                                        <blockquote>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                                            </p>
                                            <hr style="width: 100%; margin-top:2px!important; margin-bottom: 2px!important;">
                                        </blockquote>                        
                                    </div>
                                    <div class="quote-footer text-right mt-4">
                                        <div class="quote-author-img">
                                            <img class='mrl-2' src="images/testimonials.png" alt="">
                                        </div>
                                        <h4 class="mt-4">Anetasia melinda</h4>
                                        <p>
                                            <strong>Content Writer</strong>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div>   <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of Second Slide -->
                    <!-- Third Slide -->
                    <div class="carousel-item">
                        <!-- Text Layer -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card review-card"   >
                                    <div class="quote " style=" border-radius: 10px;">
                                        <blockquote>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                                            </p>
                                            <hr style="width: 100%; margin-top:2px!important; margin-bottom: 2px!important;">
                                        </blockquote>                        
                                    </div>
                                    <div class="quote-footer text-right mt-4">
                                        <div class="quote-author-img">
                                            <img class='mrl-2' src="images/testimonials.png" alt="">
                                        </div>
                                        <h4 class="mt-4">Anetasia melinda</h4>
                                        <p>
                                            <strong>Content Writer</strong>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card review-card">
                                    <div class="quote " style=" border-radius: 10px;">
                                        <blockquote>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                                            </p>
                                            <hr style="width: 100%; margin-top:2px!important; margin-bottom: 2px!important;">
                                        </blockquote>                        
                                    </div>
                                    <div class="quote-footer text-right mt-4">
                                        <div class="quote-author-img">
                                            <img class='mrl-2' src="images/testimonials.png" alt="">
                                        </div>
                                        <h4 class="mt-4">Anetasia melinda</h4>
                                        <p>
                                            <strong>Content Writer</strong>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                         <!-- /Text Layer -->
                    </div> <!-- /item -->
                    <!-- End of Third Slide -->
                </div> <!-- End of Wrapper For Slides -->

                <div class="row mt-5" style="text-align: center;">
                  <div class="col-md-12">
                     <div class="testimonials_buttons mb-5">
                        <button class="getstart-button-sec  pt-1 pb-1 pr-3 pl-3 mt-3 ">See All Reviws <i class="fa fa-angle-right ml-4"></i></button>
                     </div>
                   </div>
                </div>
                <!-- Left Control --> 
                <!-- <a class="carousel-control-prev " href="#testimonial_095" data-slide="prev"> <span class="fa fa-chevron-left" padding></span> </a>  -->
                <!-- Right Control --> 
                <!-- <a class="carousel-control-next" href="#testimonial_095" data-slide="next"> <span class="fa fa-chevron-right"></span> </a> -->
            
            </div> <!-- End Paradise Slider -->
        </div>  
          <!-- Customer Reviews Section Ends --> 
      <!-- Review Section End -->




      <!-- Search Section Start -->
         <div class="container mt-5">
              <div class="row mt-5">
                   <div class="col-md-12 mt-5 mb-5">
                      <div class="search-heading">
                          <h1 class='text-center'>Search</h1>
                      </div>
                   </div>
              </div>
              <div class="row search-sec-row">
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By Skills</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By location</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By role</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By Industry</button>
                           </div>  
                      </div>
                 </div> 
              </div>
              <div class="row search-sec-row">
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By Skills</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By location</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By role</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By Industry</button>
                           </div>  
                      </div>
                 </div> 
              </div>
              <div class="row search-sec-row">
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By Skills</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By location</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By role</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By Industry</button>
                           </div>  
                      </div>
                 </div> 
              </div>
              <div class="row search-sec-row">
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By Skills</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By location</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By role</button>
                           </div>  
                      </div>
                 </div>
                 <div class="col-md-3">
                      <div class="search options">
                           <div class="search-section mb-5">
                               <button class=" pt-2 pb-2 pr-4 pl-4 mt-3 ">Jobs By Industry</button>
                           </div>  
                      </div>
                 </div> 
              </div>
         </div>
      <!-- search Section End -->




    <!-- <div class="container-fluid px-3 px-sm-5 my-5 text-center  review-section">
      <h1 class="mb-5 font-weight-bold text-white pt-5">What Our Customers Are Say About Us</h1>
      <div class="owl-carousel owl-theme">
        <div class="item first prev">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="https://i.imgur.com/gazoShk.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">Marielle Haag</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item show">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="https://i.imgur.com/oW8Wpwi.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">Ximena Vegara</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item next">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="https://i.imgur.com/ndQx2Rg.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">John Paul</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item last">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="https://i.imgur.com/T5aOhwh.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">William Doe</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
    </div>
   </div> -->

   <!-- Footer Section Start -->
   <!-- Footer -->

<footer id="footer" class="footer wow fadeIn">
<div class="footer-bottom mb-5">
       <div class='container'>
           <div class="row">
               <div class="col-md-6 col-sm-12">
                   <div class="bottom-top">
                       <ul class="unorder-list-footer pt-2 ">
                           <li>
                               <a href="" ><img src="images/facebook.svg" alt="" class=""></a>
                               <a href="" ><img src="images/twitter.svg" alt="" class="ml-3"></a>
                               <a href=""><img src="images/Linkedin.svg" alt="" class="ml-3"></a>
                               <a href=""><img src="images/youtube.svg" alt="" class="ml-3"></a>
                               <a href=""><img src="images/instagram.svg" alt="" class="ml-3"></a>
                               <a href=""><img src="images/pinterest.svg" alt="" class="ml-3"></a>
                               <a href=""><img src="images/spotify.svg" alt="" class="ml-3 spotify"></a>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="col-md-6 col-sm-12 app-button-col"  >
                   <ul class="app-button"  >
                       <li >
                           <a href=""  ><img src="images/appstore.png" alt="" class=""></a>
                           <a href="" ><img src="images/googlestore.png" alt="" class=""></a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row ">
                <div class="co-md-12">
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4">
                 <!-- About Widget -->
                 <div class="single-widget about">
                        <!-- <h5>Office Location</h5> -->
                        
                        <ul class="list list-one">
                            <a href=""><img src="images/logoimage.png" alt="" class=" mb-3"></a>
                            <!-- <h6>Contact</h6> -->
                            <li><i class="fa fa-map-marker"></i> <br>Bestech Business Tower , Mohali, Punjab</li>
                            <!-- <li><i class="fa fa-headphones"></i>Phone: +91 8968711197</li> -->
                            <li><i class="fa fa-envelope"></i><br><a href="mailto:info@youremail.com">abctest@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i><br><a href="mailto:info@youremail.com">+91 9852136476</a></li>
                        </ul>	
                    </div>
                    <!--/ End About Widget -->
                   
                </div>
                
                <div class="col-lg-3 col-md-6 col-12 mt-4">
                    <!-- Twitter Widget -->
                    <div class="single-widget " >
                        <ul class="list">
                            <h5 class="mb-4">Company</h5>
                            <li class="mb-3"><a href="index.php">Home</a></li>
                            <li class="mb-3"><a href="#">Features</a></li>
                            <li class="mb-3"><a href="#">About Us</a></li>   
                            <li class="mb-3"><a href="#">Contact Us</a></li>
                            <li class="mb-3"><a href="#">Update Us</a></li>
                        </ul>
                    </div>
                    <!--/ End Twitter Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-4">
                     <!-- Links Widget -->
                     <div class="single-widget links" >
                        <!-- <h5>Quick Links</h5> -->
                        <ul class="list">
                            <h5 class="mb-4">Solutions</h5>
                            <li class="mb-3"><a href="index.html">Agent Assist Bot</a></li>
                            <li class="mb-3"><a href="services.html">Customer Engagement</a></li>
                            <li class="mb-3"><a href="about-us.html">Field Sales AI</a></li>   
                            <li class="mb-3"><a href="contact.html">Customer Support</a></li>
                            <li class="mb-3"><a href="contact.html">Lead Gen AI</a></li>
                        </ul>
                    </div>
                    <!--/ End Links Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 mt-4">
                    <!-- Links Widget -->
                    <div class="single-widget links" >
                        <!-- <h5>Resources</h5> -->
                        <ul class="list">
                            <h5 class="mb-4">Resources</h5>
                            <li class="mb-3"><a href="privacypolicy.html">Privacy Policy</a></li>
                            <li class="mb-3"><a href="terms.html">Terms of Services</a></li>
                            <li class="mb-3"><a href="disclaimer.html">Disclaimer</a></li>
                        </ul>
                    </div>
                    <!--/ End Links Widget -->
                </div>	
            </div>
        </div>
    </div>
    <div class="footer-bottom mt-5">
       <div class='container'>
           <div class="row">
               <div class="col-md-4 col-sm-12 footer-botttom-sec ">
                    <span>
                        <img src="images/envelope.png" alt="img-fluid">
                    </span>
                    &nbsp; codesoftic@gmail.com
               </div>
               <div class="col-md-4 col-sm-12 footer-botttom-sec ">
                    <span>
                        <img src="images/call.png" alt="img-fluid">
                    </span>
                    &nbsp; +91 9802136547
               </div>
               <div class="col-md-4 col-sm-12 footer-botttom-sec ">
                    <span>
                        <img src="images/location.png" alt="img-fluid">
                    </span>
                    &nbsp; Bestech Business Tower , Mohali, Punjab
               </div>
           </div>
       </div>
    </div>


    <!--/ End Footer Bottom -->
</footer>
   <!-- Footer Section End -->
   </body>
</html>