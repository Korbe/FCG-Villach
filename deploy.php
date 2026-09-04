<?php
namespace Deployer;

require 'recipe/laravel.php';


// Config

set('repository', 'https://github.com/Korbe/fcg-vih-webapp.git');
set('bin/composer', '/home/u599789838/bin/composer');
set('http_user', 'u599789838'); 

set('writable_mode', 'chmod');
set('writable_dirs', [
    'storage',
    'bootstrap/cache',
]);
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

task('artisan:migrate')->disable();

// Hosts

host('153.92.220.242')
    ->set('ssh_multiplexing', false)
    ->set('port', 65002)
    ->set('remote_user', 'u599789838')
    ->set('deploy_path', '/home/u599789838/domains/fcg-villach.at/deployment');
    
task('composer:install', function () {
    cd('{{release_path}}');
    run('/home/u599789838/bin/composer install');
});

// Server has no Node.js, so assets are built locally and shipped up via scp
// (the server also has no rsync, so Deployer's built-in upload() can't be used).
task('deploy:build', function () {
    runLocally('npm run build');
})->desc('Build frontend assets locally');

task('deploy:upload_build', function () {
    $host = currentHost();
    $port = $host->getPort() ?? 22;
    $connection = $host->connectionString();
    runLocally("scp -P {$port} -r public/build {$connection}:{{release_path}}/public/build");
})->desc('Upload built assets via scp');

task('deploy:storageSymlink', function () {
    run('ln -sfn {{deploy_path}}/../storage {{release_path}}/storage');
    run('ln -sfn {{release_path}}/storage/app/public {{release_path}}/public/storage');
});

task('deploy:envSymlink', function () {
    run('ln -sfn {{deploy_path}}/../.env {{release_path}}/.env');
});

task('deploy:restart_caches', function () {
    run('php {{release_path}}/artisan cache:clear');
    run('php {{release_path}}/artisan config:clear');
    run('php {{release_path}}/artisan route:clear');
    run('php {{release_path}}/artisan view:clear');

    run('php {{release_path}}/artisan config:cache');
    run('php {{release_path}}/artisan route:cache');
    run('php {{release_path}}/artisan view:cache');
    run('php {{release_path}}/artisan optimize'); 
});


// Hooks
before('deploy:update_code', 'deploy:build');
after('deploy:update_code', 'composer:install');
after('deploy:update_code', 'deploy:upload_build');
after('deploy:shared', 'deploy:envSymlink');
after('deploy:envSymlink', 'deploy:storageSymlink');
after('deploy:storageSymlink', 'deploy:restart_caches');

after('deploy:setup', 'deploy:unlock');
after('deploy:failed', 'deploy:unlock');
