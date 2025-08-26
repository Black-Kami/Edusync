<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main_calendar.css') }}">
    <script src="{{ asset('js/profile.js') }}"></script>
    <script src="{{ asset('js/main_calendar.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .app-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 30px;
        }

        .form-section {
            flex: 1;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-card {
            margin-bottom: 25px;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #fafafa;
            transition: all 0.3s ease;
        }

        .form-card:hover {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 15px;
        }

        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .item-group {
            flex: 1;
            min-width: 300px;
            margin-bottom: 0;
            
        }

        .item-details {
            flex: 1;
            min-width: 100px;
            margin-bottom: 0;
        }
        

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }

        input,
        textarea,
        select {
            width: 80%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            transition: border 0.3s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .button-form-container {
            background-color: #4CAF50;
            min-width: 200px;
            width: fit-content;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .button-form-container:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }

        .daily-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 20px;
        }

        .day-badge {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-header h3 {
            margin: 0;
            color: #333;
        }

        .secondary {
            background-color: #dc3545;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
        }

        .secondary:hover {
            background-color: #c82333;
            transform: translateY(-1px);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 15px;
            }

            .form-group {
                min-width: 100%;
            }

            .app-container {
                flex-direction: column;
            }
        }

        .dashboard_calendar {
            display: flex;
            width: 250px;
            background-color: white;
            padding-left: 5px;
            padding-right: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-left: 5px;

        }

        .button-align {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .remove-button {
            background-color: #c82333;
            min-width: 20px;
            min-height: 20px;
            width: fit-content;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s;
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
        <section style="width: 1200px;">

            <div class="app-container">
                <div class="form-section">
                    <div class="daily-title">
                        <div style="align-items: center; display: flex; gap: 10px;">
                            <h1 style="margin-top: 0;">Property Request Form</h1>
                            <span class="day-badge" id="current-day">Monday</span>
                        </div>
                        <div class="button-form-container">
                            <button onclick="addNewForm()">＋ Add New Request</button>
                        </div>
                    </div>

                    <div id="form-holder"></div>
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
        let formCounter = 0;

        function getCurrentDay() {
            const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const today = new Date();
            return days[today.getDay()];
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('current-day').textContent = getCurrentDay();
        });

        function addNewForm() {
            formCounter++;

            const formHtml = `
                <div class="form-card" id="form-${formCounter}">
                    <div class="form-header">
                        <h3>Day ${formCounter}</h3>
                        <button class="secondary" onclick="removeForm(${formCounter})">Delete</button>
                    </div>
                    
                    <form id="itemRequestForm-${formCounter}" class="space-y-6" onsubmit="return submitForm(event, ${formCounter})">
                        <div id="item-fields-${formCounter}">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Item Information - ${getCurrentDay()}</h2>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div class="form-row">
                                    <div class="item-group">
                                        <label for="item-${formCounter}-1" class="block text-sm font-medium text-gray-700 mb-1">Item *</label>
                                        <input type="text" id="item-${formCounter}-1" name="item" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                        <p id="itemError-${formCounter}-1" class="error-message hidden">Item is required</p>
                                    </div>
                                    <div class="item-details">
                                        <label for="quantity-${formCounter}-1" class="block text-sm font-medium text-gray-700 mb-1">Quantity *</label>
                                        <input type="number" id="quantity-${formCounter}-1" name="quantity" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" min="1">
                                        <p id="quantityError-${formCounter}-1" class="error-message hidden">Quantity is required</p>
                                    </div>
                                    <div class="item-details">
                                        <label for="dateNeeded-${formCounter}-1" class="block text-sm font-medium text-gray-700 mb-1">Date Needed *</label>
                                        <input type="date" id="dateNeeded-${formCounter}-1" name="dateNeeded" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                        <p id="dateNeededError-${formCounter}-1" class="error-message hidden">Please select a date</p>
                                    </div>
                                </div>
                                <div class="remove-button">
                                    <button type="button" onclick="removeItem(${formCounter}, 1)">Delete</button>
                                </div>
                            </div>
                        </div>
                        <div class="button-align">
                            <div class="button-form-container">
                                <button type="button" onclick="addNewItem(${formCounter})">+ Add Another Item</button>
                            </div>
                            <div class="button-form-container">
                                <button type="submit">Submit Request</button>
                            </div>
                            </div>
                    </form>
                </div>
            `;

            document.getElementById('form-holder').insertAdjacentHTML('beforeend', formHtml);
        }

        function addNewItem(formId) {
            const itemFieldsContainer = document.getElementById(`item-fields-${formId}`);
            const itemCount = itemFieldsContainer.children.length + 1; // Count existing items

            const newItemHtml = `
            <div style="display: flex; justify-content: space-between; align-items: center;" id="item-row-${formId}-${itemCount}">
                
                    <div class="form-row" >
                        <div class="item-group">
                            <label for="item-${formId}-${itemCount}" class="block text-sm font-medium text-gray-700 mb-1">Item *</label>
                            <input type="text" id="item-${formId}-${itemCount}" name="item" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                            <p id="itemError-${formId}-${itemCount}" class="error-message hidden">Item is required</p>
                        </div>
                        <div class="item-details">
                            <label for="quantity-${formId}-${itemCount}" class="block text-sm font-medium text-gray-700 mb-1">Quantity *</label>
                            <input type="number" id="quantity-${formId}-${itemCount}" name="quantity" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" min="1">
                            <p id="quantityError-${formId}-${itemCount}" class="error-message hidden">Quantity is required</p>
                        </div>
                        <div class="item-details">
                            <label for="dateNeeded-${formId}-${itemCount}" class="block text-sm font-medium text-gray-700 mb-1">Date Needed *</label>
                            <input type="date" id="dateNeeded-${formId}-${itemCount}" name="dateNeeded" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                            <p id="dateNeededError-${formId}-${itemCount}" class="error-message hidden">Please select a date</p>
                        </div>
                    </div>
                    <div class="remove-button">
                        <button type="button" onclick="removeItem(${formId}, ${itemCount})">Delete</button>
                    </div>
                
                
            </div>
            `;

            itemFieldsContainer.insertAdjacentHTML('beforeend', newItemHtml);
        }

        function removeItem(formId, itemCount) {
            const itemRow = document.getElementById(`item-row-${formId}-${itemCount}`);
            if (itemRow) {
                itemRow.remove();
            }
        }

        function removeForm(formId) {
            if (confirm('Are you sure you want to delete this request?')) {
                document.getElementById(`form-${formId}`).remove();
            }
        }

        function submitForm(event, formId) {
            event.preventDefault();

            // Clear previous errors
            document.querySelectorAll(`#itemRequestForm-${formId} .error-message`).forEach(el => {
                el.style.display = 'none';
            });

            // Get all item fields
            const itemFields = document.querySelectorAll(`#item-fields-${formId} .form-row`);
            let isValid = true;

            itemFields.forEach((field, index) => {
                const item = document.getElementById(`item-${formId}-${index + 1}`).value.trim();
                const quantity = document.getElementById(`quantity-${formId}-${index + 1}`).value.trim();
                const dateNeeded = document.getElementById(`dateNeeded-${formId}-${index + 1}`).value;

                if (!item) {
                    document.getElementById(`itemError-${formId}-${index + 1}`).style.display = 'block';
                    isValid = false;
                }
                if (!quantity) {
                    document.getElementById(`quantityError-${formId}-${index + 1}`).style.display = 'block';
                    isValid = false;
                }
                if (!dateNeeded) {
                    document.getElementById(`dateNeededError-${formId}-${index + 1}`).style.display = 'block';
                    isValid = false;
                }
            });

            if (!isValid) return false;

            // Show success
            alert(`Request ${formId} submitted successfully for ${getCurrentDay()}!`);

            // Reset form
            event.target.reset();
            return false;
        }
    </script>


</body>

</html>