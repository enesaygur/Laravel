<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Örnek Resim Upload Sayfası</title>
</head>
<body>
<form action="{{route('yukle')}}" method="post" enctype="multipart/form-data">
    @csrf <!-- Token oluşturmak için kullanılır. Form işlemlerinde zorunlu. -->
    Resim:<input type="file" name="resim"><br>
    <input type="submit" name="ilet" value="Gönder">
</form>
</body>
</html>
