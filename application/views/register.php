<?php include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("Welcome/adminSignup", ['class' => 'form-horizontal']); ?>
    <h3>ADMIN REGISTRATION</h3>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label" for="">Username</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username']); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label" for="">Email</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email']); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label" for="">Gender</label>
                <div class="col-lg-9"> <!-- Wrap select in col-lg-9 -->
                    <select name="gender" class="form-control">
                        <option value="">Select</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label" for="">Role</label>
                <div class="col-lg-9"> <!-- Wrap select in col-lg-9 -->
                    <select name="role" class="form-control">
                        <option value="">Select</option>
                        <option value="1">Admin</option>
                        <option value="2">Co-Admin</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label" for="">Password</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label" for="">Password again</label>
                <div class="col-lg-9">
                    <?php echo form_input(['name' => 'cnfpassword', 'class' => 'form-control', 'placeholder' => 'Password again']); ?>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary">REGISTER</button>
    <?php echo anchor("welcome","BACK",['class'=>'btn btn-primary']); ?>
</div>
</div>
<?php include("inc/footer.php"); ?>