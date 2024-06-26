<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
    
    <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">

</head>

<body>
    @include("myapp.layouts.header")
<section id="content-dashbord">
        <div id="sidebarstaky">
            <div id="side-card">
                <div id="side-card-header">
                    <a href=""><img src="asset/image/logo.png" alt=""></a>
                    <div>
                        <p>Wellcome,</p>
                        <h3>samikhan</h3>
                        <p>@gmail.com</p>
                    </div>
                </div>
                <div id="side-card-menu">
                <ul>
                <li><a href="{{url('/upload')}}"><img src="asset/icons/icons8-dashboard-layout-50.png" alt="">Upload Gig</a></li>
                        <!-- <li><a href="{{url('order')}}"><img src="asset/icons/icons8-order-50.png" alt="">Order</a></li> -->
                        <li><a href="#"><img src="asset/icons/icons8-category-50.png" alt="">Add Category</a></li>
                        <li><a href="{{url('#')}}"><img src="asset/icons/icons8-message-50.png" alt="">Messages</a></li>
                        <!-- <li><a href="{{url('addproduct')}}"><img src="asset/icons/icons8-online-money-transfer-50.png" alt="">Add product</a></li> -->
                        <!-- <li><a href="{{url('#')}}"><img src="asset/icons/icons8-logout-50.png" alt="">Show product</a></li> -->
                        <li><a href="{{url('setting')}}"><img src="asset/icons/icons8-setting-50.png" alt="">Setting</a></li>
                        <li><a href="{{url('#')}}"><img src="asset/icons/icons8-logout-50.png" alt="">Logout</a></li>
                        
                        
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div id="sidebarcontent">
          <h1 style="text-align: center;  margin-top:2em;"> Welcome samikhan to  Dashboard</h1>
          <h2  style="text-align: center;  margin-top:1em;">you can add in this empty page any animation or  </h2>
        </div>

        <div id="right-side-content"></div>
    </section>
    @include("myapp.layouts.footer")

</body>
</html>