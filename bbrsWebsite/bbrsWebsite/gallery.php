<!DOCTYPE html>
<html>
<script src="./tailwind.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<body>
<?php include './navbar.php'; ?>

<!-- Header -->
<div class="header ">
  <h1>Gallery</h1>
  <p>Blue Bird Residential School</p>
</div>

<!-- Photo Grid -->
<div class="row w-[80%] mx-auto"> 
  <div class="column">
  <?php
        $url = 'images/gallery/column1.json'; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data); // decode the JSON feed
        foreach ($characters as $value) {
            ?>
    <img src="<?php echo $value->imageURL ?>" style="width:100%">

    <?php
        }
        ?>
  </div>
  <div class="column">
  <?php
        $url = 'images/gallery/column2.json'; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data); // decode the JSON feed
        foreach ($characters as $value) {
            ?>
    <img src="<?php echo $value->imageURL ?>" style="width:100%">

    <?php
        }
        ?>

  </div>  
  <div class="column">
  <?php
        $url = 'images/gallery/column3.json'; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data); // decode the JSON feed
        foreach ($characters as $value) {
            ?>
    <img src="<?php echo $value->imageURL ?>" style="width:100%">

    <?php
        }
        ?>
  </div>
  <div class="column">
  <?php
        $url = 'images/gallery/column4.json'; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data); // decode the JSON feed
        foreach ($characters as $value) {
            ?>
    <img src="<?php echo $value->imageURL ?>" style="width:100%">

    <?php
        }
        ?>
  </div>
</div>
<?php include './footer.php'; ?>
</body>
</html>
