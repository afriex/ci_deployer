<?php
/// lalala yeyeye. Presentasi `deployer` 13 Dec 2019
/// ialexs

namespace Deployer;

require 'recipe/codeigniter.php';

// Project name
set('application', '');

// Project repository
set('repository', 'git@github.com:afriex/ci_deployer.git');

set('keep_releases', 3);

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', ['.env']);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts 
host('127.0.0.1')
    ->stage('develop')
    ->user('root')
    ->identityFile('~/.ssh/id_rsa')
    ->set('branch','develop')
    ->set('deploy_path', '~/repo/{{application}}');


task('build', function () {
    run('cd {{release_path}} && build');
});

set('bin/composer', function () {
    if (commandExist('composer')) {
       $composer = locateBinaryPath('composer');
    }
    if (empty($composer)) {
        run("cd {{release_path}} && curl -sS https://getcomposer.org/installer | {{bin/php}}");
        $composer = '{{release_path}}/composer.phar';
    }
    return $composer;
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');