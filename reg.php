<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2>Create Account</h2>
            <form action="#">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                
                <div class="input-group">
                    <label for="confirm-password">Address</label>
                    <input type="password"  name="address" placeholder="Enter your address" required>
                </div>
                
                <button type="submit" class="submit-btn">Register</button>
            </form>
            <p>Already have an account? <a href="#">Login here</a></p>
        </div>
    </div>

</body>
</html>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: #f0f4f7;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background: linear-gradient(to bottom right, #36D1DC, #5B86E5);
    border-radius: 15px;
}

.form-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    font-size: 14px;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    outline: none;
    transition: all 0.3s ease;
}

.input-group input:focus {
    border-color: #36D1DC;
    box-shadow: 0 0 5px rgba(54, 209, 220, 0.5);
}

.submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #36D1DC;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #5B86E5;
}

p {
    margin-top: 15px;
    font-size: 14px;
    color: #666;
}

p a {
    color: #36D1DC;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}

</style>