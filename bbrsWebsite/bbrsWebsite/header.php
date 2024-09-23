<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


    <div class=" mx-auto">

        <div id="default-carousel" class="relative" data-carousel="static">

            <div class="overflow-hidden relative h-56  sm:h-64 xl:h-80 2xl:h-96">
                <!-- <div> -->
                <?php
                $url = 'header.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed
                foreach ($characters as $value) {
                    ?>
                    <div class="hidden duration-300 ease-in-out" data-carousel-item>
                        <span
                            class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer
                            Slide</span>
                        <img src="<?php echo $value->imageURL ?>"
                            class="object-cover  block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <?php
                $url = 'header.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed
                foreach ($characters as $value) {
                    ?>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                    <?php
                }
                ?>
            </div>

            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <!-- <span class="hidden">Anterior</span> -->
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </button>
        </div>
</body>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</html>