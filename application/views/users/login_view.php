<?php if($this->session->userdata('logged_in')): ?>
<h2>Logout</h2>
<?php
    if($this->session->userdata('username')){
        echo "you are logged in as ". $this->session->userdata('username');
    }
?>
<?php echo form_open('users/logout'); ?>
    <?php
    $data = array(
        'class' => 'btn btn-primary',
        'value' => 'Logout',
        'name' => 'submit',
        'type' => 'submit'
    );
    ?>
   <?php echo form_input($data); ?>
<?php echo form_close(); ?>

<?php else: ?>
<h2>Login form</h2>
<!-- should load form in autoload file in helpers -->
<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('errors'); ?>
    </div>
<?php endif; ?>
<?php echo form_open('users/login', $attributes); ?>

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
            'value' => 'Login'
        );
    ?>
    <?php echo form_input($data); ?>
</div>
<?php echo form_close(); ?>



<?php endif; ?>