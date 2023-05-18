<?php

test('"todos" command is correctly loaded', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'todos']);

    expect($output->fetch())->toContain('list all');
});

test('"todos list" is correctly loaded', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'todos', 'list']);

    expect($output->fetch())->toContain('Title');
});
