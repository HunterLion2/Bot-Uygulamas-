<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $veri = file_get_contents("https://bigpara.hurriyet.com.tr/altin/izmir-altin-fiyatlari/");


    preg_match_all('@<span class="box bFirst">(.*?) (.*?)<span class="box">@si', $veri, $dlinkcek);

    $toplam = $dlinkcek[2][0]; // Burada girilen değer dizinin 3. değerinin ilk değerini bana ver demektir.

        // Veri çekilip çekilmediğini ekrana yazdır
        echo '<h3>Çekilen ham veri:</h3>';
        echo '<h3>Altın Fiyatı:</h3>';
        echo $toplam;

    ?>

</body>

</html>