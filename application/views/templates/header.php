<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="<a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><?php echo base_url();?>assets/css/bootstrap.min.css</a>">-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
</head>

    <body>
<div id="wrap">
        <div id="header"><h1>MyBlog WebApp</h1></div>
            <div id="nav">
        
                <ul>
                    <li><a href = "<?php echo base_url();?>post">Home</a></li>
                    <li><a href = "<?php echo base_url();?>post/addpost">Add Post</a></li>
                </ul>
            </div>
  


        
</div>                                      
        