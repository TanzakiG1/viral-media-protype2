<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/jquery-3.2.1.min%20-%20Copy.js">
    <link rel="stylesheet" href="assets/app.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="list_gaps">
                    <?php
                        $article_json= file_get_contents("media-items.json");
                        $articles = (json_decode($article_json));
                        foreach ($articles as $article){
                            echo"<div class='gaps-items'>";
                            echo "<h4 class='gaps-title'> $article->title</h4>";
                            if($article->type === "image"){
                                echo"<div class='gaps-image'>
                                    <img src='$article->media_source' alt=''>
                                    </div>";}
                                echo"
<div class='counts'>
    <span class='like'>100 like</span>
    -
    <span class='comment'>100 comment</span>
    <div class='actions'>
        <div class='actions-turn-left pull-left'>
             <span class='btn btn-default btn-like'>
                <span class='glyphicon glyphicon-chevron-up'></span>
             </span>
             <span class='btn btn-default btn-unlike'>
                <span class='glyphicon glyphicon-chevron-down'></span>
        </span>
            <span class='btn btn-default btn-comment'>
                   <span class='glyphicon glyphicon-comment'></span>
            </span>
            </div>
        <div class='action-turn-right pull-right' >
            <span class='btn btn-default btn-facebook'>
                Facebook
            </span>
            <span class='btn btn-default btn-twitter'>
                 Twitter
            </span>
        </div>    
    </div>
</div>
    <div style='clear: both'></div>
";



                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>
</body>
</html>