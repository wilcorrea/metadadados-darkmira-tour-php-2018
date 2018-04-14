#!/bin/bash

if [[ ! -d 'output' ]]; then
  mkdir output
fi

# echo $(/usr/bin/php public/index.php) > output/index.html && w3m output/index.html
echo $(/usr/bin/php public/index.php) > output/index.html && firefox output/index.html
echo ''
