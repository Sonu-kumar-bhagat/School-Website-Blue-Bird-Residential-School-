<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <script src="./tailwind.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

</head>

<body>

    <?php include './navbar.php'; ?>
    <h5 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black w-[80%] mx-auto underline">
        Faculty Member</h5>
    <div class="flex flex-wrap w-[80%] mx-auto p-2 gap-2">

        <?php
        $url = 'faculty.json'; // path to your JSON file
        $data = file_get_contents($url); // put the contents of the file into a variable
        $characters = json_decode($data); // decode the JSON feed
        foreach ($characters as $value) {
            ?>
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-neutral-800 dark:border-neutral-700">

                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?php echo $value->imageURL ?>"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?php echo $value->name ?></h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400"><?php echo $value->qualification ?></span>
                    <span class="text-sm text-gray-500 dark:text-gray-400"><?php echo $value->class ?></span>
                    <div class="flex mt-4 md:mt-6">
                        <a href="tel:+918434245201"
                            class=" m-2 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Phone</a>
                        <a href="mailto:bluebirdresidentialschool@gmail.com"
                            class=" m-2 py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Email</a>
                    </div>
                </div>

      

        </div>
        <?php
        }
        ?>
    </div>
    <?php include './footer.php'; ?>
</body>

</html>