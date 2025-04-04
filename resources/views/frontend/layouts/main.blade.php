<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>@yield('title') | University of Himachal Pradesh</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('frontend/css/slicknav.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
    <link href="{{ asset('frontend/css/all.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/mousecursor.css') }}">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" media="screen">
    @stack('styles')
</head>

<body>
    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('frontend/js/parallaxie.js') }}"></script>
    <script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magiccursor.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/function.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('lib/jquery_validate/jquery.validate.js') }}"></script>
    <script src="{{ asset('lib/jquery_validate/additional-methods.min.js') }}"></script>

    <script>
        const chatButton = document.getElementById("chat-button");
        const chatContainer = document.getElementById("chatContainer");
        const minimizeButton = document.getElementById("minimize-button");
        const chatInput = document.getElementById("chat-input");
        const chatMessages = document.getElementById("conversation-group");
        const sendButton = document.getElementById("SentButton");

        if (chatButton) {
            chatButton.addEventListener("click", function() {
                if (chatContainer) {
                    chatContainer.classList.add("open");
                    chatButton.classList.add("clicked");
                }
            });
        }

        if (minimizeButton) {
            minimizeButton.addEventListener("click", function() {
                if (chatContainer) {
                    chatContainer.classList.remove("open");
                    chatButton.classList.remove("clicked");
                }
            });
        }

        function createMessage(message, isUser = true) {
            const newMessage = document.createElement('div');
            newMessage.classList.add(isUser ? 'sentText' : 'botText');
            newMessage.textContent = message;
            chatMessages.appendChild(newMessage);
            return newMessage;
        }

        function chatbotResponse() {
            const messages = ["Hello!", "How can I assist you?", "Let me know if you have any further questions"];
            const randomIndex = Math.floor(Math.random() * messages.length);
            const message = messages[randomIndex];
            const botMessage = createMessage(message, false);
            botMessage.scrollIntoView();
        }

        chatInput.addEventListener("input", function(event) {
            if (event.target.value) {
                sendButton.classList.add("svgsent");
            } else {
                sendButton.classList.remove("svgsent");
            }
        });

        chatInput.addEventListener("keypress", function(event) {
            if (event.keyCode === 13) {
                const message = chatInput.value;
                chatInput.value = "";
                const userMessage = createMessage(message);
                userMessage.scrollIntoView();
                setTimeout(chatbotResponse, 1000);
                sendButton.classList.add("svgsent");
            }
        });

        if (sendButton) {
            sendButton.addEventListener("click", function() {
                const message = chatInput.value;
                chatInput.value = "";
                const userMessage = createMessage(message);
                userMessage.scrollIntoView();
                setTimeout(chatbotResponse, 1000);
                sendButton.classList.add("svgsent");
            });
        }
    </script>

    @stack('scripts')
</body>

</html>
