<?php
class Product
{

    /*-----Public Variables That Will  Store An Items Value-----*/
    public $pname = "";
    public $iname = "";
    public $price = 0.00;


    public function setPname($name)
    {
        $this->pname = $name;
    }
    public function setIname($image)
    {
        # code...
        $this->iname = $image;
    }
    public function setPrice($ammount)
    {
        $this->price = $ammount;
    }

    public function __printIname()
    {
        # code...
    return $this->iname;
    }

    public function display($i)
    {
      $first= "<div class=\"all-33\"><figure class=\"ink-image bottom-space\">\n<img src=\"img/";
      //url name
      $second="\" class=\"imagequery\">\n<figcaption class=\"over-bottom\">";
      //caption
      $third="<button class=\"ink-button push-right red\"> <a href=\"fcart.php?id=";
      $fourth="\">Add To Cart</a></button></figcaption>\n</figure></div>";
      echo $first, $this->iname, $second, $this->pname, "\n$", $this->price, $third, $i, $fourth;
    }

    public function print_cart($i)
    {
      echo "<tr><td>", $this->pname,"</td><td class=\"align-left\">\$&ensp;", $this->price,
      "<button class=\"ink-button push-right red\"><a href=\"fcheckout.php?id=", $i,"\">remove</a></button></td></tr>";
    }


    public function print_final_cart()
    {
      echo "<li>",$this->pname, "&emsp;&emsp;&emsp;&emsp;&emsp;\$&ensp;",$this->price,"</li>";
    }
}












 ?>
