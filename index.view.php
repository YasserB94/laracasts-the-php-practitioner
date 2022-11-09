<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $greeting ?></h1>
    <p>Arrays</p>
    <?php if (isset($names) && count($names) > 0) : ?>
        <ul>
            <?php foreach ($names as $name) : ?>
                <li><?= $name ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
    <?php if (isset($persons) && count($persons) > 0) : ?>
        <table style="text-align: center;">
            <caption>Associative Arrays || Persons</caption>
            <tr>
                <th>NAME</th>
                <th>AGE</th>
                <th>GENDER</th>
            </tr>
            <?php foreach ($persons as $person => $traits) : ?>
                <tr>
                    <td><?= $person ?></td>
                    <?php foreach ($traits as $trait => $value) : ?>
                        <?php
                        $valueType = gettype($value);
                        if ($valueType == "string" || $valueType == "integer" || $valueType == "double") : ?>
                            <td><?= $value ?></td>
                        <?php else : ?>
                            <td>Unknown</td>
                        <?php endif ?>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif ?>

</body>

</html>