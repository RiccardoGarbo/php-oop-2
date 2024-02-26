
<?php 
include __DIR__ . '/category.php';
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--FontAwesome-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
    <!--Bootstrap-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>

</head>
<body>         
    <div class="row">
        <?php foreach($animalsCategory as $category ):?>
            <div class="col-3 text-center">
                <div class="card">
                    <h2> <?= $category->categoryName ?> </h2> 
                    <h5> <?= $category->categoryIcon?> </h5>
                </div>
            </div>
        <?php endforeach ?>
    </div> 
</body>
</html>