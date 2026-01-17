<nav>
    <ul> 
        <li>
            <a class="<?php echo setActiveCLass('index.php');  ?>"  href="index.php">Home</a>
        </li>


<ul>


    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>

        <!-- Student portal: any logged-in user -->
        <li><a href="student_portal.php">Student Portal</a></li>

        <!-- Admin: only admins -->
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <li><a href="admin.php">Admin</a></li>
        <?php endif; ?>

        <!-- Logout -->
        <li><a href="logout.php">Logout</a></li>

    <?php else: ?>

        <!-- Guests -->
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>

    <?php endif; ?>
</ul>




    </ul>
</nav>