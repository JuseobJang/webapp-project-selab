<!DOCTYPE html>
<?php session_start(); ?>

<html>

<head>
    <title>Web App - Admin page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/webapp_admin.css">
</head>

<body>
    <div id="member_list">
        <p>hi</p>
        <?php
        $connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
        $query = "select * from member where course='Web Application Development';";
        $result = $connect->query($query);


        echo '<table class="text-center"><tr>' .
            '<th>성</th><th>이름</th><th>학번</th><th>반</th><th></th>' .
            '</tr>';
        while ($row = mysqli_fetch_array($result)) {
            $primary = $row['student_id'];
            echo '<tr><td>' . $row['last_name'] . '</td>' .
                '<td>' . $row['first_name'] . '</td>' .
                '<td>' . $row['student_id'] . '</td>' .
                '<td>' . $row['class_num'] . '</td>' .
                "<td> <form action='member_info.php' method='POST'>
                    <button type='submit' name= 'primary' value='$primary'>info</button>
                </form> </td>" .
                '</tr>';
        }
        echo '</table>';

        ?>
        <form action='member_info.php' method='POST'>
            <button type='submit' name='primary' value='$primary'>info</button>
        </form>
    </div>
</body>

</html>