<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong Password Generator</title>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div>
            
            <header>
                <h1>
                    Strong Password Generator
                </h1>
            </header>

            <main>
                <form action="" method="POST">
                    <label for="length">Inserisci la lunghezza della password:</label>
                    <input type="number" name="length" id="length">
                    <button type="submit">
                        Submit
                    </button>
                </form>

                <?php
                    include __DIR__.'./partials/pwdGen.php';
                ?>

                <div>
                    <span>
                        <?php
                            if(isset($_POST['length'])){

                                echo randomPass(intval($_POST['length']));

                            };
                        ?>
                    </span>
                </div>

            </main>

        </div>
    </body>
</html>