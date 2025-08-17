document.addEventListener('DOMContentLoaded', function () {
    const monthYearEl_overlay = document.getElementById('month-year_overlay');
    const daysGridEl_overlay = document.getElementById('days-grid_overlay');
    const prevMonthBtn_overlay = document.getElementById('prev-month_overlay');
    const nextMonthBtn_overlay = document.getElementById('next-month_overlay');
    const selectedDateEl_overlay = document.getElementById('selected-date_overlay');

    let currentDate_overlay = new Date();
    let currentMonth_overlay = currentDate_overlay.getMonth();
    let currentYear_overlay = currentDate_overlay.getFullYear();

    // Sample events data
    const events = {

    };

    function renderCalendar_overlay(month, year) {
        monthYearEl_overlay.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;
        daysGridEl_overlay.innerHTML = '';

        const firstDay_overlay = new Date(year, month, 1);
        const lastDay_overlay = new Date(year, month + 1, 0);
        const daysInMonth_overlay = lastDay_overlay.getDate();

        const firstDayIndex_overlay = firstDay_overlay.getDay();
        const lastDayIndex_overlay = lastDay_overlay.getDay();
        const daysFromPrevMonth_overlay = firstDayIndex_overlay;
        const daysFromNextMonth_overlay = 6 - lastDayIndex_overlay;

        const totalDaysToShow = daysInMonth_overlay + daysFromPrevMonth_overlay + daysFromNextMonth_overlay;

        // Previous month days
        const prevMonthLastDay_overlay = new Date(year, month, 0).getDate();
        for (let i_overlay = daysFromPrevMonth_overlay - 1; i_overlay >= 0; i_overlay--) {
            const day_overlay = prevMonthLastDay_overlay - i_overlay;
            const dayElement_overlay = createDayElement_overlay(day_overlay, 'other-month_overlay', false, events, month - 1, year);
            daysGridEl_overlay.appendChild(dayElement_overlay);
        }

        // Current month days
        const today_overlay = new Date();
        for (let i_overlay = 1; i_overlay <= daysInMonth_overlay; i_overlay++) {
            const isToday_overlay = i_overlay === today_overlay.getDate() && month === today_overlay.getMonth() && year === today_overlay.getFullYear();
            const dayClass_overlay = isToday_overlay ? 'day_overlay current-month_overlay today_overlay' : 'day_overlay current-month_overlay';
            const dayElement_overlay = createDayElement_overlay(i_overlay, dayClass_overlay, true, events, month, year);
            daysGridEl_overlay.appendChild(dayElement_overlay);
        }

        // Next month days
        for (let i_overlay = 1; i_overlay <= daysFromNextMonth_overlay; i_overlay++) {
            const dayElement_overlay = createDayElement_overlay(i_overlay, 'day_overlay other-month_overlay', false, events, month + 1, year);
            daysGridEl_overlay.appendChild(dayElement_overlay);
        }
    }

    let selectedDates_overlay = [];
    let isSelectingRange_overlay = false;
    function formatDate_overlay(date) {
        if (!date) return '';
        return date.toLocaleDateString('en-US', {
            weekday: 'long',
            month: 'numeric',
            day: 'numeric',
            year: 'numeric'
        });
    }

    function updateSelectedDateDisplay_overlay() {
        if (selectedDates_overlay.length === 0) {
            selectedDateEl_overlay.textContent = 'None';
        } else if (selectedDates_overlay.length === 1) {
            selectedDateEl_overlay.textContent = formatDate_overlay(selectedDates_overlay[0]);
        } else {
            selectedDateEl_overlay.textContent = `from ${formatDate_overlay(selectedDates_overlay[0])} to ${formatDate_overlay(selectedDates_overlay[1])}`;
        }
    }
    function createDayElement_overlay(day, className, isCurrentMonth, events, month, year) {
        const dayElement_overlay = document.createElement('div');
        dayElement_overlay.className = className;
        dayElement_overlay.textContent = day;

        if (isCurrentMonth) {
            const dateStr_overlay = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const dateObj_overlay = new Date(year, month, day);

            if (events[dateStr_overlay]) {
                const eventsDotContainer_overlay = document.createElement('div');
                eventsDotContainer_overlay.className = 'day-events';

                events[dateStr_overlay].forEach(() => {
                    const dot_overlay = document.createElement('div');
                    dot_overlay.className = 'event-dot';
                    eventsDotContainer_overlay.appendChild(dot_overlay);
                });

                dayElement_overlay.appendChild(eventsDotContainer_overlay);
            }

            dayElement_overlay.addEventListener('click', () => {
                if (selectedDates_overlay.length === 0 || selectedDates_overlay.length === 2) {
                    // Start new selection
                    selectedDates_overlay = [dateObj_overlay];
                    dayElement_overlay.classList.add('selected_overlay', 'range-start');
                    isSelectingRange_overlay = true;
                } else if (isSelectingRange_overlay && selectedDates_overlay.length === 1) {
                    // Complete range selection
                    selectedDates_overlay.push(dateObj_overlay);
                    selectedDates_overlay.sort((a, b) => a - b);
                    highlightRange_overlay(daysGridEl_overlay, selectedDates_overlay[0], selectedDates_overlay[1]);
                    isSelectingRange_overlay = false;
                }

                // Update the selected date display
                updateSelectedDateDisplay_overlay();
            });
        } else {
            dayElement_overlay.classList.add('disabled');
        }

        return dayElement_overlay;
    }

    prevMonthBtn_overlay.addEventListener('click', () => {
        currentMonth_overlay--;
        if (currentMonth_overlay < 0) {
            currentMonth_overlay = 11;
            currentYear_overlay--;
        }
        renderCalendar_overlay(currentMonth_overlay, currentYear_overlay);
        updateSelectedDateDisplay_overlay();
    });

    nextMonthBtn_overlay.addEventListener('click', () => {
        currentMonth_overlay++;
        if (currentMonth_overlay > 11) {
            currentMonth_overlay = 0;
            currentYear_overlay++;
        }
        renderCalendar_overlay(currentMonth_overlay, currentYear_overlay);
        selectedDates_overlay = [];
        updateSelectedDateDisplay_overlay();
    });

    function highlightRange_overlay(container_overlay, startDate_overlay, endDate_overlay) {
        const days_overlay = container_overlay.querySelectorAll('.day_overlay.current-month_overlay');

        days_overlay.forEach(dayEl_overlay => {
            const day_overlay = parseInt(dayEl_overlay.textContent);
            const dateStr_overlay = `${currentYear_overlay}-${String(currentMonth_overlay + 1).padStart(2, '0')}-${String(day_overlay).padStart(3, '0')}`;
            const dateObj_overlay = new Date(dateStr_overlay);

            dayEl_overlay.classList.remove('selected_overlay', 'in-range', 'range-start', 'range-end');

            if (dateObj_overlay >= startDate_overlay && dateObj_overlay <= endDate_overlay) {
                dayEl_overlay.classList.add('in-range');

                if (dateObj_overlay.getTime() === startDate_overlay.getTime()) {
                    dayEl_overlay.classList.add('selected_overlay', 'range-start');
                } else if (dateObj_overlay.getTime() === endDate_overlay.getTime()) {
                    dayEl_overlay.classList.add('selected_overlay', 'range-end');
                }
            }
        });
    }

    // Initial render
    renderCalendar_overlay(currentMonth_overlay, currentYear_overlay);
});

