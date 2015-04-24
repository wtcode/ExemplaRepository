<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela_form" id="resultado">
    <tr>
        <th class="titulo">
            <select name="categoria" onchange="location.href = 'produtos.php?id=3&cat=' + this.value">
                <option></option>
                <?php
                    $sql_categoria_filtro = "select * from categoria order by titulo";
                    $result_categoria_filtro = mysql_query($sql_categoria_filtro, $conect);
                    while ($linha_categoria_filtro = mysql_fetch_array($result_categoria_filtro)) {
                        echo "<option value='" . $linha_categoria_filtro['idcategoria'] . "' >" . $linha_categoria_filtro['titulo'] . "</option>";
                    }
                ?>
            </select>
        </th>
        <th colspan="7" class="titulo" align="center">
            Lista Produto  <a href="produtos.php?pt=1" style="float:right; position:relative; margin-right:10px;"><img src="images/add.png" /> <br />  Adicionar</a></th>
    </tr>
    <tr>
        <td width="24%" class="titulo_grid">Produtos</td>
        <td width="17%" class="titulo_grid">Categoria</td>
        <td width="23%" class="titulo_grid" align="center">Sub-Categoria</td>
        <td width="8%" class="titulo_grid"></td>
        <td width="7%" class="titulo_grid"></td>
        <td width="9%" class="titulo_grid"></td>
        <td width="5%" class="titulo_grid">&nbsp;</td>
        <td width="7%" class="titulo_grid">&nbsp;</td>
    </tr>
    <?php
    $dataAtual = date('Y-m-d');
    if (!isset($_GET['cat'])) {
        $sqlGridServico = "select * from produtos order by idprodutos desc";
    } else if (isset($_GET['cat'])) {
        $sqlGridServico = "select * from produtos where idcategoria = " . $_GET['cat'] . " order by idprodutos desc";
    }
    $resultGridServico = mysql_query($sqlGridServico, $conect);
    $num = 0;
    while ($linhaGridServico = mysql_fetch_array($resultGridServico)) {

        $idcategoria = $linhaGridServico['idcategoria'];
        $sub_categoria = $linhaGridServico['idsub_categoria'];

        $sql_categoria = "select * from categoria where idcategoria = '$idcategoria'";
        $result_categoria = mysql_query($sql_categoria, $conect);
        $linha_categoria = mysql_fetch_array($result_categoria);

        if ($sub_categoria != 0) {
            $sql_sub_categoria = "select * from sub_categoria where idsub_categoria = '$sub_categoria'";
            $result_sub_categoria = mysql_query($sql_sub_categoria, $conect);
            $linha_sub_categoria = mysql_fetch_array($result_sub_categoria);
            $titulo_sub_categoria = $linha_sub_categoria['titulo'];
        } else {
            $titulo_sub_categoria = "--------------";
        }

        if ($num % 2 == 1) {
            $cor = "#DDDDDD";
        } else {
            $cor = "#F0F0F0";
        }

        $num = $num + 1;
        ?>
        <tr bgcolor="<?php echo $cor; ?>" class="corpo_grid">
            <td class="corpo_grid"><?php echo $linhaGridServico['titulo'] ?></td>
            <td class="corpo_grid"><?php echo $linha_categoria['titulo'] ?></td>
            <td class="corpo_grid" align="center"><?php echo $titulo_sub_categoria ?></td>
            <td class="corpo_grid">
                <?php
                if ($linhaGridServico['idhabilitado'] == 1) {
                    echo "<a href='controle/update/edita_estatus_produto.php?hab=2&id=" . $linhaGridServico['idprodutos'] . "'><img src='images/publicado.png' title='Habilitado'></a>";
                } else {
                    echo "<a href='controle/update/edita_estatus_produto.php?hab=1&id=" . $linhaGridServico['idprodutos'] . "'><img src='images/despublicado.png' title='Desabilitado'></a>";
                }
                ?>
            </td>
            <td class="corpo_grid">
                <?php
                /* if($linhaGridServico['destaque_home'] == 1){
                  echo "<a href='controle/update/edita_estatus_produto.php?hom=2&id=".$linhaGridServico['idprodutos']."'><img src='images/home.png' title='Desabilitar Para home'></a>";
                  } else {
                  echo "<a href='controle/update/edita_estatus_produto.php?hom=1&id=".$linhaGridServico['idprodutos']."'><img src='images/home2.png' title='Habilitar Para home'></a>";
                  } */
                ?>
            </td>
            <td class="corpo_grid">
                <?php
                /* if($linhaGridServico['destaque_topo'] == 1){
                  echo "<a href='controle/update/edita_estatus_produto.php?topo=2&id=".$linhaGridServico['idprodutos']."'><img src='images/topo.png' title='Desabilitar Para Topo'></a>";
                  } else {
                  echo "<a href='controle/update/edita_estatus_produto.php?topo=1&id=".$linhaGridServico['idprodutos']."'><img src='images/topo2.png' title='Habilitar Para Topo'></a>";
                  } */
                ?>
            </td>
            <td class="corpo_grid"><a href="produtos.php?pt=1&prod=<?php echo $linhaGridServico['idprodutos'] ?>"><img src="images/document_edit.png"  title="Editar" alt="Editar"/></a></td>
            <td class="corpo_grid">
            <!--<a href="controle/delete/deleta_produto.php?id=<?php echo $linhaGridServico['idprodutos'] ?>"><img src="images/delete2.png" title="Excluir" alt="Ecluir" /></a>-->
                <a href="#" class="item-excluir" id="<?php echo $linhaGridServico['idprodutos'] ?>"><img src="images/delete2.png"  alt="Exluir"  title="Excluir"/></a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
<script type="text/javascript">
    $(document).ready(function() {
        $('table#resultado a.item-excluir').each(function() {
            var codigo = $(this).attr('id');
            $(this).m2brDialog({
                tipo: 'pergunta',
                titulo: 'Confirme',
                texto: 'Tem certeza que deseja excluir o registro?',
                draggable: true,
                botoes: {
                    1: {
                        label: 'sim',
                        tipo: 'link',
                        endereco: 'controle/delete/deleta_produto.php?id=' + codigo
                    },
                    2: {
                        label: 'n&atilde;o',
                        tipo: 'fechar'
                    },
                }
            });
        });
    });

</script>