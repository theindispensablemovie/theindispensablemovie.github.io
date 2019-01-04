<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" href="../imgs/myicon.png">

    <title> Pastor Percy Lesole </title>

    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="js/all.js"></script>
  </head>
  <body>
    <div id="modal" class="modal">
      <div class="modal-content">
        <span id="closeBtn" class="closeBtn">&times;</span>
        <div id="modal-body" class="modal-body">
        </div>
      </div>
    </div>

      <nav>
        <ul>
          <li> <a href="http://localhost/projects/pastorpercy/">Home</a></li>
          <li> <a href="http://localhost/projects/pastorpercy/podcast">Podcast</a></li>
          <li> <a href="http://localhost/projects/pastorpercy/gallery" class="active">Gallery</a></li>
        </ul>
      </nav>

      <section class="images">
        <div class="grid-4">
          <?php for($i = 1; $i<=3; $i++): ?>
            <div class="image">
              <a href="#" onclick="thisfunction(<?php echo $i ?>);"><img src="images/<?php echo $i.'.jpg'; ?>" id="<?php echo $i; ?>"></a>
            </div>
          <?php endfor; ?>
        </div>
        <div class="grid-2">
          <div>
            <a href="#" onclick="thisfunction(4);"><img src="images/4.jpg" id="4"></a>
          </div>
          <div >
            <div class="grid-2">
              <?php for($i = 5; $i<=11; $i++): ?>
                <div class="image">
                  <a href="#" onclick="thisfunction(<?php echo $i; ?>);"><img src="images/<?php echo $i.'.jpg'; ?>" id="<?php echo $i; ?>"></a>
                </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="gallery">
        <?php
          // $imgs = array('imgs/1.jpg', 'imgs/2.jpg', 'imgs/3.jpeg', 'imgs/4.jpeg', 'imgs/5.jpeg', 'imgs/6.jpg');
        ?>

        <div class="grid-4">
          <?php //foreach ($imgs as $img): ?>
          <img src="<?php //echo $img; ?>" alt="">
          <?php //endforeach; ?>
        </div>

      </section> -->
  <script type="text/javascript">

  var img_id;
    function thisfunction(idd){
      console.log(idd);
      var modal = document.getElementById("modal");
      modal.style.display = "block";
      document.getElementById("modal-body").innerHTML = "<img src='images/"+idd+".jpg'/>";
    }


    var modal = document.getElementById('modal');
    var closeBtn = document.getElementById('closeBtn');

    closeBtn.addEventListener("click", function(){
      modal.style.display = "none";
    });

    modal.addEventListener("click", function(){
      document.getElementById("modal-body").innerHTML("<img src='imgs/'"+img_id+".jpg'>");
      modal.style.display = "block";
    });

  </script>
  </body>
</html>
