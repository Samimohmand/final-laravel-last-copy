<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our product design</title>
    <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">
    <link rel="stylesheet" href="{{asset('/asset/css/product.css')}}">
    
</head>
<body>

    @include("myapp.layouts.header")


<section id="list-of-all-Menue">
        <div class="navbar-center">
            <ul>
                <li><a  href="kitichen/index.html"><button class="rounded-button">Kitchen</button></a></li>
                <li><a href="./furnature/index.html"><button class="rounded-button">Furniture  </button></a></li>
                <li><a href="./bright_light/index.html"><button class="rounded-button">Bright Lamp </button></a></li>
                <li><a href="./dininig room/index.html"><button class="rounded-button">Kitchen & Dining</button></a></li>
                <li><a href="./bedroom/index.html"><button class="rounded-button">Bedroom</button></a></li>
                <li><a  href="./lights/index.html"><button class="rounded-button">Lighting</button></a></li>
                <li><a href="./shower/index.html"><button class="rounded-button">Showers</button></a></li>
                <li><a href="./wall_watch/index.html"><button class="rounded-button">wall watch</button></a></li>
                <li><a href="./wall_mirror/index.html"><button class="rounded-button">Wall Mirrors</button></a></li>
                <li><a href="./window/index.html"><button class="rounded-button">window</button></a></li>
            </ul>
        </div>

    </section>

      <section id="all-product">
        @foreach($product as $products)
        <div class="product-class">
            <a href="{{url('/product_details',$products->id)}}"><img src="product/{{$products->image}}" alt=""></a>
            <div class="product-details">
                <h3 class="product-name">{{$products->title}}</h3>
                
                <div class="star-rating">
                  <span class="star-icon">&#9733;</span>
                  <span class="star-icon">&#9733;</span>
                  <span class="star-icon">&#9733;</span>
                  <span class="star-icon">&#9733;</span>
                  <span class="star-icon">&#9733;</span>
                </div>
                <p class="product-description">{{$products->description}}</p>
                <p class="product-price">${{$products->price}}</p>
                
              </div>
        </div>

        @endforeach

    

        

        


      </section>

@include("myapp.layouts.footer")


</body>
</html>