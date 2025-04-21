
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        
        /* Header styling - full width */
        header {
            width: 100%;
            background-color: #0077b6; /* Example header color */
            color: white;
            padding: 15px 0;
        }
        
        .header-content {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Main content container */
        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }
        
        /* Footer styling - full width */
        footer {
            width: 100%;
            background-color: #333; /* Example footer color */
            color: white;
            padding: 20px 0;
            margin-top: 30px;
        }
        
        .footer-content {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .banner img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }
        
        h1 {
            color: #0077b6;
            margin-top: 20px;
        }
        
        p {
            line-height: 1.6;
        }
        
        .requirements, .contact {
            text-align: left;
            margin-top: 20px;
        }
        
        .requirements ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            color: white;
            background: #0077b6;
            border-radius: 5px;
        }
        
        .btn:hover {
            background: #005f87;
        }
    </style>
</head>

<body>
    <!-- Header content will be included from header.php -->
    
    <div class="container">
        <div class="banner">
            <img src="images/chair.jpg" alt="PPIU University">
        </div>
        
        <h1>Looking for Lecturer of Logistic Management</h1>
        
        <p>Phnom Penh International University (PPIU) is one of the leading private universities in Cambodia, committed to national, regional (ASEAN), and international standards of education. We are looking for qualified candidates to teach the following courses:</p>
        
        <div class="requirements">
            <h2>Requirements:</h2>
            <ul>
                <li>Master's Degree or higher in Logistics, Supply Chain Management, or related field.</li>
                <li>At least 2 years of teaching or industry experience.</li>
                <li>Strong communication and presentation skills.</li>
                <li>Fluent in English; Khmer proficiency is a plus.</li>
            </ul>
        </div>

        <div class="contact">
            <h2>How to Apply:</h2>
            <p>Email your CV and cover letter to: <a href="mailto:hr@ppiu.edu.kh">hr@ppiu.edu.kh</a></p>
            <p>For inquiries, call: <a href="tel:+85523999906">+855 23 999 906</a></p>
            <p>Address: Building 36, Street 196, Phnom Penh, Cambodia</p>
            <a href="mailto:hr@ppiu.edu.kh" class="btn">📧 Apply Now</a>
            <a href="tel:+85523999906" class="btn">📞 Call Us</a>
        </div>
    </div>
</body>
