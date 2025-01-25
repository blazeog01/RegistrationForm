<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view.css">
</head>

<body>
<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "student";
    $connection = mysqli_connect($host, $user, $password, $db);
    $sql = mysqli_query($connection,"select * from student_details")
?>
<div class="info-div">
<table class="info-table">
	<thead>
	<tr>
		<th>Name</th>
		<th>School Name</th>
        <th>Year</th>
        <th>Stream</th>
        <th>Roll</th>
        <th>Section</th>
	</tr>
	</thead>
    <?php
    while ($row = mysqli_fetch_array($sql)) {
    ?>
    <tbody>
    <tr>
        <td><?php echo $row['name']?> </td>
		<td><?php echo $row['school_name']?> </td>
		<td><?php echo $row['year']?> </td>
        <td><?php echo $row['stream']?> </td>
        <td><?php echo $row['roll']?> </td>
        <td><?php echo $row['section']?> </td>
    </tr>
	</tbody>
	<?php 
    }
	?>
</table>
</div>

<div class="button-div">
    <form action="../Edit/edit.html">
        <button id="edit-btn">Edit</button>
    </form>
    <form action="../Home/home.html">
        <button id="home-btn">Home</button>
    </form>
    <form action="../log&del/delete.php">
        <button id="delete-btn">Delete</button>
    </form>
</div>
</body>
</html>

