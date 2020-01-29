<?php
    namespace Outbrain;

final class Outbrain
{
    public function hello ()
    {
        return json_encode([
            'hello',
            'world',
        ]);
    }
}