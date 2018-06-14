# config valid only for current version of Capistrano
lock "3.9.1"

set :application, "AppName"
set :repo_url, "notarootuser@domain.tld:/home/domain.tld/.git"

# Default value for keep_releases is 5
set :keep_releases, 3

# The version of laravel being deployed
set :laravel_version, 5.6

# Whether to upload the dotenv file on deploy
set :laravel_upload_dotenv_file_on_deploy, false

set :composer_install_flags, '--no-interaction --quiet --optimize-autoloader'