<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
    <table>
        <tr>
            <td>name:</td>
            <td>
                <input type="text" name="name" value="<?php //echo $username ?>"/>
            </td>
        </tr>
        <tr>
            <td>email</td>
            <td>
                <input type="text" name="email" value="<?php //echo $email ?>"/>
            </td>
        </tr>
        <tr>
            <td>image</td>
            <td>
                <input type="file" name="image" value="<?php //echo $image ?>"/>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="submit" value="submit" />
            </td>
        </tr>
    </table>

</form>
</body>
</html>