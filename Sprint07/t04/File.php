<?php
    class File {
        public function __construct($filename) {
            $this->filename = 'tmp/'.$filename;
        }
        public function write($content) {
            $file = fopen($this->filename, "a");
            fwrite($file, $content);
            fclose($file);
        }
        public function toList() {
            $file = fopen($this->filename, "r");
            if(filesize($this->filename) > 0)
                $content = fread($file, filesize($this->filename));
            else
                $content = "";
            fclose($file);
            return $content;
        }
    }
?>