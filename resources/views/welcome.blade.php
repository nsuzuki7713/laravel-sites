<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-design-blocks/1.0.2/css/froala_blocks.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
<header data-block-type="headers" data-id="4">
    <div class="container">
        <nav class="navbar">
            <a href="/"><button class="btn" type="button">HOME</button></a>
        </nav>
    </div>
</header>
<section class="fdb-block" style="padding-bottom:0px" data-block-type="contents" data-id="1" draggable="true">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-5">
                <h1>アイデア共有</h1>
                <p class="text-h3">
                ジェームス･Ｗ･ヤング（米最大広告代理店･最高顧問）は、「アイデアとは既存の要素の新しい組み合わせ以外の何ものでもない」と明言しています。
                つまり、アイデアの元となる素材はすでに世の中に存在していて、重要なことは、それらの新たな組み合わせを“見出すこと”なのです。
                </p>
                <a href="/regist"><button type="button" class="btn btn-primary">アイデア投稿</button></a>
            </div>
            <div class="col-12 col-md-6 ml-md-auto mt-4 mt-md-0">
                <img alt="image" class="img-fluid" src="/image/business_idea_share.png">
            </div>
        </div>
    </div>
</section>
<section class="fdb-block" style="padding:20px 40px" data-block-type="features" data-id="2" draggable="true">
    <div class="container">
        <div class="row text-left">
            @foreach($items as $item)
            <div class="col-12 col-md-8 m-auto col-lg-4">
                <div class="fdb-box fdb-touch">
                    <h2>{{$item->item1}} ✕ {{$item->item2}}</h2>
                    <p>{{$item->title}}</p>
                    <p>{{$item->detail}}</p>
                    <div><a href="/detail/{{$item->id}}">Read more</a></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<footer class="fdb-block footer-small fp-active" data-block-type="footers" data-id="3">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="col-12 col-sm-6 col-md-4 text-sm-left">
                <!-- <img alt="image" src="https://editor-latest.s3.amazonaws.com/design-blocks/block_images/img_logo.png" height="40"> -->
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0 text-center text-sm-right text-md-center">
                © 2013-2017 Froala
            </div>

            <div class="col-12 col-md-4 mt-4 mt-md-0 text-center text-md-right">
                <a href="https://www.froala.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;
                <a href="https://www.froala.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;
                <a href="https://www.froala.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;&nbsp;
                <a href="https://www.froala.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a>&nbsp;&nbsp;
                <a href="https://www.froala.com"><i class="fa fa-google" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
