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
  <div class="row">
  <aside class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
</aside>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="form-signin w-100 m-auto">
<?php echo $this->Form->create('User', array(
      'class' => 'row g-3',
      'id' => 'edit-form',
      'inputDefaults' => array(
        //'div' => array('class' => 'form-floating')
      )
    )); ?>
	
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
		echo $this->Form->input('last_name', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('email', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('contact_number', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
        
		echo $this->Form->input('state', array('options' => $states, 'class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->Form->input('address', array('class' => 'form-control','div' => array('class' => 'col-md-6')));
        echo $this->form->label('role', 'Admin');
        echo $this->form->checkbox('User.is_admin', ['value' => '1', 'hiddenField' => false]);
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</main>

</div>
<script>
$("#edit-form").validate({
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