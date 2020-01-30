<?php
    namespace Outbrain;

    use Outbrain\OutbrainStorage as Storage;

final class Outbrain
{
    private $storage;

    public function __construct()
    {
        $this->storage = new Storage();
    }

    public function hello ()
    {
        $config = new \EasySwoole\Mysqli\Config([
            'host' => 'database',
            'port' => 3306,
            'user' => 'root',
            'password' => 'password',
            'database' => 'test',
        ]);
        $client = new \EasySwoole\Mysqli\Client($config);
        $client->queryBuilder()->where('id', 1)->get('entities');
        return json_encode([
            'test' => $client->execBuilder()
        ]);
    }
}