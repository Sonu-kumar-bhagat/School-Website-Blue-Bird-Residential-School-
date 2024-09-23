<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Carousel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include Splide.js library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/js/splide.min.js"></script>

    <style>
        /* Add some styling to make the carousel visible */
        #videoCarousel {
            margin: 0 auto; /* Center the carousel */
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            overflow: hidden;
            background: #f1f1f1; /* Fallback color */
            border-radius: 8px;
        }

        .video-container iframe,
        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="w-[80%] container mx-auto py-8">
    <div id="videoCarousel" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <!-- Embedded YouTube video -->
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/e15m1A77dUQ?si=SJeG1yilmFtcSHjR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </li>
              
                <?php
                $url = 'videoCrousel.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $characters = json_decode($data); // decode the JSON feed
                foreach ($characters as $value) {
                    ?>
                <li class="splide__slide">
                    <!-- Local video file -->
                    <div class="video-container">
                        <video src="<?php echo $value->videoUrl ?>" controls></video>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>

<script>
    // Initialize Splide carousel
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#videoCarousel', {
            type       : 'loop',
            perPage    : 3,
            perMove    : 1,
            autoplay   : true,
            interval   : 3000,
            gap        : '1rem',
            breakpoints: {
                640: {
                    perPage: 1,
                }
            }
        }).mount();
    });
</script>

</body>
</html>
