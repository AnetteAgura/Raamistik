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
            $url = rtrim($url, '/');
            $url = htmlentities($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            echo $url;
        }
    }
} // class end