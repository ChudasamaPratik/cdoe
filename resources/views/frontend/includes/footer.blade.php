<footer class="main-footer">
    <div class="container">
        <div class="total-visitor">
            <h3>Total Visitor: <span>125487</span></h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="about-footer">
                    <div class="footer-logo">
                        <img src="{{ asset('frontend/images/logo-footer.png') }}" alt="">
                    </div>
                    {{-- <div class="footer-social-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="{{ route('about-cdoe') }}">About Us</a></li>
                        <li><a href="{{ route('gallery') }}">Photo Gallery</a></li>
                        {{-- <li><a href="#">Admissions</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Registration</a></li>
                        <li><a href="#">Login</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="footer-links">
                    <h3>Important Links</h3>
                    <ul>
                        <li><a href="https://www.ugc.ac.in/">UGC</a></li>
                        <li><a href="https://www.youtube.com/">YouTube</a></li>
                        <li><a href="https://www.col.org/">Common Wealth of Learning(Col)</a></li>
                        <li><a href="https://deb.ugc.ac.in/">UGC – DEB</a></li>
                        <li><a href="https://www.ignou.ac.in/">Ignou</a></li>
                        <li><a href="https://www.coursera.org/">Coursera</a></li>
                        <li><a href="https://swayam.gov.in/">SWAYAM</a></li>
                        <li><a href="https://swayamprabha.gov.in/">SWAYAM PRABHA</a></li>
                        <li><a href="https://epgp.inflibnet.ac.in/">E- PG Pathshala</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="footer-links mt-50">
                    <ul>
                        <li><a href="https://egyankosh.ac.in/">E- Gyankosh</a></li>
                        <li><a href="https://ess.inflibnet.ac.in/">E- Sindhu</a></li>
                        <li><a href="https://ess.inflibnet.ac.in/">Shodh Sindhu</a></li>
                        <li><a href="https://nta.ac.in/UGCNet">NTA NET</a></li>
                        <li><a href="https://www.aicte-india.org/">AICTE</a></li>
                        <li><a href="https://icssr.org/">ICSSR</a></li>
                        <li><a href="https://www.education.gov.in/">MoE</a></li>
                        <li><a href="https://www.cuhimachal.ac.in/">CUHP</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="footer-links">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="#">Vice Chancellor Secretariat, Central University of Himachal Pradesh, Near
                                HPCA Stadium, Dharamshala, Distt Kangra, Himachal Pradesh - 176215</a></li>
                        <li><b>Phone:</b> <a href="#">01892-229330</a></li>
                        <li><b>Help Desk Email:</b> <a href="#">helpdeskcdoe.cuhp@hpcu.ac.in
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="footer-copyright-text">
                        <p>© 2025 Central University of Himachal Pradesh</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{url('/')}}">home</a></li>
                            <li><a href="about-cdoe.html">about us</a></li>
                            <li><a href="contact.html">contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!---Chat Board Start-->
<div class="chat-board chatbot chat new trending"></div>
<div class="frame-content">
    <div class="widget-position-right sidebar-position-right onlyBubble" id="chatContainer">

        <div class="chat no-clip-path chrome moveFromRight-enter-done">
            <div class="chat-header project-online"
                style="color: rgb(255, 255, 255); background: linear-gradient(135deg, rgb(42, 39, 218) 0%, rgb(0, 204, 255) 100%);">
                <h2 class="oneline"><span>Hi there!</span></h2>
                <button class="material-icons exit-chat ripple tidio-1s5t5ku" id="minimize-button" type="button"
                    aria-label="Minimize" style="color: rgb(255, 255, 255);">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"
                        id="ic-minimize">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z"></path>
                    </svg>
                    <span>Minimize</span>
                </button>
                <div class="offline-message"
                    style="background-image: linear-gradient(135deg, rgba(42, 39, 218, 0.72) 0%, rgba(0, 204, 255, 0.72) 100%);">
                    <span class="online"><span>We are online</span></span>
                </div>
            </div>
            <div id="conversation-group" role="log">
                <div id="messages" aria-live="polite" aria-atomic="false" data-testid="messagesLog">
                    <div class="message message-operator  ">
                        <span class="message-content">Hi</span>
                    </div>
                    <div class="message message-operator bots-quick-replies">
                        <div class="button-wrapper">

                        </div>
                    </div>
                </div>
                <div id="conversation-scroll">
                    <div style="top: 0px; height: 55.8952px;"></div>
                </div>
            </div>
            <div class="input-group ">
                <hr>
                <div class="drag-active-wrapper footer-input-wrapper">
                    <textarea id="chat-input" rows="1" placeholder="Hit the buttons to respond" aria-label="New message"
                        data-testid="newMessageTextarea"></textarea>

                    <button id="SentButton" class="send-icon" title="SentButton" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve">
                            <path fill="#d7d7d7"
                                d="M22,11.7V12h-0.1c-0.1,1-17.7,9.5-18.8,9.1c-1.1-0.4,2.4-6.7,3-7.5C6.8,12.9,17.1,12,17.1,12H17c0,0,0-0.2,0-0.2c0,0,0,0,0,0c0-0.4-10.2-1-10.8-1.7c-0.6-0.7-4-7.1-3-7.5C4.3,2.1,22,10.5,22,11.7z">
                            </path>
                        </svg>
                    </button>

                </div>
            </div>
        </div>

    </div>
    <div id="chat-button" data-testid="widgetButton" class="chat-closed mobile-size__medium">
        <div class="buttonWave"></div>
        <button type="button" id="button-body" data-testid="widgetButtonBody" class="chrome" tabindex="0"
            aria-label="Open chat widget" style="background: linear-gradient(135deg, rgb(3 28 60), rgb(230 57 70));">
            <i class="material-icons type1 for-closed active" style="color: rgb(255, 255, 255);">
                <svg id="ic_bubble" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"></path>
                    <path d="M0 0h24v24H0z" fill="none"></path>
                </svg>
            </i>

        </button>
    </div>
</div>

<!---Chat Board End-->
<div class="sticky-icon">
    <a href="https://cuhimachal.ac.in/index.php/" class="Twitter" target="_blank"><i class="fas fa-home"></i> Home
    </a>
    <a href="https://www.instagram.com/?hl=en" class="Instagram"><i class="fab fa-instagram"></i> Instagram </a>
    <a href="https://www.facebook.com/" class="Facebook"><i class="fab fa-facebook-f"> </i> Facebook </a>
    <a href="https://aboutme.google.com/u/0/?referer=gplus" class="Google"><i class="fab fa-google-plus-g"> </i>
        Google + </a>
    <a href="https://www.youtube.com/" class="Youtube"><i class="fab fa-youtube"></i> Youtube </a>
    <a href="https://twitter.com/login" class="Twitter"><i class="fab fa-twitter"> </i> Twitter </a>
</div>
