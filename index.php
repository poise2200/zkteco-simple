<?php

require "app/core/main.php";

$app = new Main('192.168.1.201');

echo("<pre>");

print_r($app->Users()->deleteUser('13539558'));
print_r($app->Users()->users->to_array());
// print_r($app->Users()->getLogByUser('13452272'));

// print_r($app->allLogs());

// $user = $app->createUser([
//     'pin' => 500,
//     'name'=> 'CAR 25',
//     'privilege' => 0,
//     'group' => 1,
//     'card' => 13539558
// ]);

// print_r($user);
// print_r($app->Users()->deleteUserLog('13452272'));


echo("</pre>");


?>