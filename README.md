# Athene LMS

### Overview

**Athene LMS is a learning management system developed to provide an online educational platform for its users** [1]. The system offers a course management feature designed to reduce the manual work involved in managing learning materials, quizzes, and assignments for students [1]. **It aims to manage academic-related work such as student data, courses, assessments, and results** [1].

### Key Features

The Athene LMS includes a variety of functionalities to support online learning:

*   **Authentication:** The system ensures secure access through registration and login functionalities [2, 3]. All users must be registered and approved by an administrator [3].
*   **Manage System Resources:**
    *   **Categories:** Administrators can create and manage categories (programs) with subcategories (batch years), allowing for organization of courses [2, 4].
    *   **Courses and Learning Materials:** Administrators manage courses and assign them to teachers, while teachers can add and upload study materials [2, 5].
    *   **User Management:** Administrators enroll students in courses (associated with their registration category) and can suspend users [2, 5].
    *   **Assessment:**
        *   **Quizzes:** Teachers can create quizzes to assess student understanding, with options to restrict copy text and right-click, and to review correct answers after submission [6-8].
        *   **Assignments:** Teachers can assign work to students for incremental learning and as a marking parameter, with an option to disable submission after the deadline [6, 8, 9].
    *   **Calendar:** The system features a calendar that automatically displays deadlines and upcoming activities like quizzes and assignments [6, 9].
*   **View Results:** Results for examinations and quizzes are generated automatically or manually, allowing teachers to see student results and students to view their own [6, 9].
*   **Attendance:** Instructors can track student participation by marking attendance for each class and generating reports [6, 10].
*   **Conference:** The system supports conferences, enabling teachers and students to share views, ask questions, and for teachers to deliver lectures [6, 10].
*   **Choice Poll:** Teachers can create choice polls to gather feedback, measure satisfaction, and collect opinions from students or teachers [6, 11].

### Tools and Technologies Used

The Athene LMS is built using the following technologies [12, 13]:

*   **Front-end:**
    *   HTML 5 [12, 13]
    *   CSS 3 [12, 13]
    *   JavaScript ES2022 [3, 12]
    *   jQuery 3.6.3 [3, 12]
    *   Bootstrap 5 [3, 12]
*   **Back-end:**
    *   Server-side scripting - PHP 7.0 [3, 12]
    *   Database – MySQL Server 8.0.31 [3, 12]
    *   XAMPP 8.0.25 [3, 12]
*   **IDE:**
    *   Apache NetBeans IDE 16 [3, 12]
*   **Code Editor:**
    *   Visual Studio Code 1.74.2 [3, 12]

### Data Dictionary

The Athene LMS utilizes a comprehensive database schema with 25 tables [14, 15]. Some key tables include [14, 16-53]:

*   **admin:** Stores administrator details and login credentials [14].
*   **teacher:** Stores teacher details and login credentials, including a suspend status [16].
*   **student:** Stores student details and login credentials, including their semester and suspend status [18].
*   **pending\_requests:** Stores registration details of users awaiting admin approval [21].
*   **category:** Stores details for categorizing and organizing courses [23].
*   **course:** Stores details about individual courses, including descriptions, dates, and associated category and semester [24].
*   **course\_teacher:** Links courses to the teachers assigned to them [27].
*   **course\_student:** Links courses to the students enrolled in them [28].
*   **attendance:** Records student attendance for each class, including date, status, and time [29].
*   **learning\_material:** Stores details of learning content uploaded for courses [30].
*   **quiz:** Stores details about quizzes created in courses, including name, description, and start/end times [32].
*   **question:** Stores individual quiz questions with text, marks, category, and topic [34].
*   **question\_answers:** Stores all possible answers (options) for each quiz question [35].
*   **student\_quiz\_answers:** Records the answers selected by students for each question in a quiz [37].
*   **quiz\_result:** Stores the marks obtained by students in each quiz [38].
*   **assignment:** Stores details of assignments created in courses, including files, deadlines, and total marks [40].
*   **assignment\_submission:** Stores details of assignment submissions by students, including submission time, file path, and obtained marks [42].
*   **poll:** Stores details of choice polls created in courses [44].
*   **poll\_answers:** Stores the answer options for each choice poll [45].
*   **student\_poll\_answer:** Records the option selected by students in a poll [46].
*   **schedule\_list:** Stores events and data displayed in the calendar [47].
*   **student\_attempted\_quiz:** Tracks which students have attempted which quizzes [48].
*   **quiz\_questions:** Links quizzes to the questions they contain [49].
*   **conference:** Stores details about conferences initiated by teachers for specific courses [50].
*   **conference\_participant:** Stores details of students who have joined a conference [52].

### User-wise Dashboards

The system provides role-based dashboards [54-56]:

*   **Admin Dashboard:** Displays user count details (pending registrations, total teachers, total students), enrollment statistics (most enrolled category, course enrollment over time, gender distribution), and attendance summaries (per semester, top 5 courses, present percentage) [57-59].
*   **Teacher Dashboard:** Shows activity details related to their assigned courses [59].
*   **Student Dashboard:** Displays activity details relevant to the courses they are enrolled in [60].

### Reports

The system generates various reports [60-64]:

*   **TPS Report:** Displays the attendance record for a specific course within a specified date range [60].
*   **MIS Report:**
    *   Student Absent Percentage Report: Calculates and displays the percentage of missed classes for students within a specified period [61].
    *   Enrollment Statistics: Shows the most enrolled category, course enrollment over time, and the percentage of male and female students [62].
    *   Attendance Summaries: Displays the total attendance for each BCA semester, the total attendance of the top 5 courses, and the total attendance present percentage for each BCA semester [63].

### Testing

The project underwent various levels of testing [64]:

*   **Test Case Reports:** Functional testing was conducted for key features like login, registration, category management, course management, and quiz management [65-75].
*   **Database Testing:** The accuracy of data insertion for teachers, students, admins, categories, and learning materials was tested [75-82].
*   **Automated Testing:** Automated tests were implemented for registration, login, category, course, quiz creation, and question addition functionalities [82, 83].

# AtheneLMS
