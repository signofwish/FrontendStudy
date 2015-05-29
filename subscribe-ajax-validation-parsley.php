<?php
// 이미 가입돼 있는 이메일은
// asdf@gmail.com, aaa@gmail.com
if(in_array($_REQUEST['UserEmail'], array('asdf@gmail.com', 'aaa@gmail.com'))){
    echo json_encode('이메일 중복');
}else{
    echo 'true';
}
