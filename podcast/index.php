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

  </head>
  <body>
      <nav>
        <ul>
          <li> <a href="http://localhost/projects/pastorpercy/">Home</a></li>
          <li> <a href="http://localhost/projects/pastorpercy/podcast" class="active">Podcast</a></li>
          <li> <a href="http://localhost/projects/pastorpercy/gallery">Gallery</a></li>
        </ul>
      </nav>

      <section class="music">
        <?php
          $audios = array(
            array('src' => '1.mp3', 'title' => 'A Prayer For You'), array('src' => 'grad_talk.mp3', 'title' => 'The Graduated Talk'), array('src' => 'in_the_beginning.mp3', 'title' => 'In The Beginning'), array('src' => 'the_life.mp3', 'title' => 'The Life'), array('src' => '10_in_1_challenge.mp3', 'title' => '10 In One Challenge'), array('src' => 'icplc.mp3', 'title' => 'International Campus Pastors And Leaders Conference')
          );
        ?>

        <div class="grid-3">
          <?php foreach ($audios as $track): ?>
            <div class="">
              <audio src="<?php echo $track['src']; ?>" alt="" controls ></audio>
              <h4><?php echo $track['title']; ?></h4>
            </div>
          <?php endforeach; ?>
        </div>

      </section>
  </body>
</html>
