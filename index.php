<?php
    //Inclui arquivo header.php, responsável pelo topo do sistema
    require('templates/header.php');
?>
    <!--Div principal do site. -->
    <div class="mw-100 box">
        <!--Inclui o menu do sistema-->
        <?php include('templates/nav.php'); ?>

        <!--Aqui todo ficará todo conteúdo do site.-->
        <div class="col-sm-12 content">
               
        </div><!--col-sm-12 content-->
    </div>

<?php
    //Inclui o arquivo footer.php, responsável pelo rodapé do sistema.
    require('templates/footer.php');
?>