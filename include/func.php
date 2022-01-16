<?php
function redirect($url){
    return header("Location:$url");
    exit();
}

function page_title($page_title = false){
    if ($page_title !== false){
      return $page_title." - ".WEB_TITLE;
    }else{
        return WEB_TITLE;
    }
}


function flash(){
    if (isset($_SESSION['flash'])){
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }
}



