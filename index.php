<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" href="imgs/myicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Island+Moments&family=Licorice&family=The+Nautigal&display=swap" rel="stylesheet">
    <title> Pastor Percy Lesole </title>

    <link rel="stylesheet" href="styleHome.css">
   
  </head>
  <body>
      <nav>
        <ul>
          <li> <a href="https://theindispensablemovie.github.io/" class="active">Home</a></li>
          <li> <a href="https://theindispensablemovie.github.io/podcast">Podcast</a></li>
		      <li> <a href="https://theindispensablemovie.github.io/messages">Messages</a></li>
          <li> <a href="https://theindispensablemovie.github.io//gallery">Gallery</a></li>
        </ul>
      </nav>

      
     <!-- <section class="display-video"></section> -->
     <img src="imgs/face2.png" alt="">
     <span class="heading-name"><button class="btn" onclick="sayHappyBday();">Send A Birthday Message</button></span>

     <div>
      <a href="https://www.facebook.com/percyles" target="__blank"><i class="fab fa-facebook fa-3x"></i></a>
      <a href="https://www.instagram.com/pstpercy/" target="__blank"><i class="fab fa-instagram fa-3x"></i></a>
      <a href="https://www.youtube.com/channel/UC4fW14rIEx8OBYSz5S-oQvQ" target="__blank"><i class="fab fa-youtube fa-3x"></i></a>
    </div>

    <script>
      document.body.style.backgroundImage = 'url("imgs/ajax-loader.gif")';
      const sayHappyBday = () => {
        var nameInput = window.prompt("Enter Your Name:");
        if (nameInput != null){
          var message  = window.prompt("What is your message:");
        }

        if (message == null) return;

        var bdayMsg = {
          name: nameInput,
          msg: message
        }

        var myObj = null;

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
          myObj = JSON.parse(this.responseText);
          console.log(myObj);
          myObj["2022"].push(bdayMsg);

        }
        xmlhttp.open("GET", "https://theindispensablemovie.github.io/messages.json");
        xmlhttp.send();

        <?php
            file_put_contents('https://theindispensablemovie.github.io/messages.json', $obj);
            echo file_get_contents('https://theindispensablemovie.github.io/messages.json');
        ?>

      }
    </script>
  </body>
</html>
