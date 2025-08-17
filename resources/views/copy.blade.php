<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/proposal_activity.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main_calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pop_up_calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/activity_form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select_date.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/profile.js') }}"></script>
    <script src="{{ asset('js/main_calendar.js') }}"></script>
    <script src="{{ asset('js/date_event.js') }}"></script>
</head>

<body class="min-h-screen py-0 px-0" style="position: relative;">
    <header style="position: relative; top: 0; left: 0; right: 0; display: flex;">
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
    <main class="max-w-0x5 mx-auto" style="position: relative;">
        <nav class="navigation">
            <a href="/dashboard"><i class="fas fa-home"></i><br> Home</a>
            <a href="/activity"><i class="fas fa-file-alt"></i><br> Activity</a>
            <a href="/group"><i class="fas fa-group"></i><br> Group</a>
            <a href="/evaluation"><i class="fas fa-file-alt"></i><br> Evaluation</a>
            <a href="/event"><i class="fas fa-file-alt"></i><br> Event</a>

        </nav>
        <section style="width: 1200px; position: relative; ">
            <div class="activity_proposal_container" style="display: flex;">
                <h2 style="font-weight: bolder; font-size: larger; display: flex;">Proposal Details</h2>

            </div>
            <div class="activity_proposal_content">
                <div class="min-h-screen flex items-center justify-center p-4" style="width: 100%">
                    <div class="form-container bg-white rounded-lg max-w-4xl w-full overflow-hidden">
                        <div class="relative">
                            <img src="{{ asset('image/sti_logo.jpg') }}" class="header-image">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-32">
                            </div>
                            <h1
                                class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white text-3xl font-bold">
                                Event Application</h1>
                        </div>

                        <div class="p-8">
                            <div id="successMessage" class="success-message p-4 mb-6 rounded hidden">
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-600 mr-2"></i>
                                    <p class="text-green-800 font-medium">Your application has been submitted
                                        successfully!</p>
                                </div>
                            </div>

                            <form id="eventApplicationForm" class="space-y-6">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Club Information</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <label for="clubName"
                                                class="block text-sm font-medium text-gray-700 mb-1">Club Name *</label>
                                            <input type="text" id="clubName" name="clubName"
                                                class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                            <p id="clubNameError" class="error-message hidden">Club name is required</p>
                                        </div>
                                        <div>
                                            <label for="personInCharge"
                                                class="block text-sm font-medium text-gray-700 mb-1">Person in Charge
                                                *</label>
                                            <input type="text" id="personInCharge" name="personInCharge"
                                                class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                                                placeholder="President, Treasurer, etc.">
                                            <p id="personInChargeError" class="error-message hidden">Person in charge
                                                name is required</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Event Details</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <label for="eventTitle"
                                                class="block text-sm font-medium text-gray-700 mb-1">Title of Event
                                                *</label>
                                            <input type="text" id="eventTitle" name="eventTitle"
                                                class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                            <p id="eventTitleError" class="error-message hidden">Event title is required
                                            </p>
                                        </div>
                                        <div>
                                            <label for="objective"
                                                class="block text-sm font-medium text-gray-700 mb-1">Objective *</label>
                                            <textarea id="objective" name="objective" rows="2"
                                                class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"></textarea>
                                            <p id="objectiveError" class="error-message hidden">
                                            </p>
                                        </div>
                                        <div>
                                            <label for="eventType"
                                                class="block text-sm font-medium text-gray-700 mb-1">Type of Event *</label>
                                            <select id="eventType" name="eventType"
                                                class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                                <option value="">Select Event Type</option>
                                                <option value="charity">Charity/Fundraiser</option>
                                                <option value="social">Social Gathering</option>
                                                <option value="educational">Educational</option>
                                                <option value="competition">Competition</option>
                                                <option value="cultural">Cultural</option>
                                                <option value="workshop">Workshop</option>
                                            </select>
                                            <p id="eventTypeError" class="error-message hidden">Please select an event
                                                type</p>
                                        </div>
                                        <div>
                                            <label for="eventDate" id="eventDate" name="eventDate"
                                                class="block text-sm font-medium text-gray-700 mb-1">Date of Event *
                                            </label>
                                            <div style="justify-content: space-between; display: flex; align-items: center; width: 100%;">
                                                <div class="selected-date-display_overlay"
                                                    id="selected-date-display_overlay">
                                                    <span id="selected-date_overlay">None</span>
                                                </div>
                                                <div class="interaction-section">
                                                    <button class="click-trigger" id="clickButton">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- date  -->
                                            <div class="calendar-popup" id="calendarPopup">
                                                <button class="close-btn" id="closeBtn">×</button>
                                                <div class="calendar_body">
                                                    <div class="calendar-container_overlay">
                                                        <div class="calendar-header_overlay">
                                                            <div class="nav-buttons_overlay">
                                                                <button class="nav-button_overlay"
                                                                    id="prev-month_overlay">&lt;</button>
                                                            </div>
                                                            <div class="month-year_overlay" id="month-year_overlay">
                                                                Month Year</div>
                                                            <div class="nav-buttons_overlay">
                                                                <button class="nav-button_overlay"
                                                                    id="next-month_overlay">&gt;</button>
                                                            </div>
                                                        </div>

                                                        <div class="weekdays_overlay">
                                                            <div>Sun</div>
                                                            <div>Mon</div>
                                                            <div>Tue</div>
                                                            <div>Wed</div>
                                                            <div>Thu</div>
                                                            <div>Fri</div>
                                                            <div>Sat</div>
                                                        </div>

                                                        <div class="days-grid_overlay" id="days-grid_overlay"></div>
                                                    </div>
                                                </div>


                                            </div>

                                            <p id="eventDateError" class="error-message hidden">Please select a date</p>
                                        </div>
                                        <div>
                                            <label for="venue"
                                                class="block text-sm font-medium text-gray-700 mb-1">Venue *
                                            </label>
                                            <input type="text" id="venue" name="venue"
                                                class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                            <p id="venueError" class="error-message hidden">Venue is required</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <a href="/activity" class="proposal_create_button">
                                    Submit Application <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <aside class="dashboard_calendar">
            <div style="margin-top: 10px;">
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

            </div>

        </aside>
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
        const clickButton = document.getElementById('clickButton');
        const calendarPopup = document.getElementById('calendarPopup');
        const closeBtn = document.getElementById('closeBtn');

        clickButton.addEventListener('click', () => {
            calendarPopup.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });

        closeBtn.addEventListener('click', () => {
            calendarPopup.style.display = 'none';
            document.body.style.overflow = 'auto';
        });


        // Close popup when pressing Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && calendarPopup.style.display === 'block') {
                calendarPopup.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        document.getElementById('eventApplicationForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Reset error messages
            document.querySelectorAll('.error-message').forEach(el => el.classList.add('hidden'));

            // Validate form
            let isValid = true;

            // Required fields
            const requiredFields = [
                { id: 'clubName', errorId: 'clubNameError' },
                { id: 'personInCharge', errorId: 'personInChargeError' },
                { id: 'eventTitle', errorId: 'eventTitleError' },
                { id: 'objective', errorId: 'objectiveError' },
                { id: 'eventType', errorId: 'eventTypeError' },
                { id: 'eventDate', errorId: 'eventDateError' },
                { id: 'venue', errorId: 'venueError' }
            ];

            requiredFields.forEach(field => {
                const input = document.getElementById(field.id);
                const error = document.getElementById(field.errorId);

                if (!input.value.trim()) {
                    error.textContent = `${input.previousElementSibling.textContent.replace(' *', '')} required`;
                    error.classList.remove('hidden');
                    isValid = false;
                } else if (field.validate && !field.validate(input.value)) {
                    error.classList.remove('hidden');
                    isValid = false;
                }
            });

            if (isValid) {
                // Form is valid - simulate submission
                document.getElementById('successMessage').classList.remove('hidden');


                // Scroll to success message
                document.getElementById('successMessage').scrollIntoView({ behavior: 'smooth' });
            }
        });


    </script>
</body>

</html>