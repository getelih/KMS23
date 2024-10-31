<?php
//code author

class Job {
    public function task($logger){
        for($i=0;$i<10;$i++) {
            $logger= new ConsoleLogger();
            $logger->log("Task $i complete!");
        }

    }
}
class ConsoleLogger {
    public function log($message) {
        echo $message . "\n";
    }
}



// code user
class FileLogger {
    public function log($message){
        $file = fopen('./log.txt', 'a');
        fwrite($file, $message. "\n");
        fclose($file);
    }
}
$job = new Job();
$logger = new ConsoleLogger();
$job->task($logger);