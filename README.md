## 📚 Athene LMS

### 🚀 Overview

**Athene LMS** is a comprehensive **Learning Management System** built to simplify and enhance the online education experience. It streamlines course management, assessments, and student data handling for administrators, teachers, and students alike.

---

### ✨ Key Features

- 🔐 **Authentication**
  - Secure login & registration for all users.
  - Admin approval required for new users.

- 🗂️ **System Resource Management**
  - **Categories & Batches:** Organized course structure with categories and batch-wise subcategories.
  - **Courses & Materials:** Admins assign courses; teachers upload study materials.
  - **User Management:** Admins enroll/suspend users and manage roles.

- 📝 **Assessments**
  - **Quizzes:** Secure, auto-evaluated quizzes with copy-paste restriction and review options.
  - **Assignments:** Submission deadlines with automatic lockout and manual evaluation.

- 📆 **Calendar Integration**
  - Auto-scheduled events for quizzes, assignments, and important deadlines.

- 📊 **Results & Reports**
  - Instant or manual result generation with visibility controls for students and teachers.

- 🧑‍🏫 **Attendance Tracking**
  - Instructors mark daily attendance with detailed status and reporting features.

- 🎥 **Conferencing**
  - Built-in conference system for live lectures and discussions.

- 📋 **Choice Polls**
  - Teachers can create polls for feedback and interactive participation.

---

### 🛠️ Tools & Technologies

- **Front-end**
  - HTML5, CSS3, JavaScript (ES2022), jQuery 3.6.3, Bootstrap 5

- **Back-end**
  - PHP 7.0, MySQL Server 8.0.31, XAMPP 8.0.25

- **Development Tools**
  - Apache NetBeans IDE 16, Visual Studio Code 1.74.2

---

### 🗃️ Data Dictionary (Key Tables)

- `admin`, `teacher`, `student`: User info and access levels
- `pending_requests`: New user registrations
- `category`, `course`: Course structuring
- `course_teacher`, `course_student`: Course allocation
- `learning_material`, `quiz`, `assignment`: Content and assessments
- `question`, `question_answers`, `student_quiz_answers`: Quiz mechanics
- `poll`, `poll_answers`, `student_poll_answer`: Interactive polling
- `attendance`, `schedule_list`: Tracking & calendar entries
- `conference`, `conference_participant`: Video session management

📌 Total Tables: **25+** (Complete normalized schema)

---

### 👥 User Dashboards

- 🛡️ **Admin Dashboard**
  - Stats: Pending users, total users
  - Insights: Enrollments, attendance, gender ratios

- 👨‍🏫 **Teacher Dashboard**
  - Course-related actions, student activity, quiz & assignment tracking

- 👨‍🎓 **Student Dashboard**
  - Personalized updates on assigned materials, deadlines, and results

---

### 📑 Reports

- 📌 **TPS Report:** Course-wise attendance within a date range
- 📌 **MIS Reports:**
  - Student absence stats
  - Enrollment statistics (category/course/gender)
  - Attendance summaries (semester-wise, top courses)

---

### 🧪 Testing & Validation

- ✅ **Functional Testing**: For all critical operations (login, registration, content management)
- ✅ **Database Testing**: Accurate record insertion and relationships
- ✅ **Automated Testing**: Scripts for registration, quizzes, categories, and more

---

### 📂 Repository Info

Developed by **Rishabh Mandavlia** | BCA Project | `Athene LMS`

🔗 GitHub: [github.com/rishabhmandavlia/AtheneLMS](https://github.com/rishabhmandavlia/AtheneLMS)

---

> "Empowering Education, One Click at a Time."

---
