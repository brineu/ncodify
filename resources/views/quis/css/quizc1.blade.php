<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/quiz/quis1.css') }}">
    <title>Quiz Navbar</title>
</head>
<body>
    <div class="navbar">
        <div class="back-arrow"><img src="{{ asset('images/back.png') }}" alt="Back"></div>
        <div class="quiz-title">Quiz</div>
    </div>

    <div class="container">
        <p class="container-text">Fundamental Front-End Web > CSS</p>
    </div>

    <div class="question">
        <p class="question-text">1. CSS merupakan singkatan dari?</p>
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-1">
            <div class="category">
                <label for="dot-1">
                    <span class="gender">Creative Style Sheets</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-2">
            <div class="category">
                <label for="dot-2">
                    <span class="gender">Colorful Style Sheets</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-3">
            <div class="category">
                <label for="dot-3">
                    <span class="gender">Cascading Style Sheets</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-4">
            <div class="category">
                <label for="dot-4">
                    <span class="gender">Colorful Style Sheets</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <form action="{{ route('quiz.css', ['quizNumber' => $quizNumber + 1]) }}">
        <button type="submit" class="next-button">Next</button>
    </form>
    
</body>
</html>
