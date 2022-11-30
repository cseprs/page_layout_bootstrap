<?php
include('language.php');
                           $en_select='';
                           $hi_select='';
                           $language='';

if((isset($_GET['language']) && $_GET['language']== 'en') || !isset($_GET['language']))
{
$en_select='selected';
$language='en';
} else {
    $hi_select='selected';
    $language='hi';

}
?>

<html>
    <head>
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width,initial-scale=1"> 
   
        <title>Project on bootstrap</title>
<style>
#container_block{
    margin-top:20px;
}
#nav_bar{background-color:#fff; padding: 20px;}
#nav_bar ul{margin:0px; padding:0 px;}
#nav_bar li {
    list-style:none; 
    display: inline;
    margin-right: 10px;
    }
    #nav_bar li a{text-decoration:none; color: #000; font-weight:bold;}
    #nav_bar li a: hover {text-decoration: underline;}

    #nav_bar select{
        padding: 5px;
        
    }

    .fright{float: right;}

    
  footer {
	    display: block;
		text-align: center;
		padding: 3px;
		background-color: lightcyan;
		color: rgb(14, 3, 3);
	  }


</style>



    </head>


    <body>
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

        <!--start of navigation-->
        <div id="container_block">
<div id ="nav_bar">
<ul>
<li><a href="multilingual.php"> <?PHP echo $top_nav[$language] ['0'] ?></a></li>
<li><a href="#"><?PHP echo $top_nav[$language] ['1'] ?></a></li>
<li><a href="#"><?PHP echo $top_nav[$language] ['2'] ?></a></li>
<li class="fright">
 Language
<select onchange="set_language()" name="language" id="language">

    <option value="en" <?php echo $en_select?>>EN</option>
    <option value="hi" <?php echo $hi_select?>>HI</option>
</select>

</li>

</ul>
</div>
</div>
<!--end of navigation-->

    
  <!--beginning of carousel-->
  <div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <span lang="en" class="multilang">
                                        <h4 class="card-title">Card 1</h4>
                                    </span>
                                    <span lang="hi" class="multilang">
                                        <h4 class="card-title">कार्ड 1</h4>
                                    </span>
                                    <p class="card-text">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 2</h4>
                                    <p class="card-text">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 3</h4>
                                    <p class="card-text">Some make up the bulk of the card's content.Some make up
                                        the bulk of the card's
                                        content.Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Card 4</h4>
                                    <p class="card-text">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="carousel-inner-structure">
                                <div class="carousel-item-rotate">
                                    <h1>Lorem Ipsum</h1>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer
                                        took a galley of type and scrambled it to make a type specimen book. </p>
                                    <a href="https://wwww.github.com" class="default-btn-style-two btn-lg"><i
                                            class="flaticon-user"></i>LOGIN</a>
                                    <a href="https://wwww.google.com" class="default-btn-style-two btn-lg"><i
                                            class="flaticon-user"></i>SIGN
                                        UP</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="carousel-inner-structure">
                                <div class="carousel-item-rotate">
                                    <img src="adolescent-adult-dress-friendship.jpg" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#myCarousel"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#myCarousel"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

    </div>
</div>
  

   <!-- Start Partner Area -->
   <section class="partner-area mt-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  col-sm-12 col-md-12">
                <div class="text-center">
                    <img src="human-jump-luck-success.jpg" alt="ad" width="600" height="400" >
                </div>
            </div>
  
            
  
  </div>
        </div>
        </div>
    
  </section>
  <section class="partner-area mt-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-4 col-sm-4 col-md-4">
                <div class="d-flex align-items-start">
                    <img src="zan-X_JsI_9Hl7o-unsplash.jpg" class="img-fluid atto_image_button_text-bottom" alt="image" width="350" height="473">
                </div>
            </div>
  
  
  
            <div class="col-lg-3 col-4 col-sm-4 col-md-4">
                <div class="single-partner-item">
                    <img src="goran-ivos-TorAcb4AQRc-unsplash.jpg" alt="ad" width="350" height="473" class="img-fluid atto_image_button_text-bottom"  >
                </div>
            </div>
  
            <div class="col-lg-3 col-4 col-sm-4 col-md-4">
                <div class="single-partner-item">
                    <img src="kelly-sikkema-YK0HPwWDJ1I-unsplash.jpg" alt="lk" width="350" height="473" class="img-fluid atto_image_button_text-bottom"  >
                </div>
            </div>
            <div class="col-lg-3 col-4 col-sm-4 col-md-4">
              <div class="single-partner-item">
                  <img src="markus-spiske-MI9-PY5cyNs-unsplash.jpg" alt="lk" width="350" height="473" class="img-fluid atto_image_button_text-bottom"  >
              </div>
          </div>
  
  </div>
        </div>
        </div>
    
  </section>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script>
function set_language(){
var language=jQuery('#language').val();
window.location.href="http://localhost/multilingual_website/multilingual.php/?language="+language;

}
</script>


 <!-- Copyright -->
 <footer>
 
    <p>&copy; PARUL RANI SAGAR<br>
        <a href="mailto:cseprs@gmail.com">cseprs@gmail.com</a></p>

</footer>

   
</body>
</html>