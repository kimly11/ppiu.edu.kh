<?php 
session_start();
require "includes/header.php"; 
require "config/config.php"; 

// Language switching logic
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'kh'; // Default to Khmer
}
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$current_lang = $_SESSION['lang'];

$reviews = $conn->query("SELECT * FROM reviews");
$reviews->execute();
$allReviews = $reviews->fetchAll(PDO::FETCH_OBJ);

// Translation arrays
$translations = [
    'en' => [
        'about_us' => 'About Us',
        'home' => 'Home',
        'history' => 'University History',
        'goals' => 'Goals (what we must achieve to be successful)',
        'goals_intro' => 'To achieve the above vision and mission, PPIU will:',
        'goals_list' => [
            'Update curriculum by integrating digital technology and research.',
            'Enhance connections with institutions, businesses, national-international organizations, and educational establishments.',
            'Strengthen the capacity of educational staff (academic/non-academic) and students, including the use of digital technology.',
            'Maintain and continue teamwork culture.',
            'Continue research culture and ensure quality.',
            'Improve information technology services.',
            'Continuously improve learning support services and administrative work.',
            'Strengthen good governance and infrastructure.',
            'Continue the university\'s reputation.'
        ],
        'history_text' => 'The university was renamed to "Phnom Penh International University - PPIU" in 2006 according to Sub-Decree No. 111 dated October 24, 2006 of the Royal Government of Cambodia and under the management of the Ministry of Education, Youth and Sports.',
        'about_text' => 'Phnom Penh International University (PPIU) was established in 2002 as "ASEAN University" under the initiative of Vice-Chancellor Mrs. Tep Kolap, a Cambodian intellectual with high spirit, determination, and ideals for the higher education of future Cambodian generations. The Vice-Chancellor has dedicated her physical strength, mind, honor, and personal wealth to build and expand the university, growing from just 1,050 students to 7,000 students, and from rented facilities to constructing physical infrastructure that provides comfort and a good learning environment for students.'
    ],
    'kh' => [
        'about_us' => 'អំពីយើង',
        'home' => 'ទំព័រដើម',
        'history' => 'ប្រវត្តិសាកលវិទ្យាល័យ',
        'goals' => 'គោលបំណង (Goals-what we must achieve to be successful?)',
        'goals_intro' => 'ដើម្បីសម្រេចបាននូវចក្ខុវិស័យនិងបេសកកម្មខាងលើ PPIUនឹង៖',
        'goals_list' => [
            'ធ្វើបច្ចុប្បន្នភាពកម្មវិធីសិក្សា ដោយបញ្ជ្រាបបច្ចេកវិទ្យាឌីជីថលនិងការស្រាវជ្រាវ។',
            'បង្កើនទំនាក់ទំនងជាមួយស្ថាប័ន សហគ្រាស អង្គការជាតិ-អន្តរជាតិ និងគ្រឹះស្ថានសិក្សា',
            'ពង្រឹងសមត្ថភាពបុគ្គលិកអប់រំ (academic/non-academic) និងនិស្សិត រួមទាំងការ ប្រើប្រាស់បច្ចេកវិទ្យាឌីជីថល។',
            'ថែរក្សា និងបន្តវប្បធម៌ការងារជាក្រុម។',
            'បន្តថែរក្សាវប្បធម៌ស្រាវជ្រាវនិងធានាគុណភាព។',
            'ធ្វើឲ្យប្រសើរឡើងសេវាបច្ចេកវិទ្យាព័ត៌មានវិទ្យា។',
            'កែលម្អជាប្រចាំសេវាកម្មគាំទ្រការសិក្សា និងកិច្ចការរដ្ឋបាល។',
            'ពង្រឹងអភិបាលកិច្ចល្អ និងហេដ្ឋារចនាសម្ព័ន្ធ។',
            'បន្តកិត្តនាមសាកលវិទ្យាល័យ។'
        ],
        'history_text' => 'សាកលវិទ្យាល័យបានប្តូរឈ្មោះមកជា "សាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ -ស.ភ.ព.អ" (Phnom Penh International University - PPIU) នៅឆ្នាំ២០០៦ តាមអនុក្រឹត្យលេខ ១១១ អនក្រ. បក ចុះថ្ងៃទី ២៤ ខែតុលា ឆ្នាំ២០០៦ របស់រាជរដ្ឋាភិបាលកម្ពុជា និងក្រោមការគ្រប់គ្រងរបស់ក្រសួងអប់រំយុវជន និងកីឡា។',
        'about_text' => 'សាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ (ស.ភ.ព.អ) បានចាប់បដិសន្ធិនាឆ្នាំ២០០២ ជា "សាកលវិទ្យាល័យអាស៊ាន" ក្រោមការផ្តួចផ្តើមរបស់សាកលវិទ្យាធិការ លោកស្រី ទេព កូលាប ដែលជាបញ្ញវន្តខ្មែរមួយរូបប្រកបដោយស្មារតី ឆន្ទៈ និង ឧត្តមគតិខ្ពង់ខ្ពស់ និងមោះមុត សម្រាប់វិស័យឧត្តមសិក្សា​ របស់កុលបុត្រ កុលធីតាកម្ពុជាជំនាន់ក្រោយ។ លោកស្រីសាកលវិទ្យាធិការ បានបូជាទាំងកម្លាំងកាយ ចិត្ត កិត្តិយស និងទ្រព្យធនផ្ទាល់ខ្លួន ដើម្បីកសាង និង ពង្រីកសាកលវិទ្យាល័យ ចាប់តាំងពីមាននិស្សិតត្រឹមតែ ១០៥០នាក់ រហូតដល់ ៧០០០នាក់ និងពីជួលមូលដ្ឋានរូបវន្តរហូតដល់កសាងបានហេដ្ឋារចនាសម័្ពន្ធរូបវន្តដែលប្រកបដោយផាសុកភាព មានបរិដ្ឋានល្អសម្រាប់ការសិក្សារបស់និស្សិត។'
    ]
];
?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(images/about3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread"><?php echo $translations[$current_lang]['about_us']; ?></h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php"><?php echo $translations[$current_lang]['home']; ?></a></span> <?php echo $translations[$current_lang]['about_us']; ?><span></span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(images/about3.jpg);"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate">
                <h2 class="mb-4"><?php echo $translations[$current_lang]['history']; ?></h2>
            </div>
            <div>
                <p><?php echo $translations[$current_lang]['about_text']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <p class="history-text"><?php echo $translations[$current_lang]['history_text']; ?></p>
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
                    <h2 class="mb-4"><?php echo $translations[$current_lang]['goals']; ?></h2>
                    <p class="mb-4"><?php echo $translations[$current_lang]['goals_intro']; ?></p>
                </div>
                <div class="goals-list">
                    <ol>
                        <?php foreach($translations[$current_lang]['goals_list'] as $goal): ?>
                            <li><?php echo $goal; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require "includes/footer.php"; ?>