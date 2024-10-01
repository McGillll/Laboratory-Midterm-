<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $cakeCategory = array(
            "Cake Shape",
            "Cake Flavor",
            "Cake Toppings",
        );
        $cakeChoices = array(
            "Cake Shape" => array(
                "Heart",
                "Rectangle",
                "Square",
                "Round"
            ),
            "Cake Flavor" => array(
                "Chocolate",
                "Vanilla",
                "Lemon",
                "Cheesecake"
            ),
            "Cake Toppings" => array(
                "Cookies",
                "Spun-sugar Flowers",
                "Mini Chocolate Candies",
                "Marshmallows"
            )
        );
    ?>
    <h1>D-I-Y Cake</h1>
    <table>
        <tr>
            <?php 
                for($i = 0;$i < count($cakeCategory); $i++){
                    echo ('<td><h3>'.$cakeCategory[$i].'</h3></td>');
                }
            ?>
        </tr>
        <tr>
            <?php 
                for($i = 0; $i<count($cakeCategory); $i++){
                    $category = $cakeCategory[$i];
                    echo ('
                        <td>
                        <div class = "category">
                    ');
                    for($j = 0; $j < count($cakeChoices[$category]); $j++){
                        $value = $cakeChoices[$category][$j];
                        echo (
                            '<div>
                                <input type="radio" id="'.$value.'" name="'.$category.'" value="'.$value.'">
                                <label for="'.$value.'">'.$value.'</label>
                            </div>'
                        );        
                    }
                    echo '</div>
                        </td>';

                }
            ?>
        </tr>
    </table>
    
</body>
</html>