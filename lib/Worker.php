<?php

namespace Amp;

class Worker {
    public $id;
    public $ipcClient;
    public $ipcReadWatcher;
    public $results;
    public $resultCodes;
    public $thread;
    public $task;
    public $promiseId;
    public $promise;
    public $stream;
    public $streamInjector;
    public $tasksExecuted = 0;
    public $lastStackedAt;
}
