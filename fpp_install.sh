#!/bin/bash

pushd $(dirname $(which $0))

cp pigpiod /etc/init.d
sudo chmod 755 /etc/init.d/pigpiod 
sudo chmod +x /opt/fpp/plugins/edmrds/callbacks
sudo chmod +x /opt/fpp/plugins/edmrds/rds-song.py 

/usr/bin/wget http://abyz.co.uk/rpi/pigpio/VERSIONS/pigpio-V22.zip
sudo mv pigpio-V22.zip pigpio.zip
unzip pigpio.zip 
cd PIGPIO/
sudo sed  '2619s/data/str(data)/' -i pigpio.py
make
make install 

cd /etc/init.d
update-rc.d pigpiod defaults 99
complete -W "$(ls /etc/init.d/)" service


service pigpiod start
sudo python /opt/fpp/plugins/edmrds/rds-song.py -i


popd

