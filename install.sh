docker run -it --rm \
    --name composer \
    --volume $PWD:/var/www \
    phpswoole/swoole:4.4.15-php7.1 \
    "composer require easyswoole/easyswoole=3.x"

docker run -it --rm \
    --name php \
    --volume $PWD:/var/www \
    phpswoole/swoole:4.4.15-php7.1 \
    "php vendor/bin/easyswoole install"

docker run -it --rm \
    --name composer \
    --volume $PWD:/var/www \
    phpswoole/swoole:4.4.15-php7.1 \
    "composer dump-autoload -o"