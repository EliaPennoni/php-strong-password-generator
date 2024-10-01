<?php
require_once __DIR__ . "/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    Password generator
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="lenght" class="form-label">Lunghezza della password</label>
                        <input type="number" class="form-control" id="length" name="length" min="3" max="10"
                            placeholder="inserisci il numero di caratteri della tua password" required>
                        </p$>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">invia</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                if ($password != null) {
                    ?>
                    <h2>
                        La tua password e : <?php echo $password ?>
                    </h2>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>