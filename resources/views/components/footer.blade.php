<footer>
    <!-- cards cricate in dinamico con js -->
    <section id="cards">
        <div class="container">

            <div class="container-icons">
                <img src="{{asset('/storage/assets/img/buy-comics-digital-comics.png')}}" alt="digital-comics">
                <h3>DIGITAL COMICS</h3>
            </div>
            <div class="container-icons">
                <img src="{{asset('/storage/assets/img/buy-comics-merchandise.png')}}" alt="dc-merchandise">
                <h3>DC MERCHANDISE</h3>
            </div>
            <div class="container-icons">
                <img src="{{asset('/storage/assets/img/buy-comics-subscriptions.png')}}" alt="subscription">
                <h3>SUBSCRIPTION</h3>
            </div>
            <div class="container-icons">
                <img src="{{asset('/storage/assets/img/buy-comics-shop-locator.png')}}" alt="comic-shop-locator">
                <h3>COMIC SHOP LOCATOR</h3>
            </div>
            <div class="container-icons">
                <img src="{{asset('/storage/assets/img/buy-dc-power-visa.svg')}}" alt="dc-power-visa">
                <h3>DC POWER VISA</h3>
            </div>

        </div>
    </section>

    <!-- links caricati in dinamico -->
    <section id="footer-nav">
        <div class="container" id="bg-overlay">
            <div id="links"> 
                <!-- questa colonna ha una struttura dati ad obj scelta per prova -->
                <div class="column">
                    <h3>DC COMICS</h3>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>

                    <h3>SHOP</h3>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div> 
                <!-- queste altre 2 colonne hanno una struttura dati array di stringhe più semplice rispetto alla precedente -->
                <div class="column">
                    <h3>DC</h3>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshop</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h3>SITES</h3>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> 

    <!-- questa parte è tutta statica rispetto alle precedenti -->
    <section id="footer-social">
        <div class="container">
            <div>
                <a href="#" class="button">SIGN-UP NOW!</a>
            </div>
            <div>
                <span>FOLLOW US</span>
                <span><a href="#"><img src="{{asset('/storage/assets/img/footer-facebook.png')}}" alt=""></a></span>
                <span><a href="#"><img src="{{asset('/storage/assets/img/footer-twitter.png')}}" alt=""></a></span>
                <span><a href="#"><img src="{{asset('/storage/assets/img/footer-youtube.png')}}" alt=""></a></span>
                <span><a href="#"><img src="{{asset('/storage/assets/img/footer-pinterest.png')}}" alt=""></a></span>
                <span><a href="#"><img src="{{asset('/storage/assets/img/footer-periscope.png')}}" alt=""></a></span>
            </div>
        </div>
    </section>


</footer>