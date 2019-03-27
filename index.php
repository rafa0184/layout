<?php
    require('templates/header.php');
?>
    
    <div class="mw-100 box">

            <div class="col-sm-12 topo">
                <div class="botao-sair">
                    <span> <i class="fas fa-window-close"></i> Sair</span>
                </div><!--botao-sair-->

                <div class="topo-logo">
                    <h1>Sistema</h1>
                </div><!--topo-logo-->
                
            </div><!--col-sm-12 topo-->

            <div class="col-sm-2 menu sidebar">
                <div class="menu-avatar">   
                    <i class="fas fa-user"></i>
                </div><!--menu-avatar-->
                <div class="menu-descricao">
                    <span>Rafael de Morais Ferreira</span>
                    <span>Gerente de TI</span>
                </div><!--menu-descricao-->

                <nav class="navigation">
                    <ul class="mainmenu">
                        <li><a href="">Home</a></li>
                        <li><a href="">Agenda</a></li>
                        <li><a href="">Financeiro</a>
                            <ul class="submenu">
                                <li><a href="">Tops</a></li>
                                <li><a href="">Bottoms</a></li>
                                <li><a href="">Footwear</a></li>
                            </ul>
                        </li>
                        <li><a href="">Contact us</a></li>
                    </ul>
                </nav>
                
            </div><!--col-sm-2 menu sidebar-->

            <div class="col-sm-12 content">
               
            </div><!--col-sm-12 content-->
    </div>
<?php
    require('templates/footer.php');
?>