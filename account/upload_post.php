<?php
include_once 'auth.php';
$msg='';
$doit =1;

$user_id = $auth_user['id'];
$title = clean('title');
$category = clean('category');
$content = clean('content');

$image = $_FILES['image']['name'];
$filename = $title.basename($image);
$target = "../post_images/".$filename;

// Now to upload the image

$upload = move_uploaded_file($_FILES['image']['tmp_name'], $target);
if ($upload==true) {
    $sql = $con->query("INSERT into posts (user_id, title, category, content, image)
    VALUES('$user_id', '$title', '$category', '$content', '$filename') ");
    $msg = "Post Uploaded";
    header("location:add_post.php?msg=".$msg);
}else{
header("location:add_post.php?msg=An Error occured, please try again");
}
?> 