<main class="form-signin w-50 m-auto">
  <?php 
  $states = [
    'AP' => 'Andhra Pradesh',
    'AR' => 'Arunachal Pradesh',
    'AS' => 'Assam',
    'BR' => 'Bihar',
    'CT' => 'Chhattisgarh',
    'GA' => 'Goa',
    'GJ' => 'Gujarat',
    'HR' => 'Haryana',
    'HP' => 'Himachal Pradesh',
    'JK' => 'Jammu and Kashmir',
    'JH' => 'Jharkhand',
    'KA' => 'Karnataka',
    'KL' => 'Kerala',
    'MP' => 'Madhya Pradesh',
    'MH' => 'Maharashtra',
    'MN' => 'Manipur',
    'ML' => 'Meghalaya',
    'MZ' => 'Mizoram',
    'NL' => 'Nagaland',
    'OR' => 'Odisha',
    'PB' => 'Punjab',
    'RJ' => 'Rajasthan',
    'SK' => 'Sikkim',
    'TN' => 'Tamil Nadu',
    'TG' => 'Telangana',
    'TR' => 'Tripura',
    'UP' => 'Uttar Pradesh',
    'UT' => 'Uttarakhand',
    'WB' => 'West Bengal',
    'AN' => 'Andaman and Nicobar Islands',
    'CH' => 'Chandigarh',
    'DN' => 'Dadra and Nagar Haveli',
    'DD' => 'Daman and Diu',
    'LD' => 'Lakshadweep',
    'DL' => 'National Capital Territory of Delhi',
    'PY' => 'Puducherry'];
  ?>
    <?php echo $this->Form->create('User', array(
      'class' => 'row g-3',
      'id' => 'signup-form',
      'inputDefaults' => array(
        //'div' => array('class' => 'form-floating')
      )
    )); ?>
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    
        <legend><?php echo __('Add User'); ?></legend>
        <?php 
        echo $this->Form->input('first_name', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('last_name', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('email', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('contact_number', array('required'=>'required','class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('password', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('confirm_password', array('required'=>'required','type' => 'password','class' => 'form-control','div' => array('class' => 'col-md-6')));
        
        echo $this->Form->input('state', array('options' => $states, 'class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('address', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
    ?>
    
    <?php echo $this->Form->end(__('Submit')); ?>
</main>
<!-- <script>
$(document).ready(function() {
    $('#signup-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?php echo Router::url(array('controller' => 'users', 'action' => 'add')); ?>',
            data: $(this).serialize(),
            success: function(response) {
                alert(response); // You can replace this with redirect or any other action as per your requirement
            }
        });
    });
});
</script> -->
<script>
$("#signup-form").validate({
  errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "invalid-feedback" );
          error.closest("form").addClass("was-validated");

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}
});
</script>