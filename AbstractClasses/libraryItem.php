<?php
namespace AbstractClasses;

abstract class libraryItem
{
    public $_numCopies;


    public function setNumCopies($copies)
    {
        $this->_numCopies = $copies;
    }

    public function getNumCopies()
    {
        return $this->_numCopies;
    }

    public abstract function display();
}