# Animated Color Grid

Animated color grid is a small plugin that as the name indicates creates an animated grid that that will randamly animate bettween text and/or images.

##### [Live Demo](https://codepen.io/MarioDesigns/pen/XNXPvO)

### Dependencies
- [Jquery 2.1.3](https://jquery.com/download/)

### Getting Started

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

### The HTML Structure

Bellow is the basic html structure of the grid, for a working example check the index.php file.

```
<div id="color-grid" data-time-min="1" data-time-max="5">

        <div class="grid-item effect__fade" data-id="1">
            <div class="inner"><!-- Very important div! This div keep the height to 100% of the width, 1:1 aspect ratio -->

                <div class="grid-item-front" style="background-color: #446cb3;">

                    <h2>Grid 1</h2>

                </div><!-- End to the grid-item-front -->

                <div class="grid-item-back" style="background-color: #ef4836;">

                    <h2>Grid 1 back</h2>

                </div><!-- End to the grid-item-back -->

            </div><!-- End to the inner -->
        </div><!-- End to the grid-item | Repeat this block as many times as needed-->

</div> <!-- End to the color-grid -->
```

**The data atributes:**

Data atributes are fun! The `data-time-min` and `data-time-max` must be applied to the animated color grid container with the *color-grid* id and will make the *grid-item* animate at a random number bettween the min and max.

The `data-id` aplied to the *grid-item* div must be an auto incremented umique number, for eample: 0,1,2,3,4,etc


###The styling

You can fully custumise this animated grid as you please by creating your own stylings or overighting the default ones on the css file provided, all classes should be kept the same unlless you really know what you doing.
