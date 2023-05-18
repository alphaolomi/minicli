<?php

test('default command "demo" is correctly loaded', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'demo']);

    expect($output->fetch())->toContain('help');
});

test('the "demo color" command echoes command parameters', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'demo', 'color']);

    expect($output->fetch())->toBeString();
});


test('the "demo ask" command echoes command parameters', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'demo', 'ask']);

    expect($output->fetch())->toBeString();
})->skip('Don\'t know how to test this yet.');


// What is your name?

test('the "demo table" command prints test table', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'demo', 'table']);

    expect($output->fetch())->toContain('Header 3');
});


test('the "demo hello" command prints test table', function () {
    $output = getOutput();

    $app = getApp();
    $app->runCommand(['minicli', 'demo', 'hello']);

    expect($output->fetch())->toContain('Hello');
});
