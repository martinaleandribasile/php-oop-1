<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Movies Oop</title>
</head>

<body class="container pt-3">
    <h1 class="text-center pb-5 text-success">MOVIES</h1>
    <div class="d-flex justify-content-center gap-5 ">
        <?php include __DIR__ . '\class.php';
        foreach ($movies as $element) : ?>
            <div class="px-5 d-flex flex-column align-items-center gap-2">
                <h3><?= $element->title ?> </h3>
                <p>DIRECTOR BY <?= $element->director ?> </p>
                <p> GENRE: <?= $element->genre ?> </p>
                <p> RELEASE DATE: <?= $element->year ?> </p>
                <p>VOTE <?= $element->getvote() ?> </p>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>