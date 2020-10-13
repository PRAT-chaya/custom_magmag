        <footer class="blog-footer">
            <p>
                <a href="#">Retour en haut de page</a>
            </p>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>

    <script>
        let mobileMenu = document.getElementById("mobileMenuCollapse");
        let mobileMenuButton = document.getElementById('mobile-menu-button');
        mobileMenuButton.addEventListener('click', changeColor);

        function changeColor() {
            if(mobileMenu.className == "collapse") {
                mobileMenuButton.style.color = "#75001f";
            } else if (mobileMenu.className != "collapse") {
                mobileMenuButton.style.color = "#fff";
            }
        }

        function collapseIfMobile() {
            if(window.innerWidth < 768) {
                mobileMenu.className = "collapse";
            } else {
                mobileMenu.className = "collapse.show";
            }
        }
        collapseIfMobile();
        window.addEventListener('resize', collapseIfMobile);
    </script>