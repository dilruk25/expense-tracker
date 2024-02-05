<?php  
    $name = $_POST['Name'];
    $category = $_POST['Category'];
    $amount = $_POST['Amount'];
    $date = $_POST['Date'];
    
    //Database connection
    $conn = new mysqli('localhost', 'root', '','test');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("Insert into expenses(Name, Category, Amount, Date)
        values(?, ?, ?, ?");
        $stmt->bind_param("ssis", $name, $category, $amount, $date);
        $stmt->execute();
        echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }
    

?>