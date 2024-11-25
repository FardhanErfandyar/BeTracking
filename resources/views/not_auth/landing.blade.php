@extends('base-not-auth')

@section('content')
    
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" type="x-icon" href="{{ asset('images/BT-logo.png') }}">
    <title>BeTracking</title>


    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Keep your finances on track with us!</h1>
                <p>Manage, monitor, and optimize <br> your financial goals.</p>
                <a class="btn-primary" href="{{ route('login') }}">Get Started</a>
            </div>
            <img src="{{ asset('images/heromoney.png') }}" alt="Finance Illustration" class="hero-image">
        </section>

        <!-- Control Your Finance Section -->
        <section id="control-finance">
            <h2>CONTROL YOUR FINANCE</h2>
            <h1>Your partner in keeping every <br> cent accounted for</h1>
            <div class="features">
                <div class="feature">
                    <h3>Connecting</h3>
                    <p>Connecting <br> your e-wallet <br> pocket with us</p>
                </div>
                <div class="feature">
                    <h3>Recording</h3>
                    <p>Recording your <br> income and <br> outcome</p>
                </div>
                <div class="feature">
                    <h3>Visualize</h3>
                    <p>Visualize your <br> balance to <br> know your <br> dream</p>
                </div>
            </div>
        </section>

        <!-- What We Do Section -->
        <section id="what-we-do">
            <h2>WHAT WE DO</h2>
            <p>Let us help you stay in control <br> of your finances</p>
            <div class="do-features">
                <div class="do-feature green">
                    <img src="{{ asset('images/verified_user.png') }}" alt="Secured Icon">
                    <h4>Secured</h4>
                </div>
                <div class="do-feature white">
                    <img src="{{ asset('images/star.png') }}" alt="Trusted Icon">
                    <h4>Trusted</h4>
                </div>
                <div class="do-feature green">
                    <img src="{{ asset('images/account_balance_wallet.png') }}" alt="Integrated Icon">
                    <h4>Integrated</h4>
                </div>
                <div class="do-feature white">
                    <img src="{{ asset('images/article.png') }}" alt="Noted Icon">
                    <h4>Noted</h4>
                </div>
                <div class="do-feature green">
                    <img src="{{ asset('images/assessment.png') }}" alt="Analyzed Icon">
                    <h4>Analyzed</h4>
                </div>
                <div class="do-feature white">
                    <img src="{{ asset('images/insert.png') }}" alt="Linked Icon">
                    <h4>Linked</h4>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team">
            <h2>MEET OUR TEAM</h2>
            <p>Awesome People with <br> Finance Idea Technique Skills</p>
            <div class="team-members">
                <div class="member">
                    <img src="{{ asset('images/yushan.jpg') }}" alt="Yushan">
                    <h3>Yushan</h3>
                </div>
                <div class="member">
                    <img src="{{ asset('images/fardhan.jpg') }}" alt="Fardhan">
                    <h3>Fardhan</h3>
                </div>
                <div class="member">
                    <img src="{{ asset('images/fina.jpg') }}" alt="Fina">
                    <h3>Fina</h3>
                </div>
                <div class="member">
                    <img src="{{ asset('images/jania.jpg') }}" alt="Jania">
                    <h3>Jania</h3>
                </div>
                <div class="member">
                    <img src="{{ asset('images/najem.jpg') }}" alt="Najem">
                    <h3>Najem</h3>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <h2>CONTACT US</h2>
            <p>Stay Connected with Us</p>
            <div class="contact-container">
                <form id="contactForm" action="#" method="POST">
                    <h3>Write us a message</h3>
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
                <div class="contact-image">
                    <img src="{{ asset('images/cs.png') }}" alt="Contact Illustration">
                </div>
            </div>

            <!-- Pop Up -->
            <div id="modalPopup" class="modal hidden">
                <div class="modal-content">
                    <span class="close-btn">&times;</span>
                    <p>Your message has been successfully sent! ^^</p>
                </div>
            </div>

        </section>
    </main>

    <footer>
        <p>© BeTracking, To Be Tracked, 2024.</p>
    </footer>

        <!-- JavaScript Pop Up -->
        <script>
            document.getElementById('contactForm').addEventListener('submit', function (event) {
                event.preventDefault();
        
                const modal = document.getElementById('modalPopup');
                modal.style.display = 'flex';
        
                document.querySelector('.close-btn').addEventListener('click', function () {
                    modal.style.display = 'none';
                });
        
                window.addEventListener('click', function (e) {
                    if (e.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            });
        </script>
</body>
</html>
