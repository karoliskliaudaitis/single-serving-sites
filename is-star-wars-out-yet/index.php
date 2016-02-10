<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Is STAR WARS Out Yet?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        h1 {
            font-size: 46px;
        }
        a h1 {
            color: #333;
        }
        h3 strong {
            color: #2e5cb8;
        }
        .center-text {
            text-align: center;
        }
    </style>
  </head>
  <body>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <div class="center-text">

                    <div class="page-header">
                        <h1>Is STAR WARS out yet?</h1>
                    </div>
                    <br><br>

                    <?php
                    $star_wars_dates = array(
                        1 => "1999-05-19",
                        2 => "2002-05-16",
                        3 => "2005-05-19",
                        4 => "1977-05-25",
                        5 => "1980-05-21",
                        6 => "1983-05-25",
                        7 => "2015-12-18",
                        8 => "2017-05-26",
                        9 => null,
                    );

                    if (isset($_GET["episode"])) {
                        $episode = intval($_GET["episode"]);
                    } else {
                        $episode = 8;
                    }

                    $release_date_s = $star_wars_dates[$episode]; // String
                    $release_date_t = strtotime($release_date_s); // Timestamp
                    $release_date_p = strftime("%Y-%m-%d", $release_date_t); // Pretty string

                    if (is_null($release_date_s)) {
                        echo "<h3>No. Episode <strong>#{$episode}</strong> does not yet have a release date.</h3>";
                    } elseif (time() >= $release_date_t) {
                        echo "<h3>Yes! Episode <strong>#{$episode}</strong> was released on <em>{$release_date_p}</em>.</h3>";
                    } else {
                        echo "<h3>Not yet! Episode <strong>#{$episode}</strong> will be released on <em>{$release_date_p}</em>.</h3>";
                    }
                    ?>

                    <br><br>
                    <form action="" method="get" role="form" class="form-inline">
                        <p>Which STAR WARS episode?</p>
                        <div class="form-group">
                            <select class="form-control" name="episode">
                                <?php
                                $episode_nr = array_keys($star_wars_dates);
                                foreach ($episode_nr as $number) {
                                    echo "<option value=\"{$number}\"";
                                    if (isset($episode) && $episode == $number) { echo " selected"; }
                                    echo ">#{$number}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-default" value="Submit">
                        <!-- <div class="col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3"> col-sm-4 col-sm-offset-4
                        </div> -->
                    </form>

                </div>

            </div>
        </div>

    </div>

  </body>
</html>
