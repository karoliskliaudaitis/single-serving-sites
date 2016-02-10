<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Is it Friday yet?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        h1 {
            font-size: 46px;
        }
        .center {
            position: absolute;
            left: 0%;
            top: 45%;
            width: 100%;
        }
    </style>
  </head>
  <body>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header text-center">Is It Friday Yet?</h1>
            </div>

            <?php
            $day = date("N");
            switch ($day) {
                case 4:
                    echo "<h2 class=\"text-center center\">Almost.</h2>";
                    break;
                case 5:
                    echo "<h2 class=\"text-center center\">Yep! It is FRIDAY!</h2>";
                    break;
                case 6:
                    echo "<h2 class=\"text-center center\">You just missed it.</h2>";
                    break;
                default:
                    echo "<h2 class=\"text-center center\">Nope.</h2>";
                    break;
            }
            ?>

        </div>

    </div>

  </body>
</html>
