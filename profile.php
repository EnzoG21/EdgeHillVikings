<!DOCTYPE html>
<html>
<head>
    <title>Player Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/image/ehuvik.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .container5 {
            max-width: 800px;
            margin: 0 auto;
            color: white;
        }

        .dropdown-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .player-card {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: transparent;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-color: white;
        }

        .player-image {
            width: 250px;
            height: 250px;
            margin-right: 20px;
            object-fit: cover;
        }

        .player-details {
            flex: 1;
        }

        .player-details h2 {
            margin-top: 0;
            background-color: transparent;
            color: white;
        }

        .player-details p {
            margin: 5px 0;
            background-color: transparent;
            color: white;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        select, input[type="submit"] {
            color: white;
            background-color: #333;
            border: none;
            padding: 10px 20px;
            margin:10px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        
        select {
            margin-right: 10px;
        }

        input[type="submit"] {
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav class="navbar">
            <!-- LOGO -->
            <div class="logo">
                <img src="image/ehuvik.png" alt="Logo of EHU Vikings">
            </div>
        
            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
        
                <!-- USING CHECKBOX HACK -->
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        
                <!-- NAVIGATION MENUS -->
                <div class="menu">
        
                    <li><a href="index.html">Home</a></li>
                    <li><a href="profile.php">Players</a></li>
        
                    <li class="services">
                        <a href="#">Season</a>
        
                        <!-- DROPDOWN MENU -->
                        <ul class="dropdown">
                            <li><a href="2223seas.html">2022-2023</a></li>
                            <li><a href="2324seas.html">2023-2024</a></li>
                        </ul>
        
                    </li>
                    <li><a href="events.html">Events</a></li>

                    <li class="services">
                        <a href="#">Photos</a>
                    
                        <!-- DROPDOWN MENU -->
                        <ul class="dropdown">
                            <li><a href="2223photos.php">2022-2023</a></li>
                            <li><a href="2324photos.php">2023-2024</a></li>
                        </ul>
                    
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://www.facebook.com/EHUVikings/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/ehuvikings/?hl=en"><i class="fab fa-instagram"></i></a></li>
                </div>
            </ul>
        </nav>

<div class="container5">
    <h1>Player Profile</h1>

    <?php
    // Connect to the MySQL database
    $host = 'localhost';
    $username = 'u637974216_EnzoG';
    $password = 'EHUVikings2223!';
    $database = 'u637974216_players';

    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if a player is selected
    if (isset($_GET['playerId'])) {
        $playerId = $_GET['playerId'];

        // Retrieve player data from the database for the selected player
        $query = "SELECT * FROM players WHERE id = $playerId";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $playerName = $row['name'];
            $playerAge = $row['age'];
            $playerCountry = $row['country'];
            $playerPosition = $row['position'];
            $playerImage = $row['image'];
            $playerNumber = $row['number'];
            $playerSeasons = $row['seasons'];

            // Display player information
            echo "<div class='player-card'>";
            echo "<img class='player-image' src='$playerImage' alt='Player Image'>";
            echo "<div class='player-details'>";
            echo "<p>Name: $playerName</p>";
            echo "<p>Age: $playerAge</p>";
            echo "<p>Country: $playerCountry</p>";
            echo "<p>Position: $playerPosition</p>";
            echo "<p>Number: $playerNumber</p>";
            echo "<p>Seasons: $playerSeasons</p>";
            echo "</div>";
            echo "</div>";

            // Retrieve player statistics from the database for the selected player
            $query_stats = "SELECT * FROM player_stats WHERE player_id = $playerId";
            $result_stats = mysqli_query($conn, $query_stats);

            if (mysqli_num_rows($result_stats) > 0) {
                echo "<h2>Player Statistics</h2>";
                echo "<table>";
                echo "<tr>";
                echo "<th>Season</th>";
                echo "<th>Games Played</th>";
                echo "<th>Touchdowns</th>";
                echo "<th>Passing Yards</th>";
                echo "<th>Rushing Yards</th>";
                echo "<th>Sacks</th>";
                echo "<th>Fumbles</th>";
                echo "<th>Tackles</th>";
                echo "</tr>";

                while ($row_stats = mysqli_fetch_assoc($result_stats)) {
                    $season = $row_stats['season'];
                    $gamesPlayed = $row_stats['games_played'];
                    $touchdowns = $row_stats['touchdowns'];
                    $passingYards = $row_stats['passing_yards'];
                    $rushingYards = $row_stats['rushing_yards'];
                    $sacks = $row_stats['sacks'];
                    $fumbles = $row_stats['fumbles'];
                    $tackles = $row_stats['tackles'];

                    echo "<tr>";
                    echo "<td>$season</td>";
                    echo "<td>$gamesPlayed</td>";
                    echo "<td>$touchdowns</td>";
                    echo "<td>$passingYards</td>";
                    echo "<td>$rushingYards</td>";
                    echo "<td>$sacks</td>";
                    echo "<td>$fumbles</td>";
                    echo "<td>$tackles</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No statistics found for this player.";
            }
        } else {
            echo "Player not found.";
        }
    }

    // Retrieve all player names from the database
    $query = "SELECT id, name FROM players";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Display dropdown menu and "Show Details" button
        echo "<div class='dropdown-container'>";
        echo "<form action='profile.php' method='GET'>";
        echo "<select name='playerId'>";
        echo "<option value='' selected disabled>Select a player</option>";

        while ($row = mysqli_fetch_assoc($result)) {
            $playerId = $row['id'];
            $playerName = $row['name'];

            // Display player names as options in the dropdown menu
            echo "<option value='$playerId'>$playerName</option>";
        }

        echo "</select>";
        echo "<br>";
        echo "<input type='submit' value='Show Details'>";
        echo "</form>";
        echo "</div>";
    } else {
        echo "No players found in the database.";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</div>

<footer>
	<p>&copy; 2023 Edge Hill Vikings. All rights reserved. <a href="privacy.html">Privacy Policy</a></p>
</footer>

</body>
</html>
