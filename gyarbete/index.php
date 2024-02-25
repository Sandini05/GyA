<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gymnasiearbetet</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <form action="#" method="get">
        <div id="container">
            <div class="box">
                <h1>Register</h1>
                <div class="row">

                    <div class="col">
                    <p class="title">Produkt: </p>
                    <input type="text" id="name" name="name" required>
                    </div>
    
                    <div class="col">
                    <p class="title">Antal: </p>
                    <input type="text" id="name2" name="name2" required>
                    </div>
    
                    <div class="col">
                    <p class="title">Pris: </p>
                    <input type="text" id="name3" name="name3" required>
                    </div>
    
                    <div class="col">
                    <p class="title">Bäst före datum: </p>
                    <input type="text" id="name4" name="name4" required>
                    </div>
                </div>
                <div class="buttondiv">
                    <button id="btn" type="submit" name="sub">Register</button>
                </div>
            </div>
        </div>
    </form>

    <?php
    if(isset($_GET['sub'])){ //Kollar igenom att användaren har klickat på Register knappen

        $mapp = "C:/xampp/htdocs/gyarbete/txtfile/";

        $filnamn = $_GET['name'] . ".txt"; //Hämtar namnet på produkten och lagrar i en variabel filnamn

        $filepath = $mapp. $filnamn; //den sätter ihop sökvägen (som har deklarerats i variabeln "mapp") och textfilerna, så att vad som anges i variabeln "filnamn" (alltså det som skrivs i input elementet), förs till mappen "txtfile"

        $myfile = fopen($filepath, "w") or die("Unable to open file!"); //Skapar en fil i server mappen och anger namnet som finns i filnamn variabeln

        $txt = $_GET['name']."\n";
        fwrite($myfile, $txt); 

        $txt = $_GET['name2']."\n"; //Hämtar värdet från input elementet som har, i det här fallet, name = name2 och lagrar det i en variabel text
        fwrite($myfile, $txt); //Skriver in innehållet på txt variabeln och skriver in i textfilen

        $txt = $_GET['name3']."\n"; //samma
        fwrite($myfile, $txt);

        $txt = $_GET['name4']."\n"; //samma
        fwrite($myfile, $txt);

        fclose($myfile); //Stänger filen
    }
    ?>

</body>
</html>