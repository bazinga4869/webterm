<?php
require 'util_mysql.php';

header("Content-Type: text/html;charset=gb2312");
$account = $_POST['account'];
$password = $_POST['password'];

if($account == "" || $password == ""){
    echo <<<HTML
    <script language="javascript">
        alert("账号或密码不能为空");
        window.history.back(-1); 
    </script>
HTML;
}else{
        if(checkUser($account, $password, $link)){
            //success
            $url = getUrl($account, $link);
            echo <<<HTML
                <script language="javascript">
                    alert("登陆成功");
                    location.href="$url";
                </script>
HTML;
        }else{
            //fail
            echo <<<HTML
                <script language="javascript">
                    alert("用户不存在或者密码错误");
                    window.history.back(-1); 
                </script>
HTML;
        }

}
