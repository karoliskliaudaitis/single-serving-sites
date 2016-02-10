<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Is it Friday yet?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        body {
            margin-top: 150px;
        }
        h1 {
            font-size: 46px;
        }
        p {
            font-size: 18px;
        }
        p strong {
            color: #333;
        }
        .center-text {
            text-align: center;
            /*margin: 100px;*/
        }
    </style>
  </head>
  <body>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <div class="center-text">

                    <h1>Is it Friday yet?</h1><br>
                    <?php
                    if (date("D") == "Fri") {
                        echo "<p>Woo Hoo! It is FRIDAY!!!</p>";
                    } else {
                        echo "<p>Sorry, it is " . date("l") . ".</p><br>";
                        $remaining = 5 - date("N");
                        if ($remaining < 0) {
                            $remaining += 7;
                        }
                        if ($remaining !== 0) {
                            echo "<p>Only {$remaining} more days to go.</p>";
                        }
                    }
                    ?>

                </div>

            </div>
        </div>

    </div>

  </body>
</html>
