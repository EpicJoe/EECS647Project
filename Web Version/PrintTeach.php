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
 
$sql = "SELECT CourseID,CourseName,TeacherID FROM Teach";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "CourseID: " . $row["CourseID"]. " - TeacherID: " . $row["TeacherID"]. " - CourseName: " . $row["CourseName"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>