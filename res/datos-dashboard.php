<?php
  $data = $database->select("users","*",["username" => $usuario]);

  echo json_encode($data);
?>
