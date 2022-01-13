<?php
  session_start();

  $verificaUsuarioLogado = $_SESSION['verificaUsuarioLogado'];

  if (!$verificaUsuarioLogado) {
    header("Location: index.php");
  }else {
    $nomeUsuarioLogado = $_SESSION['nomeUsuarioLogado'];
  }
?>
<?php include 'view/estrutura/head.php';?>

<?php include 'view/mainuser.php';?>

<?php include 'view/estrutura/footer.php';?>