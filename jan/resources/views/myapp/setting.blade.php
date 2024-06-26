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
                        <h3>Mohammadullah</h3>
                        <p>@khan</p>
                    </div>
                </div>
                <div id="side-card-menu">
                <ul>
                    <li><a href="{{url('designerdashboard')}}"><img src="asset/icons/icons8-dashboard-layout-50.png" alt="">Dashoard</a></li>
                        <li><a href="{{url('order')}}"><img src="asset/icons/icons8-order-50.png" alt="">Order</a></li>
                        <li><a href="{{url('catagory')}}"><img src="asset/icons/icons8-category-50.png" alt="">Add Category</a></li>
                        <li><a href="{{url('#')}}"><img src="asset/icons/icons8-message-50.png" alt="">Messages</a></li>
                        <li><a href="{{url('addproduct')}}"><img src="asset/icons/icons8-online-money-transfer-50.png" alt="">Add product</a></li>
                        <li><a href="{{url('#')}}"><img src="asset/icons/icons8-logout-50.png" alt="">Show product</a></li>
                        <li><a href="{{url('setting')}}"><img src="asset/icons/icons8-setting-50.png" alt="">Setting</a></li>
                        <li><a href="{{url('#')}}"><img src="asset/icons/icons8-logout-50.png" alt="">Logout</a></li>
                        
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div id="sidebarcontent">
          <div id="setting-div">
            <h2>Change your setting</h2>
            <form action="#" id="setting-form"> 
                <p>change your setting currefully !</p>
                <div>
                    <label for="username">User name</label>
                    <input type="text" name="username" required>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </div>

                <div>
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" required>
                </div>

                <div>
                <label for="profileImg">Profile Image</label>
                <input type="file"  required>
                </div>
                <div>
                    <input type="checkbox" id="confirmCheck" name="confirmCheckbox" required>
                    <label for="confirmCheck" id="form-checkbox-para">Are you sure you want to submit?</label>
                </div>

                <br><br>
                <input type="submit" value="submit">
            </form>
          </div>
        </div>

        <div id="right-side-content"></div>
    </section>
    @include("myapp.layouts.footer")

</body>

</html>