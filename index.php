<?php

// require_once "./database/db.php";
// $connection = DB::getInstance();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
    <script src="https://unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
            crossorigin="anonymous"></script>
</head>

<body>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.7615498732025!2d-118.34587228447067!3d34.10124852259267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2s7060%20Hollywood%20Blvd%2C%20Los%20Angeles%2C%20CA%2090028%2C%20USA!5e0!3m2!1sen!2sua!4v1578124984341!5m2!1sen!2sua"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<div class="container">
    <div class="stepwizard hidden">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3">
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Register</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                <p><small>About</small></p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                <p><small>Social</small></p>
            </div>
        </div>
    </div>

    <form id="quesform" role="form" action="action.php" method="POST" enctype="multipart/form-data">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                <h3 class="panel-title">Registration</h3>
            </div>
            <div class="panel-body" id="first_form">
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input maxlength="100" type="text" required="required" name="fname" class="form-control"
                           placeholder="Enter First Name"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="100" type="text" required="required" name="lname" class="form-control"
                           placeholder="Enter Last Name"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Birthday</label>
                    <input name="birthday" maxlength="100" type="date" required="required" class="form-control"
                           placeholder="Birthday"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Report Subject</label>
                    <input name="rs" maxlength="100" type="text" required="required" class="form-control"
                           placeholder="Enter Report Subject"/>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Select your country</label>
                    <select name="country" class="selectpicker countrypicker form-control" name="country"
                            data-flag="true"></select>
                </div>

                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input name="phone" maxlength="100" required="required" id='textbox' type="text" class="form-control" placeholder="Enter your phone"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input name="email" maxlength="100" type="email" required="required" class="form-control" placeholder="Enter your email"/>
                </div>
                <div class="btn-sectoin">
                    <input class="btn btn-primary nextBtn pull-right" type="button" value="Next">
                </div>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                <h3 class="panel-title">Company Information</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input name="company" maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Enter Company Name"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Position</label>
                    <input name="position" maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Enter Position"/>
                </div>
                <div class="form-group">
                    <label class="control-label">About Me</label>
                    <textarea name="about_me" maxlength="200" type="text" required="required" class="form-control"
                              placeholder="About me"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Photo</label>
                    <input id="photo" name="photo" maxlength="200" type="file" required="required" class="form-control"
                           placeholder="Your photo"/>
                </div>
                <div class="btn-sectoin">
                    <button id ="send" class="btn btn-primary nextBtn pull-right" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <div class="panel panel-primary setup-content" id="step-3">
        <div class="panel-heading">
            <h3 class="panel-title">Social</h3>
        </div>
        <div class="panel-body">
            <h1>Add social links</h1>

            <a onclick="Share.facebook('URL','TITLE','IMG_PATH','DESC')"> <img
                        src="https://www.facebook.com/images/fb_icon_325x325.png" alt="" width="50" height='50'></a>
            <a onclick="Share.twitter('URL','Check out this Meetup with SoCal AngularJS!')"> <img
                        src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" alt="" width="50"
                        height='50'></a>
            <a href="members.php" target="_blank" >All Members</a>
        </div>
    </div>
</div>
<script src="/assets/js/main.js"></script>
</body>

</html>