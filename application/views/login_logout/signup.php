<html>
  <head>
    <title> <?php echo $title ?></title>
  </head>
  <body>
<div id="wrap">
<div id="main">
<h2> Registration Form </h2>

 <?php
    $msg = $this->session->flashdata('msg');
    if($msg != "") {
      echo "<h2>".$msg. "</h2>";
    }
 ?>

<?php echo form_open_multipart('Loginuser/signup_submit');
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

                  echo form_label('Confirm Password'.'&nbsp;&nbsp;');
                  $data_cpass = array(
                    'name' => 'passconf',
                    'class' => 'input_box',
                    'placeholder' => "type here",
                    'required'    => 'required'
                  );
                  echo form_input($data_cpass);
                  echo form_error(field:'passconf');
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

                  echo form_label('Upload your Profile Picture here'.'&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;');
                  //  echo "<input type='file' name='profpic' size='20' />"; 

                  echo form_upload(['name' => 'profile_pic']);
                  echo "<br>";
                  echo "<br>";
                  if(isset($upload_error)) {
                    echo $upload_error;
                  }
                   

                  // echo form_label('Content');
                  // echo "<div class = 'textarea_input'>";
                  // $data_content = array(
                  //   'name' => 'content',
                  //   'row'   => 10,
                  //   'cols'  => 60,
                  //   'placeholder' => 'type here',
                  //   'required' => 'required'
                  // );
                  // echo form_textarea($data_content);
                  // echo "</div>";
                  // echo "<br>";
             ?>
             
          
            
            <div>
                <!-- <button type="submit" name="submit" class="btn btn-primary">Add Post</button> -->
                <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
                
            </div>
          <?php echo form_close(); ?>
            
</div>
</div>