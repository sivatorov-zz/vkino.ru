<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������

if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } //������� ��������� ������������� e-mail, ���� �� ������, �� ���������� ����������

if (isset($login) and isset($email)) {//���� ���������� ����������� ����������  
	
	include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 
	
	$result = mysql_query("SELECT id FROM users WHERE login='$login' AND email='$email' AND activation='1'",$db);//����� �� � ������������ �-����
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['id']) or $myrow['id']=='') {
		//���� ��������������� ������������ � ����� ������� � �-mail ������� ���
		exit ("������������ � ����� e-mail ������� �� ���������� �� � ����� ���� ��� :) <a href='index.php'>������� ��������</a>");
		}
	//���� ������������ � ����� ������� � �-������ ������, �� ���������� ������������� ��� ���� ��������� ������, �������� ��� � ���� � ��������� �� �-����
	$datenow = date('YmdHis');//��������� ���� 
	$new_password = md5($datenow);// ������� ����
	$new_password = substr($new_password, 2, 6);	//��������� �� ����� 6 �������� ������� �� �������. ��� � ����� ��� ��������� ������. ����� ������� ��� � ����, ���������� ����� ��� ��, ��� � ������.
	
$new_password_sh = strrev(md5($new_password))."b3p6f";//�����������
mysql_query("UPDATE users SET password='$new_password_sh' WHERE login='$login'",$db);// �������� � ����
	//��������� ���������
	
	$message = "������������, ".$login."! �� ��������������� ��� ��� ������, ������ �� ������� ����� �� ���� citename.ru, ��������� ���. ����� ����� ���������� ��� �������. ������:\n".$new_password;//����� ���������
	mail($email, "�������������� ������", $message, "Content-type:text/plane; Charset=windows-1251\r\n");//���������� ���������
	
	echo "<html><head><meta http-equiv='Refresh' content='5; URL=index.php'></head><body>�� ��� e-mail ���������� ������ � �������. �� ������ ���������� ����� 5 ���. ���� �� ������ �����, �� <a href='index.php'>������� ����.</a></body></html>";//�������������� ������������
	}


else {//���� ������ ��� �� �������
echo '
<html>
<head>
<title>������ ������?</title>
</head>
<body>
<h2>������ ������?</h2>
<form action="#" method="post">
������� ��� �����:<br> <input type="text" name="login"><br><br>
������� ��� E-mail: <br><input type="text" name="email"><br><br>
<input type="submit" name="submit" value="���������">
</form>
</body>
</html>';
}

?>