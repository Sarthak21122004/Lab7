  </div><!-- /.container -->

  <!-- Bootstrap JS bundle -->
  <script src="/Lab7/js/bootstrap.bundle.min.js"></script>

  <!-- Theme toggle script -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const html = document.documentElement;
      const buttons = document.querySelectorAll('.theme-btn');

      // Load saved theme or default to dark
      let currentTheme = localStorage.getItem('theme') || 'dark';
      html.setAttribute('data-bs-theme', currentTheme);

      // Highlight the correct button
      buttons.forEach(btn => {
        btn.classList.toggle('active', btn.dataset.theme === currentTheme);
      });

      // Handle button clicks
      buttons.forEach(btn => {
        btn.addEventListener('click', () => {
          currentTheme = btn.dataset.theme;
          html.setAttribute('data-bs-theme', currentTheme);
          localStorage.setItem('theme', currentTheme);

          // Update active state
          buttons.forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
        });
      });
    });
  </script>

</body>
</html>
