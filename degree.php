<?php require "includes/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional/Short Courses - PPIU</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #000;
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 0, 0.25);
        }
        
        /* Main content container */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .course-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 3px solid rgb(27, 42, 58);
            margin-top: 150px;
        }
        
        .course-header h1 {
            color: rgb(220, 227, 233);
            font-size: 32px;
            margin-bottom: 10px;
        }
        
        .course-container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .course-section {
            margin-bottom: 40px;
        }
        
        .course-section h2 {
            color: #2980b9;
            border-left: 4px solid #3498db;
            padding-left: 15px;
            margin-bottom: 20px;
        }
        
        .course-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .course-item {
            background-color: #e8f4fc;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #3498db;
            transition: transform 0.3s ease;
        }
        
        .course-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .contact-note {
            text-align: center;
            font-style: italic;
            margin-top: 30px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        
        /* Full width footer wrapper */
        .footer-wrapper {
            width: 100%;
            /* Add your footer background color here */
            background-color: #2c3e50;
        }
        
        @media (max-width: 768px) {
            .course-list {
                grid-template-columns: 1fr;
            }
            
            .course-header h1 {
                font-size: 28px;
            }
            
            .main-content {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Main content area (centered) -->
    <div class="main-content">
        <div class="course-header">
            <h1>PROFESSIONAL / SHORT COURSE</h1>
        </div>
        
        <div class="course-container">
            <div class="course-section">
                <p>For those who are interested and wished to pursue his/her professional/short course(s) within short, medium, and long period, PPIU is providing him/her the following choices of fields as below:</p>
                
                <div class="course-list">
                    <div class="course-item">Customer Service Supervisor</div>
                    <div class="course-item">Front Office Service</div>
                    <div class="course-item">Tax Statement</div>
                    <div class="course-item">Logistics Management</div>
                    <div class="course-item">Credit Officer</div>
                    <div class="course-item">Management</div>
                    <div class="course-item">Accounting Assistant</div>
                    <div class="course-item">QuickBooks</div>
                </div>
            </div>
            
            <div class="course-section">
                <h2>International Language Center (ILC)</h2>
                <p>Moreover, we are also providing you a center of language; it is International Language Center (ILC) that offering you the below English Programs such as:</p>
                
                <div class="course-list">
                    <div class="course-item">English as a Second Language (ESL)</div>
                    <div class="course-item">Intensive English Program (IEP)</div>
                    <div class="course-item">English Proficiency Program (EPP)</div>
                </div>
            </div>
            
            <div class="contact-note">
                * Please contact us for more details.
            </div>
        </div>
    </div>

    <!-- Full width footer -->
    <div class="footer-wrapper">
        <?php require "includes/footer.php"; ?>
    </div>
</body>
</html>