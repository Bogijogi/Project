<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="new_data.php" method="post">
        <table>
            <tr>
                <td><span style="color:red;">*</span> Company:</td>
                <td><input type="text" name="company"><br></td>
            </tr>
            <tr>
                <td><span style="color:red;">*</span> First Name:</td>
                <td><input type="text" name="fname"><br></td>
            </tr>
            <tr>
                <td><span style="color:red;">*</span> Last Name:</td>
                <td><input type="text" name="lname"><br></td>
            </tr>
            <tr>
                <td><span style="color:red;">*</span> Email Address:</td>
                <td><input type="text" name="email"><br></td>
            </tr>
            <tr>
                <td><span style="color:red;">*</span> Title:</td>
                <td><input type="text" name="title"><br></td>
            </tr>
            <tr>
                <td><span style="color:red;">*</span> Phone:</td>
                <td><input type="text" name="phone"><br></td>
            </tr>
            <tr>
                <td>Cancel Registration:</td>
                <td><input type="checkbox" name="terms"></td>
            </tr>
            <tr>
                <td><span style="color:red;">*</span>252 Training Session 2010:</td>
                <td><select name="date">
                        <optgroup label="--Select a date--">
                            <option default style="display:none">--Select a date--</option>
                            <option value="ten">10</option>
                            <option value="ele">11</option>
                        </optgroup>
                    </select></td>
            </tr>
            <tr>
                <td style="vertical-align:top;"><span style="color:red;">*</span> Job Function:</td>
                <td><input type="radio" name="job" value="cam">Campaign Management<br>
                    <input type="radio" name="job" value="crm">CRM Administration <br>
                    <input type="radio" name="job" value="ema">Email Deployment <br>
                    <input type="radio" name="job" value="par">Partner <br>
                    <input type="radio" name="job" value="emp">Employee <br>
                </td>
            </tr>
            <tr>
                <td>Dietary requirements:</td>
                <td><input type="text" name="dr"><br></td>
            </tr>
            <tr>
                <td style="vertical-align:top;">Expectations?:</td>
                <td><textarea name="expe" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="button" value="Submit"></td>
            </tr>
        
    </form>

</body>

</html>