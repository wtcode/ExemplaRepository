<?php

if (isset($_GET['id']) == 1) {
    include "include/grid/grid_categoria.php";
} else if (isset($_GET['id']) == 2) {
    include "include/grid/grid_sub_categoria.php";
} else if (isset($_GET['id']) == 3) {
    include "include/grid/grid_produtos.php";
} else if (isset($_GET['pt']) == 1) {
    include "include/form/form_produto.php";
}
?>