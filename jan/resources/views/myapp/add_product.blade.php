<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
  
    
    <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">
   

   
</head>
<body>
    

@include('myapp.layouts.header')


  <!-- main content  section-->
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
         
            <div class="container12">
                <h1 style="text-align: center;">Add your product </h1>
                
                <form  action="{{'/Add_product'}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row-upload">
                    <div class="column">
                      <label for="Title">product Title</label>
                      <input
                        type="text"
                        name="title"
                        id="Title"
                        placeholder="write a title"
                        required=""
                      />
                    </div>
                    <div class="column">
                      <label for="Id">Quantity</label>
                      <input  required="" type="number" name="quantity" min="0" id="Id" placeholder="Enter Quantity " />
                    </div>
                  </div>
                  <div class="row-upload">
                    <div class="column">
                      <label for="Category">Product Category  </label>
                      <select id="Category" name="catagory"   required="">
                   @foreach($catagory as $catagory)
                    <option  value="{{ $catagory->Catagory_name}}" >{{ $catagory->Catagory_name}}</option>
                    @endforeach
                      </select>
                    </div>
                    <div class="column">
                      <label for="Price">Price</label>
                      <input
                        type="number"
                        name="price"
                        id="Price"
                        placeholder="Enter Price here"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="row-upload">
                    <div class="column">
                      <label for="Category">product image </label>
                      <input type="file"   required="" name="image" id="file" placeholder="Upload Design" />
                    </div>
                    <div class="column">
                      <label for="Description">Description</label>
                    <input type="text"  required="" name="description" id="description">
                    </div>
                  </div>
                  <button type="submit" class="upload-btn">Submit</button>
                </form>
              </div>

        </div>
    </section>

@include('myapp.layouts.footer')    
</body>
</html>