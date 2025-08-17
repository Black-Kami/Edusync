<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Popup Interaction</title>
   
    <style>
         :root {
    --primary-color: #4a6bdf;
    --secondary-color: #f8f9fa;
    --text-color: #333;
    --hover-color: #3a56c0;
    --today-color: #ff6b6b;
    --disabled-color: #e9ecef;
    --border-color: #dee2e6;
}
        .interaction-section {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
        }

        .click-trigger {
            padding: 1rem 2rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .click-trigger {
            background: #2ecc71;
            color: white;
        }

        .click-trigger:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .calendar-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            z-index: 100;
            display: none;
            max-width: 1fr;
            max-height: 1fr;
            animation: fadeIn 0.3s ease-out;
        }

        .calendar-popup{
            max-width: 100%;
            max-height: 100%;
            border-radius: 6px;
            display: none;
        }

        .close-btn {
            position: absolute;
            top: -15px;
            right: -15px;
            width: 30px;
            height: 30px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 50%;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: all 0.2s ease;
        }

        .close-btn:hover {
            transform: scale(1.1);
            background: #c0392b;
        }


    </style>
 </head>
<body>
        <div class="interaction-section">
          
            
            <button class="click-trigger" id="clickButton">Click Me</button>
        </div>
   

    <div class="calendar-popup" id="calendarPopup">
        <button class="close-btn" id="closeBtn">×</button>
</div>





    <script>
        
        // Click functionality
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

        

    </script>
</body>
</html>
