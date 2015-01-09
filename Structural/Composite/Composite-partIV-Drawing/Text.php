<?php
class Text extends IComponent
{
    private $x;
    private $y;
    private $fontFam;
    private $fontSiz;
    private $fontClr;
    private $text;
    
    public function __construct($tx,$ty,$ff,$fs,$fclr,$msg)
    {
        $this->x=$tx;
        $this->y=$ty;
        $this->fontFam=$ff;
        $this->fontSiz=$fs;
        $this->fontClr=$fclr;
        $this->text=$msg;
    }
    
    /* None of this batch of methods are used by the text leaf */
    /* However, in order to correctly implement the interface */
    /* you need some kind of implementation */
    public function add(IComponent $comOn){}
    public function remove(IComponent $comGone){}
    public function getChild($int){}
    protected function getComposite() {}
    
    /* Format text object */
    public function draw()
    {  
        echo "<text x='$this->x' y='$this->y' font-family='$this->fontFam' font-size='$this->fontSiz' fill='$this->fontClr' >";
        echo $this->text;
        echo "</text>";
    }
}
?>
