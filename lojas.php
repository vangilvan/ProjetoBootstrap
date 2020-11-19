<?php
$title = "Nossas Lojas - Full Stack Eletro<";
include('cabecalho.php');
?>
    <body>
        <div class="container-fluid">
            <header>
                <!-- Inicio do Menu-->
                <?php include('menu.php');?>
                <!--Fim do menu-->
            </header>
            <main class="row">
                <div class="col-12">
                    <h2 class="display-4">Nossas Lojas</h2>
                    <hr class="my-1" />  
                </div>
                <div class="col-4">
                    <h3>Rio de Janeiro</h3>
                    <p>Avenida Presidente Vargas, 5000</p>
                    <p>10&ordm; Andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
                </div>
                <div class="col-4">
                    <h3>São Paulo</h3>
                    <p>Avenida Paulista, 985</p>
                    <p>3&ordm; Andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
                </div>
                <div class="col-4">
                    <h3>Santa Catarina</h3>
                    <p>Rua Major Ávila, 370</p>
                    <p>Vila Mariana</p>
                    <p>(47) 5555-5555</p>
                </div>
            </main>
            <!-- Inicio do Rodapé-->
            <?php include('rodape.php');?>
            <!-- fim do Rodapé-->
        </div>
    </body>
</html>