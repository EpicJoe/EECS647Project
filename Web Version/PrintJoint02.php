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
 
$sql = "SELECT Teacher.Name,Course.CourseName FROM Teacher INNER JOIN Course ON Teacher.TeacherID = Course.TeacherID";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo 
        "Name: " . $row["Name"]. 
        " - CourseName: " . $row["CourseName"]. 
        "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>

