<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/index.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Chat</title>
</head>
<body>
<section class="msger">
    <header class="msger-header">
        <div class="msger-header-title">
            <i class="fas fa-comment-alt"></i> LLM Chat
        </div>
        <div class="msger-header-options">
            <span><i class="fas fa-cog"></i></span>
        </div>
    </header>

    <main class="msger-chat">
        <div class="msg left-msg">
            <div
                class="msg-img"
                style="background-image: url(https://openclipart.org/image/800px/307415)"
            ></div>

            <div class="msg-bubble">
                <div class="msg-info">
                    <div class="msg-info-name">LLM BOT</div>
                </div>

                <div class="msg-text">
                    Салам! Каалагандай текст жазыңыз.
                </div>
            </div>
        </div>

    </main>

    <form class="msger-inputarea">
        <input type="text" class="msger-input" placeholder="Enter your message...">
        <button type="submit" class="msger-send-btn">Send</button>
    </form>
</section>


<script src="{{asset('assets/index.js')}}"></script>
</body>
</html>
