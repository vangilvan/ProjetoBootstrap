<?php 
   include_once('conexao.php');

   if(isset($_POST['nome']) && isset($_POST['msg'])){
       $nome = $_POST['nome'];
       $msg = $_POST['msg'];

       $sql = "insert into comentarios(nome, msg) values('$nome','$msg')";
       $result = $conn->query($sql);
   }
   $title = "Contato - Full Stack Eletro";
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
                    <h2 class="display-4">Contato</h2>
                    <hr class="my-1" />
                </div>
                <section class="col-5 my-4 d-flex justify-content-center bg-primary font-weight-bold">
                    <img src="./imagens/e-mail.jpg" width="40px">
                    <p class="text-dark">contato@fullstackeletro.com</p>
                </section>
                <span class="col-2"></span>
                <section class="col-5 my-4 d-flex justify-content-center bg-primary font-weight-bold">
                    <img src="./imagens/WhatsApp.svg" width="40px">
                    <p class="text-dark">(11) 99999-9999</p>
                </section>
                <section class="col-12 my-4">
                    <form method="post" action="">
                        <div class="form-group col-6">
                            <label for="nome"><b>Nome:</b></label>
                            <input type="text" name="nome" id="nome" class="form-control" />
                        </div>
                        <div class="form-group col-6">
                          <label for="msg"><b>Mensagem:</b></label>
                          <textarea name="msg" id="msg" class="form-control"></textarea>
                          <button type="submit" name="envia" class="btn btn-success my-4">Enviar</button>
                        </div>
                        
                    </form>
                
                <?php
                $sql = "select * from comentarios";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                        echo "<div class='col-12 bg-info'>";
                        echo "Data: ", $rows['data'], "<br>";
                        echo "Nome: ", $rows['nome'], "<br>";
                        echo "Mensagem: ", $rows['msg'], "<br>";
                        echo "<br><hr class='my-4'/>";
                        echo "</div>";
                  }
                
                }else{
                    echo "<div class='col-12 bg-info'>";
                    echo "Nenhum comentário ainda";
                    echo "<hr class='my-4' />";
                    echo "</div>";
                }
              ?>
              
            </section>
        </main>
        <!-- Inicio do Rodapé-->
        <?php include('rodape.php');?>
        <!-- fim do Rodapé-->
        </div>
    </body>
</html>