<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Document1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

<script>  
  function validateform(){  
    let name=document.myform.name.value;
    let subject=document.myform.subject.value;  
    let message=document.myform.message.value;    
    let x=document.myform.email.value;  
    let atposition=x.indexOf("@");  
    let dotposition=x.lastIndexOf(".");  
    
  if (name==null || name==""){  
    alert("Name can't be blank");  
    return false;  
  }
    else if(subject==null || subject==""){  
    alert("Subject can't be blank.");  
    return false;  
  }
    else if(message==null || message=="" || message.length>61){  
    alert("Message can't be blank and a maximum of 60 characters.");  
    return false;  
  }
  else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    alert("Wrong email");  
    return false;  
  }  
  }
</script>  

    <link href="css/fontello.css" type="text/css" rel="stylesheet"> 
    <link href="style/styleCsscopy.css" type="text/css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Maven+Pro:400,500,600,900&display=swap&subset=latin-ext" rel="stylesheet">     

</head>

<body>
  
<div class="container"><!--open container  -->

  <div class="row">
    <nav class="navbar navbar-expand-md navbar-mymenu bg-dark col-sm-12 justify-content-center" id="top"><!--open topA bootstrap navbar-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainmenu"
        aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="mainMenu" id="navbarNavAltMarkup">
            
            <ul class="navbar-nav col-sm-3 justify-content-center" >
              <li class="nav-item">
                <a class="nav-link" href="#content">PORTFOLIO</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#aboutMe">ABOUT</a>
              </li>
              </ul> 
              <ul class="navbar-nav justify-content-center tt">
              <li class="nav-item">
                <a class="nav-link" href="#top"><img src="img/logo.png" class="logo img-fluid justify-content-center" alt="..."></a>
              </li>
              </ul>
              <ul class="navbar-nav col-sm-3 justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="#getInTouch">GET IN TOUCH</a>
              </li>
            </ul>
          </div>
    </nav><!--close topA--> 
    
    <div class=" triangle justify-content-center"><!--open triangle-->
    </div><!--close triangle-->

    <div class="content" id="content"> <!--open content-->

      <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
          <li data-target="#mycarousel" data-slide-to="1"></li>
          <li data-target="#mycarousel" data-slide-to="2"></li>
          <li data-target="#mycarousel" data-slide-to="3"></li>
          <li data-target="#mycarousel" data-slide-to="4"></li>
          <li data-target="#mycarousel" data-slide-to="5"></li>
          <li data-target="#mycarousel" data-slide-to="6"></li>
        </ol>
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/pic2.jpg"  class="d-block w-100" alt=".">
          </div>
          <div class="carousel-item ">
            <img src="img/pic4.jpg"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/pic4.jpg"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/pic2.jpg"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/pic1.jpg"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/pic2.jpg"  class="d-block w-100" alt="...">
          </div>
        </div><!-- close carousel-inner -->
    </div><!-- close carouselExampleIndicators -->
    </div><!-- close content -->


    <div class="aboutMe d-block col-sm-12" id="aboutMe"><!--open aboutMe-->
      <div class="aboutMeContent"><!--open aboutMeContent-->

        <div class=" col-sm-3 aboutMePicture">
          <img src="img/portAutor.jpg" class="img-fluid">
        </div><!-- close aboutMePicture -->

        <div class="aboutMeText col-sm-7">
          <h1>Smith Anderson</h1>
          <h2>Illustrator & Character Designer</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor, nibh at sagittis tristique, enim magna pretium augue, eget consectetur sem dui non urna. Integer gravida, diam congue molestie fringilla, elit odio rhoncus turpis, ac dictum libero elit vel metus. Morbi egestas sit amet velit eget venenatis. Mauris porttitor, nibh at sagittis tristique, enim magna pretium augue, eget consectetur sem dui non urna</p>
                
          </div>
          <div class="float-sm-right justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <div class=" btn-group t" role="group" aria-label="First group">
                  <button type="button" class="btn-social btn"><i class="icon-facebook  btn-social-facebook "></i></button>
                  <button type="button" class="btn-social btn"><i class="icon-twitter  btn-social-twitter"></i></button>
                  <button type="button" class="btn-social btn"><i class="icon-gplus  btn-social-gogle"></i></button>
                  <button type="button" class="btn-social btn"><i class="icon-pinterest  btn-social-pinterest"></i></button>
                  <button type="button" class="btn-social btn"><i class="icon-linkedin  btn-social-linkedin"></i></button>
                  <button type="button" class="btn-social btn"><i class="icon-dribbble  btn-social-dribbble"></i></button>
              </div>
        </div><!--aboutMeText-->

      </div><!--close aboutMeContent-->
    </div><!--close aboutMe-->


    <div class="d-block col-sm-12 getInTouch " id="getInTouch"><!--open getInTouch-->
        <div class="formDe col-sm-12 col-md-8">
            <h3>Get In Touch</h3>
            <h4>In order to get in touch use the contact form below:</h4>
        </div><!--close formDe-->

      <div class="form p-0 col-sm-12 col-md-8 float-md-left mr-md-4">
        
        <form name="myform" method="post" onsubmit="return validateform()" action="phpMail.php" require>
            <div class="form-group">
              <input type="text" name="name" class="form-control " id="inputlg" placeholder="Name (Required)" require>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control col-sm-12" id="inputlg" placeholder="Email (Required)" require>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control col-sm-12" id="inputlg" placeholder="Subject (Required)" require>
            </div>
            <div class="form-group">
              <textarea name="message" class="form-control" id="descText" rows="8" placeholder="Write your message here..."  require></textarea >
            </div>
            <div class="form-group">
              <button type="submit" value="SEND" class="btn">SEND</button>
            </div>
        </form>
      </div><!--close form-->
      <div class="contact col-sm-12 col-md-3 float-md-left">
        <div class="infoContact pb-md-4">
          <p  id="LR"> <span id="LB">Quisque Hendrerit:</span> purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus morbi vitae. </p>
        </div>

        <address pd-md-4><!-- open address -->
          <i class="icon-location icon1"></i>   Elm St. 14/05 Lost City <br/>
          <i class="icon-phone icon"></i>   + 3528 331 86 35 <br/>
          <i class="icon-mail-alt icon"></i>   info@hexalcorp.com
        </address><!--close address-->

      </div><!--close contact-->
    </div><!--close getInTouch-->

    <footer class="col-sm-12">
      <p>© Copyright 2013 by PSDchat</p>
    </footer>
        


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </div><!-- close row -->
</div><!--close container-->
</body>
</html>