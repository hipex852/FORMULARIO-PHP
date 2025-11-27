<?php
   $dbHost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'formulario-gustavo';


   $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if ($conexao->connect_error) {
       die('Erro de conexão: ' . $conexao->connect_error);
   }

