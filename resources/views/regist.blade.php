<!DOCTYPE html>
<html lang="ja">
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
<form action="/regist" method="post">
    {{ csrf_field() }}
    <section class="fdb-block fp-active" data-block-type="forms" data-id="1" draggable="true">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-7 col-md-5 text-center">
                    <div class="fdb-box fdb-touch">
                        <div class="row">
                            <div class="col">
                                <h1>投稿</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-4">
                                <input type="text" name="item1" class="form-control" placeholder="項目1">
                            </div>
                            <div class="col mt-4">
                                ✕
                            </div>
                            <div class="col mt-4">
                                <input type="text" name="item2" class="form-control" placeholder="項目2">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <input type="text" name="title" class="form-control" placeholder="タイトル">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <textarea class="form-control mb-1" name="detail" placeholder="アイディア入力" cols="50" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <input type="submit" value="投稿" class="btn" type="button">
                        </div>
                    </div>
                </div>
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
