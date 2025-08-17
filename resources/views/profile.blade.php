<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;

        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            height: auto;
            color: var(--text);

        }

        header {
            width: auto;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }
        .logo {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 1px;
        }
        /* Profile button container */
        .profile {
            position: relative;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        /* Avatar image styling */
        .profile-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease, border-color 0.3s ease;
        }
        .profile:hover .profile-avatar {
            transform: scale(1.05);
            border-color: rgba(255, 255, 255, 0.6);
        }
        /* Name styling */
        .profile-name {
            color: white;
            font-weight: 500;
            font-size: 0.9rem;
            margin-right: 0.5rem;
        }
        /* Dropdown indicator */
        .profile-indicator {
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid white;
            transition: transform 0.3s ease;
        }
        /* Dropdown menu */
        .profile-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            width: 220px;
            overflow: hidden;
            transform: translateY(10px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 10;
        }
        .profile.active .profile-dropdown {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }
        .profile.active .profile-indicator {
            transform: rotate(180deg);
        }
         /* Dropdown items */
        .profile-dropdown-item {
            padding: 0.8rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: #333;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }
        .profile-dropdown-item:hover {
            background-color: #f5f5f5;
            color: #4a00e0;
        }
        .profile-dropdown-item i {
            width: 20px;
            text-align: center;
            color: #666;
        }
        .profile-dropdown-divider {
            height: 1px;
            background-color: #eee;
            margin: 0.2rem 0;
        }

        main {
            width: 100%;
            display: flex;
            height: auto;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            header {
                padding: 1rem;
            }
            .profile-name {
                display: none;
            }
        }
        .navigation {
            padding-top: 20px;
            width: 100px;
            background-color: rgba(45, 77, 193, 0.8);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .navigation button {
            cursor: pointer;
        }

        .navigation button:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        footer {
            width: 100%;
            background-color: #333;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-text {
            font-size: 0.9rem;
        }

        .footer-links {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

    </style>
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
        <section></section>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const profileButton = document.getElementById('profileButton');

            // Toggle dropdown when profile is clicked
            profileButton.addEventListener('click', function (e) {
                e.stopPropagation();
                this.classList.toggle('active');
            });
            // Close dropdown when clicking outside
            document.addEventListener('click', function () {
                if (profileButton.classList.contains('active')) {
                    profileButton.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>