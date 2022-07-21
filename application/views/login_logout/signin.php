<div id="wrap">
<div id="main">

<?php
    $msg = $this->session->flashdata('msg');
    if($msg != "") {
      echo "<h2>".$msg. "</h2>";
    }
 ?>
<?php echo form_open('Loginuser/signin_submit');
                 echo form_label('User Name'.'&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;');
                 $data_uname = array(
                   'name' => ' user_name',
                   'class' => 'input_box',
                   'placeholder' => "type here",
                   'required'    => 'required'
                 );
                 echo form_input($data_uname);
                 echo "<br>";
                 echo "<br>";
                 echo form_error(field:'user_name');
                 echo form_label('Password'.'&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;');
                 $data_pass = array(
                   'name' => 'password',
                   'class' => 'input_box',
                   'type' => 'password',
                   'placeholder' => "type here",
                   'required'    => 'required'
                 );
                 echo form_input($data_pass);
                 echo form_error(field:'password');
                 echo "<br>";
                 echo "<br>";

                

                 echo form_label('Email'.'&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;');
                 $data_email = array(
                   'name' => 'email',
                   'class' => 'input_box',
                   'placeholder' => "type here",
                   'required'    => 'required'
                 );
                 echo form_input($data_email);
                 echo form_error(field:'email');
                 echo "<br>";
                 echo "<br>";

            ?>
            
            <div>
                <!-- <button type="submit" name="submit" class="btn btn-primary">Add Post</button> -->
                <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Login']); ?>
            </div>
            <?php echo form_close(); ?>
</div>
</div>