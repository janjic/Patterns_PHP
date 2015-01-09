<?php
class Tablet implements IDevice
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
        $this->pageNow=<<<TABLET
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" type="text/css" href="bridge.css">
            <title>Tablet Bridge</title>
        </head>
        <body>
        <header><h2>$this->header</h2></header>
        <img src="tabletpix/$this->graphic" alt="Air" width="600" height="375">
        <p>$this->bodyText</p>
        </body>
        </html>
TABLET;
    return $this->pageNow;
    }
}
?>

