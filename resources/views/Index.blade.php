<html>
<head>

    <title>faveo-login-page</title>

    <meta charset="UTF-8">
    <meta name="description" content="login page">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="https://billing.faveohelpdesk.com/common/images/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://use.fontawesome.com/8f10ac4a62.js"></script>



</head>
<body>


<div id="header">
    <!--email-phone information-->

      <div id="mail-phone-container">
        <ul>
            <li> <a href="mailto:support@faveohelpdesk.com">&nbsp;&nbsp;<i class="fas fa-envelope">&nbsp;</i>&nbsp;&nbsp;support@faveohelpdesk.com</a></li>
            &nbsp;&nbsp;&nbsp;
            <li>|</li>
            &nbsp;&nbsp;&nbsp;
            <li><a href="tel:9513312768"><i class="fa-solid fa-phone-flip">&nbsp;&nbsp;</i>&nbsp;&nbsp;+91 9513312768</a></li>
        </ul>
    </div>
    <!--email-phone information ends here-->

    <!--faveo-logo-->

    <div id="logo-image">
        <img src="https://billing.faveohelpdesk.com/common/images/faveo1.png" alt="faveo logo" title="faveo pages" style="width: 100px; height:100px">

    <!--navbar -->
        <div id="navbar-list">

         <ul>

           <li><a href="#"> STORE</a></li>
           <li><a href="#">CONTACT US</a></li>
           <li><a href="#">LOGIN</a></li>
           <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;CART(0)</a></li>
           <li id="social-media-icons"><a href="#" title="facebook"><i class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;<a href="#" title="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>&nbsp;&nbsp;<a href="#" title="twitter"><i class="fa-brands fa-twitter"></i></a></li>

         </ul>

         </div>
     <!--navbar ends here-->

    </div>

</div>
<!--text for login-register-->

    <div class="second-header">
       <a href="#">HOME</a>&nbsp;&nbsp;&gt; &nbsp;LOGIN
        <h1><strong>Sign or Register</strong></h1>
    </div>

<!--text for login-register-->

      <!--Login form-->

      <div class="form-container">

        <form id="form1" action="" method="post" autocomplete="off">

            <p>I'M A RETURNING CUSTOMER</p>

            <label for="username">Username or E-mail address<span style="color:red">*</span></label><br>
            &nbsp;&nbsp;<br>
            <input type="text" class="form1-input" name="username"><br>
            &nbsp;&nbsp;<br>
            <label for="pwd">Password<span style="color:red">*</span></label><br>
            &nbsp;&nbsp;<br>
            <input type="password" class="form1-input" name="pwd"><br>
            &nbsp;&nbsp;<br>
            <input type="checkbox" id="form1-checkbox">Remember Me
            &nbsp;&nbsp;<br>
            <button type="submit" id="form1-submit-button">Login</button>



        </form>

    </div>

   <!--login form ends here-->

  <!--registration form begins-->

  <div class="register-container">


    <form id="form2" action="" method="post" autocomplete="off">

        <p>REGISTER AN ACCOUNT</p>

        <label for="firstname">First Name<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <input type="text" class="form2-input" name="firstname"><br>
        &nbsp;&nbsp;<br>

        <label for="lastname">Last Name<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <input type="text" class="form2-input" name="lastname"><br>
        &nbsp;&nbsp;<br>

        <label for="email">Email Address<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <input type="email" class="form2-input" name="email"><br>
        &nbsp;&nbsp;<br>

        <label for="companyname">Company Name<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <input type="text" class="form2-input" name="companyname"><br>
        &nbsp;&nbsp;<br>

        <label for="address">Address<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <textarea name="address" class="form2-input" rows="9" cols="30"></textarea>
        &nbsp;&nbsp;<br>


        <label for="country">Country<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <input type="" class="form2-input" name="country"><br>
        &nbsp;&nbsp;<br>


        <label for="mobile">Mobile<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <input type="number" class="form2-input" name="mobile"><br>
        &nbsp;&nbsp;<br>


        <label for="pwd">Password<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <input type="password" class="form2-input" name="pwd"><br>
        &nbsp;&nbsp;<br>

        <label for="">Company Name<span style="color:red">*</span></label><br>
        &nbsp;&nbsp;<br>
        <input type="text" class="form2-input" name="companyname"><br>
        &nbsp;&nbsp;<br>

        <input type="checkbox" id="form2-checkbox">Remember Me
        &nbsp;&nbsp;<br>
        <button type="submit" id="form2-submit-button">Login</button>



    </form>

</div>


</body>
</html>
