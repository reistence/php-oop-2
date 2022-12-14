<?php
require_once __DIR__ . "/data.php";
require_once __DIR__ . "/models/User.php";
require_once __DIR__ . "/models/Registered_user.php";
require_once __DIR__ . "/models/Basket.php";
require_once __DIR__ . "/models/Credit_card.php";


//Guest user
// try{
//     $guest1 = new User(new Credit_card("12324523465", "10", "2018"));
//     $guest1->basket = new Basket;
//     $guest1->basket->add_product($hunter_stainless_bowl);
//     $guest1->basket->add_product($cosma_soup);

//     $guest1->basket->get_basket_total();
//     $guest1_total = $guest1->basket->get_basket_total();
//     $guest1->pay($guest1_total);

// } catch(Exception $err) {
//      echo "Error: " . $err->getMessage();
// }
// var_dump($guest1->pay($guest1_total));


//Registered User
try{
    $guest2 = new Registered_user(new Credit_card("98765432123456", "10", "2021"), "JohnDoe123", "johndoe@gmail.com");
    $guest2->set_discount();
    $guest2->set_password("xdtcfygukhljk");
    $guest2->basket = new Basket;
    $guest2->basket->add_product($hunter_stainless_bowl);
    $guest2->basket->add_product($hunter_stainless_bowl);
    $guest2->basket->get_basket_total();
    $guest2_total = $guest2->basket->get_basket_total();
    $guest2->pay($guest2_total);

} catch (Exception $err){
         echo "Error: " . $err->getMessage();

}

// var_dump($guest2->pay($guest2_total));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap - CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PetShop24</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Promo</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Cats</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Dogs</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
    </header>
    <div class="container">
        <h2>Products:</h2>
        <div class="wrapper flex-column">
             <div class="basket">
               <div><i class="fa-solid fa-cart-shopping"></i>:</div> 
                <ul class="d-flex gap-5 justify-start">

                <?php if (isset($guest2->basket)) {?>
                    <li>???<?php echo $guest2_total  ?></li>
                        
                 <?php } else{ ?>
                          <li> Empty </li>
                <?php } ?>
                </ul>
        </div>

        <div class="row row-cols-2  row-cols-md-3 my-1 g-5">
            <?php foreach ($products_array as $product) { ?>
                <div class="col">
                 <div class="card shadow" >
                    <img src="<?php echo $product->poster ?>" class="card-img-top" alt="<?php echo $product->name ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->name ?></h5>
                         <h6 class="card-subtitle mb-2 text-muted">
                            <?php if ($product->category->printCategory() === "Dog") {
                                echo '<i class="fa-solid fa-dog"></i>';
                             } else {
                                echo '<i class="fa-solid fa-cat"></i>';
                             };
                             ?>
                        </h6>
                          <h6 class="card-subtitle mb-2 text-muted"> <?php echo $product->product_kind ?> </h6>
                        <p class="card-text"> ??? <?php echo $product->get_price()?></p>

                        <?php if(get_class($product) === "Food") { ?>
                            <p class="card-text text-muted">Quantity: <?php echo $product->quantity?></p>
                            <p class="card-text text-muted">Ingredients: <?php echo $product->get_ingretients()?></p>
                        <?php }; ?>
                         <?php if(get_class($product) === "Toy"){?>
                            <p class="card-text text-muted">Kind: <?php echo $product->toy_kind?></p>
                            <p class="card-text text-muted">Materials: <?php echo $product->get_materials()?></p>
                         <?php };
                         if(get_class($product) === "Kennel"){?>
                             <p class="card-text text-muted">Kind: <?php echo $product->kennel_kind?></p>
                             <p class="card-text text-muted">Dimensions: <?php echo $product->dimensions_cm?></p>
                             <p class="card-text text-muted"> <?php echo $product->material?></p>
                         <?php };
                          if(get_class($product) === "Bowl") {?>
                             <p class="card-text text-muted">Material: <?php echo $product->material?></p>
                             <p class="card-text text-muted">Capacity: <?php echo $product->capacity_litre?>l</p>
                        <?php  }?>
                        
                        <a href="#" class="btn btn-success">Add to basket</a>
                    </div>
                </div>
            </div>
                <?php } ?>

        </div>
       
        </div>


    </div>
    
</body>
</html>