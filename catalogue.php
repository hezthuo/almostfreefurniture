<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/style.css"></link>
    <link rel="stylesheet" href="resources/fonts/stylesheet.css" type="text/css" charset="utf-8" />
    <script src="js/javascript.js"> </script>
  </head>
  <body>
    <?php include 'template.php';?>
    <ol >
      <li onclick="productInformation(this.id)"id="cheaptableX800"name="cheapTable">Cheap table X800</li>
      <li onclick="productInformation(this.id)"id="luxuryTable"name="luxuryTable">Luxury table Z2100</li>
      <li onclick="productInformation(this.id)"id="chair101"name="chair101">Chair 101</li>
    </ol>
      <div class="productDisplay"style="display:none"id="cheapTableDetails">
        <center><img src="/supportFiles/1.jpg" width=50% height="50%"alt=""></center>
        <p class="description">Product 1
          ID: 200
          Name: Cheap table X800
          Description: This is the cheapest table you can find that still meets its goal. 4 people max.
          </p>
      </div>
      <div class="productDisplay"style="display:none"id="productDiv">
        <center><img src="/supportFiles/2.jpg" width=50% height="50%"alt=""></center>
        <p class="description">Product 2
          ID: 201
          Name: Luxury table Z2100
          Description: A long table, suitable for a meeting room.
          </p>
      </div>
      <div class="productDisplay"style="display:none"id="chair101Details">
        <center><img src="/supportFiles/3.jpg" width=50% height="50%"alt=""></center>
        <p class="description">Product 3
          ID: 202
          Name: Chair 101
          Description: A very basic but functional chair.
          </p>
      </div>
  </body>
</html>
