<?php include("broker.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/home.css">

</head>

<body>


    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.php">Prodajem Kupujem</a>
        </div>
    </nav>

    <main class="container p-4">
        <div class="row">
            <div class="col-md-4">





                <!-- ADD TASK FORM -->
                <div class="card card-body bg-dark">
                    <form action="kontroler/add.php" name="unosOglasa" onsubmit="return validateForm()" method="POST">

                        <div class="form-group">
                            <input type="text" name="naslov" class="form-control" placeholder="Naslov" autofocus>
                        </div>

                        <div class="form-group">
                            <textarea name="opis" rows="5" class="form-control" placeholder="Opis"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="cena" class="form-control" placeholder="Cena">
                        </div>

                        <div class="form-group">
                            <input type="text" name="pregledi" class="form-control" placeholder="Pregledi">
                        </div>


                        <input type="submit" name="add" class="btn btn-primary btn-block" value="Sacuvaj oglas">

                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table id="tabelaOglasi" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">Naslov</th>
                            <th>Opis</th>
                            <th onclick="sortTable(2)">Cena</th>
                            <th>Pregledi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT oglasID,naslov,cena,opis,pregledi FROM oglas";
                        $oglasi = $conn->query($query);

                        while ($row = mysqli_fetch_array($oglasi)) { ?>
                            <tr>
                                <td><?php echo $row['naslov']  ?></td>
                                <td><?php echo $row['opis']  ?></td>
                                <td><?php echo $row['cena']  ?></td>
                                <td><?php echo $row['pregledi']  ?></td>
                                <td>
                                    <a href="kontroler/edit.php?id=<?php echo $row['oglasID'] ?>">Izmeni</a>
                                    <a href="kontroler/delete.php?id=<?php echo $row['oglasID'] ?>">Obrisi</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>






    <script src="js/script.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>


</body>

</html>