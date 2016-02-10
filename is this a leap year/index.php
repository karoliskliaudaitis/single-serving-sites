<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Is This a Leap Year?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        h1 {
            font-size: 46px;
        }
        p {
            font-size: 18px;
        }
        h2 strong {
            color: #2e5cb8;
        }
        a h1 {
            color: #333;
        }
        a:hover {
            color: #333;
        }
        .center-text {
            text-align: center;
        }
        #em {
            font-size: 14px;
        }
        .center {
            position: absolute;
            font-size: 18px;
            left: 0%;
            top: 30%;
            width: 100%;
        }
    </style>
  </head>
  <body>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <a href="isthisaleapyear.php"><h1 class="page-header text-center">Is this a leap year?</h1></a>
            </div>

            <br><br>

            <div class="center center-text">

                    <?php
                    function is_leap_year($year) {
                        if ($year % 4 > 0) {
                            return false;   // 2015
                        } elseif ($year % 100 > 0) {
                            return true;    // 1984
                        } elseif ($year % 400 > 0) {
                            return false;   // 2100
                        } else {
                            return true;    // 2000
                        }
                    }

                    $error_message = "";
                    if (isset($_GET["year"]) && ctype_digit($_GET["year"])) {
                        $year = intval($_GET["year"]);
                    } else {
                        $year = date("Y");
                        if (isset($_GET["year"]) && !empty($_GET["year"])) {
                            $error_message = "Please enter a correct number of year.";
                        } else {
                            $error_message = "Please enter a year.";
                        }
                    }

                    if (is_leap_year($year)) {
                        echo "<h2>Yes, <strong>{$year}</strong> is a leap year.</h2>";
                    } else {
                        echo "<h2>No, <strong>{$year}</strong> is not a leap year.</h2>";
                    }
                    ?>

                    <br><br><br>
                    <form action="" method="get" role="form">
                        <p>Enter a year to find out if it is a leap year:</p>
                        <p class="text-danger" id="em"><?php if (isset($_GET["year"]) && empty($_GET["year"])) { echo $error_message; } elseif (isset($_GET["year"]) && !empty($_GET["year"])) { echo $error_message; } ?></p>
                        <div class="col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3"> <!-- col-sm-4 col-sm-offset-4 -->
                            <input type="text" class="form-control" name="year" maxlength="4" <?php if ($year !== date("Y")) { echo " autofocus"; } ?>><br>
                            <input type="submit" class="btn btn-default" value="Submit">
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

  </body>
</html>
