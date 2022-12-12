<div> 
    <?php
        require_once "dataBase.php";
        $sql="SELECT * FROM veiculo";
        $resultado=$con->query($sql);
        ?>
        <div id="card" class="row row-cols-1 row-cols-md-3 g-4">
        <?php 
        while($veiculo=$resultado->fetch_array()){
            ?>
            <div class="col">
            <div class="card h-100">
              <img id="img-card" src="<?php echo $veiculo['foto']?>" class="card-img-top" style="height: 20vw;">
              <div class="card-body">
                <h5 class="card-title" name="nome"><?php echo $veiculo['modelo']?></h5>
                <p class="card-text"><?php echo $veiculo['fabricante']?></p>
                <p class="card-text"><?php echo $veiculo['ano']?></p>
                <p class="card-text"><?php echo $veiculo['placa']?></p>
            </div>
            </div>
          </div>
            <?php
        }
        ?>
    </div>

