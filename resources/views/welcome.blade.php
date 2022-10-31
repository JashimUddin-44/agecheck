<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>Age Check</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <form action="" method="POST">
        <h1>Age and Class Check</h1>
            @csrf
        <label>User Age :</label>
        <input type="number" name="age" placeholder="Enter Your Age">
        <br><br>
        <label>User Class :</label>
        <input type="number" name="class" placeholder="Enter You Class">
        <button type="submit">Submit</button>  
    </form>

    @if($age!='')
        Your age not allowed -{{$age}}

        Your class not allowed - {{$class}}
    @endif
    


</body>
</html>