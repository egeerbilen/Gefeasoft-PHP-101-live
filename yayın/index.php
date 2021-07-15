<!DOCTYPE html>
<html lang="tr">
<!--  dil örnek en  -->
<?php
include "head.php"; //başka bir sayfayı bu sayfaya dahil etme
?>

<body>
    <!-- Comment Line -->

    <?php

    // string metin ifadeleri 
    // int sayı değerleri için
    // boolean true ve false değerlerini alır

    //string
    /*
    $val = "gefa";
    $val2 = "soft";
    echo "<h1>merhaba</h1>" . $val . " " . $val2 ?>
    */

    /*
    $val = "2";
    $val2 = "2";
    echo "<h1>merhaba</h1>" . $val . $val2  // Php bunları bir string olarak düşünür ve yanyana yazar
    */

    /*
    $val = "2";
    $val2 = "2";
    echo "<h1>merhaba</h1>" . $val + $val2 //Php artık bir int değeri gibi davranır bu kodlara
    */

    /*
    $val = 2;
    $val2 = 2;
    echo "<h1>merhaba</h1>" . $val + $val2 //Php ile sayılar illaki tırnak içinde yazmak zorunda değiliz
    */

    /*
    $val = true;
    $val2 = false;
    echo "<h1>val</h1>" . $val; //Php de true da 1 değeri döndürür 
    echo "<h1>val2</h1>" . $val2; // false de ise herhangi br değer gelmez
    */

    //Döngü
    /*
    for ($i = 0; $i < 10; $i++) {
        echo $i + 1 . " merhaba <br>";
    }
    */

    // for ve if
    /*
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) { // mod alma
            echo $i . " merhaba <br>";
        }
        if ($i == 5) {
            break; // döngüden çıkar
        }
    }
    */
    //bootstrap (Css Library)    


    ?>


    <form action="home.php" method="post">
        <div class="form-group">
            <label>Email adresi</label>
            <input type="email" class="form-control" name="email" placeholder="Enter alanı" required>
        </div>
        <div class="form-group">
            <label>Şifre</label>
            <input type="password" class="form-control" name="pw" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
    <br>
    <!-- <br> alt satıra geçmek için kullanılır -->
    <?php
    if (isset($_GET["info"])) {
        if ($_GET["info"] == 1) { ?>
            <div class="alert alert-danger" role="alert">
                Hatalı Şifre girişi
            </div>

        <?php }
        if ($_GET["info"] == 2) { ?>
            <div class="alert alert-danger" role="alert">
                Hatalı Email girişi
            </div>

        <?php }
        if ($_GET["info"] == 3) { ?>
            <div class="alert alert-danger" role="alert">
                İzinsiz giriş tespiti
            </div>
    <?php }
    }
    ?>

</body>

</html>