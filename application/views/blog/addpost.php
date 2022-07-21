    
    <div id="wrap">
        <div id="main">
            <!--  <form action="base_url('addpost')";> -->
            <?php echo form_open('Addpost/data_submit');
                  echo form_label('title'.'&nbsp;&nbsp;');
                  $data_title = array(
                    'name' => ' title',
                    'class' => 'input_box',
                    'placeholder' => "type here",
                    'required'    => 'required'
                  );
                  echo form_input($data_title);
                  echo "<br>";

                  echo form_label('Content');
                  echo "<div class = 'textarea_input'>";
                  $data_content = array(
                    'name' => 'content',
                    'row'   => 10,
                    'cols'  => 60,
                    'placeholder' => 'type here',
                    'required' => 'required'
                  );
                  echo form_textarea($data_content);
                  echo "</div>";
                  echo "<br>";
             ?>
             
            <?php $now = date('Y-m-d H:i:s');
            echo form_hidden('created_at',$now); ?>
            
            <div>
                <!-- <button type="submit" name="submit" class="btn btn-primary">Add Post</button> -->
                <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Add Post']); ?>
            </div>
    </div> 
</div>   

