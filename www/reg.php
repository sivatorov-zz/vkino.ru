<html>
<head>
<title>�����������</title>
</head>
<body>
<h2>�����������</h2>
<form action="save_user.php" method="post" enctype="multipart/form-data">
<!-- save_user.php - ��� ����� �����������. �� ����, ����� ������� �� ������ "������������������", ������ �� ����� ���������� �� ��������� save_user.php ������� "post" -->
  <p>
    <label>��� ����� *:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>
<!-- � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� -->  
  <p>
    <label>��� ������ *:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
<!-- � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ -->  
  <p>
    <label>��� E-mail *:<br></label>
    <input name="email" type="text" size="15" maxlength="100">
  </p>
<!-- ������ �-���� -->  
  
  <p>
    <label>�������� ������. ����������� ������ ���� ������� jpg, gif ��� png:<br></label>
    <input type="FILE" name="fupload">
  </p>
<!-- � ���������� fupload ���������� �����������, ������� ������ ������������. --> 
<p>������� ��� � �������� *:<br>

<p><img src="code/my_codegen.php"></p>
<p><input type="text" name="code"></p>
<!-- � code/my_codegen.php ������������ ��� � �������� ����������� --> 

<p>
<input type="submit" name="submit" value="������������������">
<!-- �������� (type="submit") ���������� ������ �� ��������� save_user.php  -->  
</p></form>
����������� (*) ���������� ����, ������������ ��� ����������.

</body>
</html>
