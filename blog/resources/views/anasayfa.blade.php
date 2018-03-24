<link rel="stylesheet" href="bootstrap/css/navbar.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
<script src="//bootstrap/javascript/backsubmit.js"></script>
<!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>MyBlogPage</title>
</head>
<body>
<div    @include('navbar')</div>
    <section id="blog-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                        @foreach($posts as $post)
                            <div>
                                <hr>
                                <a href="/{{($post->id)}}">
                                <img src="{{$post->image_link}}" class="img-responsive">
                                </a>
                            </div>
                            <div class="content-title">
                                <div class="text-center">
                                    <h3><a href="/{{$post->id}}">
                                                <li>{{$post->title}}</li>
                                            </a></h3>
                                </div>
                                <div class="navbar navbar-default">
                                    <p>
                                        <li>{{$post->summary}}</li>
                                        </p>
                                </div>
                            </div>
                            <span class="pull-right">
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i>  {{$post->comment_counter}} </a>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i>  {{$post->like_counter}} </a>
                                </span>
                            <div class="user-ditels">
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                    <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
</html>