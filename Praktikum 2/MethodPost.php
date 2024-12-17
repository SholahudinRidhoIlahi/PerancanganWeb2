<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ridho Wifi</title>

</head>
<body>
    <form action="prosessPost.php" method="post">

</head>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: Green;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input:focus {
            border-color: #007BFF;
        }
        .login-button {
            width: 100%;
            padding: 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .login-button:hover {
            background-color: red;
        }
        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
        }
    </style>

</head
</head>
<body>
    
   
<div class="login-container">
        
       
<h2>Login Wifi Ridho</h2>
        <form action="/login" method="POST">
            
   
<div class="form-group">
<label for="username">Username</label>
<input type="text" id="username" name="username" required>

</div>
            
<div class="form-group">
                
<label for="password">Password</label>
<input type="password" id="password" name="password" required>
                  
</div>
            
<button type="submit" class="login-button">Login</button>
        
       
</form>
        <!-- Tambahkan pesan error jika dibutuhkan -->
        <div class="error-message" id="error-message" value="login">
    
    </form>
</body>
</html>