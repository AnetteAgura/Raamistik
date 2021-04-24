<?php


class Page
{

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
        echo 'db is connected';
    }
}