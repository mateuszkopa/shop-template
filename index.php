<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Mateusz 'k0pa' Kopaszewski">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&family=M+PLUS+1+Code:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #242729;
            font-family: 'Kanit', sans-serif;
        }
        @media (max-width: 899px) {
            body {
                font-family: 'M PLUS 1 Code', sans-serif;
            }
        }
        @media (min-width: 900px) {
            .navbar-brand {
                font-size: 30px;
            }
            .text {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Shop</a>
            <div class="navbar-nav">
                <a href=""><i class="bi bi-cart2"></i></a>
            </div>
        </div>
    </nav>

    <section>
        <div class="products">
        <?php
        $image = ["kot.jpg", "pies.jpg", "chomik.jpg", "ryba.jpg", "kot2.jpg"];
        $title = ["Cat", "Dog", "Hamster", "Fish", "Another cat"];
        $price = [10, 30, 70, 5, 13];
        $n = count($title);
        for ($i = 0; $i < $n; $i++) {
            echo "
            <div class='item'>
               <img class='photo' id='produkt$i' onclick='cart$i()' src='image/$image[$i]'>
                  <div class='text'>
                      <p class='description'><b>$price[$i] zł</b></p>
                      <p class='title'><b>$title[$i]</b></p>
                  </div>
            </div>";
        }
        ?>

        </div>
    </section>

    <footer>
        <figure class="text-center">
            <figcaption class="blockquote-footer">
                <p>© Site by <a href="https://github.com/mateuszk0pa">Mateusz Kopaszewski</a> | All rights reserved</p>
            </figcaption>
        </figure>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <?php
    for ($j = 0; $j < $n; $j++) {
        echo "<script>function cart$j() {document.cookie = 'produkt$j = 1';}</script>";
    }
    ?>
<!--
      ██     ██
    ██        ██
    ██      ██
      ██    ██
      ██      ██
 ██////////////////██████
 ██////////////////██||██
 ██/Coffee by k0pa/██||██
 ██////////////////██████
  ██//////////////██
████████████████████████
██////////////////////██
  ████████████████████
-->
</body>
</html>