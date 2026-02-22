<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- NAVIGATION -->
  <nav class="navbar">
    <div class="nav-logo">0zee</div>
    
    <!-- Hamburger menu for mobile -->
    <button class="hamburger" id="hamburger">☰</button>
    
    <ul class="nav-links" id="navLinks">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#calculator">GPA Calculator</a></li>
      <li><a href="#cv">CV</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

    <!-- Dark/Light mode toggle -->
    <button class="theme-toggle" id="themeToggle">🌙 Dark Mode</button>
  </nav>
  <!-- SECTION 1: HERO -->
  <section class="hero" id="home" >
    <div class="hero-content">
      <img src="images/profile.png" alt="Profile Picture" class="profile-pic">
      <h1>Hello, I'm <span class="highlight">IRAKOZE Fredy</span></h1>
      <h2>Frontend Developer</h2>
      <p class="tagline">Passionate about building clean, responsive web experiences.</p>
      <a href="#projects" class="btn-primary">View My Work</a>
    </div>
  </section>
  <!-- SECTION 2: ABOUT ME -->
  <section class="about" id="about">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      
      <div class="about-content">
        <div class="about-text">
          <p>Hi! I'm a Year II Computer Science student at INES Ruhengeri, 
          passionate about frontend web development.</p>
          
          <p>My goal is to become a professional Full Stack Developer, 
          building digital solutions that make a real impact in Rwanda and beyond.</p>
          
          <p><b>Program:</b> Bachelor of Computer Science</p>
          <p><b>Year:</b> Year II, 2025-2026</p>
          <p><b>Institution:</b> INES Ruhengeri</p>
        </div>

        <div class="about-skills">
          <span class="skill-tag">HTML5</span>
          <span class="skill-tag">CSS3</span>
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">GitHub</span>
          <span class="skill-tag">Responsive Design</span>
          <span class="skill-tag">Problem Solving</span>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION 3: TECHNICAL SKILLS -->
  <section class="skills" id="skills">
    <div class="container">
      <h2 class="section-title">Technical Skills</h2>
      
      <div class="skills-grid">
        
        <div class="skill-card">
          <div class="skill-icon">🌐</div>
          <h3>HTML5</h3>
          <div class="progress-bar">
            <div class="progress" style="width: 70%"></div>
          </div>
          <span>70%</span>
        </div>

        <div class="skill-card">
          <div class="skill-icon">🎨</div>
          <h3>CSS3</h3>
          <div class="progress-bar">
            <div class="progress" style="width: 50%"></div>
          </div>
          <span>50%</span>
        </div>

        <div class="skill-card">
          <div class="skill-icon">⚡</div>
          <h3>JavaScript</h3>
          <div class="progress-bar">
            <div class="progress" style="width: 25%"></div>
          </div>
          <span>25%</span>
        </div>

        <div class="skill-card">
          <div class="skill-icon">🐙</div>
          <h3>GitHub</h3>
          <div class="progress-bar">
            <div class="progress" style="width: 40%"></div>
          </div>
          <span>40%</span>
        </div>

        <div class="skill-card">
          <div class="skill-icon">📱</div>
          <h3>Bootstrap</h3>
          <div class="progress-bar">
            <div class="progress" style="width: 10%"></div>
          </div>
          <span>10%</span>
        </div>

      </div>
    </div>
  </section>
  <!-- SECTION 4: PROJECTS -->
  <section class="projects" id="projects">
    <div class="container">
      <h2 class="section-title">My Projects</h2>
      
      <div class="projects-grid">

        <!-- Project 1 -->
        <div class="project-card">
          <img src="images/responsive.jpeg" alt="Project 1 Screenshot">
          <div class="project-info">
            <h3>Responsive Portfolio Website</h3>
            <p class="problem">Problem solved: Needed a personal online presence to showcase skills to employers.</p>
            <div class="tech-tags">
              <span>HTML</span>
              <span>CSS</span>
              <span>JavaScript</span>
            </div>
            <a href="https://github.com/" class="btn-secondary">GitHub Link</a>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="project-card">
          <img src="images/student.jpeg" alt="Project 2 Screenshot">
          <div class="project-info">
            <h3>Student GPA Calculator</h3>
            <p class="problem">Problem solved: Students needed a quick way to calculate their semester GPA.</p>
            <div class="tech-tags">
              <span>HTML</span>
              <span>CSS</span>
              <span>JavaScript</span>
            </div>
            <a href="https://github.com/" class="btn-secondary">GitHub Link</a>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="project-card">
          <img src="images/login.jpeg" alt="Project 3 Screenshot">
          <div class="project-info">
            <h3>Simple Login Form</h3>
            <p class="problem">Problem solved: Built a validated login form with responsive design.</p>
            <div class="tech-tags">
              <span>HTML</span>
              <span>CSS</span>
            </div>
            <a href="https://github.com/" class="btn-secondary">GitHub Link</a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- SECTION 5: GPA CALCULATOR -->
  <section class="calculator" id="calculator">
    <div class="container">
      <h2 class="section-title">Student GPA Calculator</h2>
      <p class="section-subtitle">Enter your course marks to calculate your GPA</p>

      <div class="calc-wrapper">
        
        <!-- Input area -->
        <div class="calc-inputs" id="courseInputs">
          <div class="course-row">
            <input type="text" placeholder="Course name (e.g. Math)" class="course-name">
            <input type="number" placeholder="Mark (0-100)" class="course-mark" min="0" max="100">
          </div>
        </div>

        <!-- Buttons -->
        <div class="calc-buttons">
          <button class="btn-primary" id="addCourse">+ Add Course</button>
          <button class="btn-success" id="calculateGPA">Calculate GPA</button>
          <button class="btn-danger" id="resetCalc">Reset</button>
        </div>

        <!-- Result area -->
        <div class="calc-result" id="calcResult" style="display:none;">
          <h3>Your Results</h3>
          <div class="result-grid" id="resultGrid"></div>
          <div class="gpa-display">
            <p>Your GPA: <strong id="gpaScore">0.00</strong></p>
            <p>Classification: <strong id="gpaClass">-</strong></p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- SECTION 6: CV -->
  <section class="cv-section" id="cv">
    <div class="container">
      <h2 class="section-title">My CV</h2>

      <div class="cv-wrapper">
        <!-- Download button -->
        <a href="cv/Irakoze_Fredy_CV.pdf" download class="btn-primary">
          ⬇ Download CV
        </a>

        <!-- HTML CV Preview -->
        <div class="cv-preview">
          <h3>IRAKOZE Fredy</h3>
          <p>📧 irakozefredy12@gmail.com | 📞 +250 796 664 446</p>
          <p>🔗 github.com//1ra0ze-art</p>
          <hr>
          <h4>Education</h4>
          <p>Bachelor of Computer Science — INES Ruhengeri (2024 - Present)</p>
          <h4>Skills</h4>
          <p>HTML5, CSS3, JavaScript, GitHub</p>
          <h4>Projects</h4>
          <p>Portfolio Website, GPA Calculator, Login Form</p>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION 7: CONTACT -->
  <section class="contact" id="contact">
    <div class="container">
      <h2 class="section-title">Contact Me</h2>

      <div class="contact-wrapper">

        <!-- Contact Info -->
        <div class="contact-info">
          <p>📧 irakozefredy12@gmail.com</p>
          <p>📞 +250 796 664 446</p>
          <p>🐙 github.com/1ra0ze-art</p>
        </div>

        <!-- Contact Form -->
        <form class="contact-form" id="contactForm">
          <input type="text" id="senderName" placeholder="Your Name" required>
          <input type="email" id="senderEmail" placeholder="Your Email" required>
          <textarea id="senderMessage" placeholder="Your Message" rows="5" required></textarea>
          <button type="submit" class="btn-primary">Send Message</button>
          <p class="form-feedback" id="formFeedback"></p>
        </form>

      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <p>© <span id="year"></span> 1ra 0ze. All rights reserved.</p>
    <p>Built with HTML, CSS & JavaScript</p>
  </footer>

  <!-- JavaScript file linked at the bottom -->
  <script src="js/main.js"></script>

</body>
</html>

  
