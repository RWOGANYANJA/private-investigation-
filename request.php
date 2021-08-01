<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>Online reporting</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
  body{
margin: 0;
padding: 0;
font-family: sans-serif;
background: url('images.jpg') no-repeat;
background-size: cover;


}

<style type="text/css">
    body{
      padding: 0;
      margin: 0;
      background: url('crime.jpg') no-repeat;
      background-size: cover;
    }
    .form{
      font-family: 'Roboto',sans-serif;
      position: relative;
      z-index: 1;
      background: #ffffff;
      opacity: 99%;
      max-width: 260px;
      margin: 200px auto 100px;
      padding: 10px 45px 30px 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5PX 0 rgb(0, 0, 0,0.24);
      border-width: 10px;


 }

 .form P{
  font-size:15PX;
  padding: center;
  padding: 1px;
  text-align: center;
 }

 .form input{
  outline: 0px;
  padding:10px
  border-radius: 10px;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding:15px ;
  box-sizing: border-box;
  font-size: 14px ;

}

.form input:hover{
  background-color:D3F8F9;
  transition: all is ease 0s;

}
.form input:focus{
  background-color:#D3F8F9 ;
  transition: all is ease 0s;


}
.form button{
  text-transform: uppercase;
  outline: 0;
  border-radius: 10px;
  background:black;
  width: 100%;
  color: 14px;
  border:0;
  padding: 15px;
  color: #ffffff;
  font-size: 14px;
  cursor: pointer;


}
.form button:hover, .form button:active, .form button:foccus{
  background-color: #06c5cf;
  transition: great 0s;
}
@media (max-width: 700px){
  .form{
  font-size: 10px;
}

   
    
</style>
</head>
<body>



<div class="form">
  <p>Enter Your investigation request!!!</p>
  <form  method="POST" action="page.php">
  
 <input type="text" name="names" class="form-report" placeholder="Your Names
 "><br><br>
 

 <input type="email" name="email" placeholder="Your Email" required><br><br>


 <input type="text" name="adrs" placeholder="Your Address" required><br><br>


 <input type="text" name="phne" placeholder="Phone Number" required><br><br>


 <input type="text" name="occupy" placeholder="Occupation" required><br><br>

 <textarea name="message" placeholder="Provide general information on the subject of investigation." row="5" required></textarea><br><br>

<button name="button">Send us your request</button>
 
  </form>
  
</div>
</body>
</html> 