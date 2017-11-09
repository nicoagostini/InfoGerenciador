<!DOCTYPE html>
<html lang="en">
<?php
include_once("inputs/header.php");
?>

<div class="container-fluid">
  <div class="row">
    <?php
    include_once("inputs/menu.php");
    ?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Painel de controle</h1>

      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="produtos.php">
            <img src="img/eng.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Produtos</h4>
            <span class="text-muted">Lista de produtos</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="clientes.php">
            <img src="img/pes.png" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Clientes</h4>
            <span class="text-muted">Lista de clientes</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="fornecedores.php">
            <img src="img/forn.png" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Fornecedores</h4>
            <span class="text-muted">Lista de fornecedores</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="orcamento.php">
            <img src="img/notepad.png" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Orçamento</h4>
            <span class="text-muted">Gerar novo orçamento</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="venda.php">
            <img src="img/check.png" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Venda</h4>
            <span class="text-muted">Efetuar uma venda</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="caixa.php">
            <img src="img/setas.gif" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Caixa</h4>
            <span class="text-muted">Entradas e saídas</span>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <a href="lc.php">
            <img src="img/cart.png" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Lista de compras</h4>
            <span class="text-muted">Itens a serem comprados</span>
          </a>
        </div>
      </div>
<!--
      <h2 class="sub-header">Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>sagittis</td>
              <td>ipsum</td>
              <td>Praesent</td>
              <td>mauris</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>Fusce</td>
              <td>nec</td>
              <td>tellus</td>
              <td>sed</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>augue</td>
              <td>semper</td>
              <td>porta</td>
              <td>Mauris</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>massa</td>
              <td>Vestibulum</td>
              <td>lacinia</td>
              <td>arcu</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>eget</td>
              <td>nulla</td>
              <td>Class</td>
              <td>aptent</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>taciti</td>
              <td>sociosqu</td>
              <td>ad</td>
              <td>litora</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>torquent</td>
              <td>per</td>
              <td>conubia</td>
              <td>nostra</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>per</td>
              <td>inceptos</td>
              <td>himenaeos</td>
              <td>Curabitur</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>sodales</td>
              <td>ligula</td>
              <td>in</td>
              <td>libero</td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
