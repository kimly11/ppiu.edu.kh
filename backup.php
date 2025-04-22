<?php 
session_start();
require "includes/header.php"; 
require "config/config.php"; 

// Language switching logic
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en'; // Default language
}
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$current_lang = $_SESSION['lang'];

$products = $conn->query("SELECT * FROM products WHERE type='drink'");
$products->execute();
$allProducts = $products->fetchAll(PDO::FETCH_OBJ);

$reviews = $conn->query("SELECT * FROM reviews");
$reviews->execute();
$allReviews = $reviews->fetchAll(PDO::FETCH_OBJ);

// Translation arrays
$translations = [
    'en' => [
        'welcome' => 'Welcome',
        'our_story' => 'Our Story',
        'news' => 'News',
        'show' => 'Show',
        'gold' => 'Gold',
        'about_text' => "Phnom Penh International University (PPIU) was established in 2002 as 'ASEAN University' under the initiative of Vice-Chancellor Mrs. Tep Kolap, a Cambodian intellectual with high spirit, determination, and ideals for the higher education of future Cambodian generations. The Vice-Chancellor has dedicated her physical strength, mind, honor, and personal wealth to build and expand the university, growing from just 1,050 students to 7,000 students, and from rented facilities to constructing physical infrastructure that provides comfort and a good learning environment for students."
    ],
    'kh' => [
        'welcome' => 'សូមស្វាគមន៍',
        'our_story' => 'រឿងរ៉ាវរបស់យើង',
        'news' => 'ព័ត៌មាន',
        'show' => 'បង្ហាញ',
        'gold' => 'គោលបំណង',
        'about_text' => "សាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ (ស.ភ.ព.អ) បានចាប់បដិសន្ធិនាឆ្នាំ២០០២ ជា 'សាកលវិទ្យាល័យអាស៊ាន' ក្រោមការផ្តួចផ្តើមរបស់សាកលវិទ្យាធិការ លោកស្រី ទេព កូលាប ដែលជាបញ្ញវន្តខ្មែរមួយរូបប្រកបដោយស្មារតី ឆន្ទៈ និង ឧត្តមគតិខ្ពង់ខ្ពស់ និងមោះមុត សម្រាប់វិស័យឧត្តមសិក្សា​ របស់កុលបុត្រ កុលធីតាកម្ពុជាជំនាន់ក្រោយ។ លោកស្រីសាកលវិទ្យាធិការ បានបូជាទាំងកម្លាំងកាយ ចិត្ត កិត្តិយស និងទ្រព្យធនផ្ទាល់ខ្លួន ដើម្បីកសាង និង ពង្រីកសាកលវិទ្យាល័យ ចាប់តាំងពីមាននិស្សិតត្រឹមតែ ១០៥០នាក់ រហូតដល់ ៧០០០នាក់ ពីជួលមូលដ្ឋានរូបវន្តរហូតដល់កសាងបានហេដ្ឋារចនាសម័្ពន្ធរូបវន្តដែលប្រកបដោយផាសុកភាព មានបរិដ្ឋានល្អសម្រាប់ការសិក្សារបស់និស្សិត។"
    ]
];
?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(images/about3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading"><?php echo $translations[$current_lang]['welcome']; ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url(images/bg1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading"><?php echo $translations[$current_lang]['welcome']; ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('images/about55.jpg'); background-size: contain; background-repeat: no-repeat; background-position: center; height: 100vh; position: relative;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <!-- Content can be added here if needed -->
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(images/about4.jpg);"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate">
                <h2 class="mb-4"><?php echo $translations[$current_lang]['our_story']; ?></h2>
            </div>
            <div>
                <p><?php echo $translations[$current_lang]['about_text']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading"><?php echo $translations[$current_lang]['news']; ?></span>
            </div>
        </div>
        <div class="row">
            <?php foreach($allProducts as $prodcut) : ?>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a target="_blank" href="allnews.php?id=<?php echo $prodcut->id; ?>" class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $prodcut->image; ?>);"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#"><?php echo $prodcut->name; ?></a></h3>
                            <p><?php echo $prodcut->description; ?></p>
                            <p class="price"><span>$<?php echo $prodcut->price; ?></span></p>
                            <p><a target="_blank" href="allnews.php?id=<?php echo $prodcut->id; ?>" class="btn btn-primary btn-outline-primary"><?php echo $translations[$current_lang]['show']; ?></a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/bg1.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/bg3.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/bg3.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/bg1.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/about3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading"><?php echo $translations[$current_lang]['gold']; ?></span>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row d-flex no-gutters justify-content-center">
            <?php foreach($allReviews as $review) : ?>
                <div class="col-md-3 align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;<?php echo $review->review; ?>.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="name align-self-center"><?php echo $review->username; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require "includes/footer.php"; ?>