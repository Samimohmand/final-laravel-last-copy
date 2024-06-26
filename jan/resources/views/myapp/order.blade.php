<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
    
    <link rel="stylesheet" href="asset/css/project.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.4.0-web/css/all.css">
    <!-- product all link=================== -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <style>
        #style-of-btn{
            background-color: green;
            padding: 8px 16px;
            color: black;
        }
        #style-of-btn a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
@include("myapp.layouts.header");

<section id="content-dashbord">
        <div id="sidebarstaky">
            <div id="side-card">
                <div id="side-card-header">
                    <a href=""><img src="asset/image/logo.png" alt=""></a>
                    <div>
                        <p>Wellcome,</p>
                        <h3>Geroge Well</h3>
                        <p>@gerogewell</p>
                    </div>
                </div>
                <div id="side-card-menu">
                <ul>
                    <li><a href="{{url('designerdashboard')}}"><img src="asset/icons/icons8-dashboard-layout-50.png" alt="">Dashoard</a></li>
                        <li><a href="{{url('order')}}"><img src="asset/icons/icons8-order-50.png" alt="">Order</a></li>
                        <li><a href="{{url('catagory')}}"><img src="asset/icons/icons8-category-50.png" alt="">Add Category</a></li>
                        <li><a href="{{url('#')}}"><img src="asset/icons/icons8-message-50.png" alt="">Messages</a></li>
                        <li><a href="{{url('addproduct')}}"><img src="asset/icons/icons8-online-money-transfer-50.png" alt="">Add product</a></li>
                        <li><a href="{{url('show_product')}}"><img src="asset/icons/icons8-logout-50.png" alt="">Show product</a></li>
                        <li><a href="{{url('setting')}}"><img src="asset/icons/icons8-setting-50.png" alt="">Setting</a></li>
                        <li><a href="{{url('#')}}"><img src="asset/icons/icons8-logout-50.png" alt="">Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div id="sidebarcontent">
            <div id="categroy-div">
                <h2 id="category-title">Orders: </h2>
                <div id="category-table-div">
                    <table id="categroy-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <!-- <th>Phone</th> -->
                                <th>Title</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Payment status</th>
                                <th>Delivery status</th>
                                <!-- <th>img</th> -->
                                <th>Delivered</th>
                           
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($order as $order)
                            <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->address}}</td>
                            <!-- <td>{{$order->phone}}</td> -->
                            <td>{{$order->product_title}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>${{$order->price}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td>{{$order->delivery_status}}</td>
                            <!-- <td>
                                <img src="/product/{{$order->image}}" alt="">
                            </td> -->
                            
                            <td>
                                @if($order->delivery_status =='processing')
                               <button id="style-of-btn">
                                <a href="{{url('delivered',$order->id)}}">Delivered</a>
                               </button>
                               
                               @else
                               <p style="color: green;">Delivered</p>


                               @endif
                            </td>
                            </tr>

                            @endforeach
                          
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="right-side-content"></div>
    </section>
    
    @include("myapp.layouts.footer");


    <script src="asset/javascript/profile.js"> </script>
    <script src="asset/javascript/profile_drop.js"></script>
    <script src="asset/javascript/main.js"></script>
</body>
</html>