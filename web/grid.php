
<div class="row valign-wrapper">
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

      public function display()
      {
        $first= "<figure class=\"ink-image bottom-space\">\n<img src=\"img/";
        //url name
        $second="\" class=\"imagequery\">\n<figcaption class=\"over-bottom\">";
        //caption
        $third="</figcaption>\n</figure>";
        echo $first, $this->iname, $second, $this->pname, "\n", $this->price;
      }
  }

  $proarr = array("Blue Shirt", "White Shirt", "Red Shirt", "Yellow Shirt", "Green Shirt", "Pink Shirt", "Orange Shirt", "Teal Shirt",
  "Black Shirt", "Grey Shirt", "Dolphin Shirt", "H B Shirt");
  $urlname = array("blue.jpg", "white.jpg", "red.jpg", "yellow.jpg", "green.jpg", "pink.jpg", "orange.jpg", "teal.jpg",
   "black.jpg", "grey.jpg", "dolphin.jpg", "honeybadger.jpg");
  $pricearr =array(10.99, 5.99, 8.99, 7.99, 8.99, 11.99, 34.99, 67.99, 98.99, 1.89, 30.89, 90.99);
  $lenproarr = count($proarr);
  //echo $lenproarr;
  $assignedproducts = [];

  for ($i=0; $i < $lenproarr; $i++) {
      $temp = new Product();
      $temp->setPname($proarr[$i]);
      $temp->setIname($urlname[$i]);
      $temp->setPrice($pricearr[$i]);
      $assignedproducts[] = $temp;
  }

  $lenofa = count($assignedproducts);
  $first = "<div class=\"col s3\"><div class=\"card black lighten-3 z-depth-2\">";
  $first2 = "<div class=\"card-image\"><img src=\"img/";
  //insert url
  $second = "\">";
  //insert product name
  $third= "</div><div class=\"card-content grey-text text-lighten-1\"><span class=\"card-title red-text\">";
  // add your text after
  $third2 ="</span><p>";
  $fourth = "</p></div><div class=\"card-action\"><a href=\"#\">add to cart";
  //This is a link
  $fifth = "</a></div></div></div>";
  for ($n=0; $n < $lenofa ; $n++) {
      echo $first, $first2.$assignedproducts[$n]->__printIname();
      echo $second;
      echo $third;
      print_r($assignedproducts[$n]->pname);
      echo $third2;
      echo "This Shirt is on sale for ";
      print_r($assignedproducts[$n]->price);
      echo $fourth, $fifth;
  }




 ?>

</div>
