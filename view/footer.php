        <footer class="container text-center p-4">
                    <div class="row">
                        <div class="col-md-4 col-12">
                        <img alt="logo a créer" src="./public/IMG/footer.png" class="img_footer">
                        </div>
                        <div class="navbar col-md-4 col-12 text-center">
                            <ul class="navbar-nav text-center">
                                <li class="footer-link nav-item <?php global $footerActive; if ($footerActive =='contactDev'):?>  active <?php endif?>">
                                    <a href="../index.php?action=contactDev" class='nav-link'>Contactez nous</a>
                                </li>
                                <li class="footer-link nav-item <?php global $footerActive; if ($footerActive =='mentions'):?>  active <?php endif?>">
                                    <a href="../index.php?action=mentions" class='nav-link'>Mentions légales</a>
                                </li>    
                            </ul>

                        </div>
                        <div class="col-md-4 col-12">
                        <img alt="Image à trouver" src="./public/IMG/pousse.png" class="pousse">

                        </div>

                    </div>

        </footer>

</div>
    


   
 

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./public/js/app.js"></script>
    <script src="./public/js/lateral.js"></script>
</body>
</html>