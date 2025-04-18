<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <title>student project</title>
    <style>
    body{
        background-color:whitesmoke;
        font-family: "Tajawal", sans-serif;

    }
    #mother{
        width: 100%;
        font: size 20px;
    }
    main{
        float:left;
        border: 1px solid gray;
        padding: 5px;
    }
    input{
        padding: 4px;
        border: 2px solid black;
        text-align:center;
        font-size: 17px;
        font-family: "Tajawal", sans-serif;
    }
    aside{
        text-align:center;
        width:300px;
        float:right;
        border: 1px solid black;
        padding: 10px;
        font-size:20px;
        background-color:silver;
        color:white;
    }
    #tbl{
        width: 890px;
        font-size :20px;
    }
    #tbl th{
        background-color:silver;
        color:black;
        font-size:20px;
        padding: 10px;
    }
    aside button{
      width:190px;
      padding: 8px;
      margin-top:7px;
      font-size:17px;
      font-weight:bold;
      font-family: "Tajawal", sans-serif;

    }
</style>
</head>
<body dir= 'rtl'>

    <div id='mother'>
        <form>
            <!---لوحة التحكم -->
        <aside>
        <div id='div'>
            <img src='https://www.privo.com/hs-fs/hubfs/images/privo-circle-kid-5.png?width=430&name=privo-circle-kid-5.png' alt='لوجو الموقع'width="200px">
            <h3>لوحة المدير</h3>
<label> رقم الطالب:</label><br>
<input type='text' name='id' id='id'><br>
<label>اسم الطالب:</label><br>
<input type='text' name='name' id='name'><br>
<label>عنوان الطالب:</label><br>
<input type='text' name='address' id='address'><br><br>
<button name='add'>اضافة طالب</button>
<button name='del'>حذف الطالب</button>
</div>
</aside>
        </form>


</body>
</html>
