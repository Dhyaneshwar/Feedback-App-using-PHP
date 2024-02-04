<?php
  require 'inc/header.php'
?>

<?php
  $name = $email = $body = '';
  $nameErr = $emailErr = $bodyErr = '';

  if(isset($_POST['submit'])) {
    if (empty($_POST['name'])){
      $nameErr = "Name is required";
    } else {
      $nameErr = '';
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if (empty($_POST['email'])){
      $emailErr = "Email is required";
    } else {
      $emailErr = '' ;
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if (empty($_POST['body'])){
      $bodyErr = "Body is required";
    } else {
      $bodyErr = '' ;
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }
  }

  if ($name && $email && $body){
    $sql_query = "INSERT into feedback (name, email, body) VALUES('$name', '$email', '$body')";

    if (mysqli_query($conn, $sql_query)) {
      // success
      header('Location: feedback.php');
    } else {
      // error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
?>


<h2>Feedback</h2>
<p class="lead text-center">Leave feedback for Flynn Media</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mt-4 w-75">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input
      type="text"
      class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>"
      id="name"
      name="name"
      placeholder="Enter your name"
    />
    <div class="invalid-feedback">
      <?php echo $nameErr ?? null; ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input
      type="email"
      class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>"
      id="email"
      name="email"
      placeholder="Enter your email"
    />
    <div class="invalid-feedback">
      <?php echo $emailErr ?? null; ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea
      class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>"
      id="body"
      name="body"
      placeholder="Enter your feedback"
    ></textarea>
    <div class="invalid-feedback">
      <?php echo $bodyErr ?? null; ?>
    </div>
  </div>
  <div class="mb-3">
    <input
      type="submit"
      name="submit"
      value="Send"
      class="btn btn-dark w-100"
    />
  </div>
</form>

<?php
  include 'inc/footer.php'
?>