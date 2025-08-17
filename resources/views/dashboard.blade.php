<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main_calendar.css') }}">
    <script src="{{ asset('js/profile.js') }}"></script>
    <script src="{{ asset('js/main_calendar.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body class="min-h-screen py-0 px-0">
    <header>
        <div class="logo">EduSync</div>
        <div class="profile" id="profileButton">
            <span class="profile-name">User Name</span>
            <img src="{{ asset('image/user_logo.jpg') }}"
                alt="Profile picture of User Name, a professional headshot against a neutral background"
                class="profile-avatar">
            <div class="profile-indicator"></div>
            <div class="profile-dropdown">
                <a href="/profile" class="profile-dropdown-item">
                    <span>My Profile</span>
                </a>
                <a href="#" class="profile-dropdown-item">
                    <span>Settings</span>
                </a>
                <a href="#" class="profile-dropdown-item">
                    <span>Messages</span>
                </a>
                <div class="profile-dropdown-divider"></div>
                <a href="#" class="profile-dropdown-item">
                    <span>Log Out</span>
                </a>
            </div>
        </div>
    </header>
    <main class="max-w-0x5 mx-auto">
        <nav class="navigation">
            <a href="/dashboard"><i class="fas fa-home"></i><br> Home</a>
            <a href="/activity"><i class="fas fa-file-alt"></i><br> Activity</a>
            <a href="/group"><i class="fas fa-group"></i><br> Group</a>
            <a href="/evaluation"><i class="fas fa-file-alt"></i><br> Evaluation</a>
            <a href="/event"><i class="fas fa-file-alt"></i><br> Event</a>
        </nav>
        <section class="article_container">
            <div class="dashboard" >
                <div class="dashboard_head">
                    <h2 style="font-weight: bolder;">Dashboard</h2>
                </div>
                <div class="calendar">
                    <div class="calendar-header">
                        <button id="prev-month">&lt;</button>
                        <div id="month-year">Month Year</div>
                        <button id="next-month">&gt;</button>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days" id="days-container">
                        <!-- Days will be inserted here by JavaScript -->
                    </div>
                </div>
                <div class="pending">
                    <?php
$pendingEvents = 0;
echo "<h1 style='font-size: 24px; padding: 5px 15px; text-align: left;'>Pending Events {$pendingEvents}</h1>";
                 
                    ?>
                </div>
                <div class="current_event">
                    <?php
$currentEvent = 0;
echo "<h1 style='font-size: 24px; padding: 5px 15px; text-align: left;'>Current Event {$currentEvent}</h1>";
                    ?>
                </div>
                <div class="upcoming_event">
                    <?php
$upcomingEvent = 0;
echo "<h1 style='font-size: 24px; padding: 5px 15px; text-align: left;'>Upcoming Event {$upcomingEvent}</h1>";
                    ?>
                </div>
                <div class="event_status">
                    <div class="event_folder_status">
                        <h2 style="font-weight: bolder">Event</h2>
                       <div class="folder_status" >
                       </div>
                    </div>
                    <div class="event_folder">
                        <div class="folder_status " >
                        </div>
                    </div>
                </div>
            </div>   
        </section>
    </main>
    <footer>
        <div class="footer-text">
            @copy; 2025 <strong>EduSync</strong>.
        </div>
        <div class="footer-links">
            <span>Resources</span>
            <span>About</span>
        </div>
    </footer>
    
</body>
</html>