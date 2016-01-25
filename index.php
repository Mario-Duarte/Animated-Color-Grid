<!--
.------..------..------..------..------.        .------..------.
|C.--. ||O.--. ||D.--. ||E.--. ||D.--. | .-.    |B.--. ||Y.--. | .-.
| :/\: || :/\: || :/\: || (\/) || :/\: |((5))   | :(): || (\/) |((5))
| :\/: || :\/: || (__) || :\/: || (__) | '-.-.  | ()() || :\/: | '-.-.
| '--'C|| '--'O|| '--'D|| '--'E|| '--'D|  ((1)) | '--'B|| '--'Y|  ((1))
`------'`------'`------'`------'`------'   '-'  `------'`------'   '-'
.------..------..------..------..------.        .------..------..------..------..------..------.
|M.--. ||A.--. ||R.--. ||I.--. ||O.--. | .-.    |D.--. ||U.--. ||A.--. ||R.--. ||T.--. ||E.--. |
| (\/) || (\/) || :(): || (\/) || :/\: |((5))   | :/\: || (\/) || (\/) || :(): || :/\: || (\/) |
| :\/: || :\/: || ()() || :\/: || :\/: | '-.-.  | (__) || :\/: || :\/: || ()() || (__) || :\/: |
| '--'M|| '--'A|| '--'R|| '--'I|| '--'O|  ((1)) | '--'D|| '--'U|| '--'A|| '--'R|| '--'T|| '--'E|
`------'`------'`------'`------'`------'   '-'  `------'`------'`------'`------'`------'`------'
-->
<?php

$colors = array('f22613', 'd91e18', '96281b', 'ef4836', 'f1a9a0', '674172', 'aea8d3', 'bf55ec', 'be90d4', '446cb3', '4183d7', '81cfe0', '3498db', 'ec3e50', '336e7b', '67809f', '4b77be', '5c97bf', '4ecdc4', '90C695', '26A65B', '03C9A9', '2ECC71', '16A085', '36D7B7', '2ECC71', '3FC380', '2ABB9B', '1E824C', '26C281', 'F89406', 'EB9532', 'F4B350', 'F2784B', 'EB974E', 'D35400', 'F39C12', 'F9690E', 'F9BF3B', 'E67E22', '6C7A89', 'BDC3C7', 'BFBFBF');

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Animated Color Grid Demo</title>

    <!-- Meta Description tags -->

    <meta name="description" content="Animated Color Grid is a grid that animates at a random time interval, supports text, images and an infinite amount of possibilities. Download now.">
    <meta name="author" content="Mario Duarte">

    <!-- Styling -->

    <link rel="stylesheet" href="css/color-grid.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #eeeeee;
            font-family: 'Lato', sans-serif;
        }

        h1 {
            font-size: 32px;
            line-height: 56px;
            text-align: center;
            font-weight: 300;
        }

        p {
            font-size: 16px;
            line-height: 20px;
            text-align: center;
            max-width: 900px;
            font-weight: 300;
            margin: 0 auto;
            padding: 10px 10px 60px 10px;
        }

        a {
            color: #022033;
            text-decoration: none;
        }

        a:hover, a:focus {
            color: #000000;
            text-decoration: underline;
        }

        .social-nav {margin: 0 auto;padding: 0; max-width: 320px;}
        .social-nav li {float: left;list-style: none;font-size: 22px; padding: 30px 16px;}

    </style>

</head>
<body>

<h1>Animated Color Grid</h1>

<p>This is a small Jquery plugin that I have created for a <a href="http://www.marioduarte.co" target="_blank">personal project</a>.<br/>This works great with text and/or images and can easily be styled to suit your needs. To download this plugin and documentation <a href="https://github.com/Mario-Duarte/Animated-Color-Grid" target="_blank">click here.</a></p>

<div id="color-grid" data-time-min="1" data-time-max="5">

    <?php for($i = 1; $i < 25; $i ++): ?>

        <?php shuffle($colors); ?>

        <div class="grid-item effect__fade" data-id="<?php echo $i; ?>">
            <div class="inner">

                <div class="grid-item-front" style="background-color: #<?php echo $colors[0]; ?>;">

                    <h2>Grid A<?php echo $i; ?></h2>

                </div>

                <div class="grid-item-back" style="background-color: #<?php echo $colors[1]; ?>;">

                    <h2>Grid B<?php echo $i; ?></h2>

                </div>

            </div>
        </div>

    <?php endfor; ?>

</div>

<ul class="social-nav">
    <li><a href="http://www.mariodesigns.co.uk"><i class="fa fa-home"></i></a></li>
    <li><a href="https://github.com/Mario-Duarte"><i class="fa fa-github"></i></a></li>
    <li><a href="https://www.behance.net/mdesignsuk"><i class="fa fa-behance"></i></a></li>
    <li><a href="https://www.facebook.com/mariodesigns"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/mdesignsuk"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://instagram.com/m.duarte_/"><i class="fa fa-instagram"></i></a></li>
</ul>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script type="text/javascript" src="js/color-grid.min.js"></script>
</body>
</html>
