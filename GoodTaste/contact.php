
<!Doctype html>

<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<meta name="keywords" content="" />

<head>
	
<title>GoodTaste</title>

<link rel="stylesheet" href="css/main.css" />

<script src="js/jquery.min.js" ></script>

<script src="js/myscript.js"></script>

</head>

<body>
	
<?php require "includes/header.php"; ?>

<div class="parallax" onclick="remove_class()">
	
	<div class="parallax_head">
		
	<h2>Contact Us</h2>
	
		
	</div>
	
</div>

<script>
function myFunction() {
  var x = document.getElementById("bottom-nav");
  if (x.className === "bottom-nav") {
    x.className += " responsive";
  } else {
    x.className = "bottom-nav";
  }
}
</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 700px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
 
}


span{
 float: left;
 padding-left: 15px;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 800px;
  display: flex !;


}
label{
  float: left;
  padding-left: 10px;
}
#A2{
  color: red;
  text-decoration: none;
}
@media screen and (max-width: 767px){
  .container {
    display: list-item !important;
    width: 100%;

  }
  input{
    display: list-item !important;
    
  }
  #fname{
    width: 100%;
  }
  #lname{
     width: 100%;
  }
  #country{
    width: 100%;
  }
  #subject{
     width: 100%;
  }

}


</style>
<script type="text/javascript">
  
        function valider(){
            // ***nom**
         var n= document.getElementById('fname');
         var t=0;
   if (n.value == "")
   {
      document.getElementById('Firstname').innerText="* This is a required field";
      document.getElementById('Firstname').style.color="red";
      t.value=0;
   }
   else
   {
    document.getElementById('Firstname').innerHTML="";
    t.value=1;

   }
     // ***prenom**
         var prenom= document.getElementById('lname');
   if (prenom.value == "")
   {
      document.getElementById('lastname').innerText="* This is a required field";
      document.getElementById('lastname').style.color="red";
      t.value=0;
   }
   else
   {
    document.getElementById('lastname').innerHTML="";
    t=1;
   }
   var chek = document.getElementById('check');
   if (chek.checked==false) {
      alert("By submitting this form you agree to our privacy policy");
      t.value=0;
   }
   if (t==1) {
      document.location.href = "thankyou.php";
   }
 }
</script>
<br><br><br> <center>
<div class="container">
    <form >
    <div>
    <label>First name</label><span id="Firstname"></span>
    <input type="text" id="fname"  placeholder="Your name..">
  </div>
<div >
    <label>Last Name</label><span id="lastname"></span>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  </div>

   <div > <label>Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option selected value="ma">Morocco</option>
      <option value="fr">France</option>
    </select>
</div>
<div>
    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  </div>
  <div style="padding-left: 2%; display: flex;">
  <input type="checkbox" id="check" style="float: left; margin-top: 10px;">
  <label style="font-size: 12px;">I have read and accept the<a href="https://www.google.Com" target="_blank" id="A2"> general conditions </a>of use, in particular the mention relating to the protection of personal data. *</label> <br><br>
</div>

    <input type="button" value="Submit" class="back" onclick="valider()">
  </form>
</div></center>
<br>
<br>


<?php require "includes/footerr.php"; ?>

</body>

</html>