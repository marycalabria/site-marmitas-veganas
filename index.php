<?php
    $pratos = array(
        array("id" => 10, "prato" => "Lasanha Incrível", "tamanho" => "470g", "ingredientes" => "Molho bolonhesa com carne vegetal da linha Incrível", "preco" => "R$ 32,90", "imagem" => "./imagens/lasanha.png"),
        array("id" => 20, "prato" => "Kibe Proteico de Berinjela", "tamanho" => "320g", "ingredientes" => "Batata bolinha assada, castanhas e pasta de tofu", "preco" => "R$ 32,90", "imagem" => "./imagens/kibe.png"),
        array("id" => 30, "prato" => "Minestrone", "tamanho" => "400g", "ingredientes" => "Espinafre, abobrinha e feijão branco", "preco" => "R$ 16,90", "imagem" => "./imagens/minestrone.png"),
        array("id" => 40, "prato" => "Paella de Frutos do Mato", "tamanho" => "360g", "ingredientes" => "Brócolis, tomates confit e alga nori", "preco" => "R$ 24,90", "imagem" => "./imagens/paella.png"),
        array("id" => 50, "prato" => "Tofu Kikka Masala", "tamanho" => "470g", "ingredientes" => "Arroz jasmim e ervilha fresca", "preco" => "R$ 27,70", "imagem" => "./imagens/tofu.png"),
        array("id" => 60, "prato" => "Baião de Dois", "tamanho" => "310g", "ingredientes" => "Mandioca cozida e couve refogada", "preco" => "R$ 27,70", "imagem" => "./imagens/baiao.png")
    );

	include "./cabecalho.php";
?>

	<div class="grid">
        <?php foreach($pratos as $prato): ?>
		<div class="g-column p-3">
			<h3 class="text-center p-1"><?php echo $prato['prato']; ?></h3>
            <div>
                <img alt="<?php echo $prato['prato']; ?>" src="<?php echo $prato['imagem']; ?>" width="100%"/>
            </div>
			<p class="p-1"><?php echo $prato['tamanho']; ?></p>
            <p class="p-1"><strong><?php echo $prato['preco']; ?></strong></p>
			<form action="./prato.php" method="post" class="flex direction-column center save-user">
                <input type="hidden" name="prato_id" value="<?php echo $prato['id']; ?>"/>
				<button type="submit" class="block mt-3">Ver prato</button>
			</form>
		</div>
        <?php endforeach; ?>
	</div>

	<?php include "./rodape.php"; ?>
