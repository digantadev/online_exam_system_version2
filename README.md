# 🎓 Online Examination System (ExamPortal)

A full-featured web-based Online Examination System built using PHP, MySQL, JavaScript, HTML5, and Bootstrap. Designed to facilitate remote assessments, automated quiz evaluations, subjective Class Tests (CT), and programming Lab examinations.

---

## 📌 Table of Contents
- [Overview](#-overview)
- [Key Features](#-key-features)
  - [Teacher Features](#-teacher-features)
  - [Student Features](#-student-features)
  - [Exam Types Supported](#-exam-types-supported)
- [Tech Stack](#-tech-stack)
- [Directory Structure](#-directory-structure)
- [Author & Credits](#-author--credits)

---

## 📖 Overview

The **Online Examination System** provides educational institutions, instructors, and students with an intuitive environment for conducting evaluations online. It supports timed assessments, passkey protection, instant MCQ grading, manual subjective evaluation, student participation tracking, and individual performance analytics.

---

## ✨ Key Features

### 🧑‍🏫 Teacher Features
- **Role-Based Authentication:** Secure teacher login & registration.
- **Exam Management:**
  - Create exams specifying Title, Type, Access Key, Duration, and Start/End Schedule.
  - Dynamically add multiple questions with custom marks distribution.
- **Evaluation & Grading:**
  - Automated MCQ checking with calculated percentages.
  - Manual review interface for Class Tests (CT) and Lab Exam code submissions with instructor feedback and custom marks assignment.
- **Live Monitoring & Reports:**
  - Track participants who have attempted exams along with submission timestamps.
  - View individual participant score breakdowns and question-by-question responses.

### 👨‍🎓 Student Features
- **Student Dashboard:** Easy navigation to join exams, check submission histories, and inspect scores.
- **Secure Exam Access:** Participate in exams using unique access keys during active windows.
- **Timer & Auto-submission:** Real-time countdown timer ensuring exams are completed within the designated duration.
- **Instant Result & Review:** Real-time score calculation for quizzes and access to graded submissions once reviewed by teachers.
- **Performance Analytics:** Comprehensive overview tracking exams taken, average score percentages, and graphical progress indicators.

### 🎯 Exam Types Supported
1. **Multiple Choice Questions (MCQ / Quiz):**
   - 4-option questions with automatic answer verification and scoring.
2. **Class Test (CT / Descriptive):**
   - Subjective and analytical questions requiring written responses.
3. **Lab Exam (Programming / Practical):**
   - Code submissions evaluated manually by instructors.

---


## 🛠️ Tech Stack

- **Backend:** PHP (Native / Procedural & Object-Oriented MySQLi)
- **Database:** MySQL
- **Frontend:** HTML5, CSS3, JavaScript (ES6+), Bootstrap 5
- **Icons & UI:** Bootstrap Icons
- **Third-Party Integrations:** EmailJS

---


## 📁 Directory Structure

```plaintext
online_exam_system_version2/
│
├── Css/
│   ├── 1.css                       # Global styles
│   ├── features.css                # Features page styling
│   ├── sign_in.css                 # Login page styles
│   └── sign_up.css                 # Registration page styles
│
├── images/                         # UI screenshots, icons, and vector illustrations
│
├── javascript/
│   └── 1.js                        # Client-side scripts and dynamic behaviors
│
├── index.html                      # Landing page / Home portal
├── sign_in.html                    # User sign-in interface
├── sign_up.html                    # User sign-up interface
├── login.php                       # Authentication handler & session initiator
├── register.php                    # Registration processor with password hashing
├── logout.php                      # Session destruction & sign-out
├── features.php                    # System features showcase
│
├── teacher_dashboard_menu.php      # Teacher navigation menu
├── teacher_dashboard.php           # Teacher exam management & creation panel
├── create_exam.php                 # Exam creation backend logic
├── evaluate_submission.php         # Manual grading & feedback for CT/Lab exams
├── monitor_participant.php         # Real-time exam attendance monitoring
│
├── student_dashboard_menu.php      # Student navigation menu
├── take_exam.php                   # Exam taking interface with timer
├── submit_exam.php                 # Exam submission processing & scoring
├── view_score.php                  # Individual score breakdown & question review
├── view_submission.php             # Historical submissions list
└── performance.php                 # Student aggregated performance dashboard
```

---


## 👨‍💻 Author & Credits

- **Developer:** Diganta Das Niloy
- **Platform:** Online Examination System (ExamPortal)
