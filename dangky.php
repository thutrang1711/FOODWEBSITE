
<meta charset "utf8">
<?php

if (isset($_POST['tendangnhap']) && isset($_POST['password'])
	&& isset($_POST['ht']) && isset($_POST['ns'])
	&& isset($_POST['qq'])&& isset($_POST['repass']))
{
$tendangnhap =$_POST['tendangnhap'];
$pass =$_POST['password'];
$nlmk =$_POST['repass'];
$hoten =$_POST['ht'];
$namsinh =$_POST['ns'];
$quequan =$_POST['qq'];



//1.Kết nối dữ liệu
$conn=mysqli_connect("localhost","root","","wow117") or die("Không kết nối được");
//2.Tạo bảng mã
mysqli_query($conn,"set names 'utf8'");
//3.Xây dựng câu lệnh truy vấn
$sqlcom1="INSERT INTO dangky(tendangnhap, pass, hoten, namsinh, quequan) 
VALUES ('".$tendangnhap."', '".$pass."','".$hoten."','".$namsinh."','".$quequan."')";
$sqlcom2="INSERT INTO dangnhap(tendangnhap, pass, hoten, namsinh, quequan) VALUES ('".$tendangnhap."','".$pass."','".$hoten."','".$namsinh."','".$quequan."')";
if($pass==$nlmk)
{
$truyvantrung="SELECT * FROM dangnhap WHERE tendangnhap='".$tendangnhap."' ";
$result=mysqli_query($conn,$truyvantrung);
  if($dong=mysqli_fetch_array($result))
	{
		echo "Tài khoản này đã tồn tại! Vui lòng đăng kí tài khoản khác";
	}
else	
	{
		if(($result1=mysqli_query($conn,$sqlcom1))&&($result2=mysqli_query($conn,$sqlcom2)))
			echo "Đăng kí thành công!";
		else
			echo "Đăng kí thất bại!";
	}
}
else
{
	echo "Mật khẩu không đúng!";
}
//Đóng kết nối
mysqli_close($conn);
}
else
		echo"Vui lòng nhập thông tin đăng kí";

?>


<html>
<head>
<title>Đăng ký</title>
 <link rel="stylesheet" type="text/css" href="style.css"/>
<body>
<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST">
</head>
<body>
<table align ="center" border="0">
<tr><td align ="center"><b>Đăng ký thành viên </b></td></tr>
<tr><td>Tên đăng nhập</td><td><input type="text" name="tendangnhap"></td></tr>
<tr><td>Mật khẩu</td><td><input type="pass" name="password"></td></tr>
<tr><td>Nhập lại mật khẩu</td><td><input type="nlmk" name="repass"></td></tr>
<tr><td><b>Thông tin khách hàng </b></td></tr>
<tr><td>Họ tên sinh viên</td><td><input type="text" name="ht"></td></tr>
<tr><td>Năm sinh </td><td><input type="text" name="ns"></td></tr>
<tr><td>Quê Quán</td><td><input type="text" name="qq"></td></tr>
</table>


<table align ="center" border = "0"> 
  <tr><td><input type="submit" name="dk" value="Đăng ký"></td></tr>
</table>
</form>
<table align ="center" border = "0">
      <tr><td><button type ="button" onclick="quaylai()">Quay lại trang trước</button>
	    <script>
					function quaylai(){
						history.back();
					}
				</script>
	  </td></tr>
   </table>
</body>
</html>