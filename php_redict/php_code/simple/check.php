<?php
require 'util_mysql.php';

header("Content-Type: text/html;charset=gb2312");
$account = $_POST['account'];
$password = $_POST['password'];

if($account == "" || $password == ""){
    echo <<<HTML
    <script language="javascript">
        alert("�˺Ż����벻��Ϊ��");
        window.history.back(-1); 
    </script>
HTML;
}else{
        if(checkUser($account, $password, $link)){
            //success
            $url = getUrl($account, $link);
            echo <<<HTML
                <script language="javascript">
                    alert("��½�ɹ�");
                    location.href="$url";
                </script>
HTML;
        }else{
            //fail
            echo <<<HTML
                <script language="javascript">
                    alert("�û������ڻ����������");
                    window.history.back(-1); 
                </script>
HTML;
        }

}
