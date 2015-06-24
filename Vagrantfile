VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.hostname = "caos-php-client"

  config.vm.synced_folder ".", "/vagrant", :mount_options => ["dmode=777","fmode=666"]
  
  config.vm.provision "shell", inline: "apt-get update"
  
end
