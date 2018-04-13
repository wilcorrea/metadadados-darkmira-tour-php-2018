#!/bin/bash

if [[ ! -d 'output' ]]; then
  mkdir output
fi

echo $(/usr/bin/php view.php) > output/index.html && w3m output/index.html
