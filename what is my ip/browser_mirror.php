<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Browser Mirror</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        body {
            background: #eee;
            margin: 30px;
        }
        p {
            color: #2e5cb8;
            /*font-size: 16px;*/
        }
        p strong {
            color: #333;
        }
    </style>
  </head>
  <body>

<?php
// Set days of week to lithuanian
function day_to_lt($day) {
    switch ($day) {
        case '1':
            return "Pirmadienis";
            break;
        case '2':
            return "Antradienis";
            break;
        case '3':
            return "Trečiadienis";
            break;
        case '4':
            return "Ketvirtadienis";
            break;
        case '5':
            return "Penktadienis";
            break;
        case '6':
            return "Šeštadienis";
            break;
        case '7':
            return "Sekmadienis";
            break;
    }
}
?>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                    <h1>Browser Mirror</h1><br>
                    <p><strong>Remote IP:</strong> <em><?php if (isset($_SERVER['REMOTE_ADDR'])) { echo $_SERVER['REMOTE_ADDR']; } ?></em></p>
                    <p><strong>User Agent:</strong> <em><?php if (isset($_SERVER['HTTP_USER_AGENT'])) { echo $_SERVER['HTTP_USER_AGENT']; } ?></em></p>

                    <p><strong>Browser window width:</strong> <em><span id="window-width"></span></em></p>
                    <p><strong>Browser window height:</strong> <em><span id="window-height"></span></em></p>

                    <p><strong>Referer:</strong> <em><?php if (isset($_SERVER['HTTP_REFERER'])) { echo $_SERVER['HTTP_REFERER']; } ?></em></p>
                    <p><strong>Request Time (Unix):</strong> <em><?php if (isset($_SERVER['REQUEST_TIME'])) { echo $_SERVER['REQUEST_TIME']; } ?></em></p>
                    <p><strong>Request Time (Formatted):</strong> <em><?php if (isset($_SERVER['REQUEST_TIME'])) { echo day_to_lt(date("N")) . ", " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']); } ?></em></p>
                    <p><strong>Request URI:</strong> <em><?php if (isset($_SERVER['REQUEST_URI'])) { echo $_SERVER['REQUEST_URI']; } ?></em></p>
                    <p><strong>Request Method:</strong> <em><?php if (isset($_SERVER['REQUEST_METHOD'])) { echo $_SERVER['REQUEST_METHOD']; } ?></em></p>
                    <p><strong>Query String:</strong> <em><?php if (isset($_SERVER['QUERY_STRING'])) { echo $_SERVER['QUERY_STRING']; } ?></em></p>
                    <p><strong>HTTP Accept:</strong> <em><?php if (isset($_SERVER['HTTP_ACCEPT'])) { echo $_SERVER['HTTP_ACCEPT']; } ?></em></p>
                    <p><strong>HTTP Accept Charset:</strong> <em><?php if (isset($_SERVER['HTTP_ACCEPT_CHARSET'])) { echo $_SERVER['HTTP_ACCEPT_CHARSET']; } ?></em></p>
                    <p><strong>HTTP Accept Encoding:</strong> <em><?php if (isset($_SERVER['HTTP_ACCEPT_ENCODING'])) { echo $_SERVER['HTTP_ACCEPT_ENCODING']; } ?></em></p>
                    <p><strong>HTTP Accept Language:</strong> <em><?php if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) { echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; } ?></em></p>
                    <p><strong>HTTPS?:</strong> <em><?php if (isset($_SERVER['HTTPS'])) { echo 'Yes'; } else { echo 'No';} ?></em></p>
                    <p><strong>Remote Port:</strong> <em><?php if (isset($_SERVER['REMOTE_PORT'])) { echo $_SERVER['REMOTE_PORT']; } ?></em></p>

            </div>
        </div>

    </div>

<!-- Get browser's width and height -->
<script type="text/javascript">
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth || document.body.offsetWidth;
    var height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight || document.body.offsetHeight;

    document.getElementById("window-width").innerHTML = width + "px";
    document.getElementById("window-height").innerHTML = height + "px";
</script>

  </body>
</html>
