<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practical 3</title>
    <style type="text/css">
            body{
                background: #fff;
        }
            div
            {
                
                border-radius: 20px;
                background-color: cyan;
                color: navy;
                padding: 30px;
                width:500px;
                box-shadow: 2px 2px 5px black;
            }
    </style>
</head>
<body>
<center>
    <h3>Student Information Form</h3>
    <form action="response.php" method="post" >
        <table cellpadding="10px" border="1">
            <tr>
                <td>Enrolment no.:</td>
                <td><input type="text" name="enrollment" id="enrollment" required="required" placeholder="Enrolment no."></td>
            </tr>
            <tr>
                <td>Student name: </td>
                <td><input type="text" name="stdname" id="stdname" placeholder="Student name" size="30"></td>
            </tr>
            <tr>
                <td>Semester:</td>
                <td>
                    <select name="semester" id="semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Branch:</td>
                <td>
                    <select name="branch" id="branch">
                        <option value="Civil">Civil</option>
                        <option value="E.C.">E.C.</option>
                        <option value="I.T." selected="selected">I.T.</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Electrical" >Electrical</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" id="gender1" value="Male" checked="checked"> Male
                    <input type="radio" name="gender" id="gender2" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td>Birthdate:</td>
                <td><input type="date" name="bdate" id="bdate"></td>
            </tr>

            <tr>
                <td>Phone:</td>
                <td><input type="number" name="phone" id="phone" placeholder="Phone no." size="12"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id="email" placeholder="Email" ></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Register"> Register
                    <input type="reset" value="Cancel"> Cancel
                </td>
            </tr>

        </table>
    </form>
</center>
</body>
</html>
