<?php
session_start();

// include '/include/dbh.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>WELCOME JUNG</title>
    <script src="resizewindows.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script  src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    <script type="text/javascript">
    var imgg;
    // $('.image_id').click(function(){
    //
    //   imgsrc = "pic_small.png";
    //   var url = $(this).attr('target','_blank');
    //   window.open(url, "height=300,width=400");
    //   return false;
    //   });

      // var h= screen.height;
      // var w= screen.width;
      // document.getElementById('.image_id').onclick=function(){
      // window.open('pic_small.png', '_blank' , 'width='+w+', height='+h+'');
    // }
    function up(imgg){
      this.imgg= imgg;
    }
    function just(){
      imgsrc = "pic_small.png";
      imgg= window.open(imgsrc,null ,'height=300px, width= 400px ', true);
      up(imgg);

    }

    function view() {
        imgsrc = "pic_small.png";
        // var myWindow= window.open()
        //img.width;
        // img.height;
          // var magicimg= new Image();
          // magicimg.src = img.src;s
          // var padding = 20;
          // var winWidth = magicimg.width + padding;
          // var winHeight = magicimg.height + padding;
          // img.winWidth;
          // img.winHeight


        imgg  =window.open(imgsrc,null ,'height=300px, width= 400px ,location=0, titlebar=no, toolbar=no, menubar=no, resizable=1 ,status= 0');

        }




    //
    //   function picture(){
    //     var pic="https://www.plaque-de-pub.com/332-thickbox_default/plaque-metal-france.jpg";
    //     var img = document.getElementById('bigpic');
    //     var target = document.querySelector('#big');
    //
    //    if(target.value == 'buttonon'){
    //      img.src = pic.replace('90*90','225*225');
    //      img.style.display='block';
    //      target.value = 'buttondown';}
    //    else{
    //      img.src = null;
    //      img.style.display='none';
    //      target.value = 'buttonon';
    //
    //   }
    // }


    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    </script>



  </head>
  <body>
    <div class="sidebar" style="display:none" id="mySidebar">
      <button onclick="w3_close()" class="closebutton">Close &times;</button>
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>

      <section >
        <div>
          <a href="#" >Login</a>
          <div>
            <form action="includes/process.php" method="POST">
              <div id=first>
                <p2>id</p2>
              </div>
              <div>
                <input  type="text" name="id" placeholder="Username/e-mail" />
              </div>
              <div id=first>
                <p2>password</p2>
              </div>
              <div>
                <input type="text" name="password" placeholder="password" />
              </div>
              <div id=buttonlogin>
                <button class="loginbutton" type="submit" name="submit">Login</button>
              </div>
            </form>

          </div>
        </div>
      </section>
    </div>

    <div id="titlle" >
      <div id="letter" >
      <a href="inscription.php" >LEEJUNGMIN</a>
      </div>
    </div>
    <div id="secondtitle">
      <div id="left"> "Bon Jour!!"</div>
      <div id="right">
     <button id="bigg" onclick="w3_open()">☰</button>
     <!-- <input type="button" id="bigg"  value="☰" onclick="w3_open()"> -->
      <!-- <input type="button" id="big"  value="buttonon" onclick="picture()"> -->
    </div>
    </div>
    <div >
      <img id="bigpic" src="bigpic" vertical-align="text-bottom"  style="display:none;"/>
      <!--  ';lkjvok <a href="mailto:joe@example.com?subject=feedback">email me</a>'<input type="button" id="rock"   > -->

    </div>
    <div class="clearfix">
      <div class="img-container">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAFVBMVEX///8AI5XtKTkAFJJ6gbrzg4ntHTC7o1gDAAAA/klEQVR4nO3QSQ0AIAADsHH6l4yKPUhaCc2oWTs9586aOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHy4ckD5KrN4eD2boIAAAAASUVORK5CYII=" alt="France";>
        <h2>Drapeau Francais</h2>
        <p>Salut , c'est une drapeau francais!</p>
      </div>
      <div class="img-container">
        <img src="https://atiyeafarinan.com/wp-content/uploads/2018/05/Francelife.jpg"
        alt="tour eiffel" >
        <h2>Drapeau Francais</h2>
        <p>Salut , c'est une drapeau francais!</p>

      </div>
      <div class="img-container">
        <img
        src="https://www.globalpartnership.org/sites/default/files/styles/1400x640/public/france-banner-mobile_0.jpg?itok=UWM_Ky1R"
        alt="louvre" >
        <h2>Drapeau Francais</h2>
        <p>Salut , c'est une drapeau francais!</p>
      </div>

    <div class="img-container">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAFVBMVEX///8AI5XtKTkAFJJ6gbrzg4ntHTC7o1gDAAAA/klEQVR4nO3QSQ0AIAADsHH6l4yKPUhaCc2oWTs9586aOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHixIkTJ06cOHHy4ckD5KrN4eD2boIAAAAASUVORK5CYII=" alt="France" >
      <h2>Drapeau Francais</h2>
      <p>Salut , c'est une drapeau francais!</p>
    </div>
    <div class="img-container">
      <img src="https://atiyeafarinan.com/wp-content/uploads/2018/05/Francelife.jpg"
      alt="tour eiffel" >
      <h2>Drapeau Francais</h2>
      <p>Salut , c'est une drapeau francais!</p>
    </div>
    <div class="img-container">
      <img
      src="https://www.globalpartnership.org/sites/default/files/styles/1400x640/public/france-banner-mobile_0.jpg?itok=UWM_Ky1R"
      alt="louvre">
      <h2>Drapeau Francais</h2>
      <p>Salut , c'est une drapeau francais!</p>
    </div>

    <script type="text/javascript">
    //
    // var imgg=;
    // //Stockphotos JS
    // imgsrc = "pic_small.png";
    // imgg= window.open(imgsrc,null ,'height=300px, width= 400px ', true);
    //
    //
    // $(document).ready(function(){
    //   $(#imag).click(function() {
    //
    //     $imggg=imgg.document;
    //     $imgggg = $imggg.find("img");
    //     $imgggg.css({"width":"800px","height":"auto"});
    //       // $img.css({"width": "800px", "height": "800px"});
    //   });​
    // });

    // $(document).ready(function(){
    // $("#imag").click(function(){
    //     $(this).hide();
    // });
    // });

    $(document).ready(function(){
      $('#imag').click(function(){

        var img = $(this).attr("src");
        // var appear = "<div id='appear_div' onclick='closeImage()'></div>";
        appear=appear.concat("<img id='appear' src='"+img+"'/");
        // appear=appear.concat("<img id='close_image' onclick='closeImage() src='pic_small.png'/>");
        $('body').append(appear);

        // $imggg=imgg.document;
        // $imgggg = $imggg.find("img");
        // $imgggg.css({"width":"800px","height":"auto"});
          // $img.css({"width": "800px", "height": "800px"});
      });​
    });
    function closeImage(){
      $('#appear_div').remove;
      $('#appear').remove;
    }

    </script>

    <div>
    <img  id="imag" src="pic_small.png"  />
    </div>
    <!-- <div>

      <IMG class='image_id' SRC="pic_small.png"  onclick=view(); >
      </div> -->
</div>

<div class="footer">
  <h2> JUNGMIN</h2>
</div>

  </body>

</html>

<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_website_layout_blog -->
<!-- https://www.w3schools.com/jsref/dom_obj_meta.asp -->
<!-- https://stackoverflow.com/questions/3139811/how-to-link-an-image-and-target-a-new-window -->
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_push -->
<!-- https://css-tricks.com/open-a-window-with-full-size-unscaled-image/ -->
