<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Img viewer</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <div class="left">
        <?php
        $files = json_decode(require_once __DIR__ . '/api/get_files.php', true);
        for ($i = 0; $i < count($files); $i++) {
            echo '<div class="img" style=\'background-image:url("https://picsum.photos/id/' . $files[$i]['id'] . '/250/250")\'>
            <div id="' . $files[$i]['id'] . '" class="img_hover"><span class="by">By: ' . $files[$i]['author'] . '</span></div>
            </div>';
        }
        ?>
    </div>

    <div class="right"></div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>