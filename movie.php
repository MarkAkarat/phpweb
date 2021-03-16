<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <?php
    $jsonfile = file_get_contents("movies.json");
    ?>


    <select id="year_movie" onchange=""> 
    </select>

    <script type="text/javascript">
    var jsonEx =<?php echo $jsonfile; ?>;
    for(var n=0;n<jsonEx.length;n++){
        document.write("<option value"+ n +">"+jsonEx[n]);
    }

    function show(){
        var str = "";
        var year = document.getElementById("year");
        var cast = document.getElementById("cast");
        var genres = document.getElementById("genres");
        var title = document.getElementById("year.movie");
        var titleValue = title.options
    }
    </script>
    <div id="output"></div>
</body>

</html>