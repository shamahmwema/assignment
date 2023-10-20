<!doctype html>
<html>
    <head>
        <h1>insert data into our table
</head>
<body>
    <center>
        <?php
        require"dbconnect.php";
        $firstname=$_REQUEST['first_name'];
        $lastname=$_REQUEST['last_name'];
        $booktitle=$_REQUEST['book_title'];
        $author=$_REQUEST['author'];
        $gender=$_REQUEST['gender'];
        $date=$_REQUEST['date'];
        $sql="insert into staff values('$firstname,'$lastname',$booktitle',$author',$gender',$date')";
        if($conn->query($sql)===true){
            echo"records inserted";
        }else{
            echo"error";
        }
        ?>
        </center>
    </body>
    </html>

        