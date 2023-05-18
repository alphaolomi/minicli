<?php

test('"help" command is correctly loaded', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'help']);

    expect($output->fetch())->toContain('INFO');
});
