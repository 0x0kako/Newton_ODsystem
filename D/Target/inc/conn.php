<?php
//���ݿ������ļ�
    @session_start();
	$host = 'localhost';//���ݿ������
	$user = 'root';//���ݿ��û���
	$password = 'WP5211314';//���ݿ�����
	$database = 'Newton_D';//���ݿ���
	$conn = mysqli_connect($host, $user, $password, $database) or die('���ݿ�����ʧ�ܣ�');
?>