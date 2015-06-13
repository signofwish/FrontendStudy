<?php
// 이미 가입돼 있는 이메일은
// asdf@gmail.com, aaa@gmail.com
if(in_array($_REQUEST['UserEmail'], array('asdf@gmail.com', 'aaa@gmail.com'))){
    header("HTTP/1.1 404 Not Found");
}else{
    header("HTTP/1.1 200 OK");
}
