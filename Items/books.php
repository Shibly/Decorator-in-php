<?php
namespace Items;
use AbstractClasses;

class books extends \AbstractClasses\libraryItem
{

    private $author;
    private $title;

    public function __construct($author, $title, $numCopies)
    {
        $this->author = $author;
        $this->title = $title;
        $this->_numCopies = $numCopies;

    }

    public function display()
    {
        echo("\nAuthor ------ " . $this->author);
        echo "<br>";
        echo("\nTitle ------ " . $this->title);
        echo $this->getNumCopies();
    }
}
