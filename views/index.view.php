<?php
require 'partials/head.php';?>
    <ul>
        <?php foreach ($tasks as $task):?>
            <li>
                <span <?php if($task->isCompleted()) {echo "style=\"text-decoration: line-through\"";}; ?>>
                    <?=$task->getDescription()?>
                </span>
            </li>
        <?php endforeach;?>
    </ul>
<?php
require 'partials/footer.php'?>