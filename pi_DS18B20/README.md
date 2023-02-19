#Automation using Ansible playbook
The included ansible playbook "init.yml" will help to initialise newly installed Rasbian, will set up wifi, DS18B20 temperature senosor. After setup completiton Temprature will be presented at webpage (HTML/php) at Raspberry Pi's IP address.

Playbook will do the following tasks:

update repository and upgrade packages
set time zone
set hostname ( value entered at user input)
create superuser and adds user to sudoers + enalbes common aliasies (value entered at user input)
disable ssh for root user
lock "pi" default account
setup externel Wifi dongle
setup Wifi
install nginx and php ( incuding settings to enable php for nginx)
will enable One-Wire interface on PIN 14 for DS18B sensor
Tasks are deifned in roles for easier understanding.

disclaimer --- If you think there is a bug or scope for improvement, feel free to reach out to me.
