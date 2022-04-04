<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cone</title>
    <link rel="stylesheet" href="css/estilo.css">
    <?php
        $altura = isset($_GET["altura"]) ? $_GET["altura"] : "0";
        $raio = isset($_GET["raio"]) ? $_GET["raio"] : "0";
        $nivel = isset($_GET["nivel"]) ? $_GET["nivel"] : "0";
        define('PI', 3.14);

        $geratriz = sqrt(pow($raio, 2) + pow($altura, 2));

        $aFundo = PI * pow($raio,2);
        $aLateral = PI * $raio * $geratriz;
        $aTotal = PI * $raio * ($geratriz + $raio);

        $litros = 3.45 * $aTotal;
        $qtdLatas = ceil($litros / 18);

        if($nivel == 1) {
            $pTotal = $qtdLatas * 238.90;
		} else if ($nivel == 2) {
            $pTotal = $qtdLatas * 467.98;
		} else {
			$pTotal = $qtdLatas * 758.34;
		}
    ?>
</head>
<body>
    <form method="get">
        <label for="raio">Digite o Raio (r):</label>
        <input name="raio" class="raio" id="raio">

        <label for="altura">Digite a Altura (z):</label>
        <input name="altura" class="altura" id="altura">

        <label for="nivel">Tipo de Tinta: </label>
        <input type="radio" name="nivel" id="nivel" value="1"> Nível 1
        <input type="radio" name="nivel" id="nivel" value="2"> Nível 2
        <input type="radio" name="nivel" id="nivel" value="3"> Nível 3

        <input type="submit">
    </form>
    <p>--> Cone</p>
    <?php
        
    
        echo "<h5 class='num$nivel'>Raio: $raio</h5>";
        echo "<h5 class='num$nivel'>Altura: $altura</h5>";
        echo "<h5 class='num$nivel'>Nível: $nivel</h5>";
        echo "-------------";
        echo "<h5 class='num$nivel'>Geratriz: $geratriz</h5>";
        echo "-------------";
        echo "<h5 class='num$nivel'>Área do Fundo: $aFundo</h5>";
        echo "<h5 class='num$nivel'>Área da Lateral: $aLateral</h5>";
        echo "<h5 class='num$nivel'>Área Total: $aTotal</h5>";
        echo "-------------";
        echo "<h5 class='num$nivel'>Litros: $litros</h5>";
        echo "<h5 class='num$nivel'>Quantidade de Latas: $qtdLatas</h5>";
        echo "-------------";
        echo "<h5 class='num$nivel'>Preço Total: $pTotal</h5>";
    ?>
</body>
</html>