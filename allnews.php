<?php 
require "includes/header.php"; 

try {
    // Define constants
    define("HOST", "localhost");
    define("DBNAME", "ppiu_edu_kh");
    define("USER", "root");
    define("PASS", "");

    // Create PDO connection
    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $Exception) { 
    die("Database connection failed: " . $Exception->getMessage());
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch single product using prepared statement
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $singleProduct = $stmt->fetch(PDO::FETCH_OBJ);

    if (!$singleProduct) {
        header("Location: " . APPURL . "/not.php");
        exit();
    }

    // Fetch related products
    $stmt = $conn->prepare("SELECT * FROM products WHERE type = :type AND id != :id");
    $stmt->execute(['type' => $singleProduct->type, 'id' => $singleProduct->id]);
    $allRelatedProducts = $stmt->fetchAll(PDO::FETCH_OBJ);

    // Add to cart logic
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        if (!isset($_SESSION['user_id'])) {
            echo "<script>alert('Please log in to add items to the cart');</script>";
        } else {
            $insert_cart = $conn->prepare("INSERT INTO cart (name, image, price, pro_id, description, quantity, user_id) 
                                           VALUES (:name, :image, :price, :pro_id, :description, :quantity, :user_id)");
            $insert_cart->execute([
                ":name" => $_POST['name'],
                ":image" => $_POST['image'],
                ":price" => $_POST['price'],
                ":pro_id" => $_POST['pro_id'],
                ":description" => $_POST['description'],
                ":quantity" => $_POST['quantity'],
                ":user_id" => $_SESSION['user_id']
            ]);
            echo "<script>alert('Added to cart successfully');</script>";
        }
    }

    // Validate cart item existence
    $rowCount = 0;
    if (isset($_SESSION['user_id'])) {
        $stmt = $conn->prepare("SELECT COUNT(*) FROM cart WHERE pro_id = :id AND user_id = :user_id");
        $stmt->execute(['id' => $id, 'user_id' => $_SESSION['user_id']]);
        $rowCount = $stmt->fetchColumn();
    }
} else {
    header("Location: " . APPURL . "/not.php");
    exit();
}
?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(<?php echo APPURL; ?>/images/bg2.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">News Detail</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span> <span>News Detail</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="h-50 images/menu-2.jpg" class="image-popup">
                    <img src="<?php echo IMAGEPRODUCTS; ?>/<?php echo $singleProduct->image; ?>" class="img-fluid" alt="Product Image">
                </a>
            </div>

            <form method="post">
                <input type="hidden" name="name" value="<?php echo $singleProduct->name; ?>">
                <input type="hidden" name="image" value="<?php echo $singleProduct->image; ?>">
                <input type="hidden" name="price" value="<?php echo $singleProduct->price; ?>">
                <input type="hidden" name="pro_id" value="<?php echo $singleProduct->id; ?>">
                <input type="hidden" name="description" value="<?php echo $singleProduct->description; ?>">
                <input type="hidden" name="quantity" value="1">

                <?php if(isset($_SESSION['user_id'])) : ?>
                    <?php if($rowCount > 0) : ?>
                        <button style="margin-top: -335px; margin-left: 632px; height: 65px;" class="btn btn-primary py-3 px-5" disabled>Added to Cart</button>
                    <?php else : ?>    
                        <button style="margin-top: -335px; margin-left: 632px; height: 65px;" name="submit" type="submit" class="btn btn-primary py-3 px-5">Add to Cart</button>
                    <?php endif; ?>
                <?php else : ?>    
                    <!-- <p style="margin-top: -335px; margin-left: 632px; height: 65px;">Login to add product to cart</p> -->
                <?php endif; ?>    
            </form>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Related News</h2>
                <p>Explore other products related to your choice.</p>
            </div>
        </div>
        <div class="row">
            <?php foreach($allRelatedProducts as $relatedProduct) : ?>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="<?php echo APPURL; ?>/allnews.php?id=<?php echo $relatedProduct->id; ?>" class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $relatedProduct->image; ?>);"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="<?php echo APPURL; ?>/allnews.php?id=<?php echo $relatedProduct->id; ?>"><?php echo $relatedProduct->name; ?></a></h3>
                            <p><?php echo $relatedProduct->description; ?></p>
                            <p class="price"><span>$<?php echo $relatedProduct->price; ?></span></p>
                            <p><a href="<?php echo APPURL; ?>/allnews.php?id=<?php echo $relatedProduct->id; ?>" class="btn btn-primary btn-outline-primary">Show</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require "includes/footer.php"; ?>
