<?php
interface ILogger
{
    public function log($msg);

    public function logByDate($msg);
}

class Logger
{
    public $level;
}

$logger = new class extends Logger implements ILogger
{
    public function log($msg)
    {
        echo '('. $this->level .') ' . $msg . '<hr>';
    }

    public function logByDate($msg)
    {
        echo '['.date('m/d/Y').']'. '(' . $this->level . ') ' . $msg;
    }
};

$logger->level = 'Error';
$logger->log('test');

$logger->level = 'Info';
$logger->logByDate('Ed Added this in.');