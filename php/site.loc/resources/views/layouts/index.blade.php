<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/animation.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
        <title>Hello</title>
        <style>
body {

    padding-left: 130px;


}
 
.flipper{
    padding-bottom: 10px;

}


.flip-container{
    display: flex;
    text-align: center;
    padding-left: 50%;
    justify-content: space-around;
    align-items: stretch;
     background-image: url('https://24tv.ua/resources/photos/news/610x344_DIR/201705/823216.jpg?201705163448');
    background-repeat: no-repeat;
    background-size: cover;
    flex-wrap: wrap;
 
}
.un_fix {
     align-items: right;
}


</style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    
        @section('nav')
        <div class="flex-center position-ref full-height">
            @if (Route::has('auth'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('auth') }}">Login</a>
                        <a href="{{ route('reg') }}">Register</a>
                    @endauth
                </div>
            @endif
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">LangSchool</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/about">About us<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose language
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/eng">English</a>
                    <a class="dropdown-item" href="/gem">Deutch</a>
                    <a class="dropdown-item" href="/rus">Russian</a>
                    <a class="dropdown-item" href="/fran">France</a>
                    <a class="dropdown-item" href="/ukr">Ukrainian</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Courses</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="reg_btn" data-toggle="modal" data-target="#registration_modal" href="#">Create account</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control form-group mr-sm-2" type="text" placeholder="Логин" aria-label="login">
                <input class="form-control form-group mr-sm-2" type="password" placeholder="Пароль" aria-label="password">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Войти</button>
            </form>
        </div>
    </nav>
<body>

    <div class="content">
        <br />
         <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
            <div class="front">
                <p>Уже более 50 лет мы проводим курсы английского языка для детей и помогаем им осуществлять свои мечты с помощью свободного владения иностранным языком. Мы гордимся, что наши студенты получают отличные оценки, успешно сдают экзамены, поступают в престижные мировые вузы и уверенно используют язык в учебе, путешествиях и повседневной жизни.</p>
            </div>
            <div class="back">
                    EF Small Stars™
                    3-6 лет
                    Развитие базовых языковых навыков
                    Игровая форма обучения и социализация ребенка
                    Комплексная подготовка к школе
             </div>
        </div>
        </div> <br/>

    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
            <div class="front">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, id pariatur quidem aperiam esse a ratione voluptatum mollitia velit consequatur? Voluptatem, aliquam tempora corporis rerum a in nobis doloremque itaque.</div>
            </div>
            <div class="back">
                    Lorem ipsum dolor sit amet, consectetur adipi
             </div>
            </div>
        </div>
        <br/>




          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
            <div class="front">
                <div class="un_fix1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, id pariatur quidem aperiam esse a ratione voluptatum mollitia velit consequatur? Voluptatem, aliquam tempora corporis rerum a in nobis doloremque itaque.</div>
            </div>
            <div class="back">
                Lorem ipsum dolor sit amet, consectetur adipi
             </div>
            </div>
        </div>
            <br/>


            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
            <div class="front">
                <div class="un_fix1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, id pariatur quidem aperiam esse a ratione voluptatum mollitia velit consequatur? Voluptatem, aliquam tempora corporis rerum a in nobis doloremque itaque.</div>
            </div>
            <div class="back">
               Lorem ipsum dolor sit amet, consectetur adipi
             </div>
            </div>
        </div> <br/>


            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
            <div class="front">
                <div class="un_fix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, id pariatur quidem aperiam esse a ratione voluptatum mollitia velit consequatur? Voluptatem, aliquam tempora corporis rerum a in nobis doloremque itaque.</div>
            </div>
            <div class="back">
               Lorem ipsum dolor sit amet, consectetur adipi
             </div>
            </div>
        </div>
<br/>

            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
            <div class="front">
                <div class="un_fix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, id pariatur quidem aperiam esse a ratione voluptatum mollitia velit consequatur? Voluptatem, aliquam tempora corporis rerum a in nobis doloremque itaque.</div>
            </div>
            <div class="back">
Lorem ipsum dolor sit amet, consectetur adipi
             </div>
            </div>
        </div> <br/>

            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
            <div class="front">
                <div class="un_fix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, id pariatur quidem aperiam esse a ratione voluptatum mollitia velit consequatur? Voluptatem, aliquam tempora corporis rerum a in nobis doloremque itaque.</div>
            </div>
            <div class="back">
                Lorem ipsum dolor sit amet, consectetur adipi
             </div>
            </div>
        </div>
        <div class="title m-b-md">

        </div>
    </div>
   

        <div class="modal fade" id="registration_modal" tabindex="-1" role="dialog" aria-labelledby="registration_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    @yield('content')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="register">Registr</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/reg-auth.js') }}"></script>
    <script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
</body>


</html>

