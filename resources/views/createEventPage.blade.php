<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/createEvent.css') }}">
    <script src="{{ asset('js/profile.js') }}"></script>
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
        <section class="proposal_container">
            <div class="proposal_head">
                <h2 style="font-weight: bolder; font-size: larger;">Proposal Details</h2>
                <div class="proposal_create_button">
                    <a href="/activity" >
                        <span>Submit</span>
                    </a>
                </div>
            </div>
            <div class="proposal_content">
                <div class="proposal_activity">
                    <h2 style="font-weight: bolder; font-size: larger;">Activity Proposal</h2>
                    <div class="proposal_create_button">
                        <a href="/activity/create-activity/activity-proposal">
                            <span>Create</span>
                        </a>
                    </div>
                </div>
                <div class="proposal_activity_holder">
                    <!-- Placeholder for activity details, can be dynamically filled later -->
                </div>
                <div class="proposal_property">
                    <h2 style="font-weight: bolder; font-size: larger;">Property Plan</h2>
                    <div class="proposal_create_button">
                        <a href="/activity/create-activity/activity-property">
                            <span>Create</span>
                        </a>
                    </div>
                </div>
                <div class="proposal_property_holder">
                    <!-- Placeholder for property details, can be dynamically filled later -->
                </div>
                <div class="proposal_budget">
                    <h2 style="font-weight: bolder; font-size: larger;">Budget Plan</h2>
                    <div class="proposal_create_button">
                        <a href="/activity/create-activity/activity-budget">
                            <span>Create</span>
                        </a>
                    </div>
                </div>
                <div class="proposal_budget_holder">
                    <!-- Placeholder for budget details, can be dynamically filled later -->
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