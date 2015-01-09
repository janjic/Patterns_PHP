<?php
class Phone implements IDevice
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
        $this->pageNow=<<<PHONE
        <html>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Phone Bridge</title>
        <link rel="stylesheet" href="themes/Bridge.min.css" />
        <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
        </head>
        <body>
        <div data-role="page" data-theme="a">
          <div data-role="header" data-position="inline" data-theme="a">
            <h2>$this->header</h2>
          </div>
          <div role="main" class="ui-content" data-theme="a"> <img src="phonepix/$this->graphic" alt="Air" width="300" height="188">
            <p>$this->bodyText</p>
          </div>
        </div>
        </body>
        </html>
PHONE;
    return $this->pageNow;
    }
}
?>

