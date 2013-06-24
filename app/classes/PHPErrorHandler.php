<?php
class PHPErrorHandler {
    public static function handle($errortype, $errorstring, $errorfile, $errorline){
        global $config;

        if($config->production){
            error_log(date('Y-m-d h:i:s').'['. $errortype .']' . $errorstring .' in file' . $errorfile . 'on line' . $errorline, 3,$config->errorlog);
        }else{
            echo '['. $errortype .']' . $errorstring .' in file' . $errorfile . 'on line' . $errorline;
        }

    }
}
?>