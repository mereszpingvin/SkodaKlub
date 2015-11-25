#!/bin/bash

wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz -O /home/skodakl/beta.skodaklub.com/sites/all/libraries/geoip/GeoIP.dat.gz
rm -rf /home/skodakl/beta.skodaklub.com/sites/all/libraries/geoip/GeoIP.dat
gunzip /home/skodakl/beta.skodaklub.com/sites/all/libraries/geoip/GeoIP.dat.gz
