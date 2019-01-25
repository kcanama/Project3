<!doctype html>
<html>
<head>
    <title>Project 3</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Ranchers" rel="stylesheet">
</head>
<body>
    <header class="container text-center">NYC STREET ART</header>
    <nav class="container navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav nav-fill">

                <a class="nav-item nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="gallery.php">GALLERY</a>
            </div>
        </div>
    </nav>
    <hr>
    <div class="container future">
        <div><b>Future work:</b></div>
            <ul>
            <li>Learn to filter elements by keys in array</li>
            <li>Learn to create user favorites list</li>
            <li>Learn to extract location from images to display on map</li>
            <li>Learn to optimally display images in site</li>
            </ul>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <?php
                $d = file_get_contents('data.json');
                $d = json_decode($d, true);
                foreach($d as $k => $o){
                    ++$k;
                    echo '
                        <div class="col-md-4">
                            <br>
                            <i class="far fa-star"></i><br><br>
                            <img class="img-fluid" src="assets/img/'.$k.'.jpg">
                            <br><br>
					       <b>Artist:</b> '.$o['artist'].'<br>
					       <b>Medium:</b> '.$o['medium'].'<br>
					       <b>Neighborhood:</b> '.$o['nabe'].'<br>
					       <b>Street:</b> '.$o['street'].'<br>
					       <b>Cross Street:</b> '.$o['xstreet'].'<br>
					       <b>Submitted by:</b> '.$o['user'].'<br><br>
                        </div>
                        ';
                    } 
            ?>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
