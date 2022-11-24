<!DOCTYPE html>
<html lang="PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./Css/arquivo.css" rel="stylesheet" type="text/css" />
    <title>Menu On-line</title>
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /-->

<!--bot css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--bot css-->
<!--bot js-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--bot js-->
<!--Tag Responsiva-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Tag Responsiva-->
<meta charset="utf-8">

<style>
	iframe{max-width: 85%; max-height:auto; }
</style>

</head>

<body>
<?php
session_start();
?>

    <div id="menu-h">
        <nav>
            <ul>
                <li>
                    <a href="https://estacio.br/"> Instagram</a>
                </li>
                <li>
                    <a href="https://estacio.br/"> Facebook</a>
                </li>
                <li>
                    <a href="https://estacio.br/">Sobre</a>
                </li>
                <li>
                    <a href="#">Quem Somos</a>
                </li>
                <li>
                    <a href="#">Contato</a>
                </li>
                <li>
                
                     <?php echo "<a href='#'>BEM VINDO ". $_SESSION['nome'] . "</a>"; ?>
                </li>
            </ul>
        </nav>
    </div>

    <!--style="background: linear-gradient(90deg, black, red, black)">

	<!- Bot carrousel bootstrap 5-->
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img_sliders/pizza_slide960x334.jpg"  height="400" width="400" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bem vindo</h5>
        <p>Experimente nossos novos sabores de Pizza.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img_sliders/slide_hamburguer.jpg" height="400" width="400" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hambugueria</h5>
        <h4>Experimente nossos Hamburguers Gourmet.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img_sliders/slide_marcarrão.jpg" height="400" width="400" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Massas</h5>
        <h4>Experimente nosso Delicioso Macarrão na Chapa.</h4>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<!--Bot carrousel-->

<!--div class="coll-100">
    <div class="slider-principal">
        <div> <img src="./img_sliders/pizza_slide960x334.jpg" /></div>
        <div> <img src="./img_sliders/slide_hamburguer.jpg" /></div>
        <div> <img src="./img_sliders/slide_marcarrão.jpg" /></div>
    </div>
</div-->


<!--Menu do Pedidos -->
<div class="barraLateral">
        <h3> Meu Pedido  </h3>
        <!--exibir o preço final-->
        <p> Valor do Pedido: <span style="font-weight: bold;">R$<span class="value-cart">0,00</span></span> </p>
        <!-- Aqui colocar os produtos que foram adicionados quantidade e valor-->
        <p>Pedido mínimo: <strong>R$25,00</strong></p>
        <p>Tempo médio de entrega: <strong>30 a 60 min</strong></p>
        
        <a class="fechar-carrinho" href="/Carrinho">Fechar Pedido</a> <!--Exibir uma mensagem que o pedido está Okey-->
         
</div>

<!--tabela de produtos -->
<table style="width:60%">
    <!-- table é a tabela Cabeçalho da tabela-->
    <tr style="color: #0e0e0e; text-align: center; font-size: 20px;">
        <td><b>Produto</b></td>
        <td><b>Descrição</b></td>
        <td><b>Preço</b></td>
        <td><b>Quantidade</b></td>
    </tr>
    
    <!--Primeira Linha -->
    <tr>
        <td>
            <img src="./img_produtos/hamburguer_novo2.jpeg" alt="image" height="150" width="140">
        </td>
        <td>
            <p>Produto com alto sabor, carne de picanha
                Cebola, alface, tomate, molho especial</p>
        </td>
        <td>R$<span id="cost1">20,00</span></td>
        <td>
            <div class="Container">
                <button onclick="retirar('1')">-</button>
                <input type="text" value="0" disabled id="counterValue1">
                <button onclick="adicionar('1')">+</button>
            </div>
        </td>
    </tr>

    <!--Segunda Linha -->
    <tr>
        <td>
            <img src=" ./img_produtos/hamburguer_novo.jpeg" alt="image" height="150" width="140">
        </td>
        <td>
            <p>Na compra de 2 X-Tudo GANHE 1 X-BURGUER</p>
        </td>
        <td>R$<span id="cost2">99,99</td>
        <td>
            <div class="Container">
                <button onclick="retirar('2')">-</button>
                <input type="text" value="0" disabled id="counterValue2">
                <button onclick="adicionar('2')">+</button>
            </div>
        </td>
    </tr>

    <!--Terceira Linha -->
    <tr>
        <td>
            <img src="./img_produtos/hamburguer1.jpeg" alt="image" height="150" width="140">
        </td>
        <td>
            <p>Pão de Hambúrguer, 1 Carne de Hambúrguer, Bacon, Ovo, Presunto, Muçarela, Milho, Alface, Tomate,Batata Palha</p>
        </td>
        <td>R$<span id="cost3">25,50</span></td>
        <td>
            <div class="Container">
                <button onclick="retirar('3')">-</button>
                <input type="text" value="0" disabled id="counterValue3">
                <button onclick="adicionar('3')">+</button>
            </div>
        </td>
    </tr>

    <!--Quarta Linha -->
    <tr>
        <td>
            <img src="./img_produtos/hamburguer_novo3.jpeg" alt="image" height="150" width="140">
        </td>
        <td>
            <p>
                Pão,1 carne 180g,cheddar,bacon,salada,molho RIBEIROS e CATUPIRY empanado
                combo de Batata, com maionese da casa.
            </p>
        </td>
        <td>R$<span id="cost4">75,50</span></td>
        <td>
            <div class="Container">
                <button onclick="retirar('4')">-</button>
                <input type="text" value="0" disabled id="counterValue4">
                <button onclick="adicionar('4')">+</button>
            </div>
        </td>
    </tr>
</table>

    <div id="headingOne" class="card-header" style="background-color: rgb(242, 197, 17)">
        <h5 style="color: rgb(34, 47, 61)">Bebidas!!!</h5>
    </div>


        <!-- Scripts -->
        <script>
            function adicionar(product) {
                let amount = document.getElementById("counterValue" + product).value++;
                if (amount >= 0) calc(product, "sum");
            }
    
            function retirar(product) {
                let amount = document.getElementById("counterValue" + product).value--;
                if (amount > 0) calc(product, "sub");
            }
    
            function calc(product, calc) {
                const costProduct = document.getElementById("cost" + product).innerText;
                let valueCart = document.querySelector(".value-cart").innerText;
    
                let valueProduct = parseFloat(costProduct.replace(",", "."));
                let valueCartNumber = parseFloat(valueCart.replace(",", "."));
    
                if (calc == "sum") {
                    result = valueCartNumber + valueProduct;
                }
                if (calc == "sub") {
                    result = valueCartNumber - valueProduct;
                }
    
                document.querySelector(".value-cart").innerText = result.toFixed(2);
            }
        </script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./JS/arquivo.js"></script>

</body>


</html>