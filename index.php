<?php
    session_start();

    if(!empty($_GET['lang'])){
        $_SESSION['lang'] = $_GET['lang'];
    }

    require "language.class.php";
    $lang = new Language();
?>
<a href="index.php?lang=en">English</a>
<a href="index.php?lang=pt-br">Português</a>
<hr/>
Linguagem Definida: <?php echo $lang->getLanguage()?>
<hr/>
<button><?php echo $lang->get('BUY');?></button> 
<a href=""><?php echo $lang->get('LOGOUT')?></a>