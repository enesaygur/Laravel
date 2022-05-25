<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>İletişim Formu</title>
</head>
<body style="background-color:darkcyan">
<form action="{{Route('iletisim-sonuc') }}" method="post">
    @csrf        <!-- Token oluşturmak için kullanılır. Form işlemlerinde zorunlu. -->
    <label>Ad Soyad</label><br>
    <input type="text" name="adsoyad"><br>
    <label>Telefon</label><br>
    <input type="text" name="telefon"><br>
    <label>E-Mail</label><br>
    <input type="text" name="mail"><br>
    <label>Mesaj</label><br>
    <textarea name="metin" style="height: 200px;width: 300px;"></textarea><br>
    <input type="submit" name="ilet" value="Gönder">

</form>
</body>
</html>
