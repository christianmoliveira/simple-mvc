<?php

if (isset($_GET['id'])) {
  echo $_GET['id'];
} else {
  header("Location: http://localhost:3000/404");
}

echo "Editar usuário";
