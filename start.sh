docker run -d --rm \
    -p 9501:9501 \
    --name easyswoole \
    --volume $PWD:/var/www \
    phpswoole/swoole:4.4.15-php7.1 \
    "php easyswoole start"