<?php require "includes/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate's Degree - PPIU</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Khmer', 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: rgba(216, 216, 216, 0.49);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .main-content {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            flex: 1;
        }
        
        .header {
            text-align: center;
            margin-bottom: 80px;
            padding: 20px 0;
            border-bottom: 2px solid #f8b739;
        }
        
        h1, h2 {
            color: #003366;
        }
        
        h1 {
            font-size: 2.2rem;
            margin-bottom: 80px;
        }
        
        h2 {
            font-size: 1.8rem;
            margin: 30px 0 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid #ddd;
        }
        
        .degree-intro {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .faculty-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .faculty-name {
            font-weight: 600;
            color: #f8b739;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .program-list {
            list-style-type: none;
            padding-left: 20px;
        }
        
        .program-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 8px;
        }
        
        .program-list li:before {
            content: "~";
            position: absolute;
            left: 0;
            color: #f8b739;
            font-weight: bold;
        }
        
        .schedule-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .semester {
            margin-bottom: 25px;
        }
        
        .semester-title {
            font-weight: 600;
            color: #003366;
            margin-bottom: 10px;
        }
        
        .date-item {
            display: flex;
            margin-bottom: 8px;
        }
        
        .date-label {
            font-weight: 500;
            min-width: 150px;
        }
        
        .disclaimer {
            font-style: italic;
            color: #666;
            margin-top: 30px;
            font-size: 0.9rem;
        }
        
        /* Full-width footer container */
        .footer-container {
            width: 100%;
            margin-top: auto;
        }
        
        @media (max-width: 768px) {
            .main-content {
                padding: 15px;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .date-item {
                flex-direction: column;
            }
            
            .date-label {
                margin-bottom: 3px;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div class="header">
            <h1>ASSOCIATE'S DEGREE</h1>
            <h1>ថ្នាក់បរិញ្ញាបត្ររង</h1>
        </div>
        
        <div class="degree-intro">
            <p>សិស្សានុសិស្ស ដែលមានចំណូលចិត្ត និងបំណងប្រាថ្នាសិក្សាថ្នាក់បរិញ្ញាបត្ររងនៅសាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ អាចជ្រើសរើសជំនាញសិក្សារបស់ខ្លួន តាមមហាវិទ្យាល័យដូចខាងក្រោម៖</p>
            <p>Students who are interested in pursuing an Associate's Degree at Phnom Penh International University can choose their major according to the following faculties:</p>
        </div>
        
        <div class="faculty-section">
            <div class="faculty-name">មហាវិទ្យាល័យពាណិជ្ជសាស្ត្រ និងទេសចរណ៍ / Faculty of Business and Tourism</div>
            <ul class="program-list">
                <li>គណនេយ្យ / Accounting</li>
                <li>គ្រប់គ្រង / Management</li>
                <li>ទីផ្សារ / Marketing</li>
                <li>គ្រប់សណ្ឋាគារ-ទេសចរណ៍ / Hospitality and Tourism</li>
            </ul>
        </div>
        
        <div class="faculty-section">
            <div class="faculty-name">មហាវិទ្យាល័យនីតិសាស្ត្រ និងសេដ្ឋកិច្ច / Faculty of Law and Economics</div>
            <ul class="program-list">
                <li>ហិរញ្ញវត្ថុ-ធនាគារ / Finance and Banking</li>
                <li>អភិវឌ្ឍសេដ្ឋកិច្ច / Economic Development</li>
                <li>ច្បាប់ / Law</li>
            </ul>
        </div>
        
        <div class="faculty-section">
            <div class="faculty-name">មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងព័ត៌មានវិទ្យា / Faculty of Science and Information Technology</div>
            <ul class="program-list">
                <li>វិទ្យាសាស្ត្រកុំព្យូទ័រ / Computer Science</li>
            </ul>
        </div>
        
        <div class="faculty-section">
            <div class="faculty-name">មហាវិទ្យាល័យវិទ្យាសាស្ត្រអប់រំ / Faculty of Education Science</div>
            <ul class="program-list">
                <li>ភាសាអង់គ្លេស / English Language</li>
            </ul>
        </div>
        
        <div class="schedule-section">
            <h2>កាលបរិច្ឆេទចូលសិក្សា និងបញ្ចប់ឆមាសថ្នាក់បរិញ្ញាបត្ររង / Academic Schedule for Associate's Degree</h2>
            
            <div class="semester">
                <div class="semester-title">វគ្គសិក្សាថ្មី​​ ឆ្នាំសិក្សា​ 2019-2020 / New Semester, Academic Year 2019-2020</div>
                <div class="date-item">
                    <span class="date-label">ចូលសិក្សា / Start Date:</span>
                    <span>ថ្ងៃទី 0៤-១១-២០១៩ (ចូលរៀនលើកទី1) / November 04, 2019 (First Intake)</span>
                </div>
                <div class="date-item">
                    <span class="date-label">បញ្ចប់ឆមាស / End Date:</span>
                    <span>ថ្ងៃទី 0៩-0៣-២០២០ (ចូលរៀនលើកទី2) / March 09, 2020 (Second Intake)</span>
                </div>
            </div>
            
            <div class="semester">
                <div class="semester-title">ឆ្នាំទី ១ ឆមាសទី ១ ជំនាន់ទី ១៤ / Year 1, Semester 1, Batch 14</div>
                <div class="date-item">
                    <span class="date-label">ចូលសិក្សា / Start Date:</span>
                    <span>ថ្ងៃទី ០៥ ខែវិច្ឆិកា ឆ្នាំ២០១៨ / November 05, 2018</span>
                </div>
                <div class="date-item">
                    <span class="date-label">បញ្ចប់ឆមាស / End Date:</span>
                    <span>ថ្ងៃទី ៣១ ខែ មីនា ឆ្នាំ ២០១៩ / March 31, 2019</span>
                </div>
                <div class="date-item">
                    <span class="date-label">ប្រឡងបញ្ចប់ឆមាស / Examination:</span>
                    <span>ថ្ងៃទី០៦ ខែមីនា ដល់ថ្ងៃទី០៧ ខែមេសា ឆ្នាំ២០១៩ / March 06 to April 07, 2019</span>
                </div>
            </div>
            
            <div class="semester">
                <div class="semester-title">ឆ្នាំទី ១ ឆមាសទី ២ ជំនាន់ទី ១៤ / Year 1, Semester 2, Batch 14</div>
                <div class="date-item">
                    <span class="date-label">ចូលសិក្សា / Start Date:</span>
                    <span>ថ្ងៃទី ០៦ ខែឧសភា ឆ្នាំ២០១៩ / May 06, 2019</span>
                </div>
                <div class="date-item">
                    <span class="date-label">បញ្ចប់ឆមាស / End Date:</span>
                    <span>ថ្ងៃទី ២២ ខែកញ្ញា ឆ្នាំ ២០១៩ / September 22, 2019</span>
                </div>
                <div class="date-item">
                    <span class="date-label">ប្រឡងបញ្ចប់ឆមាស / Examination:</span>
                    <span>ថ្ងៃទី០៥ ខែមីនា ដល់ថ្ងៃទី០៦ ខែតុលា ឆ្នាំ២០១៩ / March 05 to October 06, 2019</span>
                </div>
            </div>
            
            <div class="disclaimer">
                * PPIU is reserved the rights to change the dates, if required. / សាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ រក្សាសិទ្ធិក្នុងការផ្លាស់ប្តូរកាលបរិច្ឆេទ បើមានតម្រូវការ។
            </div>
        </div>
    </div> <!-- End of main-content -->
    
    <!-- Full-width footer container -->
    <div class="footer-container">
        <?php require "includes/footer.php"; ?>
    </div>
</body>
</html>