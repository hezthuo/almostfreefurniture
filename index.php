
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="/css/style.css"></link>
  <link rel="stylesheet" href="resources/fonts/stylesheet.css" type="text/css" charset="utf-8" />

  <meta charset="utf-8">
  <title>AlmostFreeFurniture. Great funiture at unbelievably low prices!</title>
  <script src="js/javascript.js"> </script>
  </head>
    <body onload="randomImage()" >
      <?php include 'template.php';?>
        <h1 align="middle">almostfreefurniture</h1>
        <div align="middle"class="newsDimentions">
          <p>news</p>
          <!-- <?php
            $myfile = fopen("news.txt", "r") or die("Unable to open file!");
            echo "<p1 class='news', align='middle'>", fread($myfile,filesize("news.txt"));
            fclose($myfile);
          ?> -->
        </div><br>
        <div class="homeImage">
          <center><img id="randomImage"src="" width="50%"height="50%"></center>
        </div>
        <div class="info">
          <p align="justify"> Great furniture needn't cost an arm and a leg! We believe in great quality that won't break the bank. Don't believe us? Please look through our catalogue! Happy shopping!</p>
        </div>

        <form class="" action="upload.php" method="post">

        </form>

                <br><footer align="middle"><p>&copy; 2017 MINIMAL DESIGNS <p></footer>


    </body>
</html>
