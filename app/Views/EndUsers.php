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
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= 'EndUsers' ?>">EndUsers</a>
                    </li>
                </nav>

            <div class="row">
                <div class="col-8 mx-auto" style="margin-top:3rem;">
                    <?php foreach($results as $row) : ?>
                    <media class="media bg-light text-dark">
                    <div style="margin-left:5px;margin-top:12px;padding-left:5px;width:30%;height:378px;border:2px solid $FFF; background-color:#FFF;box-shadow:1px 1px 3px #000">
                        <h4 class="h4 text-left"><?= $row['NOME'];?></h4>
                        <h4 class="h4 text-left"><?= $row['SOBRENOME'];?></h4>
                        <h4 class="h4 text-left"><?= $row['EMPREGO'];?></h4>
                        <h4 class="h4 text-left"><?= $row['IDADE'];?></h4>
                    </div>
                    
                        <div class="media-body" style="margin-left:25px; margin-right:32px;margin-top:12px;box-shadow:1px 1px 3px #000;">
                            <div style="border: 2px solid #FFF; margin-top:13px; padding-left:10px; padding-top:7px; background-color:#FFF">
                             
                             <label for="">Cidade</label><h6 class="h6 text-left"><?= $row['CIDADE'];?></h6>
                              <label for="">Endereço</label><h6 class="h6 text-left"><?= $row['ENDERECO'];?></h6>
                              <label for="">Bairro</label><h6 class="h6 text-left"><?= $row['BAIRRO'];?></h6>
                              <label for="">Cep</label><h6 class="h6 text-left"><?= $row['CEP'];?></h6>
                              <label for="">Logradouro</label><h6 class="h6 text-left"><?= $row['LOGRADOURO'];?></h6>
                              <label for="">Numero</label><h6 class="h6 text-left"><?= $row['numero'];?></h6>
                            </div>
                        </div>

                    </media>
                    <?php endforeach ; ?>
                </div>
            </div>
        </div>
  </body>
  </html>