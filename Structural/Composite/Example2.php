<?php
/**
 * One of the most important structural patterns is the Composite one: its goal is managing a hierarchy of objects where
 * both leaf objects and composition of other objects conform to a common interface. This hierarchy is usually constituted
 * by part-whole relationships (often composition in the strict sense or aggregation), and it can be viewed as a tree.
 * The power of the Composite pattern resides in a Client which refers only to a Component interface, the common abstraction
 * between all kinds of tree elements, and it is  oblivious to changes in the underlying structure. The Client is not even aware
 * of the hierarchical structure existence and it is passed a reference to the tree head.
 * Meanwhile, the Composite responsibility is to build on its Component children's operations, and propagate their calls towards
 * the bottom of the hierarchical graph until they reach Leafs.
 *
 * Participants:
 * Client: sends message to the head Component.
 * Component: declares the interface that various parts of the graph should respect.
 * Leaf: concrete class that has no children.
 * Composite: concrete class that composes other Components (no pun intended).
 * The code sample shows a Composite pattern in action to duplicate a small subset of Javascript's Document Object Model.
 */

/**
 * Component interface.
 * The Client depends only on this abstraction, whatever graph is built using
 * the specializations.
 */
interface HtmlElement
{
    /**
     * @return string   representation
     */
    public function __toString();
}

/**
 * Leaf sample implementation.
 * Represents an <h1> element.
 */
class H1 implements HtmlElement
{
    private $_text;

    public function __construct($text)
    {
        $this->_text = $text;
    }

    public function __toString()
    {
        return "<h1>{$this->_text}</h1>";
    }
}

/**
 * Leaf sample implementation.
 * Represents a <p> element.
 */
class P implements HtmlElement
{
    private $_text;

    public function __construct($text)
    {
        $this->_text = $text;
    }

    public function __toString()
    {
        return "<p>{$this->_text}</p>";
    }
}

/**
 * A Composite implementation, which accepts as children generic Components.
 * These children may be H1, P or even other Divs.
 */
class Div implements HtmlElement
{
    private $_children = array();

    public function addChild(HtmlElement $element)
    {
        $this->_children[] = $element;
    }

    public function __toString()
    {
        $html = "<div>\n";
        foreach ($this->_children as $child) {
            //call __toString()
            $childRepresentation = (string)$child;
            $childRepresentation = str_replace("\n", "\n    ", $childRepresentation);
            $html .= '    ' . $childRepresentation . "\n";
        }
        $html .= "</div>";
        return $html;
    }
}

// Client code
$div = new Div();
$div->addChild(new H1('Title'));
$div->addChild(new P('Lorem ipsum...'));
$sub = new Div();
$sub->addChild(new P('Dolor sit amet...'));
$div->addChild($sub);
echo $div, "\n";