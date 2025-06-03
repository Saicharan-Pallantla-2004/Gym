<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="C:\Users\Sai Charan\Desktop\Mini Project\join.css">
    <script src="C:\Users\Sai Charan\Desktop\Mini Project\join.js"></script>
</head>
<body>
    <h2 id="h2">Sign Up!</h2>
    <form onclick="return validateForm()">
        <input type="text" placeholder="Enter Your Name" id="name" name="name"><br><br>
        <input type="text" placeholder="Enter Your Mobile Number" id="mobile" name="mobile"><br><br>
        <input type="number" placeholder="Enter Your Age" id="age" name="age"><br><br>
        <input type="number" placeholder="Enter Your Height" id="ht" name="ht"><br><br>
        <input type="number" placeholder="Enter Your Weight" id="wt" name="wt"><br><br>
        <label>Gender</label>
        &nbsp;&nbsp;
        <select name="gender" id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br><br>
        <label>Choose Your Plan!</label>
        &nbsp;&nbsp;
        <select name="plan" id="plan" name="plan">
            <option value="Monthly">Monthly</option>
            <option value="Quarterly">Quarterly</option>
            <option value="Half-Yearly">Half-Yearly</option>
            <option value="Annually">Annually</option>
        </select><br><br>
        <button>Join With Us!</button>
    </form>
</body>
</html>