<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - CHOPIE 2CT05031024</title>
    <style type="text/css">
        body{
             font: normal 10pt Arial;
             }
        table{ 
            border-collapse: collapse;
             width: 70%;
              margin: auto;
             }
        th{ 
            background: #eee; 
            color: #333; 
        }
        td{
            padding: 10px;
        }
        .formularz{
            width: 600px;
            margin:auto;}
        input[name='imie'],input[name='nazwisko'],input[name='email']
        {
            width:400px;
            height:25px;
            margin:10px;
        }
        input[name='submit']{
            float:right;
            background-color: orange;
            width: 80px;
        }
        .box{
            width: 300px;
            margin: auto;
        }
        

        </style>
</head>
<body>
    <?php include_once("polaczenie.php"); ?>
    <div class="formularz">
    <fieldset>
        <legend>Dodaj do bazy danych</legend>
        <form action="dodaj_do_bazy.php" method="post" >
            <input type="text" name="imie" placeholder="podaj imie" required/>
            <input type="text"  name="nazwisko" placeholder="podaj nazwisko" required/>
            <input type="text"  name="email" placeholder="podaj email" required/>
            <input type="submit" name="submit"   value="Dodaj"/>
        </form>
    </fieldset>

    </div>
    <hr>
    <hr>
    <div class="box">
        <?php
        $zapytanie = "SELECT imie,nazwisko,email FROM uczniowie";
        echo"<table border=1>";
        echo"<tr class='table_head'><td>imie</td><td>nazwisko</td><td>email</td></tr>";
        foreach($polaczenie->query($zapytanie) as $wiersz){
            echo"<tr><td>".$wiersz['imie']."</td><td> ".$wiersz['nazwisko']." </td><td>".$wiersz['email']."</td></tr> ";
        }
        echo"</table>";
        ?>  
    </div>
    <?php $polaczenie=null; ?>
    
</body>
</html>