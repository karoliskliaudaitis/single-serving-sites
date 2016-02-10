<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What Is My IP?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        body {
            background: #eee;
        }
        .center-text {
            text-align: center;
            margin: 100px;
        }
        .center-text h1 {
            font-size: 46px;
        }
        .center-text p {
            font-size: 24px;
        }
        .center-text p strong {
            font-size: 55px;
            color: #2e5cb8;
        }
    </style>
  </head>
  <body>

<?php

// Returns first forwarded IP match it finds
function forwarded_ip() {
    $keys = array(
        "HTTP_X_FORWARDED_FOR",
        "HTTP_X_FORWARDED",
        "HTTP_FORWARDED_FOR",
        "HTTP_FORWARDED",
        "HTTP_CLIENT_IP",
        "HTTP_X_CLUSTER_CLIENT_IP",
    );

    foreach ($keys as $key) {
        if (isset($_SERVER[$key])) {
            $ip_array = explode(",", $_SERVER[$key]);
            foreach ($ip_array as $ip) {
                $ip = trim($ip);
                if (validate_ip($ip)) {
                    return $ip;
                }
            }
        }
    }

    return "";
}

// Validates IP and retunrs true or false
function validate_ip() {
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE === false)) {
        return false;
    } else {
        return true;
    }
}

$remote_ip = $_SERVER["REMOTE_ADDR"];
$forwarded_ip = forwarded_ip();

?>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <div class="center-text">

                    <h1>What Is My IP?</h1>
                    <p>The request came from:</p><br>
                    <p><strong><?php echo $remote_ip; ?></strong></p>
                    (<?php echo gethostbyaddr($remote_ip); ?>)<br><br><br>

                    <?php if ($forwarded_ip != "" && $forwarded_ip != $remote_ip) { ?>
                    <p>The request was forwarded for:</p><br>
                    <strong><p><?php echo $forwarded_ip; ?></p></strong>
                    <?php } ?>

                </div>

            </div>
        </div>

    </div>

  </body>
</html>
