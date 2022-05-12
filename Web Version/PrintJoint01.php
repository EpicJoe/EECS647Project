<?php
$servername = "mysql.eecs.ku.edu";
$username = "fengmiyang";
$password = "shohNu9y";
$dbname = "fengmiyang";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT Student.Name,Student.StudentID,Student.Email,Student.Sex,Course.CourseName,Course.Time,Course.Address FROM Student INNER JOIN Course ON Student.CourseID = Course.CourseID";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo 
        "Name: " . $row["Name"]. 
        " - StudentID: " . $row["StudentID"]. 
        " - StudentEmail: " . $row["Email"]. 
        " - StudentSex: " . $row["Sex"]. 
        " - CourseName: " . $row["CourseName"]. 
        " - Time: " . $row["Time"]. 
        " - Address: " . $row["Address"].  
        "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>

