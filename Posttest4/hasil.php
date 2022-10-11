
<?php 

$email = $_POST['email'];
$password = $_POST['password'];
$umur = $_POST['umur'];
$tanggal = $_POST['tanggal'];
$langganan = $_POST['langganan'];
echo "<table border='1' cellpadding='4'>
        <tr>
            <td>Email</td>
            <td>password</td>
            <td>umur</td>
            <td>tanggal Lahir</td>
            <td>langganan</td>
        </tr>
        <tr>
            <td>$email</td>
            <td>$password</td>
            <td>$umur</td>
            <td>$tanggal</td>
            <td>$langganan</td>
        </tr>
     </table>"; 

// echo 'HASIL  <br>';
// echo 'Email         : '. $email. '<br>';
// echo 'password      : '. $password. '<br>';
// echo 'umur          : '. $umur. '<br>';
// echo 'tanggal Lahir : '. $tanggal. '<br>';
// echo 'langganan     : '. $langganan. '<br>';

?>   
</body>
</html>

