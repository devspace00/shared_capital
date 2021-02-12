<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Create Account</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "icon" href="image/Logo.png">
    	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    
/* BASIC */
body {
  font-family: "Bahnschrift", sans-serif;
  height: 100vh;
  background-color: white;
}
a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}
h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}

/* STRUCTURE */
.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}
#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 1000px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}
#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}

/* TABS */
h2.inactive {
  color: #cccccc;
}
h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}

/* FORM TYPOGRAPHY*/
button[type=submit], #back{
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
}
button[type=submit]:hover, #back:hover {
  background-color: #39ace7;
}
button[type=button]:active, #back:active {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}
input[type=text], input[type=password], input[type=email] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 10px 25px;
  text-align: start;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 93%;
  border: 2px solid #f6f6f6;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
#name{
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 10px 25px;
  text-align: start;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 30%;
  border: 2px solid #f6f6f6;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
#name:focus{
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
.user{
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 10px 25px;
  text-align: start;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 46%;
  border: 2px solid #f6f6f6;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
.user:focus{
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

/* OTHERS */
*:focus {
    outline: none;
} 
#icon {
  width:30%;
}

    </style>
</head>
<body>
    <div class="wrapper fadeInDown">
		<div id="formContent">
			<br>
			<h1>Create Account</h1>

      @if(session()->has('message'))
        <div class="alert alert-success">{{session()->get('message')}}</div>
      @endif

			<!-- Login Form -->
    <form action="Account" method="POST">
        @csrf  
        <input type="text" name="fName" id="name" placeholder="First Name" autocomplete="off" required>
        <input type="text" name="mName" id="name" placeholder="Middle Name" value="" autocomplete="off" required>
        <input type="text" name="lName" id="name" placeholder="Last Name" value="" autocomplete="off" required>
        <input type="email" name="email" id="" placeholder="Email Name" autocomplete="off" required>
        <input type="text" name="username" id="" placeholder="Username" autocomplete="off" required>
        <input type="password" name="password" id="" placeholder="Password" autocomplete="off" required>
        <input type="text" name="address" id="" placeholder="Address" autocomplete="off" required>
        <input type="text" name="gender" id="" list="gender" placeholder="Gender" autocomplete="off" required>
          <datalist id="gender">
              <option value="Male">
              <option value="Female">
          </datalist>
        <input type="text" name="age" id="user" placeholder="Age" autocomplete="off" required>
        <input type="text" name="investment" id="" placeholder="Investment" autocomplete="off" required>
        <input type="text" name="investment" id="" value="{{session('username')}}" autocomplete="off" required disabled>
        <a href="{{ route('membersRequest')}}" id="back">Back</a>
        <button type="submit" style="cursor: pointer">Create</button>
      </form>
		</div>
    </div>
</body>
</html

