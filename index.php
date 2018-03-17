<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-signin-client_id" content="your google iclied id url">
    

    <title>Nirma university | MCA Department </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="css/device.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
   
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- Custom Fonts -->
   <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
  
    <style>
     .mdl-layout__drawer .mdl-navigation .mdl-navigation__link {
    display: block;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    /* flex-shrink: 0; */
    padding: 0px 37px;
    margin: 0;
    color: #757575;
}
         .abcRioButtonLightBlue{
        margin:auto;
        }
        
        .javdisabled{background:red;color:#fff;padding:10px;text-align:center;}.javdisabled a{text-decoration:none;color:#fff;}
    </style>
    
</head>


    <body style="background:url('img/nirma3.jpg') center no-repeat #F3F3F3;">
        
     <noscript>
<div class='javdisabled'> <i class='icon-warning-sign icon-white'></i> &nbsp;&nbsp;  To Login or Register Campus Utility Account, you need JavaScript enabled in your browser. <a href='#'>   <i class=' icon-refresh icon-white'></i> Refresh this page after you have enabled JavaScript. </a> 
 </div>
 </noscript>
        
        <!--
        <div style="height:50px;background: rgba(0,0,0,0.3) ;width:100%;box-shadow:0px 0px 15px rgba(255,255,255,0.5);line-height:50px;color:#fff;">
        
             <span style="height:100%;width:80px;text-align:center;display:inline-block;">lOGIN</span>
        
        </div>-->
    

    <div class="wrapper" style="text-align:center;background:rgba(0,0,0,0.27);width:400px;margin:60px auto;padding:1px;height:440px;border-radius:5px;position:relative;">
    
          <h1 style="font-family:roboto;color:#fff;font-weight:600;font-size:40px;text-shadow:0px 0px 10px rgba(0,0,0,0.3);i">CAMPUS UTILITY 
              <small style="font-weight:300;display:block;font-size:20px;margin-top:-1px;color:#fff !important;opacity:1;">Version 1.0.0 (beta version)</small> </h1> 
      <!--  <img src="img/nirma_logo.png" style="height:300px;width:300px;margin:auto;display:block;margin-top:50px;" >
        -->
        <div style="display:block;height:150px;width:150px;background:url('img/nirma_logo.png')center no-repeat;background-size:100%;margin:auto;"></div>
          
           <div class="g-signin2" data-onsuccess="onSignIn" style="margin:auto;margin-top:30px;"></div>
        
      <div style="background:red;height:50px;line-height:50px;position:absolute;width:100%;bottom:0;color:#fff;border-radius:0px 0px 5px 5px;"> <span >REGISTER</span> </div>
  
    </div>
        
        
        
    <div style="margin:auto;text-align:center;margin-top:150px;"> <h2 style="font-weight:100;font-size:25px;"> AWESOME YET TO COME </h2>  </div>   
    
    <!--
     jQuery 
    <script src="js/jquery.js"></script>-->
       <script>
        
        function onSignIn(googleUser) 
        {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
            
            console.log(profile);
            
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log("Name: " + profile.getName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
        
    </script>
    

</body>

    
    
</html>
