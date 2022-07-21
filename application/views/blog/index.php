<div id="wrap">
<div id="main">
<?php 

foreach($posts as $post){
    $title = $post['title'];

    $url = site_url('post/view/'.$post['post_id']);
    
    echo "<h2><a href='$url'>$title</a></h2>";
    echo $post['content']."<br><br>";
    echo $post['created_at'];
   

}

?>
</div>
</div>