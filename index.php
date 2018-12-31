<?php
require_once 'dbconnect.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <!--    Bootstrap css -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <title>ToDo</title>
</head>
<body>
<div class="page-wrapper">
    <div class="container-fluid bg-dark text-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9">
                    <nav class="navbar navbar-dark">
                        <a class="navbar-brand">HoneyHunters</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-9 text-center alert1">
                    <img width="150" height="auto" src="public/img/letter.png" alt="letter">
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Имя <span class="star">*</span></label>
                        <input type="text" class="form-control bg-dark text-light name" id="formGroupExampleInput"
                               name="nameValue">
                    </div>
                    <div class="form-group mt-4">
                        <label for="formGroupExampleInput2">E-Mail <span class="star">*</span></label>
                        <input type="text" class="form-control bg-dark text-light email" id="formGroupExampleInput2"
                               name="emailValue">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <label for="formGroupExampleInput3">Комментарий <span class="star">*</span></label>
                        <textarea class="form-control bg-dark text-light comment" id="formGroupExampleInput3"
                                  rows="5" name="commentValue"></textarea>
                    </div>
                </div>
                <div class="col-9 text-right bg-dark mb-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger send">Записать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h3>Выводим комментарии</h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 card-deck d-flex justify-content-center">
                <?php
                $sql = "SELECT * FROM comments order by id DESC";
                $cards = $pdo->query($sql)->fetchAll(PDO::FETCH_OBJ);

                foreach ($cards as $card) {
                    ?>
                    <div class="mt-3 child">
                        <div class="card" style="width: 15rem;">
                            <div class="card-header text-center text-light bg-success">
                                <?php echo $card->username ?>
                            </div>
                            <div class="card-body">
                                <p class="font-weight-bold text-center"><?php echo $card->email ?></p>
                                <p><?php echo $card->comment ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark mt-5">
        <div class="row justify-content-center ">
            <div class="col-7 d-flex align-items-center justify-content-between">
                <div class="navbar navbar-dark">
                    <a class="navbar-brand text-light">HoneyHunters</a>
                </div>
                <div class="justify-content-around">
                    <a href="https://www.searchengines.ru/vk-music-i-boom.html"><img src="public/img/vk.png"
                                                                                     alt="vk"></a>
                    <a href="https://riafan.ru/1135994-facebook-okonchatelno-utratil-doverie-svoikh-polzovatelei"><img
                                src="public/img/fb.png" alt="facebook"></a>
                </div>

            </div>
        </div>

    </div>
</div>
<script src="public/js/jquery-3.3.1.js"></script>
<script src="public/js/ajax.js">

</script>

<!--Bootstrap JS-->
<script src="public/js/bootstrap.js"></script>

</body>
</html>

