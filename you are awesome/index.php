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

$text_color = random_hex();

$bg_color = random_hex();

if ($text_color == $bg_color) {
    $text_color = random_hex();
}

$font_size = (100 + (rand(0,20) * 5));

$aligns = array("center", "left", "right", "justify");
$text_align = $aligns[rand(0,3)];

$styles = array("bold", "italic", "underline", "uppercase");
$style = $styles[rand(0,3)];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>You Are Aweosme!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        body {
/*            margin: 0;
            padding: 0;*/
            background-color: <?php echo $bg_color; ?>;
            color: <?php echo $text_color; ?>;
            font-size: <?php echo $font_size; ?>px;
            text-align: <?php echo $text_align; ?>;
            <?php
            switch($style) {
                case 'bold':
                    echo "font-weight: bold;";
                    break;
                case 'italic':
                    echo "font-style: italic;";
                    break;
                case 'underline':
                    echo "text-decoration: underline;";
                    break;
                case 'uppercase':
                    echo "text-transform: uppercase;";
                    break;
            }
            ?>
        }
        .center {
            position: absolute;
            left: 0%;
            top: 35%;
            width: 100%;
        }
    </style>
  </head>
  <body>

    <div class="container-fluid">

        <div class="center">
            <p>You are awesome!</p>
        </div>

    </div>

  </body>
</html>
