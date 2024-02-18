<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('email');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<?php
 echo $this->Html->link( "Add A New User",   array('action'=>'add') ); 
?>
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