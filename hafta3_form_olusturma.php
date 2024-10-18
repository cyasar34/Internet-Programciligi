<html>

<head>
    <meta charset="utf-8">
    <title>Kullanıcı Ad Soyad Bilgisi</title>
</head>

<body>
    <form name="form" action="" method="POST">
        <table>
            <tr>
                <td>Adı:</td>
                <td><input type="text" name="ad"></td>
            </tr>

            <tr>
                <td>Soyadı:</td>
                <td><input type="text" name="soyad"></td>
            </tr>
            <tr>
                <td><input type="submit" name="gonder" value="Kaydet"></td>
            </tr>

        </table>

    </form>

</body>

</html>

<?php
            if(isset($_POST["gonder"]))
        {
            $ad=$_POST["ad"];
            $soyad=$_POST["soyad"];
            echo("Merhaba ".$ad." ".$soyad);
        }
        ?>
