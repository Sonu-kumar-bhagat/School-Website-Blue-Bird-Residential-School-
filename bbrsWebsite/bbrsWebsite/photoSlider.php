<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .button-container {
            position: fixed;
            bottom: 10px;
            right: 10px;
        }
    </style>
</head>

<body class="bg-gray-100 w-[80%] mb-10">

    <h2 class="text-2xl font-bold text-center">Gallery of Blue Bird Residential School</h2>
    <div class="scroll-container whitespace-nowrap overflow-x-auto py-2 px-10 w-full mx-auto">
        <?php
        $url = 'header.json'; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data); // decode the JSON feed
        foreach ($characters as $value) {
            ?>
            <img src="<?php echo $value->imageURL ?>" alt="Cinque Terre" class="inline-block p-4 h-96" width="600">
            <?php
        }
        ?>


</div>
<a href="gallery.php" type="button" class=" m-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">View All Image</a>


</body>

</html>
