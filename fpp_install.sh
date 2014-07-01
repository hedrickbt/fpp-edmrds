#!/bin/bash

pushd $(dirname $(which $0))

wget abyz.co.uk/rpi/pigpio/pigpio.zip
unzip pigpio.zip 
cd PIGPIO/
make
make install 
cp pigpiod /etc/init.d
sudo chmod 755 /etc/init.d/pigpiod 
cd /etc/init.d
update-rc.d pigpiod defaults 99
complete -W "$(ls /etc/init.d/)" service
service pigpiod start



popd
