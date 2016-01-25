#Animated Color Grid

Animated color grid as the name indicates is an animated grid that that will randamly animate bettween text and/or images.

###Dependencies

- [Jquery 2.1.3](https://jquery.com/download/)

###Getting Started

Include the color-grid.css and the color-grid.min.js for this grid:

```
<head>
<link rel="stylesheet" href="css/color-grid.css">
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script type="text/javascript" src="js/color-grid.min.js"></script>
</body>
```

###The HTML Structure

Bellow is the basic html structure of the grid, for a working example check the index.php file.

```
<div id="color-grid" data-time-min="1" data-time-max="5">

        <div class="grid-item effect__fade" data-id="1">
            <div class="inner">

                <div class="grid-item-front" style="background-color: #446cb3;">

                    <h2>Grid 1</h2>

                </div><!-- End to the grid-item-front -->

                <div class="grid-item-back" style="background-color: #ef4836;">

                    <h2>Grid 1 back</h2>

                </div><!-- End to the grid-item-back -->

            </div><!-- End to the inner -->
        </div><!-- End to the grid-item -->

</div> <!-- End to the color-grid -->
```

The data attributes: