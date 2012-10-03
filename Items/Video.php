<?php
namespace Items;
use AbstractClasses;

class Video extends \AbstractClasses\libraryItem
{
    private $director;
    private $title;
    private $runtime;

    public function __construct($director, $title, $runtime, $numCopies)
    {
        $this->director = $director;
        $this->runtime = $runtime;
        $this->title = $title;
        $this->_numCopies = $numCopies;
    }

    public function display()
    {
        echo $this->director;
        echo $this->title;
        echo $this->runtime;
        echo $this->getNumCopies();

    }

}
