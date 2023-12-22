<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/quiz/quiz10.css') }}">
    <title>Quiz Navbar</title>
</head>
<body>
    <div class="navbar">
        <a class="back-arrow" href="/course/webdev/materi/css"><img src="{{ asset('images/back.png') }}" alt="Back"></a>
        <div class="quiz-title">Quiz</div>
    </div>

    <div class="container">
        <p class="container-text">Fundamental Front-End Web > CSS</p>
    </div>

    <div class="question">
        <p class="question-text">10. Apa fungsi dari properti 'z-index' dalam CSS?</p>
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-1">
            <div class="category">
                <label for="dot-1">
                    <span class="gender">Mengatur tinggi elemen</span>
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
                    <span class="gender">Mengatur urutan tumpukan elemen</span>
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
                    <span class="gender">Mengatur warna elemen</span>
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
                    <span class="gender">Mengatur lebar elemen</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <form id="quizForm">
        <button type="button" class="back-button" onclick="goToPreviousPage()">Back</button>
    </form>

    <script>
        function goToPreviousPage() {
            window.history.back();
        }

    </script>
</body>
</html>
