<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script type="text/javascript">
        $(document).ready(function()
        {   
            $('#table').DataTable({
                processing: true;
                serverSide: true;
                ajax: "<?php echo site_url("Server/ajax")?>"
            });
        });
    </script>

  </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <table id="table" class="table">
                        <thead>
                            <th class="font-weigth-bold">Id</th>
                            <th class="font-weigth-bold">Nome</th>
                            <th class="font-weigth-bold">Descricao</th>
                            <th class="font-weigth-bold">Endereço</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>