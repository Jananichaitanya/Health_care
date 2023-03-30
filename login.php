<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
</head>
<body>
    <form action="inser.php" method="post">
    <table>
        <tr>
            <td>
                Name :
            </td>
            <td>
                <input type="text" name="username" placeholder="Name" required>
            </td>
        </tr>
        <tr>
            <td>
                Password :
            </td>
            <td>
                <input type="password" name="password" placeholder="Password" required>
            </td>
        </tr>
        <tr>
            <td>
                Gender :
            </td>
            <td>
                <input type="radio" name="gender" value="m" required>Male
                <input type="radio" name="gender" value="f" required>Female
            </td>
        </tr>
        <tr>
            <td>
                Email :
            </td>
            <td>
                <input type="mail" name="email" placeholder="Email" required>
            </td>
        </tr>
        <tr>
            <td>
                Phone no :
            </td>
            <td>
                <input type="Phone" name="phone" placeholder="+91**********" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="Submit" value="Submit" name="">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>