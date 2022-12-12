<?php 

require_once __DIR__ . "/models/Product.php";


// DOG PRODUCTS
$hunter_stainless_bowl = new Bowl("Hunters Stainless Bowl", new Category("Dog"), "https://shop-cdn-m.mediazs.com/bilder/hunter/stainless/steel/food/bowl/2/400/26948_hunter_edelstahlnapf_hs_02_2.jpg", "Steel", 1.1 );

$u_bowl = new Bowl("U-Shaped Stand with Bowls", new Category("Dog"),"https://shop-cdn-m.mediazs.com/bilder/ushaped/dog/bowl/stand/with/stainless/steel/bowls/2/400/313525_u_hundebar_02_dsc9180_2.jpg", "Steel", 1.8);

$sheep_toy = new Toy("Trixie Sheep", new Category("Dog"), "https://shop-cdn-m.mediazs.com/bilder/trixie/sheep/dog/toy/2/140/27908_PLA_Trixie_Schaf_Hundespielzeug_ca__30_cm_Schaf_2.jpg", "Squeaker Toy", ["Whool", "Cotton", "Polyester"] );

$kong_ball = new Toy("Kong Jumbler Ball", new Category("Dog"), "https://shop-cdn-m.mediazs.com/bilder/kong/jumbler/ball/6/140/64496_PLA_KONG_Jumbler_Ball_ML_6.jpg", "Ball", ["rubber", "Polyester"]);


$greenwoods_dog_food = new Food("Greenwoods Dog Food", new Category("Dog"), "https://shop-cdn-m.mediazs.com/bilder/kg/greenwoods/dry/dog/food/special/price/6/400/958044_6.jpg", "Dry Food", "1.5 kg", ["Beef", "Lentils", "Potatoes", "Carrots"]);

$rosie_dog_food = new Food("Rosie's Farm Food", new Category("Dog"), "https://shop-cdn-m.mediazs.com/bilder/x/g/rosies/farm/wet/dog/food/free/0/400/96201_pla_rosie_sfarm_adult_venison_400g_0.jpg", "Wet Food", "12x400 gr", ["Chicken", "Turkey", "Carrots"]);


$trixie_natura_cabin = new Kennel("Trixie Natura Cabin", new Category("Dog"), "https://shop-cdn-m.mediazs.com/bilder/trixie/natura/log/cabin/with/porch/dog/kennel/1/140/106396_trixie_huette_lodge_mit_terrasse_hs_01_1.jpg", "Outdoor Kennel", "Wood", "82 x 100 x 90 cm");

$ferplast_dogvilla = new Kennel("Ferplast DogVilla", new Category("Dog"), "https://shop-cdn-m.mediazs.com/bilder/ferplast/dogvilla/plastic/dog/kennel/4/140/62249_pla_ferplastkunststoffhundeh_ttedogvilla_sizem_4.jpg", "Indoor Kennel", "Plastic", "90 x 72 x 65 cm");


//CAT PRODUCTS

$slip_proof_bowl = new Bowl("Slip-Proof Bowl", new Category("Cat"), "https://shop-cdn-m.mediazs.com/bilder/slipproof/cat/bowl/with/imprint/1/140/158154_katzennapf_1.jpg", "Steel", 0.4);

$trixie_ceramic_bowl = new Bowl("Trixie Ceramic Bowl", new Category("Cat"), "https://shop-cdn-m.mediazs.com/bilder/trixie/ceramic/cat/4/140/4706_PLA_Trixie_Keramiknapf_zweifarbig_4.jpg", "Ceramic", 0.3);

$mouse_toy = new Toy("Wild Mouse Toy", new Category("Cat"), "https://shop-cdn-m.mediazs.com/bilder/wild/mouse/cat/toy/with/sounds/and/led/eyes/7/140/67334_katzenspielzeug_wild_mouse_mit_sound_und_led_fg_2717_7.jpg", "Furry Toy", ["Whool", "Polyester"]);


$slim_treat_ball = new Toy("SlimCat Treat Ball", new Category("Cat"), "https://shop-cdn-m.mediazs.com/bilder/petsafe/slimcat/treat/ball/2/140/25084_PLA_radiosystems_Futterball_SlimCat_blau_2.jpg", "Ball", ["Rubber"]);


$wild_freedom_food = new Food("Wild Freedom Cat Food", new Category("Cat"), "https://shop-cdn-m.mediazs.com/bilder/g/wild/freedom/dry/cat/food/special/price/7/400/wildfreedom_america_400g_1000px_7.jpg", "Dry Food", "400gr",["Poultry", "Carrots"]);


$cosma_soup = new Food("Cosma Soup", new Category("Cat"), "https://shop-cdn-m.mediazs.com/bilder/x/g/cosma/soup/wet/cat/food/free/0/400/1_101377_pla_cosma_soup_mixbox_12x40g_0.jpg", "Wet Food", "20x40gr", ["Chicken", "Tuna", "Sweet Potatoes"]);

$brooklyn_snuggle_bed= new Kennel("Brooklyn Snuggle Bed", new Category("Cat"), "https://shop-cdn-m.mediazs.com/bilder/brooklyn/snuggle/bed/0/140/102097_pla_katzenbett_brooklyn_fg_7037_0.jpg", "Indoor", "Whool", "55x50 cm");

$pueblo_cat_den = new Kennel("Peublo Cat Den", new Category("Cat"), "https://shop-cdn-m.mediazs.com/bilder/pueblo/cat/den/2/140/24722_PLA_Katzenhaus_Pueblo_Mix4_809_17_2.jpg", "Indoor", "Wood", "56 x 26 x 42 cm");



// PRODUCTS ARRAY
$products_array = [$hunter_stainless_bowl, $u_bowl, $sheep_toy, $kong_ball, $greenwoods_dog_food, $rosie_dog_food, $trixie_natura_cabin, $ferplast_dogvilla, $slim_treat_ball, $trixie_ceramic_bowl, $mouse_toy, $slim_treat_ball, $wild_freedom_food, $cosma_soup, $brooklyn_snuggle_bed, $pueblo_cat_den];


?>