<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="Gw5YY62yD9ZB87LpuKGvoPNO1eH6UGmamjf5tnbQ">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
        <link href="http://site:8888/css/index.css" rel="stylesheet">
        <link href="http://site:8888/css/animation.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <title>LangSchool</title>
      <style>
        body {
          padding-left: 210px;
        }
      </style>
    </head>
      <div class="first">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">LangSchool</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/about">       <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choose language</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/eng">English</a>
                    <a class="dropdown-item" href="/gem">German</a>
                    <a class="dropdown-item" href="/rus">Italian</a>
                    <a class="dropdown-item" href="/fran">Spanish</a>
                    <a class="dropdown-item" href="/ukr">Russian</a>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="reg_btn" data-toggle="modal" data-target="#registration_modal" href="#">Create account</a>
            </li>
            <li class="nav-item">     
          </ul>
            <form class="form-inline my-2 my-lg-0" action="auth/login" method="POST">
                <input type="hidden" name="_token" value="Gw5YY62yD9ZB87LpuKGvoPNO1eH6UGmamjf5tnbQ">
                <input class="form-control form-group mr-sm-2" type="text" placeholder="Login" name="username" value="" id="username" aria-label="login">
                <input class="form-control form-group mr-sm-2" type="password" placeholder="Password" name="password" id="password" aria-label="password">
                <button type="submit">Login</button>
            </form>  
        </div>
      </div>
    </nav>
<body>
    <div class="content">
      <div class="w3-container" id="menu">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">ABOUT</span></h5>
        <!--<a class="nav-link w3-button  w3-black w3-center w3-padding-48" href="#"><span class="w3-tag w3-wide">Where</span></a>-->
      <div class="w3-row w3-center w3-card w3-padding">
        <a href="javascript:void(0)" onclick="openDesc(event, 'courses');" id="myLink">
          <div class="w3-col s6 tablink">Courses</div>
        </a>
        <a href="javascript:void(0)" onclick="openDesc(event, 'description');">
          <div class="w3-col s6 tablink">Description</div>
        </a>
      </div>
      <div class="w3-container menu w3-padding-48 w3-card" id="courses" >
        <h5>English</h5>
        <p class="w3-text-grey"> Increasingly popular is the teaching of English online.
          Now you do not need to come to school for classes, you can learn from any point of the planet convenient for you, doing individually with the teacher.</p><br>
    
        <h5>German</h5>
        <p class="w3-text-grey">German is spoken by nearly one hundred million people in central European countries such as Germany, Austria, Switzerland, Luxembourg and Liechtenstein, and is the most widely-spoken first language in the European Union. Germany is internationally recognised as the industrial and economic powerhouse of Europe, so a working knowledge of German is essential for professionals in areas such as business, finance, economics and politics. Whether the student is a beginner or looking to improve their German language skills.</p><br>
    
        <h5>Italian</h5>
        <p class="w3-text-grey">In this language course you will learn the four basic skills (speaking, listening, reading and writing) in the context of major themes in Italian culture. By the end of the course you will be able to describe people, events and situations, both in the present and the past, and you will have acquired the necessary vocabulary to communicate about everyday situations.</p><br>
    
        <h5>Spanish</h5>
        <p class="w3-text-grey">As the second most widely spoken international language, Spanish is nowadays as indispensable as English. Whatever your level of Spanish, your specific expectations, the time you have at your disposal for this Spanish language course, your dream destination, we certainly have a "tailor-made" language course to propose to you. If you wish, for example, to carry out an intensive two-week Spanish course, or a full year of language classes, or even sit an exam, our wide choice of schools, in Spain or in Latin America will certainly allow you to find the ideal option for your Spanish language course.</p><br>
    
        <h5>Russian</h5>
        <p class="w3-text-grey">Studying Russian as a foreign language is becoming more and more popular all over the world, with the language gaining ever-growing prominence in the fields of academia, business and culture. Language Link is delighted to offer a range of Russian courses to suit the needs of students, business professionals, teachers or simply those looking for interesting ideas for a vacation!</p>
      </div>
      <div id="description" class="w3-container menu w3-padding-48 w3-card">
        <h5>Fast progress</h5>
        <p class="w3-text-grey">A high rate of presentation and teaching provides efficiency and quick results</p><br>
    
        <h5>Development of conversational skills</h5>
        <p class="w3-text-grey">We adhere to a communicative technique - our students quickly begin to speak German</p><br>

        <h5>Full immersion</h5>
        <p class="w3-text-grey">The class uses the language exclusively studied, which guarantees complete immersion in the language environment</p><br>
    
        <h5>Overcoming the barrier</h5>
        <p class="w3-text-grey">We will teach you not to be afraid of mistakes and to speak so that you can be understood</p><br>
    
        <h5>Learn to distinguish between speech by ear</h5>
        <p class="w3-text-grey">One of the most important skills. You will learn to hear and understand</p>
      </div>  
      <img src="/img/2.png" style="width:100%;max-width:1000px;margin-top:32px;">
    </div>
  </div>
  </div>

   <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">LANGSCHOOL</span></h5>
                <p>All foreign language courses require some knowledge since some explanations, elaborations and more will be conducted in Danish. This, however, does not apply to English as all English courses (from beginner to advanced) are taught only in English. </p>
                <p>Our classes have a maximum of 20 students in order to provide more time for each student. Often, the number is less. We even offer courses with fewer students (5-10).</p>
                <p>Quality and dedication are important keywords for our classes. In all our classes there is time for every student to get to speak the language, perform exercises and practise every aspect ranging from grammar to pronunciation. All these ensure your success in learning a new foreign language.</p>
                <p>After completing a course, a higher-level course continuing from where you left will usually be available. It is vital to us that our students have the possibility to enrol in new relevant courses; this way we ensure ongoing successful language training and progress.  </p>
        <div class="w3-panel w3-leftbar w3-light-grey">
                <p><i>Our classes take place in the centre of St.Petersburg and in Moscow.</i></p>
                <p>Our language levels are aligned with The European Framework of Reference for Languages.</p>
        </div>
        <img src="/img/1.png" style="width:100%;max-width:1000px" class="w3-margin-top">
            <p><strong>Opening hours:</strong> everyday from 9am to 5pm.</p>
            <p><strong>Address:</strong> 45 Nevsky pr., St.Petersburg, RU</p>
        </div>
    </div>
</div>
    <div class="title m-b-md"></div>
    <div class="modal fade" id="registration_modal" tabindex="-1" role="dialog" aria-labelledby="registration_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <div class="modal-body">
    <form method="POST" action="/auth/register">
                <input type="hidden" name="_token" value="Gw5YY62yD9ZB87LpuKGvoPNO1eH6UGmamjf5tnbQ">
        <div class="registration">
            <h1>Registration</h1>
            <div id="register_output"></div>
            <div class="form-group">
                <p><strong><center>Name</center></strong></p>
                <p><input type="text" name="username" value="" id="username" class="form-control" placeholder="username"></p>
            </div>
        <div class="form-group">
            <p><strong><center>Password</center></strong></p>
            <p><input type="password" name="password" id="password" class="form-control" placeholder="confirm password"></p>
            <p><strong><center>Confirm password</center></strong></p>
            <input type="password" name="password_confirmation" id="password2" class="form-control" placeholder="confirm password"></p>
        </div>
        <div>
            <button type="submit" id="register">Reg</button>
        </div>
            <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        </div>
    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="http://site:8888/js/about.js"></script>
   </div>   
</body>
</html>