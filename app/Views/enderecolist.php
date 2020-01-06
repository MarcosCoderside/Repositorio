<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
    <nav class="nav bg-info">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?='index'?>">Create Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?='users'?>">Users</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link text-light" href="<?= 'endereco' ?>">Create Endereco</a>
                    </li>
                </nav>
        <div class="row">
            <div class="col-8 mx-auto">
            <?php foreach($results as $row) : ?>
                <div class="card bg-info border border-info text-light mt-3 mb-3">
                    <div class="card-header">
                        <h4 class="text-light text-center"><?= $row['CIDADE'];?></h4>
                    </div>
                    <div class="card-body">
                        <h4 class="border border-light p-2"><?= $row['ENDERECO'];?></h4>
                        <h4 class="border border-light p-2"><?= $row['BAIRRO'];?></h4>
                        <h4 class="border border-light p-2"><?= $row['LOGRADOURO'];?></h4>
                        <h4 class="border border-light p-2"><?= $row['CEP'];?></h4>
                        <h4 class="border border-light p-2"><?= $row['NUMERO'];?></h4>
                    </div>
                </div>
            <?php endforeach ; ?>
            </div>
        </div>
    </div>
  </body>
  </html>