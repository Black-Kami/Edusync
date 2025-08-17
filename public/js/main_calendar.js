document.addEventListener('DOMContentLoaded', function () {
            // DOM elements
            const monthYearEl = document.getElementById('month-year');
            const daysContainer = document.getElementById('days-container');
            const prevMonthBtn = document.getElementById('prev-month');
            const nextMonthBtn = document.getElementById('next-month');
            // Current date state
            let currentDate = new Date();
            // Render the calendar
            function renderCalendar() {
                // Get the month and year
                const month = currentDate.getMonth();
                const year = currentDate.getFullYear();
                // Update the month-year display
                monthYearEl.textContent = `${getMonthName(month)} ${year}`;
                // Get the first day of the month
                const firstDay = new Date(year, month, 1).getDay();
                // Get the last day of the month
                const lastDay = new Date(year, month + 1, 0).getDate();
                // Get the last day of the previous month
                const prevLastDay = new Date(year, month, 0).getDate();
                // Clear the days container
                daysContainer.innerHTML = '';
                // Previous month days
                for (let i = firstDay; i > 0; i--) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'day other-month';
                    dayElement.textContent = prevLastDay - i + 1;
                    daysContainer.appendChild(dayElement);
                }
                // Current month days
                const today = new Date();
                for (let i = 1; i <= lastDay; i++) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'day';
                    dayElement.textContent = i;
                    // Highlight today
                    if (i === today.getDate() &&
                        month === today.getMonth() &&
                        year === today.getFullYear()) {
                        dayElement.classList.add('today');
                    }

                    daysContainer.appendChild(dayElement);
                }
                // Calculate how many next month days we need to show
                const daysLeft = 42 - (firstDay + lastDay);
                // Next month days
                for (let i = 1; i <= daysLeft; i++) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'day other-month';
                    dayElement.textContent = i;
                    daysContainer.appendChild(dayElement);
                }
            }
            // Helper function to get month name
            function getMonthName(month) {
                const months = [
                    'January', 'February', 'March', 'April',
                    'May', 'June', 'July', 'August',
                    'September', 'October', 'November', 'December'
                ];
                return months[month];
            }
            // Event listeners for navigation
            prevMonthBtn.addEventListener('click', function () {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar();
            });
            nextMonthBtn.addEventListener('click', function () {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar();
            });
            // Initial render
            renderCalendar();
        });

        