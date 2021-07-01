<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        #ques{
            min-height: 433px;
        }
    
    </style>
    <title>Welcome to Discussion forum</title>
</head>

<body>
    <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/_header.php' ; ?>



    <?php
$api=file_get_contents("https://newsapi.org/v2/top-headlines?sources=google-news-in&apiKey=c3abf70a24f94cefa68de39a0d7629c2");
$news=json_decode($api,true);
?>

<?php foreach($news['articles'] as $value) {?>
<section>
<div class="card mb-3" style="max-width: 1900px; " >
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-block ">
            <h4 class="card-title"><?=$value['title']?></h4>
            <p class="card-text"><?=$value['publishedAt']?></p>
            <p class="card-text"><?=$value['description']  ?></p>
            <a href="<?=$value['url']?>" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img class="card-img-bottom" src=<?=$value['urlToImage']?> height=300px width=600px alt="" title="">
      </div>
    </div>
  </div>
  <?php }  ?>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>