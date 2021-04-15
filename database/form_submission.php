<?php

    $connect = new PDO("mysql:host=localhost;dbname=medicalform", "root", "");
    $acknowledgment = '';
    if(isset($_POST["name"]))
    {
        sleep(2);
        $query = "
        INSERT INTO submissions 
        (name, ptype, sex, age, obesity, smoking, injury, cholestrol, hypertension, headache, nausea, bodyache, indigestion) VALUES 
        (:name, :ptype, :sex, :age, :obesity, :smoking, :injury, :cholestrol, :hypertension, :headache, :nausea, :bodyache, :indigestion)
        ";

        $headache = '';
        $nausea = '';
        $bodyache = '';
        $indigestion = '';

        if(isset($_POST["headache"])) {
            $headache = $_POST["headache"];
        }
        else {
            $headache = 'No';
        }

        if(isset($_POST["nausea"])) {
            $nausea = $_POST["nausea"];
        }
        else {
            $nausea = 'No';
        }

        if(isset($_POST["bodyache"])) {
            $bodyache = $_POST["bodyache"];
        }
        else {
            $bodyache = 'No';
        }

        if(isset($_POST["indigestion"])) {
            $indigestion = $_POST["indigestion"];
        }
        else {
            $indigestion = 'No';
        }

        $user_data = array(
        ':name' => $_POST["name"],
        ':ptype'  => $_POST["ptype"],
        ':sex'  => $_POST["sex"],
        ':age'   => $_POST["age"],
        ':obesity'   => $_POST["obesity"],
        ':smoking'   => $_POST["smoking"],
        ':injury'  => $_POST["injury"],
        ':cholestrol'  => $_POST["cholestrol"],
        ':hypertension'  => $_POST["hypertension"],
        ':headache'  => $headache,
        ':nausea'  => $nausea,
        ':bodyache'  => $bodyache,
        ':indigestion'  => $indigestion
        );
        $statement = $connect->prepare($query);

        //Inserting data to database
        if($statement->execute($user_data))
        {
            //Emailing to Admin email id
            $basic = 'Name : '.$_POST['name'].'\n'.'Patient Type : '.$_POST['ptype'].'\n'.'Sex : '.$_POST['sex'].'\n'.'Age : '.$_POST['age'];
            $questions = 'Overweight or obese : '.$_POST['obesity'].'\n'.'Smoke Cigarettes : '.$_POST['smoking'].'\n'.'Recently suffered any injury : '.$_POST['injury'].'\n'.'Have high cholesterol : '.$_POST['cholestrol'].'\n'.'Have hypertension : '.$_POST['hypertension'];
            $syms = 'Headache : '.$user_data[':headache'].'\n'.'Nausea : '.$user_data[':nausea'].'\n'.'Body Ache : '.$user_data[':bodyache'].'\n'.'Indigestion : '.$user_data[':indigestion'];

            $to = 'admin@clinic.com'; //Please set a working email id before testing
            $sub = 'Form Submission';
            $message = $basic.'\n'.$questions.'\n'.$syms;
            $header = 'MIME-Version: 1.0'.'\r\n'.'Content-type:text/html;charset=UTF-8'.'\r\n'.'From : '.'\r\n'.$_POST['name'];
            mail($to, $sub, $message, $header);

            $acknowledgment = '
            <div class="alert alert-success">
            Submitted Successfully. Doctor recieved your reponses and will contact you soon !
            </div>
            ';
        }
        else
        {
            $acknowledgment = '
            <div class="alert alert-danger">
            There is an error in Submisson.
            </div>
            ';
        }

    }
?>