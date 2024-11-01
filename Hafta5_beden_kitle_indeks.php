<html>
<head>
    <meta charset="UTF-8">
    <title>BEDEN KİTLE İNDEKSİ</title>
</head>
<body>
  <h3>Vücut kitle indeksi hesaplama</h3>
   <form name="form" action="hafta5_bki.php" method="post">
      <table>
          <tr>
              <td>Adınız:</td>
              <td><input type="text" name="ad"></td>
          </tr>
          <tr>
              <td>Soyadınız:</td>
              <td><input type="text" name="soyad"></td>
          </tr>
          <tr>
              <td>Cinsiyetiniz:</td>
              <td><input type="radio" name="cinsiyet">Kadın
              <input type="radio" name="cinsiyet">Erkek</td>
          </tr>
          <tr>
              <td>Doğum Yılını Seçiniz:</td>
              <td><select name="dogum_yili">
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
              </select></td>
          </tr>
          <tr>
              <td>Boyunuz:</td>
              <td><input type="text" name="boy"></td>
          </tr>
          <tr>
              <td>Kilonuz:</td>
              <td><input type="text" name="kilo"></td>
          </tr>
          <tr>
              <td><input type="submit" name="hesapla" value="HESAPLA"></td>
          </tr>
      </table>
       
   </form>
    
</body>
</html>