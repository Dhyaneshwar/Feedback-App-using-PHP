<?php
  require 'inc/header.php'
?>

<?php
    $sql_query = 'SELECT * FROM feedback';
    $result = mysqli_query($conn, $sql_query);
    $feedback_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

        <h2>Feedback</h2>

        <?php if(empty($feedback_data)): ?>
          <p class='lead mt3'>There is no feedback</p>
        <?php endif ?>

        <?php foreach($feedback_data as $feedback):?>
          <div class="card my-3 w-75">
            <div class="card-body text-center">
              <?php echo $feedback['body'] ?>
              <div class="text-secondary mt-2">
                By  <?php echo $feedback['name'] ?> 
                on <?php echo $feedback['date'] ?> 
              </div>
            </div>
          </div>
        <?php endforeach ?>
<?php
  include 'inc/footer.php'
?>