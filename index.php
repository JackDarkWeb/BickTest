<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        #field, #operator, #value{
            width: 150px;
        }

        #hr{
            border: 0.5px solid gray;
            width: 700px;
        }
        #add{
            margin-left: 342px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class=" mt-4" id="form-div">
       <form method="post" action="" id="form">
           <table>
               <tr id="row-default">
                   <td>
                       <select name="field" class="custom-select my-1 mr-sm-2" id="field">
                           <option selected>Field...</option>
                           <option value="size">Size</option>
                           <option value="forks">Forks</option>
                           <option value="stars">Stars</option>
                           <option value="followers">Followers</option>
                       </select>
                   </td>
                   <td>
                       <select name="operator" class="custom-select my-1 mr-sm-2" id="operator">
                           <option selected>Operator...</option>
                           <option value="+">Plus</option>
                           <option value="=">Equal</option>
                           <option value="-">Minus</option>
                       </select>
                   </td>
                   <td>
                       <input type="number" name="value" id="value" class="form-control my-1 mr-sm-2" placeholder="Value ..."/>
                   </td>
                   <td><button class="btn btn-danger" id="delete-default">Delete</button></td>
               </tr>
           </table>

           <div id="hr"></div>


           <div class="mt-4">
               <button class="btn btn-primary" id="apply">Apply</button>
               <button type="reset" class="btn btn-warning" id="clear">Clear</button>
               <button class="btn btn-success" id="add">Add Rule</button>
           </div>

       </form
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