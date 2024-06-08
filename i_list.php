<?php
include "iheader.php";
include "idbconnect.php";

$sql = "SELECT * FROM crud";
$result = $conn->query($sql);

if ($result === false) {
    die("Query failed: " . $conn->error);
}
?>		

<div class="body2">
    <div class="sub_header">
        <h1 align="center">Mushy</h1>
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Send Money</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["send_money"]) . "</td>";
                echo "<td><a href='i_update.php?editid=$id'>Edit</a></td>";
                echo "<td><a href='i_delete.php?delid=$id'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No results found</td></tr>";
        }
        ?>
    </table>
</div>

<?php
include "footer.php";
?>
