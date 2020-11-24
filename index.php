<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <!-- random title  -->
    <div class="wrapper">
        <?php
            session_start();
            $title_name = array(
                'John Doe',
                'Peanut',
                '01001101 01100001 01110100 01110100',
                'Bee',
                '127.0.0.1',
                'User',
                'User',
                'User',
                'User',
                'User',
            );
            $title_selector = rand(0, 9);

            echo '<div class="header"><h1  >Welcome ' . $title_name[$title_selector] . '!</h1>';

            $_SESSION['title_name'] = $title_name[$title_selector];
            
            $logged_in = $_SESSION['login'];

            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logout_btn'])){
                $_SESSION['login'] = false;
                header('refresh:0');
            }

            if( $logged_in) {

        ?>

            <div class="logout">
                <h2> Logged In!</h2>
                <form action="index.php" method ="post">
                    <input type="submit" name="logout_btn" value = "logout">
                </form>
            </div>

        </div>
            <div class="hero">
                <h3>Hi! I'm Aaron Myers.</h3>
                <h4>I'm a computer science student at QUT currently in my final year. I have experience in multiple web development langauges,
                this includes:</h4>
                <div class="list">
                    <ul>
                        <li>PHP</li>
                        <li>Javascript (focusing on React)</li>
                        <li>Python</li>
                    </ul>
                </div> 
                <h4>Along with web development, I have learnt and used many different languages for software development</h4>
                <div class="list" >
                    <ul>
                        <li>Javascript (React Native)</li>
                        <li>C</li>
                        <li>C#</li>
                        <li>MatLab</li>
                    </ul>
                </div>
            </div>
            <div class="links">
                <h4>Below are my favourite programs that I have worked on, as well as the source code to this website</h4>
                <div>
                    <div class="row" >
                        <a href="https://github.com/AaronMyers112/Unify">
                            <div class="item">
                                <h2>Unify</h2>
                                <p>A problem solving app that is currently being created. It is an experimental App hoping to fuse Physcology and Philosphy to 
                                improve peoples lifestyles and problem solving</p>
                            </div>
                        </a>
                        <a href="https://github.com/AaronMyers112/Wiggle-Cats-Emporium">
                            <div class="item">
                                <h2>Wiggle Cats Emporium</h2>
                                <p>One of the first python programs that I created in university, It showcases website scrubbing as well as displaying the data. </p>
                            </div>
                        </a>
                    </div>  
                    <div class="row" >
                        <a href="https://github.com/AaronMyers112/CAB230-frontEnd-updating">
                            <div class="item">
                                <h2>CAB230 front-end</h2>
                                <p>Cab230 website, this website was created in React. The aim of the website was to be able to make requests from a web server 
                                as well as display the data in a table. This also includes a login function, which works as a preventative method for accessing the database</p>
                            </div>
                        </a>
                        <a href="https://github.com/AaronMyers112/CAB230-backEnd_updating/settings">
                        <div class="item">
                            <h2>CAB230 back-end</h2>
                            <p>This is the server that the front-end gathers data from. It was created using Express, Node.js and MySQL</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="source">
                    <a href="https://github.com/AaronMyers112/php-website">
                        <h2>Source Code</h2>
                        <p>This is the source code to this website</p>
                    </a>
                </div>
            </div>
        </div>
        


        <?php 
            }
            else{
        ?>
        </div>
        <div class="login_container">
            <form action="login.php" method="get" class="login">
                <input placeHolder="username" name="username"/>
                <input placeHolder="password" name="password"/>
            <input type="submit" value="login"/>

            </form>
        </div>
        
        <div class="hint">
                <p>the username is the name at the top, and the password is always admin</p>
        </div>
        <?php } ?>
        

    </div>
</body>
</html>