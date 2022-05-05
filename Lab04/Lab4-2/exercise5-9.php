<?php
    class Page {
        private $page;
        private $title;
        private $year;
        private $copyright;
        private $content;
        
        function __construct($page, $title, $year, $copyright) {
            $this->page = $page;
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
        }
        
        private function addHeader() {
            print "<html><head><title> $this->title </title></head> <body>";
        }
        
        public function addContent($content) {
            if(empty($this->page) || !isset($this->page)) {
                $this->content = $content;
            }
            else {
                $this->content .= "<br> " . $content;
            }
        }
        
        private function addFooter() {
            print "<footer>"
            . "<p>Page: $this->page <br> Year: $this->year <br> Copyright: $this->copyright </p>"
            . "</footer>"
            . "</body>"
            . "</html>";
        }
        
        public function get() {
            $this->addHeader();
            print $this->content;
            $this->addFooter();
        }
    }
?>  