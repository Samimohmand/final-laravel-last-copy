<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form</title>
    <style>
        .form-section {
            display: none;
        }
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #Registration-content {
            width: 100%;
            padding: 2em;
        }
        #Registration-content h1 {
            font-size: 2.4em;
            text-align: left;
            margin-bottom: 1em;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        #Registration-content #usertypelable {
            font-size: 1.2em;
            color: #0A1D56;
            padding-bottom: 10px;
            border-bottom: 2px solid #0A1D56;
        }
        #Registration-content #usertypeselect {
            width: 400px;
            margin: 2em auto;
        }
        #usertypeselect label {
            font-size: 1.2em;
            font-weight: 600;
            margin-right: 10px;
        }
        #selectdiv {
            display: flex;
            align-items: center;
            justify-content: left;
        }
        #usertypeselect .selectbtn {
            padding: 6px 8px;
            font-size: 1em;
            font-weight: 600;
            margin-left: 5px;
            border-radius: 2px;
            border: none;
            border: 1px solid #0A1D56;
            
            cursor: pointer;
        }
        .form-section {
            width: 400px;

            margin: 0 auto;
            background-color: rgb(248, 248, 248);
            box-shadow: 0 0 1px 0.5px #b3c5f8;
            padding: 2em 1.5em;
            border-radius: 5px;
        }
        .form-section h2 {
            font-size: 1.19em;
            text-align: center;
            margin-bottom: 0.7em;
            color: rgb(26, 26, 26);
        }
        .form-section label {
            display: block;
            color: black;
        }
        .form-section input {
            width: 100%;
            padding: 12px 8px;
            font-size: 1em;
            border: 1px solid rgb(216, 218, 255);
            background-color: rgb(255, 255, 255);
            border-radius: 2px;
        }
        .form-section input[type="submit"] {
            background-color: #0A1D56;
            font-size: 1.2em;
            font-weight: 600;
            color: white;
            padding: 16px 14px;
            margin-top: 20px;
        }
        .active-btn {
            background-color: #0A1D56;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="Registration-content">
        <div id="usertypeselect">
            <h1>Registration Form</h1>
            <div id="selectdiv">
                <label for="userType" id="usertypelable"> Select User Type:</label>
                <button class="selectbtn active-btn" data-target="designerForm">Designer</button>
                <button class="selectbtn" data-target="companyForm">Company</button>
                <button class="selectbtn" data-target="userForm">User</button>
            </div>
        </div>

        <!-- Designer Form -->
        <div id="designerForm" class="form-section" style="display: block;">
            <h2>Designer Form</h2>
            <form action="/dl" method="post"  enctype="multipart/form-data">
                @csrf
                <input type="text" id="designerName" name="name" placeholder="Designer Name"><br><br>
                <input type="email" id="email" name="email" placeholder="Email"><br><br>
                <input type="password" id="Password" name="password" placeholder="Password"><br><br>
                <input type="password" id="confirme" name="confirm" placeholder="Password confirme"><br><br>
                <input type="text" id="address" name="address" placeholder="Address"><br><br>
                <input type="text" name="userType" value="designer" hidden>
                <label for="image">Profile Image:</label>
                <input type="file" name="image">
                <input type="submit" value="Submit">
            </form>
        </div>

        <!-- Company Form -->
        <div id="companyForm" class="form-section">
            <h2>Company Form</h2>
          
                <form   action="/comp" method="post"   enctype="multipart/form-data" >
                    @csrf
                    <input type="text" id="companyName" name="companyName" placeholder="Company Name"><br><br>
                    <input type="email" id="email" name="email" placeholder="Email"><br><br>
                    <input type="password" id="Password" name="password" placeholder="Password"><br><br>
                    <input type="password" id="confirme" name="confirm" placeholder="Password confirme"><br><br>
                    <input type="text" id="address" name="address" placeholder="Address"><br><br>
                    <input type="text" name="userType" value="company" hidden>
                    <label for="image">Profile Image:</label>
                    <input type="file" name="image">
                    <input type="submit" value="Submit">
                </form>
            
        </div>

        <!-- User Form -->
        <div id="userForm" class="form-section">
            <h2>User Form</h2>
            <form action="/user" method="post"    enctype="multipart/form-data">
                @csrf
                <input type="text" id="designerName" name="name" placeholder="User Name"><br><br>
                <input type="email" id="email" name="email" placeholder="Email"><br><br>
                <input type="password" id="Password" name="password" placeholder="Password"><br><br>
                <input type="password" id="confirme" name="confirm" placeholder="Password confirme"><br><br>
                <input type="text" id="address" name="address" placeholder="Address"><br><br>
                <input type="text" name="userType" value="simpleuser" hidden>
              
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll(".selectbtn");
            const forms = document.querySelectorAll(".form-section");

            buttons.forEach(button => {
                button.addEventListener("click", function () {
                    // Hide all forms
                    forms.forEach(form => form.style.display = "none");

                    // Remove active class from all buttons
                    buttons.forEach(btn => btn.classList.remove("active-btn"));

                    // Show the target form
                    const targetForm = document.getElementById(button.dataset.target);
                    targetForm.style.display = "block";

                    // Add active class to the clicked button
                    button.classList.add("active-btn");
                });
            });
        });
    </script>
</body>
</html>
