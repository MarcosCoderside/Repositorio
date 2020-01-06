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
                <div class="col-8 mx-auto">
                    <div class="card" style="margin-top:3rem;">
                        <div class="card-header">
                            Header
                        </div>
                        <div class="card-body">
                                <form  action="insertEndereco" method="POST" class="form">
                                    <div class="form-group">
                                        <label for="">CIDADE</label>
                                        <input type="text" name="CIDADE" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ENDERECO</label>
                                        <input type="text" name="ENDERECO" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">BAIRRO</label>
                                        <input type="text" name="BAIRRO" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">LOGRADOURO</label>
                                        <input type="text" name="LOGRADOURO" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">CEP</label>
                                        <input type="text" name="CEP" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">NUMERO</label>
                                        <input type="text" name="NUMERO" class="form-control">
                                    </div>

                                    <input class="btn btn-success" type="submit">
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  </body>
</html>