<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($mailData['flag']=='aprroved')
        <h1>{{$mailData['user']}}</h1>
        <h3>{{$mailData['title']}}</h3>
        <p>{{$mailData['body']}}</p>
        <p>دمتم بودٍ</p>
    @endif
</body>
</html>
