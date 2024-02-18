<main class="form-signin w-50 m-auto">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User', array(
      'class' => 'row g-3',
      'id' => 'signin-form',
      'inputDefaults' => array(
      )
    )); ?>
        <fieldset>
            <legend><?php echo __('Please enter your username and password'); ?></legend>
            <?php echo $this->Form->input('email', array('class' => 'form-control'));
            echo $this->Form->input('password', array('class' => 'form-control'));
        ?>
        </fieldset>
    <?php echo $this->Form->end(__('Login')); ?>
    <?php
 echo $this->Html->link( "Add A New User",   array('action'=>'add') ); 
?>
</main>

<script>
$(document).ready(function() {
    $('#login-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?php echo Router::url(array('controller' => 'users', 'action' => 'login')); ?>',
            data: $(this).serialize(),
            success: function(response) {
                alert(response); // You can replace this with redirect or any other action as per your requirement
            }
        });
    });
});
</script>