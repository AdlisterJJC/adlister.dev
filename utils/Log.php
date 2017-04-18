<?php

class Log {
    
    public $filename;

    public function __construct($prefix = "log") {
        $this ->filename = $prefix . "-" . date("Y-m-d") . ".log";
        $this ->handle = fopen($this->filename, 'a');

    }

    public function logMessage($logLevel, $message){

    
        $hours = date("Y-m-d") . " " . date("h:i:s") . PHP_EOL;
        
        $handle = fopen($this->filename, 'a');
    
        fwrite($handle, $hours . $logLevel . " " . $message);

    }

    public function info($message){
        $this->logMessage("INFO", $message . PHP_EOL);
    }
    
    public function error($message){
        $this->logMessage("ERROR", $message . PHP_EOL);
    }

    public function __destruct() {
        fclose($this ->handle);
    }

}