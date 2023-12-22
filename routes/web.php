<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beforeLogin');
});
Route::get('/login', function () {
    return view('Login');
});
Route::get('/signup', function () {
    return view('signUp');
});
Route::get('/landing', function () {
    return view('afterLogin');
})->name('landing');
Route::get('/profile', function () {
    return view('profile.Profil');
});
Route::get('/dashboard', function () {
    return view('Dashboard.DashboardAL');
});
Route::prefix('course')->group(function () {
    Route::prefix('python')->group(function () {
        Route::get('/', function () {
            return view('course.CoursePython');
        });
        Route::prefix('materi')->group(function () {
            Route::prefix('ddp')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pydasar', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.dds.quizd{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pydasar');
                });
            });
            Route::prefix('sd')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pydata', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.SDT.quizs{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pydata');
                });
                
            });
            Route::prefix('fm')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pyfunc', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.FM.quizf{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pyfunc');
                });
            });
            Route::prefix('pbo')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pypbo', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.PBO.quizp{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pypbo');
                });
            });
            Route::prefix('mf')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pymanaj', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.MANAJ.quizm{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pymanaj');
                });
            });
            Route::prefix('mdp')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pydb', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.mandat.quizma{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pydb');
                });
            });
            Route::prefix('pd')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pytes', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.pengujian.quizpu{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pytes');
                });
            });
            Route::prefix('ep')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pyeksep', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.eksepsi.quize{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pyeksep');
                });
            });
            Route::prefix('pk')->group(function () {
                Route::get('/', function () {
                    return view('list_course.pyoptim', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.pengoptimalan.quizpe{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.pyoptim');
                });
            });
        });
    });
    Route::prefix('webdev')->group(function () {
        Route::get('/', function () {
            return view('course.CourseWeb');
        });
        Route::prefix('materi')->group(function () {
            Route::prefix('html')->group(function () {
                Route::get('/', function () {
                    return view('list_course.coursehtml', ['quizNumber' => 1]);
                });
                Route::prefix('html-template')->group(function () {
                    Route::get('/1', function () {
                        return view("course_materi.course1");
                    });
                    Route::get('/2', function () {
                        return view("course_materi.course2");
                    });
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.html.quizh{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.html');
                });
            });
            Route::prefix('css')->group(function () {
                Route::get('/', function () {
                    return view('list_course.coursecss', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.css.quizc{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.css');
                });
                
            });
            Route::prefix('js')->group(function () {
                Route::get('/', function () {
                    return view('list_course.coursejs', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.JS.quizj{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.js');
                });
                
            });
            Route::prefix('jquery')->group(function () {
                Route::get('/', function () {
                    return view('list_course.coursejsquery', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.JQUERY.quizjq{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.jquery');
                });
            });
            Route::prefix('bootstrap')->group(function () {
                Route::get('/', function () {
                    return view('list_course.coursebs', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.boot.quizb{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.bs');
                });
            });
            Route::prefix('github')->group(function () {
                Route::get('/', function () {
                    return view('list_course.coursegithub', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.GITHUB.quizg{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.github');
                });
            });
        });
    });
    Route::prefix('uiux')->group(function () {
        Route::get('/', function () {
            return view('course.CourseUiUx');
        });
        Route::prefix('materi')->group(function () {
            Route::prefix('ui')->group(function () {
                Route::get('/', function () {
                    return view('list_course.courseui', ['quizNumber' => 1]);
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.UI.quizi{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.ui');
                });

            });
            Route::prefix('ux')->group(function () {
                Route::get('/', function () {
                    return view('list_course.courseux');
                });
                Route::prefix('quiz')->group(function () {
                    Route::get('/{quizNumber}', function ($quizNumber) {
                        return view("quis.UX.quizx{$quizNumber}", compact('quizNumber'));
                    })->where('quizNumber', '[1-9]|10')->name('quiz.ux');
                });
            });
        });
    });

});