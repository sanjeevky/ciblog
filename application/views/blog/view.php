<html>
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
<div id="wrap">
        <div id="main">
                <?php 

                    $title = $post['title'];
                    $url = site_url('post/view/'.$post['post_id']);
                    
                    echo "<h2><a href='$url'>$title</a></h2>";
                    echo $post['content']."<br><br>";
                    echo $post['created_at'];
                
                    ?>

                    <h3><a href="/ciblog/post">GoBack</a></h3>
        </div>
</div>