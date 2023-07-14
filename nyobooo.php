<!DOCTYPE html>
<html>
<head>
    <title>Travel Kuliner</title>
    <style>
        /* Gaya CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        h1 {
            margin: 0;
        }
        
        nav {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }
        
        nav ul li a {
            color: #333;
            text-decoration: none;
            padding: 5px 10px;
        }
        
        section {
            padding: 20px;
        }
        
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .search-container input[type=text] {
            padding: 8px;
        }
        
        .search-container button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        
        .kuliner-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .kuliner-item h3 {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Travel Kuliner</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Destinasi</a></li>
            <li><a href="#">Kuliner</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>
    
    <section>
        <div class="search-container">
            <form action="search.php" method="GET">
                <input type="text" placeholder="Cari kuliner..." name="keyword">
                <button type="submit">Cari</button>
            </form>
        </div>
        
        <h2>Daftar Kuliner</h2>
        
       
    </section>
    
    <footer>
        &copy; 2023 Travel Kuliner. All rights reserved.
    </footer>
</body>
</html>
