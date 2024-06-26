<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">
    <style>
             *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
 
         #prodeuct-container{
        width: 100%;
        padding: 1em 1em;
        display: flex;
    }
    #prodeuct-container #product-image{
        width: 60%;
        margin-right: 3em;
    }
    #prodeuct-container #product-image img{
        width: 100%;
        height: 80vh;
    }
    #prodeuct-container #product-card{
        width: 40%;
        display: flex;
        flex-direction: column;
        -ms-flex-align: stretch;
        margin-top: 2em;
    }
    #prodeuct-container #product-card #product-para{
        font-size: 1.5em;
        text-transform: capitalize;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
        margin-bottom: 1.4em;
    }
    #prodeuct-container #product-card #pss{
        display: block;
        background-color: red;
        padding: 3px 5px;
        width: 44px;
        height: 22px;
        color: white;
        font-size: 0.85em;
        border-radius: 3px;
        margin: 14px 0;
    }
    #prodeuct-container #product-card #product-rate{
        font-size: 1.8em;
        font-weight: 600;
        
    }
    #transit-div {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 20px 0 40px 0;
    }
    
    #prodeuct-container #product-card #transit-div img{
        width: 25px;
        height: 25px;
        border-radius: 4px;
        margin-right: 5px;
    }
    #prodeuct-container #product-card #transit-div #product-para-massage{
        font-size: 0.8em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
    }
    #prodeuct-container #product-card #beying-div{
        width: 100%;

    }
    #prodeuct-container #product-card #beying-div #product-quantity{
        width: 15%;
        padding: 15px 20px;
        margin-right: 10px;
        font-size: 1em;
    }
    #prodeuct-container #product-card #beying-div button{
        width: 60%;
        padding: 11px 15px;
        font-size: 1.3em;
        background-color: black;
        color: white;
    }
    #btn-form{
        display: flex;

    }
    #btn-form input{
        width: 80px;
        height: 60px;
    }


    </style>
</head>
<body>
    @include("myapp.layouts.header")
    <div id="prodeuct-container">

<div id="product-image">
    <img src="/product/{{$product->image}}" alt="product image" >
</div>

<div id="product-card">
    <p id="product-para">{{$product->title}}</p>
    <span id="pss">SALE</span>
    <span id="product-rate"> &#36  {{$product->price}}</span>
    
    <div id="transit-div">
        <img src="car-icon.png" alt="car icon ">
        <p id="product-para-massage">{{$product->description}}</p>

    </div>
    
    <div id="beying-div">
          
         <h4>Quantity</h4>
       <h6>{{$product->quantity}}</h6>
      
       <div >
            
                <form action="{{url('add_cart',$product->id)}}"   method="post"      id="btn-form">

                @csrf
                <button type="submit">Add to Card</button> 
                  <input type="number" value="1" name="quantity" min="1">
                </form>
        
       </div>
    </div>
  
</div>
</div>
@include("myapp.layouts.footer");
</body>

</html>