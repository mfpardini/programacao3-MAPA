<?php

$dadosCarro = json_decode($_SESSION['carro'], true);
$dadosMotor = json_decode($_SESSION['motor'], true);

if (!is_null($dadosCarro['marca'])) {

?>
  <table class="table text-center" style="margin-top: 20px">
    <thead class="thead-dark">
      <tr><h2 class="m-0">Dados do Carro</h2></tr>
      <tr>
        <?php 
          foreach ($dadosCarro as $key => $value) {
            ?>
            <th scope="col"><?=ucfirst($key)?></th>
            <?php
          }
        ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
          foreach ($dadosCarro as $key => $value) {
            ?>
            <td><?=$value?></td>
            <?php
          }
        ?>
      </tr>
    </tbody>
  </table>
    
  <table class="table text-center">
    <thead class="thead-dark">
      <tr><h2>Dados do Motor</h2></tr>
      <tr>
        <?php 
          foreach ($dadosMotor as $key => $value) {
            ?>
            <th scope="col"><?=ucfirst($key)?></th>
            <?php
          }
        ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
          foreach ($dadosMotor as $key => $value) {
            ?>
            <td><?=$value?></td>
            <?php
          }
        ?>
      </tr>
    </tbody>
  </table>

<?php
}
?>