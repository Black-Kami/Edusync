<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Application Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/activity_form.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="form-container bg-white rounded-lg max-w-4xl w-full overflow-hidden">
        <div class="relative">
            <img src="{{ asset('image/sti_logo.jpg') }}" class="header-image">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-32"></div>
            <h1 class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white text-3xl font-bold">Event Application</h1>
        </div>
        
        <div class="p-8">
            <div id="successMessage" class="success-message p-4 mb-6 rounded hidden">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-600 mr-2"></i>
                    <p class="text-green-800 font-medium">Your application has been submitted successfully!</p>
                </div>
            </div>
            
            <form id="eventApplicationForm" class="space-y-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Club Information</h2>
                    <div class="space-y-4">
                        <div>
                            <label for="clubName" class="block text-sm font-medium text-gray-700 mb-1">Club Name *</label>
                            <input type="text" id="clubName" name="clubName" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                            <p id="clubNameError" class="error-message hidden">Club name is required</p>
                        </div>
                        <div>
                            <label for="personInCharge" class="block text-sm font-medium text-gray-700 mb-1">Person in Charge *</label>
                            <input type="text" id="personInCharge" name="personInCharge" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                            <p id="personInChargeError" class="error-message hidden">Person in charge name is required</p>
                        </div>
                        <div>
                            <label for="personTitle" class="block text-sm font-medium text-gray-700 mb-1">Title *</label>
                            <input type="text" id="personTitle" name="personTitle" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none" placeholder="President, Treasurer, etc.">
                            <p id="personTitleError" class="error-message hidden">Title is required</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Event Details</h2>
                    <div class="space-y-4">
                        <div>
                            <label for="eventTitle" class="block text-sm font-medium text-gray-700 mb-1">Title of Event *</label>
                            <input type="text" id="eventTitle" name="eventTitle" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                            <p id="eventTitleError" class="error-message hidden">Event title is required</p>
                        </div>
                        <div>
                            <label for="objective" class="block text-sm font-medium text-gray-700 mb-1">Objective *</label>
                            <textarea id="objective" name="objective" rows="2" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"></textarea>
                            <p id="objectiveError" class="error-message hidden">Objective is required</p>
                        </div>
                        <div>
                            <label for="eventType" class="block text-sm font-medium text-gray-700 mb-1">Type of Event *</label>
                            <select id="eventType" name="eventType" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                <option value="">Select Event Type</option>
                                <option value="charity">Charity/Fundraiser</option>
                                <option value="social">Social Gathering</option>
                                <option value="educational">Educational</option>
                                <option value="competition">Competition</option>
                                <option value="cultural">Cultural</option>
                                <option value="workshop">Workshop</option>
                            </select>
                            <p id="eventTypeError" class="error-message hidden">Please select an event type</p>
                        </div>
                        <div>
                            <label for="eventDate" class="block text-sm font-medium text-gray-700 mb-1">Date of Event *</label>
                            <!-- date -->
                            <!--<input type="date" id="eventDate" name="eventDate" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">-->
                            <p id="eventDateError" class="error-message hidden">Please select a date</p>
                        </div>
                        <div>
                            <label for="venue" class="block text-sm font-medium text-gray-700 mb-1">Venue *</label>
                            <input type="text" id="venue" name="venue" class="input-field w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                            <p id="venueError" class="error-message hidden">Venue is required</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="submit-btn px-6 py-3 text-white font-medium rounded-md shadow-sm focus:outline-none">
                        Submit Application <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('eventApplicationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset error messages
            document.querySelectorAll('.error-message').forEach(el => el.classList.add('hidden'));
            
            // Validate form
            let isValid = true;
            
            // Required fields
            const requiredFields = [
                { id: 'clubName', errorId: 'clubNameError' },
                { id: 'personInCharge', errorId: 'personInChargeError' },
                { id: 'personTitle', errorId: 'personTitleError' },
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
                    error.textContent = `${input.previousElementSibling.textContent.replace(' *', '')} is required`;
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
