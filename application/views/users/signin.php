<?php if (validation_errors()) { ?>
<div class="row justify-content-center text-danger border border-danger mt-4">
	<span class="align-middle">
		<?php echo validation_errors(); ?>
	</span>
</div>
<?php } ?>
<div class="row justify-content-center mt-4 mb-2">
	<div class="col-md-6">
		<div class="card bg-light">
			<div class="card-body">
				<h2 class="card-title"><?php echo $title; ?></h2>
				<?php echo form_open_multipart('users/signin', ['method'=>'post', 'autocomplete'=>'off']); ?>
				<div class="form-group">
					<label for="email">Email <sup>*</sup></label>
					<?php echo form_input(['type'=>'email', 'name'=>'email', 'value'=>'', 'class'=>'form-control']); ?>
				</div>
				<div class="form-group">
					<label for="password">Password <sup>*</sup></label>
					<?php echo form_input(['type'=>'password', 'name'=>'password', 'class'=>'form-control']); ?>
				</div>
				<div class="row">
					<div class="col">
						<?php echo form_input(['type'=>'submit', 'value'=>'Sign In', 'class'=>'btn btn-success btn-block']); ?>
					</div>
					<div class="col">
						<?php echo anchor('users/signup', 'No account? Sign Up', ['class'=>'btn btn-light btn-block']); ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
