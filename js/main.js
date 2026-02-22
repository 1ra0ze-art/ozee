// ============================================
//  MAIN.JS — Portfolio JavaScript
//  Covers: DOM manipulation, dark mode,
//  hamburger menu, GPA calculator,
//  form validation, dynamic year
// ============================================


// ─────────────────────────────────────────────
// 1. DYNAMIC YEAR IN FOOTER
// ─────────────────────────────────────────────
const yearSpan = document.getElementById('year');
if (yearSpan) {
  yearSpan.textContent = new Date().getFullYear();
}


// ─────────────────────────────────────────────
// 2. HAMBURGER MENU TOGGLE
// ─────────────────────────────────────────────
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

if (hamburger && navLinks) {
  hamburger.addEventListener('click', function () {
    navLinks.classList.toggle('open');
  });

  // Close menu when any nav link is clicked
  navLinks.addEventListener('click', function (e) {
    if (e.target.tagName === 'A') {
      navLinks.classList.remove('open');
    }
  });
}


// ─────────────────────────────────────────────
// 3. DARK / LIGHT MODE TOGGLE
// ─────────────────────────────────────────────
const themeToggle = document.getElementById('themeToggle');

if (themeToggle) {
  themeToggle.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');

    if (document.body.classList.contains('dark-mode')) {
      themeToggle.textContent = '☀️ Light Mode';
    } else {
      themeToggle.textContent = '🌙 Dark Mode';
    }
  });
}


// ─────────────────────────────────────────────
// 4. GPA CALCULATOR
// ─────────────────────────────────────────────

// --- 4a. Helper: convert mark to grade & points ---
function getGradePoints(mark) {
  if (mark >= 90) return { points: 4.0, grade: 'A+' };
  if (mark >= 80) return { points: 4.0, grade: 'A'  };
  if (mark >= 75) return { points: 3.5, grade: 'B+' };
  if (mark >= 70) return { points: 3.0, grade: 'B'  };
  if (mark >= 65) return { points: 2.5, grade: 'C+' };
  if (mark >= 60) return { points: 2.0, grade: 'C'  };
  if (mark >= 55) return { points: 1.5, grade: 'D+' };
  if (mark >= 50) return { points: 1.0, grade: 'D'  };
  return { points: 0.0, grade: 'F' };
}

// --- 4b. Helper: GPA to classification ---
function getClassification(gpa) {
  if (gpa >= 3.6) return '🏆 First Class';
  if (gpa >= 3.0) return '🥈 Second Class Upper';
  if (gpa >= 2.0) return '🥉 Second Class Lower';
  if (gpa >= 1.0) return '✅ Pass';
  return '❌ Fail';
}

// --- 4c. Add Course Row ---
const addCourseBtn = document.getElementById('addCourse');
const courseInputs = document.getElementById('courseInputs');

if (addCourseBtn && courseInputs) {
  addCourseBtn.addEventListener('click', function () {
    const newRow = document.createElement('div');
    newRow.classList.add('course-row');

    newRow.innerHTML = `
      <input type="text" placeholder="Course name (e.g. Math)" class="course-name">
      <input type="number" placeholder="Mark (0-100)" class="course-mark" min="0" max="100">
      <button class="remove-row btn-danger">✕</button>
    `;

    courseInputs.appendChild(newRow);

    // Remove this row when ✕ is clicked
    newRow.querySelector('.remove-row').addEventListener('click', function () {
      newRow.remove();
    });
  });
}

// --- 4d. Calculate GPA ---
const calculateBtn = document.getElementById('calculateGPA');
const calcResult   = document.getElementById('calcResult');
const resultGrid   = document.getElementById('resultGrid');
const gpaScore     = document.getElementById('gpaScore');
const gpaClass     = document.getElementById('gpaClass');

if (calculateBtn) {
  calculateBtn.addEventListener('click', function () {

    const courseNames = document.querySelectorAll('.course-name');
    const courseMarks = document.querySelectorAll('.course-mark');

    // Validation — check nothing is empty or out of range
    let isValid = true;

    courseNames.forEach(function (input) {
      if (input.value.trim() === '') {
        input.style.borderColor = 'red';
        isValid = false;
      } else {
        input.style.borderColor = '#10b981';
      }
    });

    courseMarks.forEach(function (input) {
      const value = parseFloat(input.value);
      if (input.value === '' || isNaN(value) || value < 0 || value > 100) {
        input.style.borderColor = 'red';
        isValid = false;
      } else {
        input.style.borderColor = '#10b981';
      }
    });

    if (!isValid) {
      alert('⚠️ Please fill in all course names and valid marks between 0 and 100!');
      return;
    }

    // Calculate
    let totalPoints = 0;
    const courseCount = courseMarks.length;

    // Clear old results
    resultGrid.innerHTML = '';

    courseMarks.forEach(function (input, index) {
      const mark = parseFloat(input.value);
      const name = courseNames[index].value;
      const { points, grade } = getGradePoints(mark);

      totalPoints += points;

      resultGrid.innerHTML += `
        <div class="result-item">
          <strong>${name}</strong>
          <p>Mark: ${mark}</p>
          <p>Grade: ${grade}</p>
          <p>Points: ${points}</p>
        </div>
      `;
    });

    const finalGPA = (totalPoints / courseCount).toFixed(2);
    const classification = getClassification(parseFloat(finalGPA));

    gpaScore.textContent = finalGPA;
    gpaClass.textContent = classification;

    // Show results box
    calcResult.style.display = 'block';

    // Smoothly scroll to results
    calcResult.scrollIntoView({ behavior: 'smooth' });
  });
}

// --- 4e. Reset Calculator ---
const resetBtn = document.getElementById('resetCalc');

if (resetBtn) {
  resetBtn.addEventListener('click', function () {
    const allRows = document.querySelectorAll('.course-row');

    allRows.forEach(function (row, index) {
      if (index === 0) {
        // Clear first row but keep it
        row.querySelectorAll('input').forEach(function (input) {
          input.value = '';
          input.style.borderColor = '';
        });
      } else {
        // Remove all extra rows
        row.remove();
      }
    });

    // Hide results
    calcResult.style.display = 'none';
    gpaScore.textContent = '0.00';
    gpaClass.textContent = '-';
  });
}


// ─────────────────────────────────────────────
// 5. CONTACT FORM VALIDATION
// ─────────────────────────────────────────────
const contactForm   = document.getElementById('contactForm');
const formFeedback  = document.getElementById('formFeedback');

if (contactForm) {
  contactForm.addEventListener('submit', function (e) {
    // Stop page from reloading
    e.preventDefault();

    const name    = document.getElementById('senderName').value.trim();
    const email   = document.getElementById('senderEmail').value.trim();
    const message = document.getElementById('senderMessage').value.trim();

    // Check all fields are filled
    if (name === '' || email === '' || message === '') {
      formFeedback.textContent = '⚠️ Please fill in all fields!';
      formFeedback.style.color = 'red';
      return;
    }

    // Basic email check
    if (!email.includes('@') || !email.includes('.')) {
      formFeedback.textContent = '⚠️ Please enter a valid email address!';
      formFeedback.style.color = 'red';
      return;
    }

    // Success!
    formFeedback.textContent = '✅ Message sent! I will get back to you soon.';
    formFeedback.style.color = '#10b981';

    // Clear form
    contactForm.reset();
  });
}