<?php

namespace Eva\EvaLivenews\Events;

use Eva\EvaEngine\Exception;
use SocketIO\Emitter;
use Eva\EvaLivenews\Models\NewsManager;

class LivenewsListener
{
    public function afterCreate($event, $news)
    {
        if(!$news->id) {
            return;
        }
        $config = $news->getDI()->getConfig();
        if(!$config->livenews->broadcastEnable) {
            return;        
        }
        $emitter = new Emitter(array(
            'host' => $config->livenews->socketIoRedis->host,
            'port' => $config->livenews->socketIoRedis->port, 
        ));
        $emitter->emit('livenews:create', json_encode($news->dump(
            NewsManager::$defaultDump
        )));
    }
}
