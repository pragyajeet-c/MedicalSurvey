<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <?php include 'database/form_submission.php'; ?>

    <title>Medical Survey</title>
</head>

<body>
    
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="./index.php">Medical Survey</a>
        </div>
    </nav>

    <div class="container box mb-5">
        <form method="post" action="./summary.php" class ="needs-validation" id="medical_survey">
            <!--Navigation Tabs-->
            <ul class="nav nav-tabs mt-5">
                <!--Introduction Tab-->
                <li class="nav-item">
                    <a class="nav-link active_tb" id="list_intro" href="#intro">
                        Introduction
                    </a>
                </li>
                <!--Terms and Conditions Tab-->
                <li class="nav-item">
                    <a class="nav-link inactive_tb" id="list_tnc" href="#tnc">
                        Terms and Conditions
                    </a>
                </li>
                <!--Patient Tab-->
                <li class="nav-item">
                    <a class="nav-link inactive_tb" id="list_patient_type" href="#patient_type">
                        Patient Type
                    </a>
                </li>
                <!--Basic Information Tab-->
                <li class="nav-item">
                    <a class="nav-link inactive_tb" id="list_basic_info" href="#basic_info">
                        Basic Information
                    </a>
                </li>
                <!--Symptoms Tab-->
                <li class="nav-item">
                    <a class="nav-link inactive_tb" id="list_symptoms" href="#symptoms">
                        Symptoms
                    </a>
                </li>                
            </ul>

            <!--Tab Contents-->
            <div class="tab-content mt-5">
                <!--Introduction Body-->
                <div class="tab-pane active" id="intro">
                    <div class="panel panel-primary">
                        <h4 class="panel-heading">Introduction</h4>
                        <hr>
                        <div class="panel-body">
                            <p>Please fill out the form before visiting the doctor. 
                                Your answers will help us analyze your problem and learn about possible causes of your symptoms.
                            </p>
                            <hr>
                            <button type="button" name="btn_intro" id="btn_intro" class="btn btn-success float-right">Next</button>
                        </div>
                    </div>
                </div>
                <!--Terms and Conditions Body-->
                <div class="tab-pane inactive" id="tnc">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Terms and Conditions</h4></div>
                        <hr>
                        <div class="panel-body">
                            <p>Before using the checkup, please read Terms of Service. Remember that:
                                <ul>
                                    <li><strong>Checkup is not a diagnosis.</strong> Checkup is for informational purposes and is not a qualified medical opinion.</li>
                                    <li><strong>Do not use in emergencies.</strong> In case of health emergency, call your local emergency number immediately.</li>
                                    <li><strong>Your data is safe.</strong> Information that you provide is not shared with anyone.</li>
                                </ul>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="tnc_check">
                                        <label class="form-check-label" for="tnc_check">
                                            I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
                                        </label>
                                        <p><span id="tnc_error" class="text-danger"></span></p>
                                    </div>
                                </div> 
                            </p>
                            <hr>
                            <button type="button" name="btn_tnc" id="btn_tnc" class="btn btn-success float-right">Next</button>
                            <button type="button" name="btn_tnc_bck" id="btn_tnc_bck" class="btn btn-secondary">Back</button>
                        </div>
                    </div>
                </div>
                <!--Patient Type Body-->
                <div class="tab-pane inactive" id="patient_type">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Patient Type</h4></div>
                        <hr>
                        <div class="panel-body">

                            <p>
                                <strong>Enter Name</strong>
                                <div class="form-group col-8">
                                    <input type="text" name="name" id="name" class="form-control" />
                                    <span id="error_name" class="text-danger"></span>
                                </div>
                            </p>
                            
                            <p>
                                <strong>Who is the checkup for ?</strong>
                                
                                <div class="form-check form-check-inline"> 
                                    <input class="form-check-input" type="radio" name="ptype" id="myself" value="Myself" checked>
                                    <label class="form-check-label" for="patient_type">
                                    Myself
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ptype" id="someone_else" value="Someone else">
                                    <label class="form-check-label" for="patient_type">
                                    Someone Else
                                    </label>
                                </div>
                            </p>
                            <p>
                                <strong>What is your/their sex ?</strong>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="male" value="Male" checked>
                                    <label class="form-check-label" for="patient_sex">
                                    Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="female" value="Female">
                                    <label class="form-check-label" for="patient_female">
                                    Female
                                    </label>
                                </div>
                            </p>
                            <p>
                                <strong>What is your/their age ?</strong>
                                
                                <div class="form-check form-check-inline">
                                    <label for="age_range" class="form-label">Select Age :</label>
                                    <input type="range" class="form-range ml-2" min="1" max="100" value="18" name="age" id="age_range">
                                </div>
                                <p>Age : <span id="age"></span></p>
                            </p>
                            
                            <hr>
                            <button type="button" name="btn_patient_type" id="btn_patient_type" class="btn btn-success float-right">Next</button>
                            <button type="button" name="btn_ptype_bck" id="btn_ptype_bck" class="btn btn-secondary">Back</button>
                        </div>
                    </div>
                </div>
                <!--Basic Information Body-->
                <div class="tab-pane inactive" id="basic_info">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Basic Information</h4></div>
                        <hr>
                        <div class="panel-body">
                            <p>
                                <strong>Overweight or obese ?</strong>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="obesity" id="obese_yes" value="Yes">
                                    <label class="form-check-label" for="obese">
                                    Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="obesity" id="obese_no" value="No" checked>
                                    <label class="form-check-label" for="obese">
                                    No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="obesity" id="obese_null" value="Don't Know">
                                    <label class="form-check-label" for="obese">
                                    Don't Know
                                    </label>
                                </div>
                            </p>

                            <p>
                                <strong>Smoke Cigarettes ?</strong>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="smoking" id="smoke_yes" value="Yes">
                                    <label class="form-check-label" for="smoking">
                                    Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="smoking" id="smoke_no" value="No" checked>
                                    <label class="form-check-label" for="smoking">
                                    No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="smoking" id="smoke_null" value="Don't Know">
                                    <label class="form-check-label" for="smoking">
                                    Don't Know
                                    </label>
                                </div>
                            </p>

                            <p>
                                <strong>Recently suffered any injury ?</strong>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="injury" id="injury_yes" value="Yes">
                                    <label class="form-check-label" for="injury">
                                    Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="injury" id="injury_no" value="No" checked>
                                    <label class="form-check-label" for="injury">
                                    No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="injury" id="injury_null" value="Don't Know">
                                    <label class="form-check-label" for="injury">
                                    Don't Know
                                    </label>
                                </div>
                            </p>

                            <p>
                                <strong>Have high cholesterol ?</strong>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cholestrol" id="cholestrol_yes" value="Yes">
                                    <label class="form-check-label" for="cholestrol">
                                    Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cholestrol" id="cholestrol_no" value="No" checked>
                                    <label class="form-check-label" for="cholestrol">
                                    No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cholestrol" id="cholestrol_null" value="Don't Know">
                                    <label class="form-check-label" for="cholestrol">
                                    Don't Know
                                    </label>
                                </div>
                            </p>

                            <p>
                                <strong>Have hypertension ?</strong>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hypertension" id="hypertension_yes" value="Yes">
                                    <label class="form-check-label" for="hypertension">
                                    Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hypertension" id="hypertension_no" value="No" checked>
                                    <label class="form-check-label" for="hypertension">
                                    No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hypertension" id="hypertension_null" value="Don't Know">
                                    <label class="form-check-label" for="hypertension">
                                    Don't Know
                                    </label>
                                </div>
                            </p>

                            <hr>
                            <button type="button" name="btn_basic_info" id="btn_basic_info" class="btn btn-success float-right">Next</button>
                            <button type="button" name="btn_basicinfo_bck" id="btn_basicinfo_bck" class="btn btn-secondary">Back</button>
                        </div>
                    </div>
                </div>
                <!--Symptoms Body-->
                <div class="tab-pane inactive" id="symptoms">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Symptoms</h4></div>
                        <hr>
                        <div class="panel-body">
                            <p>
                                <strong>Check as many symptoms as applicable.</strong>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="headache" id="headache" value="Yes">
                                    <label class="form-check-label" for="headache">
                                    Headache
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="nausea" id="nausea" value="Yes">
                                    <label class="form-check-label" for="nausea">
                                    Nausea
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="bodyache" id="bodyache" value="Yes">
                                    <label class="form-check-label" for="bodyache">
                                    Body Ache
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="indigestion" id="indigestion" value="Yes">
                                    <label class="form-check-label" for="indigestion">
                                    Indigestion
                                    </label>
                                </div>
                            </p>

                            <hr>
                            <button type="button" name="btn_sypmtoms" id="btn_symptoms" class="btn btn-success float-right">Submit</button>
                            <button type="button" name="btn_symptoms_bck" id="btn_symptoms_bck" class="btn btn-secondary">Back</button>
                        </div>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="scripts/flowcontrol.js"></script>
    <script src="scripts/scripts.js"></script>

</body>

</html>