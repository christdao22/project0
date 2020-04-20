<?php
function validateImage($size= null, $type=null, $name=null, $tmp=null){
    if (validateImageType($type)){
        return 2;
    }
    elseif (validateImageSize($size)){
        return 1;
    }
}
// ************************************************************************************
// validates the image size
function validateImageSize($pic_size)
{
    return $pic_size > 10000000 ? true : false;
} 

//validates the image type
function validateImageType($pic_type)
{
    $allowed = array('jpeg', 'png');
    $strArray = explode("/", $pic_type);
    return in_array(end($strArray), $allowed) ? false : true;
}

function upload($name, $tmp, $destination)
{
    $new_name=rename('$name');
    $newfolder=mkdir();
    move_uploaded_file($tmp, $destination);
}
