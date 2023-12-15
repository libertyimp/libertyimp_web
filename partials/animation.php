<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the profile picture element
        var profilePic = document.querySelector('.profilePic');

        // Add a mousemove event listener
        profilePic.addEventListener('mousemove', function (event) {
            // Calculate tilt angle based on mouse position
            var xOffset = event.clientX - profilePic.getBoundingClientRect().left - (profilePic.offsetWidth / 2);
            var yOffset = event.clientY - profilePic.getBoundingClientRect().top - (profilePic.offsetHeight / 2);
            var tiltX = (yOffset / 8) + 'deg'; // Adjusted tilt
            var tiltY = (xOffset / 8) + 'deg'; // Adjusted tilt

            // Apply tilt transformation
            profilePic.style.transform = 'rotateX(' + tiltX + ') rotateY(' + tiltY + ')';
        });

        // Add a mouseout event listener to reset the tilt
        profilePic.addEventListener('mouseout', function () {
            profilePic.style.transform = 'rotateX(0) rotateY(0)';
        });
    });
</script>