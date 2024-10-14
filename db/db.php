<?php
// Import files
require_once __DIR__."/../classes/Category.php";
require_once __DIR__."/../classes/Product.php";
require_once __DIR__."/../classes/Food.php";
require_once __DIR__."/../classes/Toy.php";
require_once __DIR__."/../classes/Bed.php";


// Variables
$dogProduct = new Category("dog-logo.avif","Dog");
$catProduct = new Category("cat-logo.jpg","Cat");
$foodTypeName = "Food";
$toyTypeName = "Toy";
$bedTypeName = "Bed";

// Products List
$allProductsList =[
    new Food("https://img.freepik.com/free-photo/close-up-portrait-yorkshire-dog_23-2151779238.jpg?t=st=1728600121~exp=1728603721~hmac=992deefadb584110057642a8f407fc338036d133aea6113a82cd3d042643f23a&w=2000", "Premium Dog Food", $dogProduct, 10, 29.99, "this is a Food dog products", "sm", "Material", $foodTypeName),
    new Toy("https://img.freepik.com/free-photo/close-up-pet-accessories_23-2150960004.jpg?t=st=1728600157~exp=1728603757~hmac=234a3ef67855c80464a2460c29092b7eeef59f511505d83e5609c8aab06adb8d&w=1480", "Rubber Dog Toy",$dogProduct, 20, 9.99, "this is a Toy dog products", "md", "Material", $toyTypeName),
    new Bed("https://img.freepik.com/free-photo/high-angle-dog-laying-pillow-home_23-2149636196.jpg?t=st=1728600189~exp=1728603789~hmac=0e8aca3666733330dc5f076ce5df7b2e5cd516a3ce4a252743ec8b93d82687ba&w=1480", "Cozy Dog Bed",$dogProduct, 15 , 49.99, "this is a Bed dog products", "lg", "Material", $bedTypeName),
    new Product("http://img.freepik.com/free-photo/cocker-spaniel-plays-games-home_1303-27279.jpg?t=st=1728576610~exp=1728580210~hmac=be1f524d18d44883907862d9f5adb9425dd16d525518f91c4b7b587b08adab0d&w=740", "Interactive Dog Puzzle", $dogProduct, 10, 19.99, "this is a dog products"),
    new Food("http://img.freepik.com/free-photo/dog-snacks-shoes_23-2147828963.jpg?t=st=1728576644~exp=1728580244~hmac=a2a46338eaad4954c794bdd0360cd4b0f44e98095fe540a01e61613bd301ee90&w=1480", "Dog Treats Variety Pack",$dogProduct, 30, 14.99, "this is a Food dog products","md","Material", $foodTypeName),
    new Food("https://img.freepik.com/premium-photo/cat-food-graphs_23-2151537822.jpg?w=2000", "Gourmet Cat Food",$catProduct ,0, 24.99, "this is a food dog products", "sm","Matirial", $foodTypeName),
    new Toy("https://img.freepik.com/free-photo/adorable-cat-lifestyle_23-2151593312.jpg?t=st=1728577086~exp=1728580686~hmac=e6fe631f2df0b39fa7a1d586a0f32e487e2a0a785fe1c2db7b0aff73f0828107&w=740", "Plush Cat Toy",$catProduct, 10, 12.99, "this is a Toy cat products","sm","Material", $toyTypeName),
    new Bed("https://img.freepik.com/free-photo/adorable-cat-relaxing-indoors_23-2150692675.jpg?t=st=1728577126~exp=1728580726~hmac=eb1a6461217975fef2e9f8ad18ca91088257da9337c45afdb3ddafa7e990190a&w=740", "Luxury Cat Bed",$catProduct, 15, 39.99, "this is a Bed cat products","lg","Material", $bedTypeName),
    new Product("https://img.freepik.com/free-photo/owner-giving-cat-treat_23-2150798727.jpg?t=st=1728577195~exp=1728580795~hmac=53e63b36973769193aac3590efe2ed0a7173d37d3fe0db1fb3a3fa88ca165762&w=740", "Cat Scratching Post",$catProduct ,12, 34.99, "this is a cat products"),
    new Food("https://img.freepik.com/free-photo/close-up-dog-treats_23-2150959971.jpg?t=st=1728577221~exp=1728580821~hmac=28c4719cee881692b502939e8a153f1ef5c4b6c8cc4a943f724eb7a501e1764a&w=1480", "Natural Cat Treats",$catProduct,14, 15.99, "this is a food cat products","lg","Material", $foodTypeName),
    new Toy("https://img.freepik.com/free-photo/yorkshire-dog-playing-with-ball_23-2148529353.jpg?w=2000", "Dog Ball",$dogProduct, 50, 5.99,"this is a ball toy for dogs","sm","Rubber", $toyTypeName),
    new Food("https://img.freepik.com/free-photo/top-view-pet-food-bowl_23-2148529367.jpg?w=2000", "Organic Dog Food",$dogProduct, 25, 34.99,"this is a food dog products","md","Organic Material", $foodTypeName),
    new Bed("https://img.freepik.com/free-photo/small-dog-sleeping-bed_23-2148529365.jpg?w=2000", "Small Dog Bed",$dogProduct, 10, 59.99,"this is a small bed for dogs","sm","Cotton", $bedTypeName),
    new Product("https://img.freepik.com/free-photo/scratch-post-cat_23-2148529352.jpg?w=2000", "Cat Tower",$catProduct, 5, 79.99,"this is a cat tower product"),
    new Toy("https://img.freepik.com/free-photo/cat-playing-with-feather-toy_23-2148529374.jpg?w=2000", "Cat Feather Toy",$catProduct, 30, 6.99,"this is a feather toy for cats","sm","Feather", $toyTypeName),
    new Food("https://img.freepik.com/free-photo/pet-food-dry-in-bowl_23-2148529375.jpg?w=2000", "Grain-Free Dog Food",$dogProduct, 20, 24.99,"this is a grain-free dog food","md","Natural Ingredients", $foodTypeName),
    new Bed("https://img.freepik.com/free-photo/dog-bed-grey_23-2148529351.jpg?w=2000", "Grey Dog Bed",$dogProduct, 8, 49.99,"this is a bed for dogs","lg","Soft Fabric", $bedTypeName),
    new Product("https://img.freepik.com/free-photo/cat-tree_23-2148529363.jpg?w=2000", "Cat Tree",$catProduct, 12, 99.99,"this is a tree for cats"),
    new Toy("https://img.freepik.com/free-photo/dog-playing-rope-toy_23-2148529350.jpg?w=2000", "Dog Rope Toy",$dogProduct, 40, 7.99,"this is a rope toy for dogs","md","Nylon", $toyTypeName),
    new Food("https://img.freepik.com/free-photo/cat-food-treats_23-2148529376.jpg?w=2000", "Cat Treats",$catProduct, 30, 12.99,"this is a food cat products","lg","Meat", $foodTypeName)
];

?>