<?php
class Desktop implements IDevice
{
    private $page;
    private $header;
    private $graphic;
    private $bodyText;
    
    public $pageNow;
    function buildDevice($head,$image,$text)
    {
        $this->header=$head;
        $this->graphic=$image;
        $this->bodyText=$text;
        //Begin heredoc string
        $this->pageNow=<<<DESKTOP
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" type="text/css" href="bridge.css">
            <title>Desktop Bridge</title>
        </head>
        <body>
        <header><h2>$this->header</h2></header>
        <img src="desktoppix/$this->graphic" alt="Air" width="800" height="500">
        <p>$this->bodyText</p>
        </body>
        </html>
DESKTOP;
    return $this->pageNow;
    }
}
