<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('conexao1','root','');
$db = mysql_select_db('gerenciador');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];