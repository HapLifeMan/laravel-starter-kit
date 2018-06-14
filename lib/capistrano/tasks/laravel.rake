namespace :laravel do

  task :optimize do
    on roles(:web) do
      within release_path do
        execute :php, :artisan, "clear-compiled"
        execute :php, :artisan, "config:clear"
        execute :php, :artisan, "route:clear"
        execute :php, :artisan, "view:clear"
        execute :php, :artisan, "route:cache"
        execute :ln, '-s', '/home/domain.tld/www/shared/.env', '.env'
        execute :php, :artisan, "config:cache"
        execute :php, :artisan, :migrate, '--force'
        execute :ln, '-s', '/home/domain.tld/www/shared/node_modules', '.'
        execute :yarn, :install, '--pure-lockfile'
        execute :npm, :run, :prod
      end
    end
  end

  task :reload do
    on roles(:web) do
      within release_path do
        execute :sudo, "/etc/init.d/php7.1-fpm reload"
      end
    end
  end

end