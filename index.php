<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php 
        include('top.php');
    ?>

    <?php
        include('navigation.php');
    ?>

    <div id="slider">
            <button class="sButtons" id="sideButtonLeft"><</button>
                <div class="container align-self-center">
                        <div class="col-xl-6 offset-xl-3" id="bigLogo">We care about your business.</div>
                        <div class="col-xl-6 offset-xl-3" id="infoLogo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum, porro!</div>
                        <button class="sButtons" id="aboutButton">ABOUT US</button>
                </div>
           <button class="sButtons" id="sideButtonRight">></button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $( document ).ready(function() {
        $(".link").each(
            function()
            {
                $(this).removeClass("active");
            }
        )
        $("#index").attr("class", "link active");
    });
</script>

</body>
</html>
