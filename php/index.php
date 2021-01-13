<?php 
if (isset($_POST['1ON']))
{
exec('python /home/pi/Desktop/automate.py 7 0');
}
if (isset($_POST['1OFF']))
{
exec('python /home/pi/Desktop/automate.py 7 1');
}
if (isset($_POST['2ON']))
{
exec('python /home/pi/Desktop/automate.py 11 0');
}
if (isset($_POST['2OFF']))
{
exec('python /home/pi/Desktop/automate.py 11 1');
?>

<html>
<body>
<form method="post">
<table style="width: 20%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0" cellpadding="4" cellspacing="0">
      <tr>
        <td style="text-align: center;">DEVICE 1</td>
        <td style="text-align: center;"><button name="1ON">ON</button></td>
        <td style="text-align: center;"><button name="1OFF">OFF</button></td>
      </tr>
      <tr>
        <td style="text-align: center;">DEVICE 2</td>
        <td style="text-align: center;"><button name="2ON">ON</button></td>
        <td style="text-align: center;"><button name="2OFF">OFF</button></td>
      </tr>
  </table>
</form>
</body>
</html>