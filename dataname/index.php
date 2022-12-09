<?php  
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'dataname');

if(isset($_POST['add']))
{
    $name=$_POST['name'];
    $number=$_POST['number'];
    $position=$_POST['position'];
    $location=$_POST['location'];
    $Fathername=$_POST['Fathername'];
    $Mothername=$_POST['Mothername'];
    $stutas=$_POST['stutas'];
    $query ="INSERT INTO `data`(`name`,`number`,`position`,`location`,`Fathername`,`Mothername`,`stutas`) 
    VALUES ('$name','$number','$position','$location','$Fathername','$Mothername','$stutas')";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
{
    echo'<script>alert("Data saved")</script>';
    header('Location:index.php');
}else{

    echo'<script>alert("Data Not saved")</script>';

    }
}
// stutas/Mothername/Fathername/location/position/number/name

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>personal information</title>
</head>
<style>
    body{
        background: aliceblue !important;

    }
    form {
        background: aliceblue !important;
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">معلومات شخصية (ال صلاح )</a>
        </div>
    </nav>
    <form action="" method="POST">
        <div class="container">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">الاسم الكامل (رباعي)</label>
                <input type="text" class="form-control"name="name" id="exampleFormControlInput1" placeholder="الاسم الكامل" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">رقم الهاتف</label>
                <input type="text" class="form-control" name="number" id="exampleFormControlInput1" placeholder="رقم الهاتف" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">الوظيفة</label>
                <input type="text" class="form-control" name="position" id="exampleFormControlInput1" placeholder="الوظيفة" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">مكان الاقامة</label>
                <input type="text" class="form-control" name="location" id="exampleFormControlInput1" placeholder="مكان الاقامة" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اسم الاب </label>
                <input type="text" class="form-control" name="Fathername" id="exampleFormControlInput1" placeholder="اسم الاب" required >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اسم الام </label>
                <input type="text" class="form-control" name="Mothername" id="exampleFormControlInput1" placeholder="اسم الام" required>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">الحالة الاجتماعية </label>
            <select class="form-select" name="stutas" aria-label="الحالة الاجتماعية" required>
                <option selected>الحالة الاجتماعية</option>
                <option value="متزوج">متزوج</option>
                <option value="اعزب">اعزب</option>
            </select>
            </div>
            <button type="submit" name="add" class="btn btn-warning w-100">ادخال</button>

        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>