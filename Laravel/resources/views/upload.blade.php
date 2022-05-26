<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Resim Upload</title>
</head>
<body>
<form action="{{route('yukle')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Resim Seçiniz</label><br>
    <input type="file" name="resim"><br>
    <input type="submit" name="ilet" value="Resim Yükle">
</form>

</body>
</html>
