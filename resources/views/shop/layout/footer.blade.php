
<!-- Footer -->
<footer class="bg-gray-800 py-6">
    <div class="container mx-auto px-6 text-center text-white">
        <p>&copy; {{ date('Y') }} Shop. All rights reserved.</p>
    </div>
</footer>

<!-- Script for Mobile Menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</body>

</html>
