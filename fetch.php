<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();
//foreach ($result as $student) {
    //var_dump($student);
//}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Fetch Data</title>
</head>
<body>
<table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Address</th>
            <th scope="col">Program</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Emergency Contact</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($result as $student): ?>
                <tr>
                    <td><?php echo $student['_id'] ?></td>
                    <td><?php echo $student['studentId'] ?></td>
                    <td><?php echo $student['firstName'] ?></td>
                    <td><?php echo $student['lastName'] ?></td>
                    <td><?php echo $student['birthdate'] ?></td>
                    <td><?php echo $student['address'] ?></td>
                    <td><?php echo $student['program'] ?></td>
                    <td><?php echo $student['contactNumber'] ?></td>
                    <td><?php echo $student['emergencyContact'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>