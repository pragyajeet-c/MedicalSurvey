<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <?php include 'database/form_submission.php'; ?>

    <?php 
        //Retrieving last row from database
        $retrieve = "SELECT * FROM submissions WHERE id = LAST_INSERT_ID()";
        $statement1 = $connect->prepare($retrieve);
        $statement1->execute($user_data);
    ?>

    <title>Medical Survey</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="./index.php">Medical Survey</a>
            <div class="navbar-text">
                <a classs="nav-item float-right" href="./index.php">Home</a>
            </div>
        </div>
    </nav>

    <div class="container box">
        <h3 class="mt-5">Summary</h3>
        <?php echo $acknowledgment; ?>
    </div>

    <div class="container box mb-5" align="center">
        <div class="card col-8 mt-5" id="summary">
            <h4 class="card-title mt-3 ml-3">Medical Form</h4>
            <div class="card-body">
                <p class="card-text">
                    <ul>
                        <h5>Basic Information</h5>
                        <hr>
                        <li name="name">Name : <?php echo $_POST['name'];?></li>
                        <li name="ptype">Patient Type : <?php echo $_POST['ptype'];?></li>
                        <li name="sex">Sex : <?php echo $_POST['sex'];?></li>
                        <li name="age">Age : <?php echo $_POST['age'];?></li>
                    </ul>
                    <ul>
                        <h5>General Questions</h5>
                        <hr>
                        <li name="obesity">Overweight or obese : <?php echo $_POST['obesity'];?></li>
                        <li name="smoking">Smoke Cigarettes : <?php echo $_POST['smoking'];?></li>
                        <li name="injury">Recently suffered any injury : <?php echo $_POST['injury'];?></li>
                        <li name="cholestrol">Have high cholesterol : <?php echo $_POST['cholestrol'];?></li>
                        <li name="hypertension">Have hypertension : <?php echo $_POST['hypertension'];?></li>
                    </ul>
                    <ul>
                        <h5>Symptoms</h5>
                        <hr>
                        <li name="headache">Headache : <?php echo $user_data[':headache'];?></li>
                        <li name="nausea">Nausea : <?php echo $user_data[':nausea'];?></li>
                        <li name="bodyache">Body Ache : <?php echo $user_data[':bodyache'];?></li>
                        <li name="indigestion">Indigestion : <?php echo $user_data[':indigestion'];?></li>
                    </ul>
                </p>
            </div>
        </div>
        <a href="./index.php" class="mt-5">Fill another form</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="scripts/scripts.js"></script>

</body>

</html>