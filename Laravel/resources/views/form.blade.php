<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Örnek Form Sayfası</title>
</head>
<body>
<form action="{{Route('sonuc') }}" method="post">
    @csrf <!-- Token oluşturmak için kullanılır. Form işlemlerinde zorunlu. -->
    <textarea name="metin" style="height: 200px;width: 300px;"></textarea><br>
    <input type="submit" name="ilet" value="Gönder">

</form>
</body>
</html>
