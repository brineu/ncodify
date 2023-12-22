<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/list_course/listcourse.css') }}">
    <title>Bootstrap</title>
</head>
<body>
    <nav class="header">
        <ul class="flex-2">
            <div class="flex-3">
                <div class="logo-container">
                    <img src="{{ asset('images/codify.png') }}" alt="" width="40px">
                    <h5 style="color: #B6B7F9; padding-right: 60px; padding-left:10px">Codify</h5>
                </div>
                <div class="signup">
                    <h5>Product</h5>
                </div>
                <div class="signup">
                    <h5>Mentor</h5>
                </div>
                <div class="signup">
                    <h5>About Us</h5>
                </div>
            </div>
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button class="search-button">
                    <img src="{{ asset('images/search.png') }}" alt="">
                </button>
                <img src="{{ asset('images/userNavbar.png') }}" alt="" width="80px" height="50px" style="cursor: pointer">
            </div>
        </ul>
    </nav>
    
    <div class="container">
        <div class="image-container">
            <img src="{{ asset('images/html.png') }}" alt="" width="150px" style="padding-left: 50px; padding-top: 40px;">
        </div>
        <div class="text-container">
            <h1 style="color: #1B0F4E;">FRONT-END WEB</h1>
        </div>
    </div>    
    <div>
        <h1 style="padding: 50px; color: #1B0F4E;">BOOTSTRAP</h1>
    </div>
    <br>
    <div>
        <h1 style="margin: 0px; padding-left:50px; padding-bottom: 20px;">Lesson Content</h1>
    </div>

    <div class="course-list">
        <div class="course-item">
            <input type="checkbox" id="checkbox1" class="checkbox">
            <label for="checkbox1"></label>
            <img src="{{ asset('images/gelap.png') }}" alt="">
            <h3>Spacing and Sizing</h3>
        </div>
        <div class="course-item">
            <input type="checkbox" id="checkbox2" class="checkbox">
            <label for="checkbox2"></label>
            <img src="{{ asset('images/terang.png') }}" alt="">
            <h3>Background, Border, and Color</h3>
        </div>
        <div class="course-item">
            <input type="checkbox" id="checkbox3" class="checkbox">
            <label for="checkbox3"></label>
            <img src="{{ asset('images/gelap.png') }}" alt="">
            <h3>Display and Position</h3>
        </div>
        <div class="course-item">
            <input type="checkbox" id="checkbox4" class="checkbox">
            <label for="checkbox4"></label>
            <img src="{{ asset('images/terang.png') }}" alt="">
            <h3>Gridding System </h3>
        </div>
        <div class="course-item">
            <input type="checkbox" id="checkbox5" class="checkbox">
            <label for="checkbox5"></label>
            <img src="{{ asset('images/gelap.png') }}" alt="">
            <h3>Bootstrap Components</h3>
        </div>
        <div class="course-item">
            <input type="checkbox" id="checkbox6" class="checkbox">
            <label for="checkbox6"></label>
            <img src="{{ asset('images/terang.png') }}" alt="">
            <h3>Bootstrap Components Modification </h3>
        </div>
        <a class="course-item" style="background-color: #2B187C; color: white;" href="{{ route('quiz.bs', ['quizNumber' => 1]) }}">
            <input type="checkbox" id="checkbox7" class="checkbox">
            <label for="checkbox7"></label>
            <img src="{{ asset('images/quiz.png') }}" alt="">
            <h3>QUIZ</h3>
        </a>
        <!-- Add more course items as needed -->
    </div>
    
    <script src="script.js"></script>
    

</body>
</html>
