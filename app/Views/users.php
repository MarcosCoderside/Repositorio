<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style rel="stylesheet">
        .quadrado
        {
            background-color:#000;
            width:200px;
            height:200px;
        }

        #link-hover{
            transition-duration: 300ms;
        }

        #link-hover:hover
        {
            color:#1087ff!important;
        }


    </style>
  
  </head>
  <body style="background-color:#fff;">
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
                <div class="col-8 mx-auto" style="margin-top:3rem; border border-info">
                 <?php foreach($results as $row) : ?>   
                        <media class="media bg-light text-dark">
                            <div style="margin:4px;width:30%; border:2px solid #FFF;background-color:#FFF;box-shadow:1px 1px 3px #000;">
                                <h4 class="card-title text-center pt-2 pb-2"><?= $row['NOME'];?></h4>
                                <h4 class="card-title text-center pt-2 pb-2" style="margin-top:12px;"><?= $row['SOBRENOME'];?></h4>
                            </div>
                            <div class="media-body text-center" style="margin-left:25px;margin-right:32px; margin-top:12px;box-shadow:1px 1px 3px #000">
                                <div style="border:2px solid #FFF; margin-top:13px; padding-left:10px;padding-top:7px;background-color:#FFF;">
                                    <h5 class="card-title"><a class="text-dark" id="link-hover" style="font-weigth:bold" href=""><?= $row['EMPREGO'];?></a></h5>
                                    <h5 class="card-title"><?= $row['IDADE'];?></h4>            
                                </div>
                                </div>
                        </media>
                    <?php endforeach ; ?>      
                </div>
        </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>