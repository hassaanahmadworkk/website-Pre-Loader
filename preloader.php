<?php
/**
 * Preloader Template
 */
?>

<div id="preloader">
    <div class="loader">
        <!-- Add your preloader animation here -->
        <div class="spinner"></div>
    </div>
</div>

<style>
/* Preloader Styles */
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff; /* Change this to your preferred background color */
    z-index: 9999;
}

.loader {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.spinner {
    border: 8px solid rgba(0, 0, 0, 0.1);
    border-left-color: #000; /* Change this to your preferred spinner color */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var preloader = document.getElementById('preloader');
    window.addEventListener('load', function() {
        preloader.style.display = 'none';
    });
});
</script>
