<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
    
    <link rel="stylesheet" href="asset/css/project.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome-free-6.4.0-web/css/all.css">
    
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
        </div>
        <div id="sidebarcontent">
          <div id="main-container-add-category">
            <form action="{{url('/add_catagory')}}" method="POST" id="add-category">
                @csrf
                <label for="" id="category" >Add category</label>
                <br>
                
                <input  type="text" name="category" >
                <br>
                <input  type="submit" name="submit" style="margin-left:35px; margin-top:10px;
                background-color:#c79e23; " value="add catagory">
            </form>
          </div>
            <div id="categroy-div">
                <h2 id="category-title">Category : </h2>
                <div id="category-table-div">
                    <table id="categroy-table">
                        <thead>
                            <tr>
                               
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                               
                                <td>{{$data->Catagory_name}}</td>
                                <td>
                                   <a href=""><img src="asset/icons/icons8-edit-50.png" alt=""></a> 
                                   <a href="{{url('delete_catagory',$data->id)}}"><img src="asset/icons/icons8-delete-50.png" alt=""></a> 
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
    @include("myapp.layouts.footer")
</body>
</html>