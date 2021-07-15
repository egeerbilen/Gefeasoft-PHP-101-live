<!DOCTYPE html>
<html lang="tr">
<?php
include "head.php";
?>

<body>
    <h1>Ana Sayfadayız</h1>
    <?php
    $email = "ege@gmail.com";
    $pw = "asd";

    if (isset($_POST["email"]) && $_POST["pw"]) { // isset var ise demek
        if ($_POST["email"] == $email) {
            if ($_POST["pw"] == $pw) {
                echo "Sitemize Hoşgeldiniz: " . $email . "<br><br>";
                echo '<a href="logout.php"><button type="button" class="btn btn-danger">Çıkış</button></a>';
            } else {
                echo "Şifre hatalı";
                header("Location: index.php?info=1");
            }
        } else {
            echo "Email tekrar kontrol ediniz";
            header("Location: index.php?info=2");
        }
    } else {
        echo "İzinsiz giriş tespiti";
        header("Location: index.php?info=3");
    }

    ?>
</body>

</html>