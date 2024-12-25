<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h1>เลขคู่ หรือ เลขคี่</h1>
        <div class="mt-3">
            <label for="Start">เริ่มต้น</label>
            <input type="number" class="form-control-sm" id="start" >
        </div>
        <div class="mt-4">
            <label for="end">สิ้นสุด</label>
            <input type="number" class="form-control-sm" id="end">
        </div>
        <?php
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $Start = $_POST['start'];
            $end = $_POST['end'];
        }
        ?>
    </form>
</body>
</html>