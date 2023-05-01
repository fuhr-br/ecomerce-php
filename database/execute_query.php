<?php
function excecute($conn, $sql)
{
  if (!$conn->query($sql)) {
    echo "Erro ao excecutar script " . $conn->error;
  }
}
?>