<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Item Request Form</title>
    <style>
       <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

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

        .form-group {
            flex: 1;
            min-width: 200px;
            margin-bottom: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            transition: border 0.3s;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s;
        }

        button:hover {
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
    </style>
</head>
<body>
    <div class="app-container">
        <div class="form-section">
            <div class="daily-title">
                <h1 style="margin-top: 0;">Daily Item Request Form</h1>
                <span class="day-badge" id="current-day">Monday</span>
            </div>
            <button onclick="addNewForm()">＋ Add New Request</button>
            <div id="form-holder"></div>
        </div>
    </div>

    <script>
        let formCounter = 0;

        function getCurrentDay() {
            const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const today = new Date();
            return days[today.getDay()];
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('current-day').textContent = getCurrentDay();
        });

        function addNewForm() {
            formCounter++;
            
            const formHtml = `
                <div class="form-card" id="form-${formCounter}">
                    <div class="form-header">
                        <h3>Request ${formCounter}</h3>
                        <button class="secondary" onclick="removeForm(${formCounter})">Delete</button>
                    </div>
                    
                    <form id="itemRequestForm-${formCounter}" class="space-y-6" onsubmit="return submitForm(event, ${formCounter})">
                        <div id="item-fields-${formCounter}">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Item Information - ${getCurrentDay()}</h2>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="item-${formCounter}-1" class="block text-sm font-medium text-gray-700 mb-1">Item *</label>
                                    <input type="text" id="item-${formCounter}-1" name="item" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                    <p id="itemError-${formCounter}-1" class="error-message hidden">Item is required</p>
                                </div>
                                <div class="form-group">
                                    <label for="quantity-${formCounter}-1" class="block text-sm font-medium text-gray-700 mb-1">Quantity *</label>
                                    <input type="number" id="quantity-${formCounter}-1" name="quantity" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" min="1">
                                    <p id="quantityError-${formCounter}-1" class="error-message hidden">Quantity is required</p>
                                </div>
                                <div class="form-group">
                                    <label for="dateNeeded-${formCounter}-1" class="block text-sm font-medium text-gray-700 mb-1">Date Needed *</label>
                                    <input type="date" id="dateNeeded-${formCounter}-1" name="dateNeeded" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                    <p id="dateNeededError-${formCounter}-1" class="error-message hidden">Please select a date</p>
                                </div>
                                <button type="button" onclick="removeItem(${formCounter}, 1)">Delete</button>
                            </div>
                        </div>
                        <button type="button" onclick="addNewItem(${formCounter})">+ Add Another Item</button>
                        <button type="submit">Submit Request</button>
                    </form>
                </div>
            `;
            
            document.getElementById('form-holder').insertAdjacentHTML('beforeend', formHtml);
        }

        function addNewItem(formId) {
            const itemFieldsContainer = document.getElementById(`item-fields-${formId}`);
            const itemCount = itemFieldsContainer.children.length + 1; // Count existing items

            const newItemHtml = `
                <div class="form-row" id="item-row-${formId}-${itemCount}">
                    <div class="form-group">
                        <label for="item-${formId}-${itemCount}" class="block text-sm font-medium text-gray-700 mb-1">Item *</label>
                        <input type="text" id="item-${formId}-${itemCount}" name="item" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                        <p id="itemError-${formId}-${itemCount}" class="error-message hidden">Item is required</p>
                    </div>
                    <div class="form-group">
                        <label for="quantity-${formId}-${itemCount}" class="block text-sm font-medium text-gray-700 mb-1">Quantity *</label>
                        <input type="number" id="quantity-${formId}-${itemCount}" name="quantity" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" min="1">
                        <p id="quantityError-${formId}-${itemCount}" class="error-message hidden">Quantity is required</p>
                    </div>
                    <div class="form-group">
                        <label for="dateNeeded-${formId}-${itemCount}" class="block text-sm font-medium text-gray-700 mb-1">Date Needed *</label>
                        <input type="date" id="dateNeeded-${formId}-${itemCount}" name="dateNeeded" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                        <p id="dateNeededError-${formId}-${itemCount}" class="error-message hidden">Please select a date</p>
                    </div>
                    <button type="button" onclick="removeItem(${formId}, ${itemCount})">Delete</button>
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
