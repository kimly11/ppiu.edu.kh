<?php 
require "includes/header.php"; 
require "config/config.php"; 

$reviews = $conn->query("SELECT * FROM reviews");
$reviews->execute();
$allReviews = $reviews->fetchAll(PDO::FETCH_OBJ);
?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(images/bg_girl.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> About<span></span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">ប្រវត្តិសាកលវិទ្យាល័យ</h2>
            </div>
            <div>
                <p>សាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ (ស.ភ.ព.អ) បានចាប់បដិសន្ធិនាឆ្នាំ២០០២ ជា "សាកលវិទ្យាល័យអាស៊ាន" ក្រោមការផ្តួចផ្តើមរបស់សាកលវិទ្យាធិការ លោកស្រី ទេព កូលាប ដែលជាបញ្ញវន្តខ្មែរមួយរូបប្រកបដោយស្មារតី ឆន្ទៈ និង ឧត្តមគតិខ្ពង់ខ្ពស់ និងមោះមុត សម្រាប់វិស័យឧត្តមសិក្សា​ របស់កុលបុត្រ កុលធីតាកម្ពុជាជំនាន់ក្រោយ។ លោកស្រីសាកលវិទ្យាធិការ បានបូជាទាំងកម្លាំងកាយ ចិត្ត កិត្តិយស និងទ្រព្យធនផ្ទាល់ខ្លួន ដើម្បីកសាង និង ពង្រីកសាកលវិទ្យាល័យ ចាប់តាំងពីមាននិស្សិតត្រឹមតែ ១០៥០នាក់ រហូតដល់ ៧០០០នាក់ និងពីជួលមូលដ្ឋានរូបវន្តរហូតដល់កសាងបានហេដ្ឋារចនាសម័្ពន្ធរូបវន្តដែលប្រកបដោយផាសុកភាព មានបរិដ្ឋានល្អសម្រាប់ការសិក្សារបស់និស្សិត។</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading"></span>
                <p class="history-text">សាកលវិទ្យាល័យបានប្តូរឈ្មោះមកជា "សាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ -ស.ភ.ព.អ" (Phnom Penh International University - PPIU) នៅឆ្នាំ២០០៦ តាមអនុក្រឹត្យលេខ ១១១ អនក្រ. បក ចុះថ្ងៃទី ២៤ ខែតុលា ឆ្នាំ២០០៦ របស់រាជរដ្ឋាភិបាលកម្ពុជា និងក្រោមការគ្រប់គ្រងរបស់ក្រសួងអប់រំយុវជន និងកីឡា។</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row d-flex no-gutters justify-content-center">
            <?php foreach($allReviews as $review) : ?>
            <div class="col-md-3 align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;<?php echo htmlspecialchars($review->review); ?>.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="name align-self-center"><?php echo htmlspecialchars($review->username); ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="ftco-section goals-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <div class="heading-section text-center ftco-animate">
                    <h2 class="mb-4">គោលបំណង (Goals-what we must achieve to be successful?)</h2>
                    <p class="mb-4">ដើម្បីសម្រេចបាននូវចក្ខុវិស័យនិងបេសកកម្មខាងលើ PPIUនឹង៖</p>
                </div>
                <div class="goals-list">
                    <ol>
                        <li>ធ្វើបច្ចុប្បន្នភាពកម្មវិធីសិក្សា ដោយបញ្ជ្រាបបច្ចេកវិទ្យាឌីជីថលនិងការស្រាវជ្រាវ។</li>
                        <li>បង្កើនទំនាក់ទំនងជាមួយស្ថាប័ន សហគ្រាស អង្គការជាតិ-អន្តរជាតិ និងគ្រឹះស្ថានសិក្សា</li>
                        <li>ពង្រឹងសមត្ថភាពបុគ្គលិកអប់រំ (academic/non-academic) និងនិស្សិត រួមទាំងការ ប្រើប្រាស់បច្ចេកវិទ្យាឌីជីថល។</li>
                        <li>ថែរក្សា និងបន្តវប្បធម៌ការងារជាក្រុម។</li>
                        <li>បន្តថែរក្សាវប្បធម៌ស្រាវជ្រាវនិងធានាគុណភាព។</li>
                        <li>ធ្វើឲ្យប្រសើរឡើងសេវាបច្ចេកវិទ្យាព័ត៌មានវិទ្យា។</li>
                        <li>កែលម្អជាប្រចាំសេវាកម្មគាំទ្រការសិក្សា និងកិច្ចការរដ្ឋបាល។</li>
                        <li>ពង្រឹងអភិបាលកិច្ចល្អ និងហេដ្ឋារចនាសម្ព័ន្ធ។</li>
                        <li>បន្តកិត្តនាមសាកលវិទ្យាល័យ។</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require "includes/footer.php"; ?>