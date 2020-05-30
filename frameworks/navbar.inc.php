<?php include "boot.inc.php"; session_start();?>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#"><b>SGEPJ</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/projects/SGEPJ/dashboard.php">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">CRM</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/projects/SGEPJ/cli/index.php">Cadastro de cliente</a>
        <a class="dropdown-item" href="/projects/SGEPJ/cli/management.php">Gerenciamento de clientes</a>
      </div>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="/projects/SGEPJ/config.php">Configurações</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/projects/SGEPJ/news/manage_posts.php">Gerenciar Posts</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="/projects/SGEPJ/user_requests.php">Usuários</a>
    </li>
   <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> Usuário: <?php  echo $_SESSION['username']; ?> </a>
      </li>
    <form method="post" action="/projects/SGEPJ/frameworks/navbar.inc.php">
      <button style="font-size:12px; position:relative; top:5px;" class="btn btn-danger" type="submit" id="logout" name="logout">Log Out</button>
    </form>
  </ul>
</nav>

<?php 
if(isset($_POST['logout']))
{
      header("Location:/projects/SGEPJ/index.php");
      session_destroy();
}
?>