<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eu - European region countries</title>
    <style>
        *{
            font-family:"Montserrat",sans-serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-brand mx-md-5"><a href="#" class="text-decoration-none text-white">EU</a></div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navcol">>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol">

        </div>
    </nav>
    <main class="container">
        <h1 class="my-4">European region countries</h1>
        <p class="my-4">Made with HTML 5 and vanilla JavaScript, with the help of <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 5.</a></p>
        <div class="container">
            <h2 class="my-5">List of Countries</h2>
            <ul>
                <?php include "./json/json.php";
                    function json_to_str($file){
                        $content=file_get_contents($file);
                        $data=json_decode($content,true);
                        return $data;
                    };
                    $data = json_to_str("./json/index.json");
                    foreach($data as $d){
                        echo "<li>".$d['name']['official']."</li><br>";
                    }
                ?>
            </ul>
            <p><a href="https://restcountries.com/">Source: REST Countries.</a></p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>