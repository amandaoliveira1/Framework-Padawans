<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilotelas.css">
    <meta name="Autora" content="Amanda Oliveira Nascimento">
    <title>Framework Padawans</title>
    <link rel="icon" type="img/png" href="img/1.png" />
</head>

<body>
    <!-- CONTEÚDO DE AVISO -->
    <div class="aviso">
        <span>Confira informações sobre à COVID-19 </span><a href="https://coronavirus.saude.gov.br/" target="_blank" class="avisobotao"><b>SAIBA MAIS</b></a>
    </div>

    <!-- MENU -->
    <div class="navbar">
        <a href="index.php"><img src="img/logo1.png" class="navlogo"></a>
        <a href="tela1.php">Postagens</a>
        <a href="tela2.php">Albuns</a>
        <a href="tela3.php">Todos</a>
    </div>

        <form action="tela3.php" method="POST">
            <div class="pesquisa">
                <input style="font-family:'Poppins'; padding: .4rem .8rem;" type="text" placeholder="Pesquisar..." name="pesquisar">
               <button type="submit" style="padding: .4rem .8rem ;">&#128269;</button>
            </div>
        </form>
      
        <div class="conteudo">
            <a id = "#topo"><h2>Tabela Todos</h2></a>

        <?php
        if (!empty($_POST['pesquisar'])) {
            $pesquisar = $_POST['pesquisar'];
        }
        $url = "https://jsonplaceholder.typicode.com/todos";
        $inicio = curl_init($url);
        $dadosValidos = false;

        curl_setopt($inicio, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($inicio, CURLOPT_SSL_VERIFYPEER, false);

        $api = array_values(json_decode(curl_exec($inicio)));


        if (isset($pesquisar)) { //Verificar se a pesquisar do usuario não é nula
            $arrayResultado = array();
            foreach ($api as $key => $object) { //Pecorro toda api para verificar se existe uma referencia a pesquisa do usuario
                if (str_contains($object->title, $pesquisar)) {
                    $dadosValidos = true;
                    $arrayResultado[] = $object;
                }
            }
            if ($dadosValidos) { //Pesquisa do usuario com resultado.
                $status = 'false';
                echo ("<table border='1' class='tabela'>
                        <tr> 
                        <td><b>Titulo</b></td> 
                        <td>
                        <b>Status</b></td> 
                        </tr>
                        ");
                foreach ($arrayResultado as $key => $object) {
                    $object->completed ? $status = 'true' :  $status = 'false';
                    if (str_contains($object->title, $pesquisar)) {
                        echo ("
                            <tr>
                            <td>" . $object->title . "</td> 
                            <td>" . $status . "</td>
                            </tr>");
                    }
                }
                echo ("</table>");
            } else //Se a pesquisa do usuario não obtiver resultado
            {
                echo("<h3>Pesquisa $pesquisar não encontrada</h3");
            }
        } else { //Imprimir todos os valores da API
            $status = false;
            $valor = array_values(json_decode(curl_exec($inicio)));
            echo ("<table border='1' class='tabela'>
                <tr> 
                <td><b>Titulo</b></td> 
                <td>
                <b>Stauts</b></td> 
                </tr>
                ");
            foreach ($valor as $key => $object) {
                $object->completed ? $status = 'true' :  $status = 'false';
                echo ("
                        <tr>
                        <td>" . $object->title . "</td> 
                        <td>" . $status . "</td>
                        </tr>");
            }
            echo ("</table>");
        }
        ?>

            <a href="index.php" class="botao">VOLTAR</a>
            <a href="#" id="topo" class="topo">Voltar ao<br> topo</a>
    </div>

        <footer>
          <p>Todos os direitos reservados<br> amanda.o.nasciment@gmail.com <br> </p>
        </footer>



</html>