<h2>Register form</h2>
<!-- should load form in autoload file in helpers -->
<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>

<div class="alert-danger">
    <?php echo validation_errors(); ?>
</div>

<?php echo form_open('users/register', $attributes); ?>
<div class="form-group">
    <?php echo form_label('First Name');  ?>
    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'first_name',
            'placeholder' => 'Enter First Name',
        );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Last Name');  ?>
    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'last_name',
            'placeholder' => 'Enter Last Name',
        );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Email');  ?>
    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'email',
            'type' => 'email',
            'placeholder' => 'Enter Email',
        );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Username');  ?>
    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username',
        );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Password');  ?>
    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter Password',
            'type' => 'password'
        );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Confirm Password');  ?>
    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password',
            'type' => 'password'
        );
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'type' => 'submit',
            'value' => 'Register'
        );
    ?>
    <?php echo form_input($data); ?>
</div>
<?php echo form_close(); ?>


