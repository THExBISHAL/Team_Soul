<?php
$target="uploads/";
$target_path=$target.basename($_FILES['f1']['name']);

$x=move_uploaded_file($_FILES['f1']['tmp_name'],$target_path);

if($x)
{
    echo "success";
}
else{
    echo "sorry";
}

