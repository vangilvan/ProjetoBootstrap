<?php 
   include_once('conexao.php');
   
   if(isset($_GET['idprod'])){
       $idProd = $_GET['idprod'];
       

       $sql = "select * from produto WHERE idproduto = $idProd";
       $result = $conn->query($sql);
       $infoProd = $result->fetch_array();
   }
   $title = "Pedido - Full Stack Eletro";
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
                    <h2 class="display-4">Pedido</h2>
                    <hr class="my-1" />
                </div>
                <section class="pedido">
                <form method="post" action="fecha_pedido.php">
                    <table width="800">
                        <tr>
                            <td rowspan="6" class="prod">
                                <img src='<?php echo $infoProd["imagem"]?>' width='120' />
                                <p><?php echo $infoProd["descricao"]?></p>
                                <p>De: <?php echo $infoProd["preco"]?></p>
                                <p class='destaque'>Por: <?php echo $infoProd["precofinal"]?></p>
                            </td>
                            <td><label for="nome"><b>Nome:</b></label></td>
                            <td colspan="3"><input type="text" name="nome" id="nome" /></td>
                        </tr>
                        <tr>
                           <td><label for="endereco"><b>Endereço:</b></label></td>
                           <td class="end"><input type="text" name="endereco" id="endereco" /></td>
                           <td><label for="numero"><b>Nº:</b></label></td>
                           <td><input type="number" name="numero" id="numero" class="num" /></td>
                        </tr>
                        <tr> 
                           <td><label for="bairro"><b>Bairro:</b></label></td>
                           <td colspan="3"><input type="text" name="bairro" id="bairro" /></td>
                        </tr>
                        <tr>
                           <td><label for="cidade"><b>Cidade:</b></label></td>
                           <td colspan="3"><input type="text" name="cidade" id="cidade" /></td>
                        </tr>
                        <tr>
                           <td><label for="telefone"><b>Telefone:</b></label></td>
                           <td colspan="3"><input type="tel" name="telefone" id="telefone" class="tel" /></td>
                        </tr>
                        <tr>
                           <td><label for="quantidade"><b>Quantidade:</b></label></td>
                           <td colspan="3"><input type="Number" name="quantidade" value="1" id="quantidade" class="qtd" /></td>
                        </tr>
                        <tr>
                           <td colspan="5" class="sub">
                               <input type="hidden" name="idprod" value='<?php echo $infoProd["idproduto"]?>' />
                              <button type="submit" name="envia" class="btn btn-success my-4">Realizar Pedido</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </section>
        </main>
        <!-- Inicio do Rodapé-->
        <?php include('rodape.php');?>
        <!-- fim do Rodapé-->
</div>
    </body>
</html>