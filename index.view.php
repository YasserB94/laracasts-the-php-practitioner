<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <ul>
        <?php foreach ($tasks as $task):?>
            <li>
                <span <?php if($task->isCompleted()) {echo "style=\"text-decoration: line-through\"";}; ?>>
                    <?=$task->getDescription()?>
                </span>
            </li>
        <?php endforeach;?>
    </ul>
</body>

</html>