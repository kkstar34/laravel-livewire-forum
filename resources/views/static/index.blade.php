@extends('layouts.app')

@section("content")
    <x-banner>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column">
            <div class="container banner__container">
                <h1 class="text-white font-weight-bold">Questions</h1>
                <p class="banner__description">
                    Ce forum est ouvert à toutes les questions liées à la programmation.
                    <br/>
                    (PHP, Javascript, Java, C++, Ruby, Python, C, Elixir, Dart, Julia...)
                </p>
                <div class="w-100">
                    <input type="text" class="form-control form-control-lg w-100" placeholder="Rechercher des questions" />
                </div>
            </div>
        </div>
    </x-banner>
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between active align-items-center category__item">
                        <a href="#" class="category__link">PHP</a>
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center category__item">
                        <a href="#" class="category__link">Javascript</a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center category__item">
                        <a href="#" class="category__link">Python</a>
                        <span class="badge badge-primary badge-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center category__item">
                        <a href="#" class="category__link">Java</a>
                        <span class="badge badge-primary badge-pill">1</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="d-flex justify-content-between">
                    <span>
                        20 Questions.
                    </span>
                    <a href="#" class="btn btn-primary">Poser une question <i class="la la-arrow-right"></i></a>
                </div>
                <div class="card no-border p-3 my-3">
                    <div class="question ">
                        <h2 class="question__title">Issue with MERN Tutorial </h2>
                        <div class="question__time">Il y a une heure</div>
                        <p class="question__description my-2">
                            I was following along on this tutorial
                            (https://www.digitalocean.com/community/tutorials/getting-started-with-the-mern-stack)
                            I have gotten to the part where you test things in Insomnia and I can Post, Get, Delete.
                            I ...
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="question__answers-count">10 reponses</span>
                            <div>
                                <a href="#" class="question__tags">React</a>
                                <a href="#" class="question__tags">Laravel</a>
                                <a href="#" class="question__tags">NodeJS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card no-border p-3 my-3">
                    <div class="question ">
                        <h2 class="question__title">Issue with MERN Tutorial </h2>
                        <div class="question__time">Il y a une heure</div>
                        <p class="question__description my-2">
                            I was following along on this tutorial
                            (https://www.digitalocean.com/community/tutorials/getting-started-with-the-mern-stack)
                            I have gotten to the part where you test things in Insomnia and I can Post, Get, Delete.
                            I ...
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="question__answers-count">10 reponses</span>
                            <div>
                                <a href="#" class="question__tags">React</a>
                                <a href="#" class="question__tags">Laravel</a>
                                <a href="#" class="question__tags">NodeJS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card no-border p-3 my-3">
                    <div class="question ">
                        <h2 class="question__title">Issue with MERN Tutorial </h2>
                        <div class="question__time">Il y a une heure</div>
                        <p class="question__description my-2">
                            I was following along on this tutorial
                            (https://www.digitalocean.com/community/tutorials/getting-started-with-the-mern-stack)
                            I have gotten to the part where you test things in Insomnia and I can Post, Get, Delete.
                            I ...
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="question__answers-count">10 reponses</span>
                            <div>
                                <a href="#" class="question__tags">React</a>
                                <a href="#" class="question__tags">Laravel</a>
                                <a href="#" class="question__tags">NodeJS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card no-border p-3 my-3">
                    <div class="question ">
                        <h2 class="question__title">Issue with MERN Tutorial </h2>
                        <div class="question__time">Il y a une heure</div>
                        <p class="question__description my-2">
                            I was following along on this tutorial
                            (https://www.digitalocean.com/community/tutorials/getting-started-with-the-mern-stack)
                            I have gotten to the part where you test things in Insomnia and I can Post, Get, Delete.
                            I ...
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="question__answers-count">10 reponses</span>
                            <div>
                                <a href="#" class="question__tags">React</a>
                                <a href="#" class="question__tags">Laravel</a>
                                <a href="#" class="question__tags">NodeJS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
