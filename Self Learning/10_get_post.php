<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

  if (isset($_POST['submit'])) {
    echo '<h3>' . $_POST['username'] . '</h3>';
    print_r($_POST);
    echo '<br>';
  } 

  if (isset($_GET['username'])){
    echo 'username present in URL '. $_GET['username'] . '<br>';
  }
?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad">Link</a>


<br><br>

<!-- Pass data through a form -->
<!-- Note:- by default the 'method' attribute of form is 'GET'  -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label>Username: </label>
    <input type="text" name="username">
  </div>
  <br>
  <div>
    <label>Password: </label>
    <input type="password" name="password">
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>