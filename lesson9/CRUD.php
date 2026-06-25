<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studnet Detail in Database</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
        <div class="conatiner">
        <form action=""method="POST">    
        <h2>Insert Student Data</h2>
            <label for="">ID</label><br>
            <input type="number" name="stid">
            <label for="">Name</label><br>
            <input type="text" name="name">
            <label for="">Rollno</label><br>
            <input type="number" name="rollno">
            <label for="">Marks</label><br>
            <input type="number" name="marks">
            <button type="submit" name="click">Insert data</button>
        </form>
        <?php
            $conn=new mysqli("localhost","root","2004","Practice");
              

            if($_SERVER["REQUEST_METHOD"]=="POST"){
              $stid= $_POST["stid"];
              $name=$_POST["name"];
              $rollno=$_POST["rollno"];
              $marks=$_POST["marks"];
              
              if(isset($_POST["click"])){
              if((!empty($stid)) && (!empty($name)) && (!(empty($rollno))) &&(!empty($marks))){
              $sql="INSERT INTO student(Id,Name,Rollno,Marks)VALUES('$stid','$name','$rollno','$marks')";

              if($conn->query($sql)===true){
                echo "<center>Student data insert sucessfully</center>";
              }else{
                echo "Error ".$conn->error;
              }
              }else{
                echo "<center>Please Fill form properly</center>";
              }
            }
            }
        ?>

    </div>
        <?php
            $conn=new mysqli("localhost","root","2004","Practice");
            $sql="SELECT * FROM student";
            $result=$conn->query($sql);

        ?>
        <table border="1">
            <tr>
                <th>Id</th><th>Name</th><th>Rollno</th><th>Marks</th>
            </tr>    
                    <?php
                while($row=$result->fetch_assoc()){
               echo "
                <tr>
                <td>{$row['Id']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Rollno']}</td>
                <td>{$row['Marks']}</td>
                </tr>
                ";
                }
                ?>
        </table>


          <div class="conatiner">
           <form action=""method="POST">    
          <h2>Update Student Data</h2>
            <label for="">ID</label><br>
            <input type="number" name="stid">
            <label for="">Name</label><br>
            <input type="text" name="name">
            <label for="">Rollno</label><br>
            <input type="number" name="rollno">
            <label for="">Marks</label><br>
            <input type="number" name="marks">
            <button type="submit" name="click">Update</button>
        </form>

        <?php
            $conn=new mysqli("localhost","root","2004","Practice");
            $id=$_GET["stid"];
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name=$_POST["name"];
                $rollno=$_POST["rollno"];
                $marks=$_POST["marks"];
                if(!(empty($name)) && (!(empty($rollno))) && (!(empty($marks)))){
                    $sql="UPDATE student SET name='$name',rollno='$rollno',marks='$marks' where id='$id'";
                    $conn->query($sql);
                    echo "Update Scessfully";
                }
            }


        ?>
        </div>
</body>
</html>