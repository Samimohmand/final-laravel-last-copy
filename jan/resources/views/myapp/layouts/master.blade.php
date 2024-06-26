<!DOCTYPE html>
<html lang="en">
    @include("myapp.layouts.head")
<body>
<header>
        <div>
            <button class="btn1"><a   href="{{ route('login') }}">Login</a></button>
            <button class="btn1"><a  href="{{ url('register1') }}" >Sign up</a></button>
        </div>
    </header>

@include("myapp.layouts.header")



    <!-- heading section start here -->
    <section id="heading-section">
     
        <div id="text-body">
            <div class="text-animation">
                <h1 class="font-weight-bold">Engineering</h1>
            </div>
            <div class="text-animation">
                <span>
                    <h1 class="font-weight-bold">Your Best Design</h1>
                </span>
            </div>
        </div>
        <form action="{{url('gig_search')}}" method="GET">
            @csrf
        <section class="search-part">
           
           <div id="search">
               <svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
                   <rect class="bar" />

                   <g class="magnifier">
                       <circle class="glass" />
                       <line class="handle" x1="32" y1="32" x2="44" y2="44"></line>
                   </g>

                   <g class="sparks">
                       <circle class="spark" />
                       <circle class="spark" />
                       <circle class="spark" />
                   </g>

                   <g class="burst pattern-one">
                       <circle class="particle circle" />
                       <path class="particle triangle" />
                       <circle class="particle circle" />
                       <path class="particle plus" />
                       <rect class="particle rect" />
                       <path class="particle triangle" />
                   </g>
                   <g class="burst pattern-two">
                       <path class="particle plus" />
                       <circle class="particle circle" />
                       <path class="particle triangle" />
                       <rect class="particle rect" />
                       <circle class="particle circle" />
                       <path class="particle plus" />
                   </g>
                   <g class="burst pattern-three">
                       <circle class="particle circle" />
                       <rect class="particle rect" />
                       <path class="particle plus" />
                       <path class="particle triangle" />
                       <rect class="particle rect" />
                       <path class="particle plus" />
                   </g>
               </svg>
               <input type=search name="q" aria-label="Search for inspiration" placeholder="serach your  Designer" />
           </div>
       </section>
        </form>
    </section>

    <!--------------------- hero section ----------->
    <!-- <section id="Engineering-part">
        <h1 class="main-title">Professtional Engineers</h1>
        <p class="main-para">Engineering Archtecture New Modern Designers</p>

        <div class="latest-products">

            <div class="container">
              

               <div class="row">

                @foreach($gig as $gigs)

                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="{{url('/details')}}"><img src="/product/{{$gigs->image}}" alt="" class="product-item-img"></a>
                            <div class="down-content">
                                <div class="engineer-info">
                                    <a href="./design-detals.html"> <img src="asset/image/m.jpg" alt="" class="my_img" style="width: 50px;"></a>
                                    <a href="./design-detals.html">
                                        <h4>{{$gigs->title}}</h4>
                                    </a>
                                </div>
                                <h6> From ${{$gigs->les_price}} to ${{$gigs->large_price}}</h6>
                                <p>{{$gigs->description}}
                                </p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (24)</span>
                            </div>
                        </div>
                    </div>

                   @endforeach
                  

                </div>
          
                
            </div>
        </div>

    </section> -->


    <section id="designer-section">
        <h1>Professtional Engineers</h1>
        <h2>Engineering Archtecture New Modern Designers</h2>
        <div id="profetional-designers">
        @foreach($gig as $gigs)
            <div class="designer-card">
           
                <a href="{{url('/details')}}"><img src="/product/{{$gigs->image}}" alt="" class="desgin-img"></a>
           
                <div class="designer-card-content">
                    <div class="designer-info">
                        <img src="asset/image/user-1.png" alt="">
                        <span class="designer-name"> add by khan </span>
                    </div>
                    <span>{{$gigs->title}}</span>
                    <span id="price">From ${{$gigs->les_price}} to ${{$gigs->large_price}}</span>
                    <p>{{$gigs->description}}
                    </p>
                    <ul class="stars">
                        <li><img src="asset/image/icons/icons8-star-48 (1).png" alt=""></li>
                        <li><img src="asset/image/icons/icons8-star-48 (1).png" alt=""></li>
                        <li><img src="asset/image/icons/icons8-star-48 (1).png" alt=""></li>
                        <li><img src="asset/image/icons/icons8-star-48 (1).png" alt=""></li>
                        <li><img src="asset/image/icons/icons8-star-48 (1).png" alt=""></li>
                    </ul>
                    <p>Reviews (21)</p>
    
                </div>
            </div>
            @endforeach
            
            
            
            
            
        </div>

    </section>

    <!-- us section -->
    <section id="us">
        <h1>Why Choose Us</h1>
        <p class="us-para">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi modi
            porro earum labore voluptates
        </p>
        <p class="us-para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam atque aut
            enim.
        </p>
        <div id="us-cart-wrapper">
            <div class="cart">
                <div class="card-header">
                    <div class="icons">
                        <img src="asset/Image/ico1.png" alt="icon1" />
                    </div>
                    <h4>We Deliver Quality</h4>
                </div>
                <p class="card-para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor
                    aliquam assumenda! Asperi
                </p>
            </div>

            <div class="cart">
                <div class="icons">
                    <img src="asset/Image/ico2.png" alt="icon2" />
                </div>
                <h4>alwasy on time</h4>
                <p class="card-para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor
                    aliquam assumenda! Asperi
                </p>
            </div>

            <div class="cart">
                <div class="icons">
                    <img src="asset/Image/ico3.png" alt="icon3" />
                </div>
                <h4>We Are Pasionate</h4>
                <p class="card-para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor
                    aliquam assumenda! Asperi
                </p>
            </div>

            <div class="cart">
                <div class="icons">
                    <img src="asset/Image/ico4.png" alt="icon4" />
                </div>
                <h4>professional SERVICES</h4>
                <p class="card-para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor
                    aliquam assumenda! Asperi
                </p>
            </div>
        </div>
    </section>

    <!-- service section -->
    <!-- <section id="services">
        <h1>OUR SERVICES</h1>
        <div id="service-wrapper">
            <div class="ser-card">
                <div class="ser-img">
                    <h2>construction Management</h2>
                </div>
                <p class="card-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum,
                    labore. Maiores provident tempore pariatur voluptatem aut mollitia
                    asperiores distinctio aliquid. Beatae tenetur tempora, voluptatem
                    quaerat rem harum amet aut nobis.
                </p>
                <button class="btn">show more</button>
            </div>

            <div class="ser-card">
                <div class="ser-img">
                    <h2>renovation</h2>
                </div>
                <p class="card-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum,
                    labore. Maiores provident tempore pariatur voluptatem aut mollitia
                    asperiores distinctio aliquid. Beatae tenetur tempora, voluptatem
                    quaerat rem harum amet aut nobis.
                </p>
                <button class="btn">show more</button>
            </div>

            <div class="ser-card">
                <div class="ser-img">
                    <h2>architecture</h2>
                </div>
                <p class="card-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum,
                    labore. Maiores provident tempore pariatur voluptatem aut mollitia
                    asperiores distinctio aliquid. Beatae tenetur tempora, voluptatem
                    quaerat rem harum amet aut nobis.
                </p>
                <button class="btn">show more</button>
            </div>
        </div>
    </section> -->

    <!-- more section -->
    <section id="main-slider-body">

        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    pre
                </button>
                <ul class="image-list">
                    <img class="image-item" src="asset/image/img-1.jpg" alt="img-1" />
                    <img class="image-item" src="asset/image/img-2.jpg" alt="img-2" />
                    <img class="image-item" src="asset/image/img-3.jpg" alt="img-3" />
                    <img class="image-item" src="asset/image/img-4.jpg" alt="img-4" />
                    <img class="image-item" src="asset/image/img-5.jpg" alt="img-5" />
                    <img class="image-item" src="asset/image/img-6.jpg" alt="img-6" />
                    <img class="image-item" src="asset/image/img-7.jpg" alt="img-7" />
                    <img class="image-item" src="asset/image/img-8.jpg" alt="img-8" />
                    <img class="image-item" src="asset/image/img-9.jpg" alt="img-9" />
                    <img class="image-item" src="asset/image/img-10.jpg" alt="img-10" />
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    next
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- customer service -->
    <section id="customer-servivce">
        <h1>Testimonial</h1>
        <p id="customer-para">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam
            officia porroadipisicing elit. Earum accusantium voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elitdolor pariatur.
            Minus, pariatur.
        </p>

        <div class="customer-service-warpper">
            <div class="message">
                <img src="asset/Image/blockquote2.png " alt="" />
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum
                    accusantium voluptatem id est sit dolor, soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitis soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitissoluta molestiae eum, .
                </p>
                <img src="asset/Image/block-ico1.png" alt="" class="icon" />
            </div>
            <div class="message">
                <img src="asset/Image/blockquote1.png" alt="" />
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum
                    accusantium voluptatem id est sit dolor, soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitis soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitissoluta molestiae eum, .
                </p>
                <img src="asset/Image/block-ico1.png" alt="" class="icon" />
            </div>
            <div class="message">
                <img src="asset/Image/blockquote2.png" alt="" />
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum
                    accusantium voluptatem id est sit dolor, soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitis soluta molestiae eum, iure
                    accusamus maxime natus! Tenetur debitissoluta molestiae eum, .
                </p>
                <img src="asset/Image/block-ico1.png" alt="" class="icon" />
            </div>
        </div>

    </section>

@include("myapp.layouts.footer")

<script src="{{asset('/asset/javascript/profile.js')}}"> </script>
    <script src="{{asset('/asset/javascript/profil_drop.js')}}"></script>
    <script src="{{asset('/asset/javascript/main.js')}}"></script>
</body>
</html>