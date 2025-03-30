<?php require "includes/header.php"; ?>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<section class="bachelor-programs py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="section-title">BACHELOR'S DEGREE PROGRAMS</h2>
        <div class="title-border"></div>
        <p class="lead">Choose your desired major from our comprehensive bachelor's degree programs across four faculties</p>
      </div>
    </div>

    <!-- Faculty Tabs Navigation -->
    <div class="row mb-4">
      <div class="col-12">
        <ul class="nav nav-tabs faculty-tabs" id="facultyTabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="fbt-tab" data-toggle="tab" href="#fbt" role="tab">Business & Tourism</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="fle-tab" data-toggle="tab" href="#fle" role="tab">Law & Economics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="fes-tab" data-toggle="tab" href="#fes" role="tab">Education Science</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="fsit-tab" data-toggle="tab" href="#fsit" role="tab">Science & IT</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Faculty Tabs Content -->
    <div class="row">
      <div class="col-12">
        <div class="tab-content" id="facultyTabsContent">
          
          <!-- Faculty of Business and Tourism -->
          <div class="tab-pane fade show active" id="fbt" role="tabpanel">
            <div class="faculty-header">
              <h3><i class="fas fa-briefcase mr-2"></i> Faculty of Business and Tourism (FBT)</h3>
              <p>Programs designed to develop business acumen and tourism expertise for the global market</p>
            </div>
            <div class="row">
              <!-- Accounting -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">ACC</div>
                  <h4>Accounting</h4>
                  <p>Master financial reporting, auditing, and taxation for corporate and public sectors</p>
                  <ul class="program-features">
                    <li>CPA preparation courses</li>
                    <li>Financial analysis specialization</li>
                    <li>Industry-standard software training</li>
                  </ul>
                </div>
              </div>
              
              <!-- Management -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">MGT</div>
                  <h4>Management</h4>
                  <p>Develop leadership skills for organizational success in various industries</p>
                  <ul class="program-features">
                    <li>Strategic management focus</li>
                    <li>Entrepreneurship track</li>
                    <li>Case-study based learning</li>
                  </ul>
                </div>
              </div>
              
              <!-- Marketing -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">MKT</div>
                  <h4>Marketing</h4>
                  <p>Learn digital and traditional marketing strategies for today's business landscape</p>
                  <ul class="program-features">
                    <li>Digital marketing specialization</li>
                    <li>Consumer behavior analysis</li>
                    <li>Brand management</li>
                  </ul>
                </div>
              </div>
              
              <!-- Hotel and Tourism Management -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">TOU</div>
                  <h4>Hotel and Tourism Management</h4>
                  <p>Prepare for leadership roles in the dynamic hospitality and tourism industry</p>
                  <ul class="program-features">
                    <li>Internship opportunities</li>
                    <li>Event management focus</li>
                    <li>Sustainable tourism</li>
                  </ul>
                </div>
              </div>
              
              <!-- Logistics Management -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">LGM</div>
                  <h4>Logistics Management</h4>
                  <p>Master supply chain operations and global distribution networks</p>
                  <ul class="program-features">
                    <li>Supply chain optimization</li>
                    <li>Inventory management</li>
                    <li>Transportation systems</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Faculty of Law and Economics -->
          <div class="tab-pane fade" id="fle" role="tabpanel">
            <div class="faculty-header">
              <h3><i class="fas fa-balance-scale mr-2"></i> Faculty of Law and Economics (FLF)</h3>
              <p>Programs combining legal expertise with economic understanding for policy and business</p>
            </div>
            <div class="row">
              <!-- Finance-Banking -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">FNB</div>
                  <h4>Finance-Banking</h4>
                  <p>Develop expertise in financial markets, banking operations, and investment strategies</p>
                  <ul class="program-features">
                    <li>Financial risk management</li>
                    <li>Investment analysis</li>
                    <li>Banking regulations</li>
                  </ul>
                </div>
              </div>
              
              <!-- Economics Development -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">ECO</div>
                  <h4>Economics Development</h4>
                  <p>Understand economic systems and policies for national and global development</p>
                  <ul class="program-features">
                    <li>Development economics</li>
                    <li>Policy analysis</li>
                    <li>Economic modeling</li>
                  </ul>
                </div>
              </div>
              
              <!-- Public Relations -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">PR</div>
                  <h4>Public Relations</h4>
                  <p>Master communication strategies for organizations and public figures</p>
                  <ul class="program-features">
                    <li>Crisis communication</li>
                    <li>Media relations</li>
                    <li>Corporate communication</li>
                  </ul>
                </div>
              </div>
              
              <!-- Law -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">LLB</div>
                  <h4>Law</h4>
                  <p>Comprehensive legal education for practice and public service</p>
                  <ul class="program-features">
                    <li>Constitutional law</li>
                    <li>Commercial law</li>
                    <li>International law</li>
                  </ul>
                </div>
              </div>
              
              <!-- International Relations -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">IR</div>
                  <h4>International Relations</h4>
                  <p>Study global politics, diplomacy, and international organizations</p>
                  <ul class="program-features">
                    <li>Diplomatic studies</li>
                    <li>Global governance</li>
                    <li>Foreign policy analysis</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Faculty of Education Science -->
          <div class="tab-pane fade" id="fes" role="tabpanel">
            <div class="faculty-header">
              <h3><i class="fas fa-graduation-cap mr-2"></i> Faculty of Education Science (FES)</h3>
              <p>Programs preparing educators and language professionals for diverse settings</p>
            </div>
            <div class="row">
              <!-- English for Education -->
              <div class="col-md-6 mb-4">
                <div class="program-card">
                  <div class="program-code">EDU</div>
                  <h4>English for Education</h4>
                  <p>Prepare for teaching English in schools and educational institutions</p>
                  <ul class="program-features">
                    <li>Pedagogical methods</li>
                    <li>Curriculum development</li>
                    <li>Language acquisition</li>
                  </ul>
                </div>
              </div>
              
              <!-- English for Business -->
              <div class="col-md-6 mb-4">
                <div class="program-card">
                  <div class="program-code">EBU</div>
                  <h4>English for Business</h4>
                  <p>Develop professional English communication skills for corporate environments</p>
                  <ul class="program-features">
                    <li>Business communication</li>
                    <li>Professional writing</li>
                    <li>Cross-cultural communication</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Faculty of Science and Information Technology -->
          <div class="tab-pane fade" id="fsit" role="tabpanel">
            <div class="faculty-header">
              <h3><i class="fas fa-laptop-code mr-2"></i> Faculty of Science and Information Technology (FSIT)</h3>
              <p>Cutting-edge programs in technology and information systems</p>
            </div>
            <div class="row">
              <!-- Computer Science -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">CSE</div>
                  <h4>Computer Science</h4>
                  <p>Comprehensive education in software development and computer systems</p>
                  <ul class="program-features">
                    <li>Artificial Intelligence</li>
                    <li>Data Structures & Algorithms</li>
                    <li>Software Engineering</li>
                  </ul>
                </div>
              </div>
              
              <!-- Management Information System -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">MIS</div>
                  <h4>Management Information System</h4>
                  <p>Bridge business needs with technology solutions</p>
                  <ul class="program-features">
                    <li>Database management</li>
                    <li>Business intelligence</li>
                    <li>Systems analysis</li>
                  </ul>
                </div>
              </div>
              
              <!-- Telecommunication Architecture -->
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="program-card">
                  <div class="program-code">TEL</div>
                  <h4>Telecommunication Architecture</h4>
                  <p>Design and manage communication networks and systems</p>
                  <ul class="program-features">
                    <li>Network security</li>
                    <li>Wireless technologies</li>
                    <li>Cloud infrastructure</li>
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
.bachelor-programs {
  background-color: #f8f9fa;
  font-family: 'Poppins', sans-serif;
}

.section-title {
  font-size: 2.3rem;
  color: #2c3e50;
  font-weight: 600;
  margin-bottom: 1rem;
}

.title-border {
  width: 80px;
  height: 4px;
  background: linear-gradient(to right, #3498db, #9b59b6);
  margin: 0 auto 1.5rem;
}

.lead {
  font-size: 1.2rem;
  color: #5d6d7e;
  max-width: 800px;
  margin: 0 auto 2rem;
}

.faculty-tabs {
  border-bottom: 2px solid #dee2e6;
}

.faculty-tabs .nav-link {
  color: #5d6d7e;
  font-weight: 600;
  border: none;
  padding: 12px 25px;
  position: relative;
  transition: all 0.3s ease;
}

.faculty-tabs .nav-link:hover {
  color: #3498db;
  background-color: transparent;
}

.faculty-tabs .nav-link.active {
  color: #3498db;
  background-color: transparent;
  border: none;
}

.faculty-tabs .nav-link.active:after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(to right, #3498db, #9b59b6);
}

.faculty-header {
  margin-bottom: 30px;
  padding-bottom: 15px;
  border-bottom: 1px solid #eee;
}

.faculty-header h3 {
  color: #2c3e50;
  font-weight: 600;
}

.faculty-header p {
  color: #5d6d7e;
  margin-bottom: 0;
}

.program-card {
  background: white;
  border-radius: 8px;
  padding: 25px;
  height: 100%;
  box-shadow: 0 4px 6px rgba(0,0,0,0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-left: 4px solid #3498db;
}

.program-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.program-code {
  display: inline-block;
  background: #3498db;
  color: white;
  font-weight: bold;
  padding: 3px 10px;
  border-radius: 4px;
  margin-bottom: 15px;
  font-size: 0.9rem;
}

.program-card h4 {
  color: #2c3e50;
  font-weight: 600;
  margin-bottom: 10px;
}

.program-card p {
  color: #5d6d7e;
  margin-bottom: 15px;
}

.program-features {
  list-style-type: none;
  padding-left: 0;
  margin-bottom: 0;
}

.program-features li {
  padding: 5px 0;
  position: relative;
  padding-left: 20px;
  color: #5d6d7e;
}

.program-features li:before {
  content: "•";
  color: #3498db;
  font-weight: bold;
  position: absolute;
  left: 0;
}

@media (max-width: 768px) {
  .section-title {
    font-size: 1.8rem;
  }
  
  .lead {
    font-size: 1rem;
  }
  
  .faculty-tabs .nav-link {
    padding: 10px 15px;
    font-size: 0.9rem;
  }
}
</style>

<script>
// Add animation to tab switching
document.addEventListener('DOMContentLoaded', function() {
  // Activate first tab by default
  $('#facultyTabs a:first').tab('show');
  
  // Add animation to tab content
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
    const target = $(e.target).attr("href");
    $(target).addClass('animated fadeIn');
    setTimeout(function() {
      $(target).removeClass('animated fadeIn');
    }, 500);
  });
  
  // Program card hover effect
  $('.program-card').hover(
    function() {
      $(this).css('border-left-color', '#9b59b6');
    },
    function() {
      $(this).css('border-left-color', '#3498db');
    }
  );
});
</script>
<?php require "includes/footer.php"; ?>