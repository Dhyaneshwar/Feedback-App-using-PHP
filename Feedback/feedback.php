<?php
  require 'inc/header.php'
?>

<?php
    $feedback_data = [[
      'id' => '1',
      'name' => "Brad",
      'email' => 'brad@gmail.com',
      'body' => 'very good',
    ],[
      'id' => '2',
      'name' => "Brad2",
      'email' => 'brad2@gmail.com',
      'body' => 'very good2',
    ],[
      'id' => '3',
      'name' => "Brad3",
      'email' => 'brad3@gmail.com',
      'body' => 'very good3',
    ]];
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
              </div>
            </div>
          </div>
        <?php endforeach ?>
<?php
  include 'inc/footer.php'
?>