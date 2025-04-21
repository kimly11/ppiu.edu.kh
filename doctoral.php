<?php require "includes/header.php"; ?>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 100px;
        }
        
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            text-align: center;
        }
        
        h2 {
            color: #2980b9;
            margin-top: 30px;
            border-left: 4px solid #3498db;
            padding-left: 10px;
        }
        
        h3 {
            color: #16a085;
            margin-top: 20px;
        }
        
        .program-container {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .specialization {
            background-color: white;
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0;
            border: 1px solid #eee;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        
        th {
            background-color: #3498db;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .course-list {
            margin-left: 20px;
        }
        
        .course-category {
            font-weight: bold;
            color: #e74c3c;
            margin-top: 10px;
        }
        
        .course-item {
            margin: 5px 0;
        }
        
        .credit {
            float: right;
            color: #7f8c8d;
        }
        
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 10px;
            }
            
            table {
                font-size: 14px;
            }
        }
    </style>
<body>
<section class="content-wrapper py-5">
    <div class="content">
        <h1>កម្មវិធីសិក្សាថ្នាក់បណ្ឌិត<br>Doctoral Program Curriculum</h1>
        
        <!-- Research Doctoral Program -->
        <div class="program-container">
            <h2>១. កម្មវិធីសិក្សាថ្នាក់បណ្ឌិតស្រាវជ្រាវ<br>1. Research Doctoral Program</h2>
            
            <!-- Finance Specialization -->
            <div class="specialization">
                <h3>១.១ ជំនាញហិរញ្ញវត្ថុ<br>1.1 Finance Specialization</h3>
                
                <div class="course-category">១.ការសិក្សាមុខវិជ្ជា (21 credits)<br>1. Coursework (21 credits)</div>
                <div class="course-list">
                    <div class="course-category">មុខវិជ្ជាបំពេញបន្ថែម<br>Foundation Courses:</div>
                    <div class="course-item">FNB801 Corporate Governance <span class="credit">3-0</span></div>
                    <div class="course-item">ECO801 Managerial Economics <span class="credit">3-0</span></div>
                    
                    <div class="course-category">មុខវិជ្ជាកម្រិតបណ្ឌិត<br>Core Courses:</div>
                    <div class="course-item">FNB802 Capital Markets & Financial Institutions <span class="credit">3-0</span></div>
                    <div class="course-item">FNB803 Investment Theory & Analysis <span class="credit">3-0</span></div>
                    
                    <div class="course-category">មុខវិជ្ជាតម្រង់ទិស<br>Electives:</div>
                    <div class="course-item">REM801 Research Methodology <span class="credit">3-0</span></div>
                    <div class="course-item">FNB804 Business Forecasting <span class="credit">3-0</span></div>
                    <div class="course-item">CSE801 Management Information System <span class="credit">3-0</span></div>
                </div>
                
                <div class="course-category">២. ការសរសេរនិងការពារនិក្ខេបបទ (33 credits)<br>2. Dissertation (33 credits)</div>
                <div class="course-list">
                    <div class="course-item">REM802 ការពារគម្រោងស្រាវជ្រាវ<br>Research Proposal Defense <span class="credit">3-0</span></div>
                    <div class="course-item">REM803 ការចុះផ្សាយអត្ថបទស្រាវជ្រាវ<br>Research Publication <span class="credit">6-0</span></div>
                    <div class="course-item">REM806 និក្ខេបបទ<br>Dissertation <span class="credit">18-0</span></div>
                </div>
            </div>
            
            <!-- Add other specializations here following the same structure -->
            
        </div>
        
        <!-- Professional Doctoral Program -->
        <div class="program-container">
            <h2>២. កម្មវិធីសិក្សាថ្នាក់បណ្ឌិតវិជ្ជាជីវៈ<br>2. Professional Doctoral Program</h2>
            
            <!-- Finance Specialization -->
            <div class="specialization">
                <h3>២.១ ជំនាញហិរញ្ញវត្ថុ<br>2.1 Finance Specialization</h3>
                
                <div class="course-category">១.ការសិក្សាមុខវិជ្ជា (27 credits)<br>1. Coursework (27 credits)</div>
                <div class="course-list">
                    <!-- Similar course structure as above -->
                    <div class="course-item">REM807 សារណាបទពិសោធន៍វិជ្ជាជីវៈ<br>Professional Practicum <span class="credit">6-0</span></div>
                </div>
                
                <div class="course-category">២.ការសរសេរនិក្ខេបបទ (27 credits)<br>2. Dissertation (27 credits)</div>
                <div class="course-list">
                    <div class="course-item">REM806 និក្ខេបបទ<br>Dissertation <span class="credit">12-0</span></div>
                </div>
            </div>
            
            <!-- Add other specializations here -->
            
        </div>
        
        <!-- Tuition Fees -->
        <div class="program-container">
            <h2>តម្លៃសិក្សា<br>Tuition Fees</h2>
            
            <table>
                <thead>
                    <tr>
                        <th>កម្រិត<br>Level</th>
                        <th>ឆ្នាំទី១<br>Year 1</th>
                        <th>ឆ្នាំទី២<br>Year 2</th>
                        <th>ឆ្នាំទី៣<br>Year 3</th>
                        <th>សរុប<br>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>បរិញ្ញាបត្រជាន់ខ្ពស់<br>Master's</td>
                        <td>$750.00</td>
                        <td>$750.00</td>
                        <td>-</td>
                        <td>$1,500.00</td>
                    </tr>
                    <tr>
                        <td>បណ្ឌិត<br>Doctoral</td>
                        <td>$1,400.00</td>
                        <td>$1,400.00</td>
                        <td>$1,400.00</td>
                        <td>$4,200.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php require "includes/footer.php"; ?>