
<?php require "includes/header.php"; ?>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<section class="academic-programs py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="section-title">ACADEMIC PROGRAMS</h2>
        <div class="title-border"></div>
      </div>
    </div>
    
    <!-- Degree Programs Section -->
    <div class="row mb-5">
      <div class="col-12">
        <h3 class="program-category" data-toggle="collapse" href="#degreePrograms">
          <i class="fas fa-graduation-cap mr-2"></i> Degree Programs
          <i class="fas fa-chevron-down float-right"></i>
        </h3>
        <div class="collapse show" id="degreePrograms">
          <div class="row mt-4">
            <!-- Professional/Short Course -->
            <div class="col-md-4 mb-4">
              <div class="card program-card h-100">
                <div class="card-body">
                  <h4 class="card-title">Professional/Short Course</h4>
                  <p class="card-text">Short-term programs designed for specific professional skills development.</p>
                  <ul class="program-list">
                    <li>Certificate in Digital Marketing</li>
                    <li>Web Development Bootcamp</li>
                    <li>Professional Accounting</li>
                    <li>Graphic Design Fundamentals</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!-- Associate Degree -->
            <div class="col-md-4 mb-4">
              <div class="card program-card h-100">
                <div class="card-body">
                  <h4 class="card-title">Associate Degree</h4>
                  <p class="card-text">Two-year programs providing foundational knowledge in various fields.</p>
                  <ul class="program-list">
                    <li>Associate of Arts in Business</li>
                    <li>Associate of Science in IT</li>
                    <li>Associate in Hospitality</li>
                    <li>Associate in Early Childhood Education</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!-- Master's Degree -->
            <div class="col-md-4 mb-4">
              <div class="card program-card h-100">
                <div class="card-body">
                  <h4 class="card-title">Master's Degree</h4>
                  <p class="card-text">Advanced programs for specialized knowledge and research.</p>
                  <ul class="program-list">
                    <li>MBA - Master of Business Admin</li>
                    <li>MSc in Computer Science</li>
                    <li>MA in International Relations</li>
                    <li>MEd in Educational Leadership</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Additional Degree Options -->
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card program-card h-100">
                <div class="card-body">
                  <h4 class="card-title">Bachelor's Degree</h4>
                  <p class="card-text">Comprehensive four-year undergraduate programs.</p>
                  <ul class="program-list">
                    <li>Bachelor of Business Administration</li>
                    <li>Bachelor of Computer Science</li>
                    <li>Bachelor of Arts in English</li>
                    <li>Bachelor of Tourism Management</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 mb-4">
              <div class="card program-card h-100">
                <div class="card-body">
                  <h4 class="card-title">Doctoral Programs</h4>
                  <p class="card-text">Highest level of academic achievement and research.</p>
                  <ul class="program-list">
                    <li>PhD in Business Administration</li>
                    <li>PhD in Education</li>
                    <li>PhD in Information Technology</li>
                    <li>PhD in Economics</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 mb-4">
              <div class="card program-card h-100">
                <div class="card-body">
                  <h4 class="card-title">Diploma Programs</h4>
                  <p class="card-text">Focused programs for career-oriented education.</p>
                  <ul class="program-list">
                    <li>Diploma in Accounting</li>
                    <li>Diploma in Hotel Management</li>
                    <li>Diploma in Computer Programming</li>
                    <li>Diploma in Digital Media</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Faculties Section -->
    <div class="row">
      <div class="col-12">
        <h3 class="program-category" data-toggle="collapse" href="#facultyPrograms">
          <i class="fas fa-university mr-2"></i> Faculties & Departments
          <i class="fas fa-chevron-down float-right"></i>
        </h3>
        <div class="collapse show" id="facultyPrograms">
          <div class="row mt-4">
            <!-- Faculty of Science and Technology -->
            <div class="col-md-6 mb-4">
              <div class="card faculty-card">
                <div class="card-header">
                  <h4>Faculty of Science and Technology</h4>
                </div>
                <div class="card-body">
                  <ul class="department-list">
                    <li>
                      <h5>Department of Computer Science</h5>
                      <p>Programs in software engineering, AI, and data science</p>
                    </li>
                    <li>
                      <h5>Department of Information Technology</h5>
                      <p>Networking, cybersecurity, and system administration</p>
                    </li>
                    <li>
                      <h5>Department of Engineering</h5>
                      <p>Civil, electrical, and mechanical engineering programs</p>
                    </li>
                    <li>
                      <h5>Department of Mathematics</h5>
                      <p>Pure and applied mathematics studies</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!-- Faculty of Business and Tourism -->
            <div class="col-md-6 mb-4">
              <div class="card faculty-card">
                <div class="card-header">
                  <h4>Faculty of Business and Tourism</h4>
                </div>
                <div class="card-body">
                  <ul class="department-list">
                    <li>
                      <h5>Department of Business Administration</h5>
                      <p>Management, marketing, and entrepreneurship</p>
                    </li>
                    <li>
                      <h5>Department of Finance</h5>
                      <p>Banking, investment, and financial management</p>
                    </li>
                    <li>
                      <h5>Department of Hospitality</h5>
                      <p>Hotel and restaurant management programs</p>
                    </li>
                    <li>
                      <h5>Department of Tourism</h5>
                      <p>Tourism management and eco-tourism</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <!-- Faculty of Arts and Humanities -->
            <div class="col-md-6 mb-4">
              <div class="card faculty-card">
                <div class="card-header">
                  <h4>Faculty of Arts and Humanities</h4>
                </div>
                <div class="card-body">
                  <ul class="department-list">
                    <li>
                      <h5>Department of Languages</h5>
                      <p>English, Chinese, and other language studies</p>
                    </li>
                    <li>
                      <h5>Department of History</h5>
                      <p>Cultural and historical studies</p>
                    </li>
                    <li>
                      <h5>Department of Philosophy</h5>
                      <p>Ethics, logic, and critical thinking</p>
                    </li>
                    <li>
                      <h5>Department of Fine Arts</h5>
                      <p>Visual arts, music, and performance</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!-- Faculty of Social Sciences -->
            <div class="col-md-6 mb-4">
              <div class="card faculty-card">
                <div class="card-header">
                  <h4>Faculty of Social Sciences</h4>
                </div>
                <div class="card-body">
                  <ul class="department-list">
                    <li>
                      <h5>Department of Psychology</h5>
                      <p>Human behavior and mental processes</p>
                    </li>
                    <li>
                      <h5>Department of Sociology</h5>
                      <p>Social relationships and institutions</p>
                    </li>
                    <li>
                      <h5>Department of Political Science</h5>
                      <p>Government systems and political theory</p>
                    </li>
                    <li>
                      <h5>Department of International Relations</h5>
                      <p>Global affairs and diplomacy</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.academic-programs {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

.section-title {
  font-size: 2.5rem;
  color: #2c3e50;
  font-weight: 600;
  margin-bottom: 1rem;
}

.title-border {
  width: 80px;
  height: 4px;
  background: linear-gradient(to right, #3498db, #9b59b6);
  margin: 0 auto 2rem;
}

.program-category {
  background-color: #fff;
  padding: 15px 20px;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  cursor: pointer;
  color: #2c3e50;
  font-weight: 600;
  transition: all 0.3s ease;
}

.program-category:hover {
  background-color: #3498db;
  color: white;
}

.program-category i.fa-chevron-down {
  transition: transform 0.3s ease;
}

.program-category[aria-expanded="true"] i.fa-chevron-down {
  transform: rotate(180deg);
}

.program-card {
  border: none;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.program-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.program-card .card-title {
  color: #3498db;
  font-weight: 600;
  border-bottom: 2px solid #f1f1f1;
  padding-bottom: 10px;
  margin-bottom: 15px;
}

.program-list {
  list-style-type: none;
  padding-left: 0;
}

.program-list li {
  padding: 8px 0;
  border-bottom: 1px dashed #eee;
  position: relative;
  padding-left: 20px;
}

.program-list li:before {
  content: "•";
  color: #3498db;
  font-weight: bold;
  position: absolute;
  left: 0;
}

.faculty-card {
  border: none;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.faculty-card .card-header {
  background: linear-gradient(to right, #3498db, #9b59b6);
  color: white;
  padding: 15px 20px;
  border-bottom: none;
}

.department-list {
  list-style-type: none;
  padding-left: 0;
}

.department-list li {
  padding: 15px 0;
  border-bottom: 1px solid #f1f1f1;
}

.department-list li:last-child {
  border-bottom: none;
}

.department-list h5 {
  color: #2c3e50;
  font-weight: 600;
  margin-bottom: 5px;
}

@media (max-width: 768px) {
  .section-title {
    font-size: 2rem;
  }
  
  .program-card, .faculty-card {
    margin-bottom: 20px;
  }
}
</style>

<script>
// Add animation to card hover effects
document.addEventListener('DOMContentLoaded', function() {
  const programCategories = document.querySelectorAll('.program-category');
  
  programCategories.forEach(category => {
    category.addEventListener('click', function() {
      const icon = this.querySelector('.fa-chevron-down');
      icon.style.transform = this.getAttribute('aria-expanded') === 'true' 
        ? 'rotate(0deg)' 
        : 'rotate(180deg)';
    });
  });
  
  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
});
</script>
<?php require "includes/footer.php"; ?>