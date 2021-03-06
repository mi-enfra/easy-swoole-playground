docker run -d --rm \
    -p 9501:9501 \
    --name easyswoole \
    --network dev-network \
    --volume $PWD:/var/www \
    phpswoole/swoole:4.4.15-php7.1 \
    "php easyswoole start"

inotify-hookable \
        --watch-directories ./App \
        --on-modify-command 'docker restart easyswoole'
    
trap "docker stop easyswoole" EXIT