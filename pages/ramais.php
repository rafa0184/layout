<?php
    //Inclui arquivo header.php, responsável pelo topo do sistema
    require('../templates/header.php');;
?>
    <!--Div principal do site. -->
    <div class="mw-100 box">
        <!--Inclui o menu do sistema-->
        <?php include('../templates/nav.php'); ?>

        <!--Aqui todo ficará todo conteúdo do site.-->
        <div class="col-sm-12 content">
            <h1 class="titulo">Ramais Grupo Zelo</h1>
            <?php   
                include('../Classes/ClassRamais.php');
                $ramais = new Ramais();
                $ramais = $ramais->getRamais();

                echo "<table class='table table-sm'>";
                echo "<tr>";
                    echo "<th>Ramal             </th>";
                    echo "<th>Nome | Descrição  </th>";
                    echo "<th>Setor             </th>";
                    echo "<th>Cidade            </th>";
                echo "</tr>";
                    foreach ($ramais as $row){
                        echo "<tr>";
                            echo "<td>" . $row['ramal_numero']    . "</td>";
                            echo "<td>" . $row['ramal_usuario']   . "</td>";
                            echo "<td>" . $row['setor_descricao'] . "</td>";
                            echo "<td>" . $row['cidade_nome']     . "</td>";
                        echo "</tr>";
                    }
                echo "</table>";
            ?>
        </div><!--col-sm-12 content-->
    </div>

<?php
    //Inclui o arquivo footer.php, responsável pelo rodapé do sistema.
    require('../templates/footer.php');
?>