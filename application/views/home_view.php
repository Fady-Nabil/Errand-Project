<p class="alert-success">
    <?php if($this->session->flashdata('login_success')): ?>
        <?php echo  $this->session->flashdata('login_success') ?>
    <?php endif; ?>
</p>
<p class="alert-success">
    <?php if($this->session->flashdata('user_register')): ?>
        <?php echo  $this->session->flashdata('user_register') ?>
    <?php endif; ?>
</p>
<p class="alert-danger">
    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo  $this->session->flashdata('login_failed') ?>
    <?php endif; ?>
</p>
<h1 class="text-center">hello from ohme</h1>