<?php
$file = "order_data.json";
$message = '';
$error = '';
if(isset($_POST["submit"]))
{
    if(empty($_POST["product"]))
    {
        $error = "<label class='text-danger'>Įveskite užsakomo produkto pavadinimą</label>";
    }
    else if(empty($_POST["name"]))
    {
        $error = "<label class='text-danger'>Įveskite savo vardą</label>";
    }
    else if(empty($_POST["phone"]))
    {
        $error = "<label class='text-danger'>Įveskite telefono numerį</label>";
    }
    else if(empty($_POST["email"]))
    {
        $error = "<label class='text-danger'>Įveskite elektroninio pašto adresą</label>";
    }
    else if(empty($_POST["city"]))
    {
        $error = "<label class='text-danger'>Įveskite miestą</label>";
    }
    else if(empty($_POST["date"]))
    {
        $error = "<label class='text-danger'>Įveskite užsakymo pateikimo datą</label>";
    }
    else
    {
        if(file_exists('order_data.json'))
        {
            $Product = $_POST["product"];
            $Name = $_POST["name"];
            $Phone = $_POST["phone"];
            $Email = $_POST["email"];
            $City = $_POST["city"];
            $Date = $_POST["date"];

            $json = json_decode(file_get_contents($file), true);
            $nextid = sizeof($json['data']);
            $json['data'][$nextid]['product'] = $Product;
            $json['data'][$nextid]['name'] = $Name;
            $json['data'][$nextid]['phone'] = $Phone;
            $json['data'][$nextid]['email'] = $Email;
            $json['data'][$nextid]['city'] = $City;
            $json['data'][$nextid]['date'] = $Date;

            file_put_contents($file, json_encode($json));
            if(file_put_contents($file, json_encode($json)))
            {
                $message = "<label class='text-success'>Užsakymas sėkmingas netrukus su Jumis susisieksime</p>";
            }
        }
        else
        {
            $error = 'JSON File not exits';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113778234-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113778234-2');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NFQ academy 2018 | Pagrindinis puslapis</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
    <h1 align="center">Pagrindinis puslapis</h1>
            <div id="products" class="row list-group">
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Produktas1</h4>
                        <p class="group inner list-group-item-text">
                            Pačio geriausio produkto aprašymas</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    Kaina 1000 €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Produktas 2</h4>
                        <p class="group inner list-group-item-text">
                            Pačio geriausio produkto aprašymas</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    Kaina 2000 €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Produktas 3</h4>
                        <p class="group inner list-group-item-text">
                            Pačio geriausio produkto aprašymas</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    Kaina 3000 €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<br />
<div class="container" style="width:500px;">
    <h2 align="center">Naujas užsakymas</h2>
    <h3 align="center"><a href="list_data.php">Užsakymų sąrašas</a></h3>
    <form method="post">
        <?php
        if(isset($error))
        {
            echo $error;
        }
        ?>
        <br />
        <label>Produktas</label>
        <input type="text" name="product" class="form-control" placeholder="Užsakomo produkto pavadinimas"/><br />
        <label>Užsakovo vardas</label>
        <input type="text" name="name" class="form-control" placeholder="Jūsų vardas" /><br />
        <label>Telefonas</label>
        <input type="text" name="phone" class="form-control" placeholder="86xxxxxxx" /><br />
        <label>Elektroninis paštas</label>
        <input type="text" name="email" class="form-control" placeholder="jusu.vardas@gmail.com" /><br />
        <label>Miestas</label>
        <input type="text" name="city" class="form-control" placeholder="Pvz. Kaunas" /><br />
        <label>Užsakymo data</label>
        <input type="text" name="date" class="form-control" placeholder="Pvz. 2018-05-25"/><br />

        <input type="submit" name="submit" value="Užsakyti" class="btn btn-info" /><br />
        <?php
        if(isset($message))
        {
            echo $message;
        }
        ?>
    </form>
</div>
<div class="container">
    <p><strong>Papildomi komentarai</strong></p>
    <p>Puslapis sukurtas pagal pateiktą užduotį Nr. 2, orientuotasi į puslapio funkcionakumą ir duomenų manipuliacijas,
        pilnai sutvarkyti CSS nebeliko laiko. Žinoma, užsakymo sąrašo galutinis vartotojas (tokiu būdu kaip pateikta čia)
        negalėtų pasiekti tikroje sistemoje, jis būtų matomas tik prisijungus. Aktyvi nuoroda į užsakymų sąrašą palikta
        tik tikrinimo patogumui. Be mokėjimų informacijos įvedimo ir krepšelio formavimo, tokia užsakymo/kontaktų forma
        leido panaudoti užsakymų .json failą ir duomenų rašymą į jį, bei šio failo surinktų duomenų atvaizdavimą užsakymų sąraše.
    </p>
</div>

</body>
</html>