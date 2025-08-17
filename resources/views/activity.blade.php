<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/activity_front.css') }}">
    <script src="{{ asset('js/profile.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body class="min-h-screen py-0 px-0">
    <header>
        <div class="logo">EduSync</div>
        <div class="profile" id="profileButton">
            <span class="profile-name">User Name</span>
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/abbee46c-b669-4bbf-bd5c-7c1805161be7.png"
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
        <section class="activity_container">
            <div class="activity_head">
                    <h2 style="font-weight: bolder; font-size: larger;">Activity</h2>

                    <div class="activity_folder_create" >
                        <a href="/activity/create-activity">
                        <span>Create</span></a>
                    </div>
                </div>
                <div class="activity_content">
                    <div class="activity_folder_Name">
                        <h1>Name</h1>
                    </div>
                    <div class="activity_folder_Date_Progress">
                        <h1>Date</h1>
                        <h1>Progress</h1>
                    </div>
                    
                </div><br>
                <div class="activity_folder">
                    <!-- Placeholder for activity folders, can be dynamically filled later -->
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