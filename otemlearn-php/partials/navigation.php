<nav>
    <ul>
        <!-- Home: always visible -->
        <li>
            <a class="<?php echo setActiveCLass('index.php'); ?>" href="index.php">Home</a>
        </li>

        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <!-- Admin Navbar -->
                <li><a class="<?php echo setActiveCLass('dashboard.php'); ?>" href="dashboard.php">Dashboard</a></li>
                <li><a class="<?php echo setActiveCLass('student_portal.php'); ?>" href="student_portal.php">Student Portal</a></li>
                <li><a class="<?php echo setActiveCLass('students.php'); ?>" href="students.php">Students</a></li>
                <li><a class="<?php echo setActiveCLass('tests.php'); ?>" href="tests.php">Tests</a></li>
                <li><a class="<?php echo setActiveCLass('subjects.php'); ?>" href="subjects.php">Subjects</a></li>
                <li><a href="logout.php">Logout</a></li>

            <?php else: ?>
                <!-- Student Navbar -->
                <li><a class="<?php echo setActiveCLass('student_portal.php'); ?>" href="student_portal.php">Student Portal</a></li>
                <li><a class="<?php echo setActiveCLass('student_profile.php'); ?>" href="student_profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?> 

        <?php else: ?>
            <!-- Guest Navbar -->
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
