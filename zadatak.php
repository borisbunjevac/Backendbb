<?php
class a
{
   public $prop1 = "I'm a class property!";

    public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  private function getProperty()
  {
      return $this->prop1 . "<br />";
  }
  public function callPrivate()
  {
      return $this->getProperty();
  }
}
class b extends a
{
   
  public function newMethod()
  {
      echo "From a new method in " . __CLASS__ . ".<br />";
  }
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
// Create an object
$obj = new a;
 
// Create a new object
$newobj = new b;

// Call the private method from within a public method
echo $obj->callPrivate();
 
// Output the object as a string
echo $newobj->newMethod();
 
// Use a method from the parent class
echo $newobj->setProperty("I'm a new property value!"); // Set a new one

// Read it out again to show the change
echo $newobj->getProperty();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
