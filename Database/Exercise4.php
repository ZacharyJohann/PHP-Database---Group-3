<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "dbgroup3";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$loginMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM tblaccounts WHERE Username = ? AND Password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $loginMessage = "Login successful. Welcome, $username!";
    } else {
        $loginMessage = "Invalid username or password.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Group 3</title>
    <link href="stylessample.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js" defer></script>
</head>
<body>

<?php include 'Header.php'; ?>

        <div id="navbar-login" class="navbar-login">
            <?php if (!$loginMessage || strpos($loginMessage, 'Invalid') !== false): ?>
                <form action="Exercise4.php" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            <?php endif; ?>

            <?php if ($loginMessage): ?>
                <p><?php echo $loginMessage; ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div id="profile">
        <h1><b>GROUP PROFILE</b></h1>

    
        <div class="names">
            <div>
            <img src="raf.jpeg" alt="Raf" onclick="showInfo('rafael')">
                <p onclick="showInfo('rafael')">Rafael Alvin</p>
            </div>
            <div>
            <img src="eric.jpg" alt="Eric" onclick="showInfo('eric')">
                <p onclick="showInfo('eric')">John Eric</p>
            </div>
            <div>
            <img src="chris.jpg" alt="Christian" onclick="showInfo('jason')">
                <p onclick="showInfo('jason')">Christian Jason</p>
            </div>
            <div>
            <img src="ro.jpeg" alt="Ro" onclick="showInfo('roanne')">
                <p onclick="showInfo('roanne')">Roanne Christine</p>
            </div>
            <div>
            <img src="zach.jpg" alt="Zach" onclick="showInfo('zachary')">
                <p onclick="showInfo('zachary')">Zachary Johann</p>
            </div>
        </div>

        
        <div id="rafael" class="member-info">
            <h2>Leader: Rafael Alvin</h2>
            <p>Hi my name is Rafael Alvin M. Regondola. I am 20 years old and I live in Barangay Langgam San Pedro Laguna and I'm currently studying at 
                Pamantasan Lungsod ng Muntinlupa. My hobby is playing online games, watching movies, listening to songs and singing and dancing sometimes.
                When it comes to computer languages, I can only remember the lessons that we have tackled before in our previous year.</p>
    </br>

    <?php
        $fullname = "Regondola, Rafael Alvin M.";
        $age = 20;
        $birthday = "05/28/2004";
        $height = "5'11";
        $address = "Brgy. Langgam San Pedro Laguna"; 

    echo "Full Name: " . $fullname . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Birthday: " . $birthday . "<br>";
    echo "Height: " . $height . "<br>";
    echo "Address: " . $address . "<br>";
    
        ?>
            <canvas id="rafaelChart"></canvas>
        </div>

        <div id="eric" class="member-info">
            <h2>Member: John Eric</h2>
            <p>Hi guys my name is John Eric Lara, Rañada. My age is 22 . And I live in San Pedro Laguna currently studying at Pamantasan Lungsod ng Muntilupa. 
                My hobby is reading books and playing online games.</p>
                </br>
            </br>
           
            <?php
        $fullname = "Rañada, John Eric L.";
        $age = 22;
        $birthday = "10/22/2001";
        $height = "5'7";
        $address = "Bayan Bayanan San Vicente, phase 5, San Pedro city of Laguna"; 

    echo "Full Name: " . $fullname . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Birthday: " . $birthday . "<br>";
    echo "Height: " . $height . "<br>";
    echo "Address: " . $address . "<br>";
    
        ?>

            <canvas id="ericChart"></canvas>
        </div>

        <div id="jason" class="member-info">
            <h2>Member: Christian Jason</h2>
            <p>Greetings, I am Christian Jason Oh currently an BSIT student at Pamantasan Lungsod ng Muntinlipa with an age of 22, which is kind of far 
                from my home in San Pedro Laguna. My hobbies are playing games, reading manga, and watching animes.</p>

            <?php
        $fullname = "Oh Christian Jason H.";
        $age = 22;
        $birthday = "07/27/2002";
        $height = "5'8";
        $address = "269B J.P Rizal St. Magsaysay San Pedro Laguna"; 

    echo "Full Name: " . $fullname . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Birthday: " . $birthday . "<br>";
    echo "Height: " . $height . "<br>";
    echo "Address: " . $address . "<br>";
    
        ?>
            <canvas id="jasonChart"></canvas>
        </div>

        <div id="roanne" class="member-info">
            <h2>Member: Roanne Christine</h2>
            <p>Hey there! I'm Roanne Christine, a 20 year old born on October 2, 2003. I may be 4'11", but I promise I bring a lot of energy to the table. 
                I live in Alabang Muntinlupa City. My hobbies are building puzzle, any kinds of puzzle will do, watching series and anime, playing mobile games and working. 
                Talking about my knowledge in computer language, I rate myself 8/10 in java, I studied java 2yrs in senior high that's why. 
                While on other languages I think 5/10. except c++ since it is almost like java. 
                So I'm rooting from this subject/teacher to help me.</p>

    <?php
        $fullname = "Mendoza, Roanne Christine";
        $age = 20;
        $birthday = "10/02/2003";
        $height = "4'11";
        $address = "285 Montillano St. Alabang Muntinlupa City"; 

    echo "Full Name: " . $fullname . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Birthday: " . $birthday . "<br>";
    echo "Height: " . $height . "<br>";
    echo "Address: " . $address . "<br>";
    
        ?>
            <canvas id="roanneChart"></canvas>
        </div>

        <div id="zachary" class="member-info">
            <h2>Member: Zachary Johann</h2>
            <p>Hi, I am Zachary Johann, A 3rd year BSIT student at Pamantasan ng Lungsod ng Muntinlupa.     
                    I don't have any hobbies, I usually just play games or just sleep all day. When it comes to being 
                    knowledgeable in computer languages, I only know a few because I have a hard time trying to memorize 
                    different kinds of computer languages, so I hope to learn alot from this course.</p>

        <?php
        $fullname = "Nataño Zachary Johann M.";
        $age = 20;
        $birthday = "12/04/2003";
        $height = "5'10";
        $address = "#8 Mapua St. Phase 4 Pacita Complex San Pedro Laguna"; 

    echo "Full Name: " . $fullname . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Birthday: " . $birthday . "<br>";
    echo "Height: " . $height . "<br>";
    echo "Address: " . $address . "<br>";
    
        ?>
            <canvas id="zacharyChart"></canvas>
        </div>
    </div>
    </body>

    <?php include 'Footer.php'; ?>
    
</html>