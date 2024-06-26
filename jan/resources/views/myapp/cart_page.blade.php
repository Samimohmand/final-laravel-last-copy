<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.4.0-web/css/all.css">
    <style>
  

  html, body {
    height: 100vh;
    margin: 0;
  }
        #main-section{
       
         height: auto;
        }
        .shopping-cart {
  width: 100%;
  max-width: 90%;

  margin: 0 auto;
  font-family: Arial, sans-serif;
  font-size: 16px;
  
}

a i{
    color: black;
}

table {
  width: 100%;
  border-collapse: collapse;
}

thead {
  background-color: #f2f2f2;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

img {
  max-width: 100px;
  height: auto;
}

.remove-btn {
  background-color: #ff5c5c;
  color: #fff;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
}

.remove-btn:hover {
  background-color: #e03939;
}

input[type="number"] {
  width: 50px;
  text-align: center;
}


  .total-deg{
    font-size: 24px;
    padding: 40px;
  }

  #main-btn-style{
    display: flex;
    justify-content: center;

  }

    #proceed-design{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    #proceed-design h1{
      margin-bottom: 1em;
    }
    #proceed-design button{
      padding: 10px  20px;
      background-color: lightgreen;
      outline: none;
      border: none;
      margin-bottom: 1em;
      
    }
    #proceed-design button a{
      text-decoration: none;
      font-size: 18px;
      font-weight: 500;
      color:black;  
     
    }
    #proceed-design button:hover{
      transition: all;
    } 
    </style>

</head>
<body>
    @include("myapp.layouts.header");
 
   <section id="main-section">
   <div class="shopping-cart">
        <table>
          <thead>
            <tr>
             
              <th>Product title</th>
              <th>Quantity</th>
              <th>Price</th>
            
              <th>Image</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>

          <?php  $totalprice=0 ?>
            @foreach($cart as $cart)
            <tr>
              <td>{{$cart->product_title}}</td>
              <td>{{$cart->quantity}}</td>
              <td>${{$cart->price}}</td>
              <td><img src="/product/{{$cart->image}}" ></td>
           
              <td>  <a href="{{url('/remove_cart',$cart->id)}}"><i class="fas fa-trash-alt"></i></a> </td>
            </tr>
            <?php $totalprice=$totalprice + $cart->price ?>
            @endforeach
          
            
          </tbody>
        </table>

      </div>

   </section>
 
  
  <div id="main-btn-style">
       <h3 class="total-deg">TotalPrice :   ${{$totalprice}}</h3>
   </div>

   <div id="proceed-design">
        <h1>Proceed to Order</h1>

      <div>
      <button>
       <a href="{{url('/cash_order')}}">Cash  On Delivery</a>

       </button>         
       <button>
       <a href="{{url('stripe',$totalprice)}}">Pay Using Card</a>
       </button>
      </div>
   </div>



      @include("myapp.layouts.footer")
</body>
</html>