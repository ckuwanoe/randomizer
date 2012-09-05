namespace :links do
  desc "Symlink the spreadsheets dir"
  task :symlink_spreadsheets, roles: :app do
    run "rm -rf #{current_release}/public/spreadsheets"
    run "ln -s #{shared_path}/spreadsheets #{current_release}/public/spreadsheets"
  end
  after "deploy:finalize_update", "links:symlink_spreadsheets"
  
  desc "Symlink the clock config"
  task :symlink_clock, roles: :app do
    run "rm -rf #{current_release}/config/clock.rb"
    run "ln -s #{shared_path}/config/clock.rb #{current_release}/config/clock.rb"
  end
  after "deploy:finalize_update", "links:symlink_clock"
  
  desc "Symlink the schedule file"
  task :symlink_schedule, roles: :app do
    run "rm -rf #{current_release}/config/schedule.rb"
    run "ln -s #{shared_path}/config/schedule.rb #{current_release}/config/schedule.rb"
  end
  after "deploy:finalize_update", "links:symlink_schedule"
end