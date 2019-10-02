<div class="row justify-content-center mt-4 mb-2">
	<div class="col-md-6">
		<div class="card bg-light">
			<div class="card-body">
				<h2 class="card-title"><?php echo $title; ?></h2>
				<?php echo form_open_multipart('users/signup', $attributes = ['method'=>'post', 'autocomplete'=>'off']); ?>
				<div class="form-group">
					<label for="name">Name <sup>*</sup></label>
					<!-- <input type="text" name="name" id="" class="form-control <?php echo !empty($data['name_err']) ? 'is-invalid' : ''; ?>" value="<?php echo !empty($data['name']) ? $data['name'] : ''; ?>"> -->
					<?php echo form_input('name', '', ['class'=>'form-control']); ?>
					<!-- <div class="invalid-feedback"><?php echo $data['name_err']; ?></div> -->
				</div>
				<div class="form-group">
					<label for="email">Email <sup>*</sup></label>
					<!-- <input type="email" name="email" id="" class="form-control <?php echo !empty($data['email_err']) ? 'is-invalid' : ''; ?>" value="<?php echo !empty($data['email']) ? $data['email'] : ''; ?>"> -->
					<?php echo form_input(['type'=>'email', 'name'=>'email', 'value'=>'', 'class'=>'form-control']); ?>
					<!-- <div class="invalid-feedback"><?php echo $data['email_err']; ?></div> -->
				</div>
				<div class="form-group">
					<label for="password">Password <sup>*</sup></label>
					<!-- <input type="password" name="password" id="" class="form-control <?php echo !empty($data['password_err']) ? 'is-invalid' : ''; ?>"> -->
					<?php echo form_input(['type'=>'password', 'name'=>'password', 'class'=>'form-control']); ?>
					<!-- <div class="invalid-feedback"><?php echo $data['password_err']; ?></div> -->
				</div>
				<div class="form-group">
					<label for="confirm_password">Confirm Password <sup>*</sup></label>
					<!-- <input type="password" name="confirm_password" id="" class="form-control <?php echo !empty($data['confirm_password_err']) ? 'is-invalid' : ''; ?>"> -->
					<?php echo form_input(['type'=>'password', 'name'=>'confirm_password', 'class'=>'form-control']); ?>
					<!-- <div class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></div> -->
				</div>
				<div class="form-group">
					<label for="picture">Profile Picture <sup>*</sup></label>
					<!-- <input type="file" name="picture" id="" class="form-control <?php echo !empty($data['picture_err']) ? 'is-invalid' : ''; ?>"> -->
					<?php echo form_input(['type'=>'file', 'name'=>'picture', 'class'=>'form-control']); ?>
					<!-- <div class="invalid-feedback"><?php echo $data['picture_err']; ?></div> -->
				</div>
				<div class="row">
					<div class="col">
						<!-- <input type="submit" value="Register" class="btn btn-success btn-block"> -->
						<?php echo form_input(['type'=>'submit', 'value'=>'Register', 'class'=>'btn btn-success btn-block']); ?>
					</div>
					<div class="col">
						<!-- <a href="" class="btn btn-light btn-block">Is registered? Sign In</a> -->
						<?php echo anchor('users/signin', 'Is Registered? Sign In', ['class'=>'btn btn-light btn-block']); ?>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
