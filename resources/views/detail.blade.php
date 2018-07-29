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
<section class="fdb-block fp-active" style="padding:10px" data-block-type="contents" data-id="1" draggable="true">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8 text-center">
                <h1>{{$item->item1}}✕{{$item->item2}}</h1>
                <h2>{{$item->detail}}</h2>
                <p class="text-h3">{{$item->detail}}</p>
            </div>
        </div>
    </div>
</section>
<section class="fdb-block fp-active" style="padding:10px" data-block-type="contents" data-id="1" draggable="true">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8 text-left">
                @foreach($comments as $comment)
                <div class="border mb-2"><p class="text-h3">{{$comment->comment}}</p></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<form action="/detail/{{$item->id}}" method="post">
    {{ csrf_field() }}
    <section class="fdb-block" style="padding:10px" data-block-type="forms" data-id="2" draggable="true">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">
                <h1>コメント</h1>
                <div class="input-group mt-4 mb-4">
                <textarea name='comment' class="form-control" cols="50" rows="2"></textarea>
            </div>
            <input type="hidden" value="{{$item->id}}" name="relation_id">
            <input type="submit" value="投稿" class="btn" type="button">
        </div>
        </div>
    </div>
    </section>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
