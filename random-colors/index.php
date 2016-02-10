<?php
function random_hex() {
   $characters  = "ABCDEF0123456789";
   $hexadecimal = "#";
   for ($i = 1; $i <= 6; $i++) {
      $position     = rand(0, strlen($characters) - 1);
      $hexadecimal .= $characters[$position];
   }
   return $hexadecimal;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random Colors</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        .color-block {
            width: 335px; /*252.5px*/
            height: 189.367px; /*189.367px*/
        }
        .center {
            position: absolute;
            left: 0%;
            top: 40%;
            width: 100%;
        }
        p {
            color: #FFFFFF;
            font-size: 16px;
        }
        p:hover {
            color: #000000;
        }
        h1 a:link, h1 a:visited, h1 a:active {
            color: #333;
            text-decoration: none;
        }
        h1 a:hover {
            color: #666;
        }
    </style>
  </head>
  <body>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><a href="" data-toggle="tooltip" data-placement="auto" title="Generate new colors!">Random Colors</a></h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail">
                    <div class="img-responsive center-block color-block" style="background-color:<?php $color = random_hex(); echo $color; ?>">
                        <strong><p class="text-center center"><?php echo $color; ?></p></strong>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
  </body>
</html>
