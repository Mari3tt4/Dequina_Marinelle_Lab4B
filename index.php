<!DOCTYPE html>
<html>
<head>
    <title>Know Your Healthful Food</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Know Your Healthful Food!!</h1>
    <?php
    $food = "Chicken";

    switch ($food) {
        case "Almond":
            echo "<h2>Almond has magnesium, vitamin E, iron, calcium, and fiber.</h2>";
            break;
        case "Oatmeal":
            echo "<h2>Oats contain complex carbohydrates, as well as water-soluble fiber.</h2>";
            break;
        case "Broccoli":
            echo "<h2>Broccoli provides good amounts of fiber, calcium, potassium, folate, and phytonutrient.</h2>";
            break;
        case "Apple":
            echo "<h2>Apples are an excellent source of antioxidants, which combat free radicals.</h2>";
            break;
        case "Avocados":
            echo "<h2>Avocados provide healthful fats, as well as B vitamins, vitamin K, and vitamin E.</h2>";
            break;
        case "Chicken":
            echo "<h2>Chicken is cost-effective meat that is an excellent source of protein.</h2>";
            break;
        default:
            echo "<h2>The benefits of this food are not listed.</h2>";
    }
    ?>
</body>
</html>
