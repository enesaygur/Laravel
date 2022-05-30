<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Üye Kayıt Formu</title>
</head>
<body style="background-color:darkcyan">
@if($errors->any())<!-- Hata değerlerini tutan laravel ifadesi -->
    <ul>
        @foreach($errors->all() as $hatalar)
            <li>{{$hatalar}}</li>
       @endforeach
    </ul>
@endif
<form action="{{Route('uyekayit') }}" method="post">
    @csrf        <!-- Token oluşturmak için kullanılır. Form işlemlerinde zorunlu. -->
    <label>Ad Soyad</label><br>
    <input type="text" name="adsoyad" ><br>
    <label>Telefon</label><br>
    <input type="text" name="telefon"><br>
    <label>E-Mail</label><br>
    <input type="text" name="mail"><br>
    <label>Mesaj</label><br>
    <input type="submit" name="ilet" value="Gönder">

</form>
</body>
</html>
