<?php
    $pratos = array(
        array("id" => 10, "prato" => "Lasanha Incrível", "tamanho" => "470g", "ingredientes" => "Molho bolonhesa com carne vegetal da linha Incrível", "preco" => "R$ 32,90", "imagem" => "./imagens/lasanha.png"),
        array("id" => 20, "prato" => "Kibe Proteico de Berinjela", "tamanho" => "320g", "ingredientes" => "Batata bolinha assada, castanhas e pasta de tofu", "preco" => "R$ 32,90", "imagem" => "./imagens/kibe.png"),
        array("id" => 30, "prato" => "Minestrone", "tamanho" => "400g", "ingredientes" => "Espinafre, abobrinha e feijão branco", "preco" => "R$ 16,90", "imagem" => "./imagens/minestrone.png"),
        array("id" => 40, "prato" => "Paella de Frutos do Mato", "tamanho" => "360g", "ingredientes" => "Brócolis, tomates confit e alga nori", "preco" => "R$ 24,90", "imagem" => "./imagens/paella.png"),
        array("id" => 50, "prato" => "Tofu Kikka Masala", "tamanho" => "470g", "ingredientes" => "Arroz jasmim e ervilha fresca", "preco" => "R$ 27,70", "imagem" => "./imagens/tofu.png"),
        array("id" => 60, "prato" => "Baião de Dois", "tamanho" => "310g", "ingredientes" => "Mandioca cozida e couve refogada", "preco" => "R$ 27,70", "imagem" => "./imagens/baiao.png")
    );

    $prato_id = $_POST['prato_id'];

	include "./cabecalho.php";
    if(isset($prato_id) && !empty($prato_id)) :
?>


	<div class="flex">
        <?php foreach($pratos as $prato): 
            if($prato["id"] == $prato_id): ?>

            <div class="column p-3 mx-auto">
                <div class="text-center">
                    <img alt="<?php echo $prato['prato']; ?>" src="<?php echo $prato['imagem']; ?>" width="33%"/>
                </div>
                <h3 class="text-center p-1"><?php echo $prato['prato']; ?></h3>
                <p class="p-1">Ingredientes: <?php echo $prato['ingredientes']; ?></p>
                <p class="p-1">Tamanho: <?php echo $prato['tamanho']; ?></p>
                <p class="p-1">Preço: <strong><?php echo $prato['preco']; ?></strong></p>
            </div>
        <?php 
            endif; 
            endforeach;
        ?>
    </div>
    
<?php

    endif;

    include "./contato.php";
    include "./rodape.php";
    
?>
