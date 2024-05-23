<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="fe_styles.css">
    <script src="fe_script.js"></script>
    <meta name="LibroFact" content="Library of Books">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #000; /* Add border around the table */
        }
        th, td {
            border: 1px solid #000; /* Add border around table cells */
            padding: 8px;
            text-align: left;
        }
    </style>
</head>



<body>
    <div class="background">
        <h2>Hi kdfghsdjkghsdjkfghkjsdhgjksdfhgjkdsfghjkfsdhgjksdfhgjkdfshgjksdfhgjkdsfhgjkdfhgdjksfghsdfjkghdsfjkghdfjkg</h2>
        <br>
        <h2>Hi kdfghsdjkghsdjkfghkjsdhgjksdfhgjkdsfghjkfsdhgjksdfhgjkdfshgjksdfhgjkdsfhgjkdfhgdjksfghsdfjkghdsfjkghdfjkg</h2>
        <br>
        <h2>Hi kdfghsdjkghsdjkfghkjsdhgjksdfhgjkdsfghjkfsdhgjksdfhgjkdfshgjksdfhgjkdsfhgjkdfhgdjksfghsdfjkghdsfjkghdfjkg</h2>
        <br>
        

        <?php
    include "../Code Backend/be_db_conn.php";

    // Check if the connection to the database is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform a query to fetch all books from the database
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    // Check if the query was successful and if there are any rows returned
    if ($result !== false && $result->num_rows > 0) {
        // Display the table header and iterate through the fetched results
        echo "<table>";
        echo "<tr><th>Book ID</th><th>Title</th><th>Author</th><th>ISBN</th><th>Genre</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["book_id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["author"] . "</td>";
            echo "<td>" . $row["isbn"] . "</td>";
            echo "<td>" . $row["genre"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        // If no books are found, display a message
        echo "No books found.";
    }

    // Close the database connection
    $conn->close();
    ?>
    <br>
    <button onclick="window.location.href='be_home.php'">Home</button>
        
    </div> <!-- adding background -->
    <div class="logo"> <!-- add logo -->
        <div class="logo_name" onclick="window.location.href='fe_Libriofact.html'"><p>LibrioFact</p></div>


        
    </div>
    <div class="topbar"><!-- adding topbar,profile button -->
        <div> <button class="button_profile"onclick="window.location.href='fe_profile.html'">Admin</button></div>
        <div class="logo_pic"></div>
    </div> 
    <div class="sidebar"> <!-- adding sidebar, buttons and links -->
        <button class="button_house"id="button_houseID"onclick="window.location.href='fe_dashboard.html'"></button>
        <button class="button_equals" onclick="toggleMenu()"></button>
        <button class="button_booklist"id="button_booklistID"onclick="window.location.href='fe_booklist.php'"></button>
        <button class="button_memberlist"id="button_memberlistID"onclick="window.location.href='fe_memberlist.html'"></button>
        <button class="button_reminder"id="button_reminderID"onclick="window.location.href='fe_reminder.html'"></button>
        <button class="button_loans"id="button_loansID"onclick="window.location.href='fe_loans.html'"></button>
        <button class="button_settings"onclick="window.location.href='fe_settings.html'"></button>
    </div>
    <div class="menu" id="menu"> <!-- adding menu with bullet points -->
        <ul>
            <li><a href="#" id="Dashboard"onclick="window.location.href='fe_dashboard.html'">Dashboard</a></li>
            <li><a href="#" id="Booklist"onclick="window.location.href='fe_booklist.php''">Books</a></li>
            <li><a href="#" id="Memberlist"onclick="window.location.href='fe_memberlist.html'">Members</a></li>
            <li><a href="#" id="Reminder"onclick="window.location.href='fe_loans.html'">Reminder</a></li>
            <li><a href="#" id="Loans"onclick="window.location.href='fe_settings.html'">Loans</a></li>
        </ul>
    </div>
</body>

