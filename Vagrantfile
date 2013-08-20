# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  # Define the box name
  config.vm.box = "precise64_vmware"

  # Define the box url in case Vagrant needs to download it
  config.vm.box_url = "http://files.vagrantup.com/precise64_vmware.box"

  # Enable port forwarding
  config.vm.network :public_network

  # Enable the bootstrap-script
  config.vm.provision :shell, :path => "bootstrap.sh"

end
