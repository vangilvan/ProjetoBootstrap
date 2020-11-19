<?php
include_once('conexao.php');
$title = "Full Stack Eletro";
include('cabecalho.php');
?>

    <body>
        <header>
        <div class="container-fluid">
           <!-- Inicio do Menu-->
           <?php include('menu.php');?>
           <!--Fim do menu-->
          
        </header>
        <main class="row">
        <div class="col-12">
           <h2 class="display-4">Pedido Realizado com Sucesso</h2>
        </div>
<?php

if(isset($_POST['nome']) && isset($_POST['telefone'])){
    $idProd = $_POST['idprod'];
    $sql = "select * from produto WHERE idproduto = $idProd";
    $result = $conn->query($sql);
    $infoProd = $result->fetch_array();

     
     $nome = $_POST['nome'];
     $rua = $_POST['endereco'];
     $num = $_POST['numero'];
     $bairro = $_POST['bairro'];
     $cidade = $_POST['cidade'];
     $endereco = $rua.", ".$num." - ".$bairro.", ".$cidade." - SP";
     $tel = $_POST['telefone'];
     $nomeProd = $infoProd['nome_produto'];
     $precoUni = $infoProd['precofinal'];
     $qtd = $_POST['quantidade'];
     $total = $qtd*$infoProd['precofinal'];

     

     $sqlinsere = "insert into pedidos(idprod, Cliente, Endereco, Telefone, Nome_produto, Valor_unit, Quantidade, Valor_final) values ($idProd,'$nome','$endereco',$tel,'$nomeProd',$precoUni,$qtd,$total)";
     $final= $conn->query($sqlinsere);
     ?>
     <div class="alert alert-primary" role="alert">
     <p>Obrigado <strong><?php echo $nome;?></strong> por comprar conosco. Entraremos em contato para maiores detalhes sobre sua compra.</p>
     <button type="button" name="envia" onclick="location.href='produtos.php'" class="btn btn-success">Continuar Comprando</button>
     <?php
    
    }else{
        ?>
        <p>Informações incorretas foram enviadas, por favor tente novamente.</p>
        <?php

    }

  

?>
</main>
 <!-- Inicio do Rodapé-->
 <?php include('rodape.php');?>
        <!-- fim do Rodapé-->
</div>
    </body>
</html>