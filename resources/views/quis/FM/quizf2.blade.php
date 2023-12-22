<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/quiz/quiz2.css') }}">
    <title>Quiz Navbar</title>
</head>
<body>
    <div class="navbar">
        <div class="back-arrow"><img src="{{ asset('images/back.png') }}" alt="Back"></div>
        <div class="quiz-title">Quiz</div>
    </div>

    <div class="container">
        <p class="container-text">Python Beyond Basic > Fungsi dan Modularitas</p>
    </div>

    <div class="question">
        <p class="question-text">2. Apa yang dimaksud dengan "return" dalam konteks fungsi?</p>
    </div>

    <div class="options-box">
        <div class="options">
            <input type="radio" name="gender" id="dot-1">
            <div class="category">
                <label for="dot-1">
                    <span class="gender">Menampilkan output ke layar</span>
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
                    <span class="gender">Menghentikan eksekusi fungsi</span>
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
                    <span class="gender">Mengembalikan nilai dari fungsi</span>
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
                    <span class="gender">Menyimpan nilai ke variabel lokal</span>
                </label>
            </div>
        </div>
        <!-- Tambahkan opsi jawaban lainnya di sini -->
    </div>

    <form id="quizForm">
        <button type="button" class="back-button" onclick="goToPreviousPage()">Back</button>
        <button type="button" class="next-button" onclick="goToNextPage()">Next</button>
    </form>

    <script>
        function goToPreviousPage() {
            window.history.back();
        }

        function goToNextPage() {
            var nextUrl = "{{ route('quiz.pyfunc', ['quizNumber' => $quizNumber + 1]) }}";

            window.location.href = nextUrl;
        }
    </script>
</body>
</html>
