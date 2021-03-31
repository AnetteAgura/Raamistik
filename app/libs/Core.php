<?php


class Core
{ // class begin
    // constructor

    // get URL data
    /**
     * Core constructor.
     */
    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            echo $url;
        }
    }
} // class end