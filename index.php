<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پلتفرم ویدیو</title>
    <link rel="stylesheet" href="css/style.css"> <!-- لینک به فایل CSS -->
</head>
<body>

<!-- هدر صفحه اصلی -->
<header>
    <div class="logo">
        <h1>VideoPlatform</h1>
    </div>
    <div class="search-box">
        <input type="text" id="search" placeholder="جستجوی ویدیو..." onkeyup="searchVideos()">
    </div>
</header>

<!-- بخش اصلی که ویدیوها را نمایش می‌دهد -->
<main>
    <h2>ویدیوهای محبوب</h2>

    <div class="videos">
        <?php
        // پوشه فایل‌های JSON
        $dir = "data/";

        // خواندن فایل‌ها
        $files = scandir($dir);
        
        // پیمایش فایل‌ها
        foreach($files as $file) {
            if ($file != '.' && $file != '..') {
                // تبدیل JSON به آرایه PHP
                $videoData = json_decode(file_get_contents($dir . $file), true);
                
                // نمایش ویدیو
                echo '<div class="video">';
                echo '<img src="thumbnails/' . $videoData['thumbnail'] . '" alt="' . $videoData['title'] . '">';
                echo '<div class="video-info">';
                echo '<h3>' . $videoData['title'] . '</h3>';
                echo '<p>' . $videoData['description'] . '</p>';
                echo '<a href="watch.php?video=' . $videoData['file'] . '" class="btn-watch">مشاهده ویدیو</a>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </div>
</main>

<!-- پانویس صفحه -->
<footer>
    <p>© 2024 پلتفرم ویدیو | همه حقوق محفوظ است.</p>
    <div class="social-links">
        <a href="#">Instagram</a>
        <a href="#">Twitter</a>
        <a href="#">YouTube</a>
    </div>
</footer>

<script src="js/main.js"></script> <!-- لینک به فایل جاوا اسکریپت -->
</body>
</html>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- لینک به فایل CSS -->
    <title>نمایش ویدیو</title>
</head>
<body>

<header>
    <div class="logo">
        <h1>پلتفرم ویدیویی</h1>
    </div>
</header>

<main>
    <h2>ویدیوها</h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="videos/20240613_002141.mp4" type="video/mp4">
            مرورگر شما از این فرمت ویدیو پشتیبانی نمی‌کند.
        </video>
    </div>
</main>

<footer>
    <p>کپی رایت © 2024</p>
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- لینک به فایل CSS -->
    <title>نمایش ویدیو</title>
</head>
<body>



<main>
    <h2>ویدیوها</h2>
    <div class="video-container">
        <video controls width="640" height="360">
            <source src="videos/20240615_002950.mp4" type="video/mp4">
            مرورگر شما از این فرمت ویدیو پشتیبانی نمی‌کند.
        </video>
    </div>
</main>

<footer>
    <p>کپی رایت © 2024</p>
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- لینک به فایل CSS -->
    <title>پلتفرم ویدیویی</title>
</head>
<body>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- لینک به فایل CSS -->
    <title>پلتفرم ویدیویی</title>
</head>
<body>

<header>
    <div class="container">
        <h1>پلتفرم ویدیویی</h1>
    </div>
</header>

<main>
<div id="60677687952"><script type="text/JavaScript" src="https://www.aparat.com/embed/bpoqsmo?data[rnddiv]=60677687952&data[responsive]=yes"></script></div>
<div id="37987457494"><script type="text/JavaScript" src="https://www.aparat.com/embed/anw89n6?data[rnddiv]=37987457494&data[responsive]=yes"></script></div>
<rss version="2.0">
<channel>
<title>کانال کاتومی || محمد لطیفی پور</title>
<link>https://www.aparat.com/Katomi</link>
<description>ویدیو هایی که کانال کاتومی || محمد لطیفی پور منتشر کرده است</description>
<div id="30809851111"><script type="text/JavaScript" src="https://www.aparat.com/embed/bscn924?data[rnddiv]=30809851111&data[responsive]=yes"></script></div>
<div id="27437071729"><script type="text/JavaScript" src="https://www.aparat.com/embed/gstk11t?data[rnddiv]=27437071729&data[responsive]=yes"></script></div>
<div id="86008023474"><script type="text/JavaScript" src="https://www.aparat.com/embed/oowns11?data[rnddiv]=86008023474&data[responsive]=yes"></script></div>
<div id="31515114824"><script type="text/JavaScript" src="https://www.aparat.com/embed/cie8box?data[rnddiv]=31515114824&data[responsive]=yes"></script></div>
<div id="48243157495"><script type="text/JavaScript" src="https://www.aparat.com/embed/cksg82h?data[rnddiv]=48243157495&data[responsive]=yes"></script></div>



<item>
<footer>
    <div class="container">
        <p>کپی رایت © 2024</p>
    </div>
</footer>

</body>
</html>





</body>
</html>
