<?php

test('default command "demo" is correctly loaded', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'todos', 'list']);

    expect($output->fetch())->toContain('Title');
});
