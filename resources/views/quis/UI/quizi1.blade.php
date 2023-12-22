<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/quis1.css') }}">
    <title>Quiz Navbar</title>
</head>
<body>
    <div class="navbar">
        <div class="back-arrow"><img src="{{ asset('images/back.png') }}" alt="Back"></div>
        <div class="quiz-title">Quiz</div>
    </div>

    <div class="container">
        <p class="container-text">Mastering UI/UX Designer > UI</p>
    </div>

    <div class="question">
        <p class="question-text">1. Manakah yang bukan merupakan prinsip desain UI?</p>
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-1">
            <div class="category">
                <label for="dot-1">
                    <span class="gender">Kontras</span>
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
                    <span class="gender">Konsistensi</span>
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
                    <span class="gender">Kecelakaan</span>
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
                    <span class="gender">Tanda visual</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <form action="{{ route('quiz.ui', ['quizNumber' => $quizNumber + 1]) }}">
        <button type="submit" class="next-button">Next</button>
    </form>
    
</body>
</html>
