<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Poll Mangement</title>
</head>

<body>
    <h1 class="bg-primary text-white text-center">Online POLL</h1>
    <div class="container">
        <h1>Result of Poll</h1>

        <div class="card border-3 border-primary">
            <div class="bg-primary text-white">
                <h3>Question: {{ $pollData['que']  }} </h3>
            </div><br>
            <label>
                <h6>( Option 1 ) {{$pollData['ans1'] }}</h6>
            </label>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo round(($pollData['vote1'] / $pollData['total']) * 100, 2); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <?php echo round(($pollData['vote1'] / $pollData['total']) * 100, 2); ?>%
                </div>
            </div><br>
            <label>
                <h6>( Option 2 ) {{$pollData['ans1'] }}</h6>
            </label>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width:<?php echo round(($pollData['vote2'] / $pollData['total']) * 100, 2); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <?php echo round(($pollData['vote2'] / $pollData['total']) * 100, 2); ?>%
                </div>
            </div><br>
            <label>
                <h6>( Option 3 ) {{$pollData['ans1'] }}</h6>
            </label>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width:<?php echo round(($pollData['vote3'] / $pollData['total']) * 100, 2); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <?php echo round(($pollData['vote3'] / $pollData['total']) * 100, 2); ?>%
                </div>
            </div><br>
            <label>
                <h6>( Option 4 ) {{$pollData['ans1'] }}</h6>
            </label>
            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width:<?php echo round(($pollData['vote4'] / $pollData['total']) * 100, 2); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <?php echo round(($pollData['vote4'] / $pollData['total']) * 100, 2); ?>%
                </div>
            </div><br>

        </div>
        <a href="/">
            <div class="btn btn-primary mt-2">Back</div>
        </a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>