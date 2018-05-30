<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Contact Form</title>
  </head>
  <body>
    <div class="container">
        <h1>Get in touch!</h1>

        <div id="error"></div>

        <form>
            <div class="form-group">
                <label for="email">Email address</label>
                <input id="email" class="form-control" placeholder="Enter your email address" type="email"/>
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input id="subject" class="form-control" type="text"/>
            </div>
            <div class="form-group">
                <label for="contentField">What would you like to ask us?</label>
                <textarea id="contentField" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script>
        $("form").submit(function (e) {
            e.preventDefault();
            var error = "";

            // Check if subject field is blank
            if($("#subject").val() == "") {
                error += "The subject field is required.</br>"
            }
            if($("#contentField").val() == "") {
                error += "The content field is required."
            }
            if(error != "") {
                $("#error").html('<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:<p>' + error + '</p></div>');
            }
        });
    </script>
  </body>
</html>
