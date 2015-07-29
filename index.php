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
    <title>Color Grid</title>

    <link rel="stylesheet" href="css/color-grid.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            font-family: 'Lato', sans-serif;
        }
    </style>

</head>
<body>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script type="text/javascript" src="js/color-grid.min.js"></script>
</body>
</html>
