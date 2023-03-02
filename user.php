<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col" name="userID">userID</th>
      <th scope="col" name="username">username</th>
      <th scope="col" name="email">email</th>
      <th scope="col" name="password">password</th>
    </tr>
</thead>

<?php
include "config.php";
include "bot.php";

$no=1;
$ambildata = mysqli_query($konek, "SELECT * FROM users WHERE role='user'");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo "
        <tr>
        <td>$no</td>
        <td>$tampil[userID]</td>
        <td>$tampil[username]</td>
        <td>$tampil[email]</td>
        <td>$tampil[password]</td>
        </tr>";

    $no++;
}

?>
</table>