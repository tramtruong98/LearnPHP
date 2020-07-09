<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<form action="insertStudent.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="Name" class="form-control"aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Age</label>
        <input type="text" name="Age" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Class</label>
        <input type="text" name="Class" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Grade</label>
        <input type="text" name="Grade" class="form-control">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" id="vehicle1" name="LearningStatus" value="Regular">
        <label for="vehicle1">Regular</label><br>
        <input type="checkbox" id="vehicle2" name="LearningStatus" value="In-service">
        <label for="vehicle2">In-service</label><br>
        <input type="checkbox" id="vehicle3" name="LearningStatus" value="Distance">
        <label for="vehicle3">Distance</label><br>
    </div>
    <div class="form-group form-radio">
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Expectation</label>
        <textarea name="Expectation" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
