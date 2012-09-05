require "bundler/capistrano"
require "delayed/recipes"

load "config/recipes/base"
load "config/recipes/nginx"
load "config/recipes/unicorn"
load "config/recipes/postgresql"
load "config/recipes/nodejs"
load "config/recipes/rbenv"
load "config/recipes/delayed_job"
#load "config/recipes/clock"
load "config/recipes/check"
load "config/recipes/links"

server "fieldreport.me", :web, :app, :db, primary: true

set :user, "deployer"
set :application, "seiu"
set :deploy_to, "/home/#{user}/apps/#{application}"
set :deploy_via, :remote_cache
set :use_sudo, false

set :scm, "git"
set :repository, "git@github.com:ckuwanoe/fieldreport.git"
set :branch, "#{application}"

default_run_options[:pty] = true
ssh_options[:forward_agent] = true

after "deploy", "deploy:cleanup" # keep only the last 5 releases

