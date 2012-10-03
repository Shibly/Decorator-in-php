<?php
namespace Decorator;
use AbstractClasses;

class Borrowable extends \Decorator\Decorator
{
    protected $list = array();

    public function __construct(\AbstractClasses\libraryItem $libraryItem)
    {
        parent::__construct($libraryItem);
    }

    public function borrowItem($name)
    {
        array_push($this->list, $name);
        $this->libraryItem->_numCopies--;
    }

    public function returnItem($name)
    {
        unset($this->list[$name]);
        $this->libraryItem->_numCopies++;
    }

    public function display()
    {
        parent::display();
        foreach ($this->list as $borrower) {
            echo $borrower;
        }
    }
}
