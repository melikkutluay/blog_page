<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
    <title>{{$post->title}}</title>
</head>
<body>
<div class="col-lg-2" style="background: #0d3625"></div>

<div class="col-md-8">
    <div>
        <img src="{{$post->image_link}}" alt="">
    </div>
    {{$post->title}}
    <br>
    {{$post->content}}
</div>

<div class="col-md-2"></div>
</div>
</body>
</html>
