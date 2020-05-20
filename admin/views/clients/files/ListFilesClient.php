<h1>Arquivo do cliente</h1>
<br>
<form method="POST" action="?c=c&a=ufc&id=<?=$id_cliente?>">
    <button type="submit" class="btn btn-success">Inserir novo arquivo</button>
</form>
<br>
<?php
    //abre o diretório a ser manipulado
    $diretorio = opendir("assets/files/clients/".$id_cliente);
    //loop pelos arquivos do diretório para listar os mesmos
    while(($arquivo = readdir($diretorio)) != ""){
        //eliminar a leitura dos arquivos de diretorio
        if($arquivo != '.' && $arquivo != '..' && $arquivo != 'Thumbs.db'){
           //selecionar a extenção do arquivo 
            $extensao = str_replace('.', '', strrchr($arquivo, '.'));
            ?>
            <a href="assets/files/clients/<?=$id_cliente?>/<?=$arquivo?>">
                <?php
                    if($extensao == 'png' || $extensao == 'jpg' || $extensao == 'jpeg' || $extensao == 'gif' || $extensao == 'bmp'){
                ?>
                    <img src="assets/files/clients/<?=$id_cliente?>/<?=$arquivo?>" height="200px">
                <?php
                }else{
                    echo $arquivo;
                }
                ?>
            </a>
            <a href="?c=c&a=dfc&id=<?=$id_cliente?>&file=<?=$arquivo?>">
                Deletar
            </a>
            <br>
            <?php
        }
    }
//Fecha o diretório
$diretorio = closedir($diretorio);
echo $diretorio;
?>