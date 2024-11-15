<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP0011課題</title>
</head>
<body><!--======== 前略 ========-->

<body>
    <p> 
        <?php
        $personal_data = ['name' => '玉ねぎ', 'price' => 200, 'origin' => '北海道'];


        $labelMap = [
            'name' => '名前',
            'price' => '値段',
            'origin' => '産地'
        ];
        
        foreach ($personal_data as $key => $value) {
            $label = $labelMap[$key] ?? $key;
            echo "<br>" . $label . ":" . $value ;
        }
 
         echo '<br>';
 

        ?>
    </p>
</body>

</html>


]