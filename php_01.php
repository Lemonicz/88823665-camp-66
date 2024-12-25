<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label{
            font-size: larger;
        }
        
    </style>
</head>
<body>
    <div class="container mt-5" >
        <form>
        <h1>สูตรคูณ </h1>
        <div class="justify-content-md-center " >
            <label for="สุตรคูณ">สูตรคูณแม่ 2</label><br>
        </div>
        <?php
    
        for($i =1 ; $i <= 12 ; $i++){
            echo "2"." x ".$i." = ". 2*$i."<br>";
        }
        ?>
        </form>
    </div>
</body>
</html>