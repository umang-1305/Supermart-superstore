<!DOCTYPE html>
<link rel="stylesheet" href="E:\proj\stylesheet\login1.css">
<title>Super Store Sales Management System</title>
<style>
.hero-image {
  background-image: url("1.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: White;
}

.top{
  color: #6D8B74;
  font-size: 2rem;
  font-weight: bold;
  text-indent: 0.5cm;
  background-color: #EFEAD8;
  background-size: cover;
  padding: 250px; 
}

.button{
  background-color:  #6D8B74;
  border: none;
  color: #EFEAD8;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  animation-name: example;
  animation-duration: 4s;
}
@keyframes example {
  from {background-color: #6D8B74;}
  to { background-color: #5F7161; }
}
</style>
<body>
<center>
  <div class="top">
	<h1><b><u>Super Store Sales Management System</h1>
  </div>
</center>	
<div class="hero-image">
  <div class="hero-text">

    <h1 style="font-size:60px;color:#6D8B74"><b>Welcome</h1>
    <h2 style="color:#5F7161;font-size:40px"><u><b>Login </h2>
    <a href="admin/dlogin.php"> <button type="button" class="button" style="font-size:25px ;background-color:#BB8FCE">Admin Login</button></a>
    <a href="slogin.php"> <button type="button" class="button" style="font-size:25px ;background-color:#BB8FCE">Store Login</button></a>
    <a href="dist/dlogin.php"> <button type="button" class="button" style="font-size:25px ;background-color:#BB8FCE">Distributor Login</button></a>
</div>
</div>
</body>
</html>