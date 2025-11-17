<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - LabLog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="about-hero">
    <div class="about-hero-content">
        <h1>About LabLog</h1>
        <p class="about-subtitle">Revolutionizing Lab Attendance Management</p>
    </div>
</div>

<div class="container about-container">
    <section class="about-section">
        <h2>What is LabLog?</h2>
        <p class="about-text">
            <strong>LabLog</strong> is a modern, digital attendance management system specifically designed for college computer labs. 
            Moving away from traditional paper-based registers, LabLog provides a seamless, efficient, and accurate way to track 
            student attendance in laboratory environments. Our system eliminates manual errors, saves valuable time, and provides 
            instant access to attendance records for both students and administrators.
        </p>
    </section>

    <section class="about-section">
        <h2>Key Advancements</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20.0049 2C21.1068 2 22 2.89821 22 3.9908V20.0092C22 21.1087 21.1074 22 20.0049 22H4V18H2V16H4V13H2V11H4V8H2V6H4V2H20.0049ZM8 4H6V20H8V4ZM20 4H10V20H20V4Z"></path></svg></div>
                <h3>Centered Login Experience</h3>
                <p>A hero section introduces LabLog with animated headings, single-color gradients, and adaptive text that guide students into the form seamlessly.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⌚</div>
                <h3>Precise Login/Logout Time Capture</h3>
                <p>Every check-in/out stores a server timestamp, enabling accurate duration calculations and compliance-ready audit trails.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>Advanced Search</h3>
                <p>Administrators can search and filter attendance records by student name, course, semester, section, or group with our powerful search functionality.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Signature Verification</h3>
                <p>The login form requires a confirmation checkbox, ensuring students acknowledge responsibility for submitted data.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M14 21C13.4477 21 13 20.5523 13 20V12C13 11.4477 13.4477 11 14 11H20C20.5523 11 21 11.4477 21 12V20C21 20.5523 20.5523 21 20 21H14ZM4 13C3.44772 13 3 12.5523 3 12V4C3 3.44772 3.44772 3 4 3H10C10.5523 3 11 3.44772 11 4V12C11 12.5523 10.5523 13 10 13H4ZM9 11V5H5V11H9ZM4 21C3.44772 21 3 20.5523 3 20V16C3 15.4477 3.44772 15 4 15H10C10.5523 15 11 15.4477 11 16V20C11 20.5523 10.5523 21 10 21H4ZM5 19H9V17H5V19ZM15 19H19V13H15V19ZM13 4C13 3.44772 13.4477 3 14 3H20C20.5523 3 21 3.44772 21 4V8C21 8.55228 20.5523 9 20 9H14C13.4477 9 13 8.55228 13 8V4ZM15 5V7H19V5H15Z"></path></svg></div>
                <h3>Real-time Session Board</h3>
                <p>The logout page shows who is currently inside the lab with live updates, helping supervisors manage limited lab capacity.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.007 2.10377C8.60544 1.65006 7.08181 2.28116 6.41156 3.59306L5.60578 5.17023C5.51004 5.35763 5.35763 5.51004 5.17023 5.60578L3.59306 6.41156C2.28116 7.08181 1.65006 8.60544 2.10377 10.007L2.64923 11.692C2.71404 11.8922 2.71404 12.1078 2.64923 12.308L2.10377 13.993C1.65006 15.3946 2.28116 16.9182 3.59306 17.5885L5.17023 18.3942C5.35763 18.49 5.51004 18.6424 5.60578 18.8298L6.41156 20.407C7.08181 21.7189 8.60544 22.35 10.007 21.8963L11.692 21.3508C11.8922 21.286 12.1078 21.286 12.308 21.3508L13.993 21.8963C15.3946 22.35 16.9182 21.7189 17.5885 20.407L18.3942 18.8298C18.49 18.6424 18.6424 18.49 18.8298 18.3942L20.407 17.5885C21.7189 16.9182 22.35 15.3946 21.8963 13.993L21.3508 12.308C21.286 12.1078 21.286 11.8922 21.3508 11.692L21.8963 10.007C22.35 8.60544 21.7189 7.08181 20.407 6.41156L18.8298 5.60578C18.6424 5.51004 18.49 5.35763 18.3942 5.17023L17.5885 3.59306C16.9182 2.28116 15.3946 1.65006 13.993 2.10377L12.308 2.64923C12.1078 2.71403 11.8922 2.71404 11.692 2.64923L10.007 2.10377ZM6.75977 11.7573L8.17399 10.343L11.0024 13.1715L16.6593 7.51465L18.0735 8.92886L11.0024 15.9999L6.75977 11.7573Z"></path></svg></div>
                <h3>Audit-ready Data</h3>
                <p>Each record stores course, semester, section, group, login and logout times—enough to reconstruct attendance history during audits.</p>
            </div>
        </div>
    </section>

    <section class="about-section">
        <h2>How It Works</h2>
        <div class="how-it-works">
            <div class="step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>Student Login</h3>
                    <p>Students visit the login page and enter their details: name, course (BCA, BSc, BCom, MCom), semester (auto-loaded based on course), section, and lab group. They confirm the details and submit.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Automatic Recording</h3>
                    <p>The system automatically records the login time and stores all student information in a secure database. Each entry is uniquely identified and tracked.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Lab Activity</h3>
                    <p>Students work in the lab. Administrators can view which students are currently logged in through the logout page, enabling real-time lab monitoring.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>Student Logout</h3>
                    <p>When students complete their lab work, they visit the logout page and click the logout button next to their name. The system automatically records the logout time.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">5</div>
                <div class="step-content">
                    <h3>Admin Management</h3>
                    <p>Administrators can access the admin panel to view complete attendance records, search for specific entries, and manage the database efficiently.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <h2>System Information</h2>
        <div class="info-grid">
            <div class="info-item">
                <strong>Data Recorded:</strong>
                <ul>
                    <li>Student Name</li>
                    <li>Course (BCA, BSc, BCom, MCom)</li>
                    <li>Semester (auto-loaded based on course)</li>
                    <li>Section / Class (A, B, C...)</li>
                    <li>Lab Group (auto-generated like A1, A2, A3...)</li>
                    <li>Login Time (automatic timestamp)</li>
                    <li>Logout Time (automatic timestamp)</li>
                    <li>Digital Signature Confirmation</li>
                </ul>
            </div>
            <div class="info-item">
                <strong>Admin Capabilities:</strong>
                <ul>
                    <li>View complete attendance history</li>
                    <li>Search by any field (name, course, semester, etc.)</li>
                    <li>See active students currently in lab</li>
                    <li>Delete records when necessary</li>
                    <li>Export and analyze attendance data</li>
                    <li>Maintain clean and organized records</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-section">
        <h2>Technology Stack</h2>
        <p class="about-text">
            LabLog is built using modern web technologies to ensure reliability, security, and performance:
        </p>
        <div class="tech-stack">
            <div class="tech-item">
                <strong>PHP</strong> - Server-side scripting for dynamic functionality
            </div>
            <div class="tech-item">
                <strong>MySQL</strong> - Robust database management for secure data storage
            </div>
            <div class="tech-item">
                <strong>HTML5</strong> - Modern markup for structured content
            </div>
            <div class="tech-item">
                <strong>CSS3</strong> - Advanced styling with responsive design
            </div>
            <div class="tech-item">
                <strong>JavaScript</strong> - Interactive features and dynamic form behavior
            </div>
        </div>
    </section>

    <section class="about-section">
        <h2>Benefits</h2>
        <div class="benefits-list">
            <div class="benefit-item">
                <strong>✓ Reduced Errors</strong>
                <p>Automated timestamping and verification eliminates human errors common in manual attendance systems.</p>
            </div>
            <div class="benefit-item">
                <strong>✓ Time Saving</strong>
                <p>Quick login/logout process saves time for both students and administrators, allowing more focus on actual lab work.</p>
            </div>
            <div class="benefit-item">
                <strong>✓ Real-time Access</strong>
                <p>Administrators can instantly see who's in the lab and access complete attendance history at any time.</p>
            </div>
            <div class="benefit-item">
                <strong>✓ Organized Records</strong>
                <p>All attendance data is stored digitally in a structured format, making it easy to search, filter, and analyze.</p>
            </div>
            <div class="benefit-item">
                <strong>✓ Environmentally Friendly</strong>
                <p>Going paperless reduces waste and contributes to a more sustainable approach to lab management.</p>
            </div>
            <div class="benefit-item">
                <strong>✓ Scalable Solution</strong>
                <p>The system can handle multiple labs, hundreds of students, and years of attendance records efficiently.</p>
            </div>
        </div>
    </section>

    <section class="about-section about-cta">
        <h2>Get Started</h2>
        <p class="about-text">
            Ready to experience the future of lab attendance management? Get started today!
        </p>
        <div class="cta-buttons">
            <a href="index.php" class="cta-button primary">Student Login</a>
            <a href="admin.php" class="cta-button secondary">Admin Panel</a>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>

<script src="dark-mode.js"></script>

</body>
</html>
