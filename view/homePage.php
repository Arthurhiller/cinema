<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Cinema</title>
</head>
<body>
    <header>
        <nav class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.php?action=films">Films</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php?action=realisateurs">Realisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php?action=categories">Catégories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php?action=acteurs">Acteurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php?action=roles">Role</a>
            </li>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach($stmtFilmHomes->fetchAll() as $filmHome): ?>
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?= $filmHome['titre'] ?></h2>
                        <p class="card-text">Le film est sorti le <?= $filmHome['date_sortie'] ?></p>
                        <p class="card-text">La synopsis du film est : <?= $filmHome['synopsis'] ?></p>
                        <p class="card-text">La durée du film est de <?= $filmHome['duree'] ?>  minutes</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>

