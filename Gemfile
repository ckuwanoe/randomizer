source 'https://rubygems.org'

gem 'rails', '3.2.8'

# Bundle edge Rails instead:
# gem 'rails', :git => 'git://github.com/rails/rails.git'

# Gems used only for assets and not required
# in production environments by default.
group :assets do
  gem 'sass-rails',   '~> 3.2.3'
  gem 'coffee-rails', '~> 3.2.1'
  gem 'therubyracer', :platforms => :ruby
  gem 'uglifier', '>= 1.0.3'
  gem 'jquery-rails'
  gem 'jquery-ui-rails'
  gem 'twitter-bootstrap-rails', '2.1.0'
  gem 'bootstrap-datepicker-rails'
  gem 'font-awesome-sass-rails'
end

# Use unicorn as the app server
gem 'unicorn'

# Deploy with Capistrano
gem 'capistrano'
gem 'capistrano-exts', '>=1.8.1', :require => false
gem 'capistrano_colors'

# Syslog
gem 'syslogger'

group :production do
  gem 'exception_notification'
end

group :development do
  gem 'bullet'
  gem 'letter_opener'
end

group :development, :test do
  gem 'rspec'
  gem 'rspec-rails'
  gem 'database_cleaner'
  gem 'factory_girl_rails'
  gem 'capybara'
  gem 'spork'
  gem 'fabrication'
  gem 'pry'
  gem 'simplecov', :require => false
end

gem 'devise'
gem 'devise_invitable', '~> 1.0.0'
gem 'mysql2'
gem 'json'
gem 'client_side_validations'
gem 'mail'
gem 'cancan'
gem 'kaminari'
gem 'validates_timeliness', '~> 3.0.2'
gem 'daemons'
gem 'delayed_job_active_record'
gem 'jquery-datatables-rails', github: 'rweng/jquery-datatables-rails'
