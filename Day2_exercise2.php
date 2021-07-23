<form action="exercise2.php" method="POST">
  <input name="username" value="">
  <input name="password" value="" type="password">

  <button>Login</button>

</form>

<?php

if ($_POST) {
    if (($_POST['username']=='dimasabi' && $_POST['password']=='dimasabi') || ($_POST['username']=='admin' && $_POST['password']=='admin')){
    session_start(); 
    echo "hai";
    if (session_start()){ 
    ?>
    <form action="exercise2.php" method="POST">

<button>Logout</button>

</form>
<?php if (session_start()){ 
session_destroy();
}
}
}
else {
    echo "salah";
} }
?>