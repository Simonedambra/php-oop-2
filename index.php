<?php
require_once __DIR__ ."/src/Gatti.php";
require_once __DIR__ ."/src/Cani.php";
class Prodotti{

private array $cibo;
private array $cucce;
private array $giochi;
private string $icon="";

 public function __construct(array $cibo,array $cucce,array $giochi,string $icon){
 {
    $this->cibo = $cibo;
    $this->cucce = $cucce;
    $this->giochi = $giochi;
    $this->icon = $icon;
    
 }
}

public function getCibo(): array
{
    return $this->cibo;
}
public function getCucce(): array
{
    return $this->cucce;
}

public function getGiochi(): array
{
    return $this->giochi;
}

public function getIcon(): string
{
    return $this->icon;
}
public function setCibo(array $cibo):void
{
   $this->cibo = $cibo;
}
public function setCucce(array $cucce):void
{
    $this->cucce = $cucce;
}
public function setGiochi(array $giochi):void
{
   $this->giochi = $giochi;
}
public function setIcon(string $icon):void
{
   $this->icon = $icon;
}










 }
 
 
function toString(array $array)  {
    foreach($array as $key => $value){
        echo $value,"<br>"; 
        
    }
    
}
 $DogProd= new cani(["crocchette","umido"],["cuccia large","cuccia medium","cuccia small"],["osso","corda","palla"],'<i class="fa-solid fa-dog"></i>');
 $CatProd= new Gatti(["crocchette","umido","pesce"],["cuccia medium","cuccia small"],["gomitolo","topolini"],'<i class="fa-solid fa-cat"></i>');

$products=[$DogProd,$CatProd];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop shop</title>

<!-- bs -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


 </head>
 <body>

<div class="container-fluid d-flex justify-content-center"><h1>Prodotti</h1> </div>
 <div class="container gap-5 d-flex justify-content-center">
    <?php foreach($products as $prod): ?>
        <div class="card" style="width: 18rem;">
        
            <div class="card-body">
                <h5 class="card-title">
            </h5>
                <p>

            <h5>Cibo:</h5>
            <?php echo toString($prod->getCibo());?>
            <h5>Cucce:</h5>
            <?php echo toString($prod->getCucce());?>
            <h5>Giochi:</h5>
            <?php echo toString($prod->getGiochi());?>
            
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
 </body>
 </html>