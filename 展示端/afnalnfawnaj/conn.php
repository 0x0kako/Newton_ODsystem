<?php
    //������Ҫ���ӵ����ݿ⣬localhost�Ǳ��ط�����
    $con = mysql_connect("localhost","root","root");
    //�����ַ��������ַ�������Ϊutf8 �ĸ�ʽ�����Ǵ���������Ķ�ʶ���
    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET utf8");
    if(!$con){
        die(mysql_error());
    }
    //�������ݿ�test
    mysql_select_db("test",$con);
?>