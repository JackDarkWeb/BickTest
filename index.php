<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bick Test of the interview</title>

    <style>

    </style>
</head>
<body>

<div class="container">


    <div class="">

        <h3 class="text-info">Test of the interview</h3>

        <h4>PHP + JS + HTML</h4>

        <p class="mb-5">
            Page for finding repositories on GitHub: you can set one or more rules <br/> and get a list of repositories
            that match those rules.
        </p>

        <form method="post" action="" class="mb-3" novalidate id="form">

            <table id="table" style="">

            </table>

            <div class="border-bottom" style="width: 600px"></div>


            <div class="mt-4">
                <button type="submit"  class="btn btn-primary" id="apply">Apply</button>
                <button type="reset" class="btn btn-warning" id="clear">Clear</button>
                <button class="btn btn-success" id="add" style="margin-left: 315px">Add Rule</button>
            </div>

        </form>

        <p class="mt-5">
            Fields:<br>
            Field - dropdown list (size, forks, stars, followers)<br/>
            Operator - dropdown list (more, less, equal)<br/>
            Value - value (integer)
        </p>

    </div>


    <div id="results"></div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery.js"></script>
</body>
</html>