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
                        <h3>khan</h3>
                        <p>@gerogewell</p>
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
         
            <div class="container12">
                <h1 style="text-align: center;">Upload Your Simple Gigs Here First Step</h1>
                <!-- <p>To Upload Design You Should Full All Input Fields</p> -->
                <form  action="{{url('/add_design')}}" method="post" enctype="multipart/form-data">

                @csrf
                  <div class="row-upload">
                    <div class="column">
                      <label for="Title">Title</label>
                      <input
                        type="text"
                        name="Title"
                        id="Title"
                        placeholder="Enter Design Title"
                      />
                    </div>
                   
                  </div>
                  <div class="row-upload">
                    <div class="column">
                    <label for="les_price">les_price</label>
                      <input
                        type="number"
                        name="les_price"
                        id="les_price"
                        placeholder="Enter  les_Price here"
                      />
                    </div>
                    <div class="column">
                      <label for="large_price">large_price</label>
                      <input
                        type="number"
                        name="large_price"
                        id="large_price"
                        placeholder="Enter large_price here"
                      />
                    </div>
                  </div>
                  <div class="row-upload">
                    <div class="column">
                      <label for="Category">Multiple image </label>
                      <input type="file" name="images[]" multiple id="file" placeholder="Upload Design" />
                    </div>
                    <div class="column">
                      <label for="Category">simple image </label>
                      <input type="file" name="image2" multiple id="file" placeholder="Upload Design" />
                    </div>
                    <div class="column">
                      <label for="Description">Description</label>
                      <textarea
                        id="description"
                        name="description"
                        placeholder="Write Essential Information About Your Design"
                        rows="2"
                      ></textarea>
                      
                    </div>

                 
            
            <div class="form-group">
                <label for="additional-info">Additional Information</label>
                <textarea id="additional-info" name="additional_info" placeholder="Enter any additional information about your gig"></textarea>
            </div>
            <div class="form-group">
                <label for="delivery-time">video of the design</label>
                <input type="file" id="delivery-time" name="video" placeholder="Enter delivery time (in days)">
            </div>

            
            
       

            <button class="btn-of-12" type="submit">Submit Gig</button>
                  <!-- <button class="upload-btn">Submit</button> -->
                </form>
              </div>

            <!--  -->
        </div>
    </section>
    @include("myapp.layouts.footer")

    <script src="asset/javascript/profile.js"> </script>
    <script src="asset/javascript/profile_drop.js"></script>
    <script src="asset/javascript/main.js"></script>

</body>
</html>
    