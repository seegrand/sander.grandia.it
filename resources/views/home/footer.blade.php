<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Sander Grandia <?php echo date("Y"); ?></span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li>
                        <a href="https://github.com/seegrand" target="blank"><i class="fa fa-github"></i></a>
                    </li>
                    <li>
                        <a href="https://nl.linkedin.com/in/sandergrandia" target="blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/seegrand_/" target="blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="mailto:sander@grandia.it"><i class="fa fa-envelope-o"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('contact_file') }}"><i class="fa fa-user"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 qr">
                <img src="{{ asset('img/contact/qr.png') }}">
            </div>
        </div>
    </div>
</footer>
