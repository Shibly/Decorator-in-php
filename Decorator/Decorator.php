<?php
namespace Decorator;
use AbstractClasses;

abstract class Decorator extends \AbstractClasses\libraryItem
{
    protected $libraryItem;

    public function __construct(\AbstractClasses\libraryItem $libraryItem)
    {
        $this->libraryItem = $libraryItem;
    }

    public function display()
    {
        $this->libraryItem->display();
    }

}
