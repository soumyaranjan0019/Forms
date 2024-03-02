<?php
include "conn.php";

session_start();

  if(!isset($_SESSION["full_name"]))
  {
    header("Location: login.php");
  }
?>

        <h1 style="color:dark; background-color:pink;" align="right">Hello 
            <?= $_SESSION['full_name']; ?>,<br>
            <a href="logout.php" style="text-decoration:none; color:red;">Logout</a>
        </h1>

    <table border="1px" cellpadding="30px" cellspacing="1px" width="30%" align="center" style="background-color:black; color:white;">
   
        <thead>
            <tr>
                <th>SL NO</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </tr>
        </thead>

        <tbody>
        <?php

        $qry="SELECT * FROM `srs2`";
        $qr=mysqli_query($conn,$qry);

        while($row=mysqli_fetch_assoc($qr))
        {
        ?>
    
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['full_name']; ?></td>
                <td><?= $row['age']; ?></td>
                <td><?= $row['email_id']; ?></td>
                <td><?= $row['pass_word']; ?></td>

                <td>
                    <a href="update.php?srs=<?= $row['id']; ?>">
                        <button>UPDATE</button>
                    </a>
                    <a href="delete.php?srs=<?= $row['id']; ?>">
                        <button>DELETE</button>
                    </a>
                </td>
                
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>