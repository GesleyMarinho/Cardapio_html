<!DOCTYPE html>
<html lang="PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./Css/arquivo.css" rel="stylesheet" type="text/css" />
    <title>Menu On-line</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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
</body>
<div class="coll-100">
    <div class="slider-principal">
        <div> <img src="./img_sliders/pizza_slide960x334.jpg" /></div>
        <div> <img src="./img_sliders/slide_hamburguer.jpg" /></div>
        <div> <img src="./img_sliders/slide_marcarrão.jpg" /></div>
    </div>
</div>
<!--Menu do Pedidos -->
<div class="barraLateral">
        <h3> Meu Pedido  </h3>
        <p>  Valor do Pedido: <strong>R$0,00</strong></p> <!--exibir o preço final-->
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
    <td>
        <img src="./img_produtos/hamburguer_novo2.jpeg" alt="image" height="150" width="140">
    </td>
    <td>
        <p>Produto com alto sabor, carne de picanha
            Cebola, alface, tomate, molho especial</p>
    </td>
    <td>
        R$20,00
    </td>
    <td>
        <div class="Container">
            <button id="buttonDecrement">-</button>
            <input type="text" value="0" disabled id="counterValue">
            <button id="buttonIncrement">+</button>
        </div>

    </td>
    <!--Segunda Linha -->
    <tr>
        <td>
            <img src="./img_produtos/hamburguer_novo.jpeg" alt="image" height="150" width="140">
        </td>
        <td>
            <p>Na compra de 2 X-Tudo GANHE 1 X-BURGUER</p>

        </td>
        <td>
            R$50,00
        </td>
        <td>
            <div class="Container">
                <button id="buttonDecrement">-</button>
                <input type="text" value="0" disabled id="counterValue">
                <button id="buttonIncrement">+</button> 
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
        <td>
            R$50,00
        </td>
        <td>
            <div class="Container">
                <button id="buttonDecrement">-</button>
                <input type="text" value="0" disabled id="counterValue">
                <button id="buttonIncrement">+</button>
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
        <td>
            R$50,00
        </td>
        <td>
            <div class="Container">
                <button id="buttonDecrement">-</button>
                <input type="text" value="0" disabled id="counterValue">
                <button id="buttonIncrement">+</button>
            </div>
        </td>
    </tr>
    </table>

    <div id="headingOne" class="card-header" style="background-color: rgb(242, 197, 17)">
        <h5 style="color: rgb(34, 47, 61)">Bebidas!!!</h5>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./JS/arquivo.js"></script>

</body>

<Script>
    const counter = document.querySelector('#counterValue');
    const buttonDecrement = document.querySelector('#buttonDecrement');
    const buttonIncrement = document.querySelector('#buttonIncrement');

    let value = counter.value;

    buttonDecrement.addEventListener('click', () => {
        value = value !== 0 ? --value : 0;
        counter.value = value;
    });

    buttonIncrement.addEventListener('click', () => {
        value = ++value;
        counter.value = value;
    })
</Script>

</html>