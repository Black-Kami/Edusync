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