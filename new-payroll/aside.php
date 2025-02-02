<link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<aside class="sidebar">
        <div class="logo-details">
            <div class="logo_name">constGenius</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="index.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="sidebarManageemployee.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">employee</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="manage_contributions.php">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">CONTRIBUTIONS</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>
            <li>
                <a href="sidebar.php">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">computation</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>
            <li>
                <a href="manage_overload.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Manage Overload</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Files</span>
                </a>
                <span class="tooltip">Files</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Saved</span>
                </a>
                <span class="tooltip">Saved</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="./images/profile.png" alt="profileImg">
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </aside>