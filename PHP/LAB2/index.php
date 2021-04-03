<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body>
    <div id="wrapper">
       <?php 
            require_once("userclass.php");
            //Create new user
            $GiaDat = new User('GiaDat' ,'dat861999@gamil.com');
            //output user info
            echo "<h2>---- User Info -----</h2>";
            echo "UserID : ".$GiaDat -> GetUserID()."<br/>";
            echo "UserName : ".$GiaDat -> GetUserName()."<br/>";
            //add more user
            $GiaDatmore = new User("Gia Dat","youremail@gmail.com");
            echo "<h2>----- More user ----</h2>";
            echo "UserID: ".$GiaDatmore -> GetUserID()."<br/>";
            echo "UserID: ".$GiaDatmore -> GetUserName()."<br/>";
            //more OOP PHP 
            include ("employeeclass.php");
            $person_a = new Person("Gia Dat",1234);
            echo "<h2>---- More OOP PHP ---</h2>";
            echo "Person ID:".$person_a->GetNationalID()."<br/>";
            echo "Person Name: ".$person_a -> GetName()."<br/>";
            echo "<h2>Employyee</h2>";
            $employyy_a = new Employee("Gia Dat",5678,"Provip");
            echo "Employee ID: ".$employyy_a -> GetEmployyeeID()."<br/>";
            echo "Employee Name: ".$employyy_a -> GetName()."<br/>";
            echo "Employee Department: ".$employyy_a ->GetDepartment()."<br/>";
            echo "<h2>More Employeee</h2>";

            $employyy_b = new Employee ("Gia Dat",112233,"offical");
            echo "Employee ID: ".$employyy_b -> GetEmployyeeID()."<br/>";
            echo "Employee Name: ".$employyy_b -> GetName()."<br/>";
            echo "Employee Department: ".$employyy_b -> GetDepartment()."<br/>";

       ?> 
    </div>
</body>
</html>