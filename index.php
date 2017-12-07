<!doctype html>
<html lang="en">

<head>
    <title>Oxford API</title>
    
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    
</head>

<body>
   
    <div class="container">

        <div class="col-lg-6 col-sm-12 mx-auto">
            <div id="border_div">
                <h3>Oxford Dictionaries API</h3>

                                       <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input lnginput" type="radio" name="lnginput1" value="en" onclick="changeLng(this.value);" checked>
                        English
                        </label>
                </div>
                
                <div class="form-check form-check-inline">
                        <label class="form-check-label">
                        <input class="form-check-input lnginput" type="radio" name="lnginput1" value="es" onclick="changeLng(this.value);">
                        Spanish
                        </label>
                </div>


                <div class="button">
                   
                    <div class="input-group">
                        <input type="text" class="form-control empty" id="wordinput" aria-describedby="basic-addon1">
                        <button type="button" class="btn btn-light input-group-addon" onclick="showHint(document.getElementById('wordinput').value)"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>

                </div>

                <div id="panelresp">

                    <div class="form-group">
                       
                        <div class="editable" id="txtHint"></div>

                    </div>
                    
                    <div class="button">
                       
                        <button type="button" class="btn btn-light" onclick="playAudio()" disabled="true" id="btnAudio"><i class="fa fa-volume-up" aria-hidden="true"></i></button>
                        
                    </div>

                    <audio id="audioPron">
                           
                            <source src="7graus.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                            </audio>

                </div>

            </div>

        </div>



    </div>



            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

            <script src="js/app.js"></script>




</body>

</html>
