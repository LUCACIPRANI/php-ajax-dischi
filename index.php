<?php
include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Import BS per  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP-AJAX-Dischi</title>
</head>
<body>
    <div id="app">
        <!-- header  -->
        <header>
            <div>
                <img src="img/logo-spotify.png" alt="" />
            </div>
            <!-- CHOICE GENRE  -->
            <div class="select">
                <!-- GENRE  -->
                <select name="select">
                    <option value="">Select Genres</option>
                    <option value="Pop">Pop</option>
                    <option value="Pop">Rock</option>
                    <option value="Pop">Jazz</option>
                    </option>
                </select>
            </div>
        </header>
        <!-- main  -->
        <main>
            <div class="main-container">
                <div class="container">
                    <?php
                    foreach ($db as $item) {
                    ?>
                        <div class="card flex-center">
                            <div class="single-song flex-center">
                                <div class="image">
                                    <?php
                                    echo '<img src="' . $item['poster'] . '" alt="' . $item['title'] . '">';
                                    ?>
                                </div>
                                <h3 class="title">
                                    <?php
                                    echo $item['title'];
                                    ?>
                                </h3>
                                <div class="text">
                                    <span class="otherText d-block">
                                        <?php
                                        echo $item['author'];
                                        ?>
                                    </span>
                                    <span style="font-size:80%;" class="otherText d-block">
                                        <?php
                                        echo $item['year'];
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>

    <!-- Importazione BP per Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>