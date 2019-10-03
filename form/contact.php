<?php
require_once "status_update.php";

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contacts info</title>
</head>
<body>
<div class="d-flex flex-wrap justify-content-around">
    <?php foreach($contactArray as $contactInfo){ ?>
    <div class="card rounded bd-highlight mb-3 bg-gradient-success border border-<?= $contactInfo["status"]==="non-traité" ?"danger":"success"; ?>" style="width: 18rem;">
        <div class="card-body">
            <?php if(($contactInfo["status"])==="traité"){?>
            <div class="alert alert-success" role="alert">
                Demande traitée
            </div>
            <?php } else{ ?>
            <div class="alert alert-danger" role="alert">
                En attente de traitement
            </div>
            <?php } ?>
            <h5 class="card-title"><?= $contactInfo["name"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $contactInfo["email"]; ?></h6>
            <p class="card-text"><?= $contactInfo["subject"]; ?></p>
            <form action="status_update.php" method="get">
                <button class="btn btn-block btn-<?= $contactInfo["status"]==="non-traité" ?"danger":"success"; ?>" type="submit" name="idContact" value="<?= $contactInfo["id"]; ?>">Change status</button>
            </form>
        </div>
    </div>
    <?php } ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
