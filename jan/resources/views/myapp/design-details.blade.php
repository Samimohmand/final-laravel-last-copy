<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">
  <link rel="stylesheet" href="{{asset('/asset/css/paymentpage.css')}}">
  <!-- <link rel="stylesheet" href="asset/css/paymentpage.css"> -->
  <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.4.0-web/css/all.css">
</head>
<body>
    @include("myapp.layouts.header")
    <section id="all-section">
        <!-- ==========all  section profile =============== -->
    <div id="profile-container">
      
      <h1 id="titl">i Will design your best map  </h1>
      
      <div class="image-profile-name">
        <img src="asset/image/profile.png.png" alt="">
        <h4>samikhan </h4>
      </div>
    </div>
        <!-- ==========all  section main container =============== -->
    <div id="main-container">
        <!-- ==========main container left side bor =============== -->
        <div id="left-side-content">
     
            <div class="main-div-of-slider">

              <div id="slider-container">
               

              @foreach($gig as $gig)
            
               <iframe id="featured" src="/product/{{$gig->video }}" frameborder="0"></iframe>
           @endforeach  
                <div id="slider-wrapper">
                  <img src="asset/image/left.png.png" id="slidLeft" class="arrow">
                  
                  <div id="slider">
                    @foreach($image as $image)
                    <img src="/images/{{$image->image}}" class="thumbnail active" alt=""> 
                    @endforeach
                  
                  </div>
               
                  <img src="asset/image/right.png.png" id="slidRight" class="arrow">
                </div>
              </div>
         
            </div>
          <section class="review-section">
            <div class="container ">
              <h1>What People Love About this Frelancer</h1>
              <div class="wrapper">
                <div class="card">
                  <div class="card-thumb">
                    <img src="asset/image/profile.png.png" class="client-img" alt="">
                    <!-- <span class="client-name">client one</span> -->
                  </div>
                  <div class="card-body">
                    <p class="review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam. Fugiat, ut provident.
                      Nulla quibusdam labore ea est consequatur sequi fuga iusto laudantium, earum doloremque?</p>
                      <div class="star-rating" data-rating="4.5">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-thumb">
                    <img src="asset/image/profile.png.png" class="client-img" alt="">
                    <!-- <span class="client-name">client two</span> -->
                  </div>
                  <div class="card-body">
                    <p class="review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam. Fugiat, ut provident.
                      Nulla quibusdam labore ea est consequatur sequi fuga iusto laudantium, earum doloremque?</p>
                      <div class="star-rating" data-rating="4.5">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-thumb">
                    <img src="asset/image/profile.png.png" class="client-img" alt="">
                    <span class="client-name">client three</span>
                  </div>
                  <div class="card-body">
                    <p class="review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, nam. Fugiat, ut provident.
                      Nulla quibusdam labore ea est consequatur sequi fuga iusto laudantium, earum doloremque?</p>
                      <div class="star-rating" data-rating="4.5">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="indicators">
                <button class="active"></button>
                <button></button>
                <button></button>
              </div>
            </div>
          </section>
          <section id="about-gig">
            <h1>About design </h1>
         
            <p>{{$gig->add_information}}</p>
          
          </section>
          <div id="line-break"> </div>
          <section id="waiting-section">
            <h2>Why are you waiting? please ping me before placing an order.</h2>
            <div id="wiating-container">
            <div class="waiting-div">
              <u>My Skills Expertise:</u>
              <ul >
                <li>Spatial Awareness</li>
                <li>Creativity</li>
                <li>Technical Proficiency</li>
                <li>Collaboration</li>
                <li>Structural Understanding</li>
                <li>Attention to Detail</li>
                <li>Communication Skills</li>
                <li>Project Management</li>
              </ul>
            </div>
            <div class="waiting-div">
              <u>Services you'll get?</u>
              <ul >
                <li>Architectural Design</li>
                <li>Structural Engineering</li>
                <li>Construction Documentation</li>
                <li>Sustainable Design</li>
                <li>Forensic Engineering</li>
              </ul>
            </div>
            <div class="waiting-div">
              <u>Software I used:</u>
              <ul >
               <li>AutoCAD</li>
               <li>Revit</li>
               <li>SketchUp</li>
               <li>Lumion</li>
              </ul>
            </div>
          </div>
          </section>
        </div>

           <!-- ==========main container right side bor price=============== -->
        <div id="right-side-content">
          <section id="price-section">
            <div class="price-div">
              <div class="pricing">
                  <div class="plan popular">
                    <!-- <span>Most Popular</span> -->
                    <h2>Price</h2>
                    <div class="price">$10</div>
                      <ul class="features">
                        <li><i class="fas fa-check-circle"></i> Detail Design</li>
                        <li><i class="fas fa-check-circle"></i> Clear </li>
                        <li><i class="fas fa-check-circle"></i> 1 design</li>
                        <li><i class="fas fa-check-circle"></i> Continuous deployment</li>
                        <li><i class="fas fa-check-circle"></i> Email Support</li>
                      </ul>
                      <button>Order</button>
                  </div>
              </div>
            </div>
          </section>
        </div>
    </div>
  </section>
  @include("myapp.layouts.footer")
  <script src="asset/javascript/engineer.js"></script>
  
  <script src="asset/javascript/profile.js"> </script>
  <script src="asset/javascript/profile_drop.js"></script>
  <script src="asset/javascript/main.js"></script>
</body>
</html>