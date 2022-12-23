<?php
include_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Login</title>
</head>

<body>
    <div class="container">

    <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <div>

                <h4>Listar Users</h4>

            </div>

            <div>
            <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#cadUsuarioModal">
                Cadastrar
           </button>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-12">
                <span class="listar-usuarios"></span>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="cadUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadUsuarioModalLabel">Cadastrar user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form id="cad-usuario-form">
          <div class="mb-3">
            <label for="nome" class="col-form-label">Nome:</label>
            <input type="text" name="nome" value="adilson" placeholder="Digite o nome completo" required>
          </div>
          
          <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" name="email" value="a@gmail.com" placeholder="Digite o email" required>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-outline-success btn-sm" id="cad-usuario-btn" value="Cadastrar"/>
      </div>
        </form>

      </div>
     
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/custom.js"></script>
</body>
</html>