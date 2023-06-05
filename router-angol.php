<!DOCTYPE html>
<html>
<head>
    <title>Router Comparison</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 70%;
            opacity: 0;
            animation: fade-in 1s ease-in-out forwards;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s ease;
        }
        th {
            background-color: #f2f2f2;
        }
        .highlight {
            font-weight: bold;
            background-color: #ffc107;
            transition: background-color 0.3s ease;
        }
        img {
            margin: 20px auto;
            width: 400px;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<?php $header = file_get_contents("./header.html"); echo $header;?>
    <h1>Router Comparison</h1>
    <table>
        <tr>
            <th>Features</th>
            <th>Cisco 1841</th>
            <th>Cisco 1941</th>
        </tr>
        <tr>
            <td>Release Date</td>
            <td>2004</td>
            <td>2009</td>
        </tr>
        <tr>
            <td>Performance</td>
            <td>Lower</td>
            <td class="highlight">Higher</td>
        </tr>
        <tr>
            <td>Interfaces</td>
            <td>Limited options</td>
            <td class="highlight">More options</td>
        </tr>
        <tr>
            <td>Security Features</td>
            <td>Basic</td>
            <td class="highlight">Advanced</td>
        </tr>
        <tr>
            <td>Routing Protocols</td>
            <td>Wide range</td>
            <td class="highlight">Possibly more advanced</td>
        </tr>
        <tr>
            <td>Software Support</td>
            <td>Shorter</td>
            <td class="highlight">Longer</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>Affordable</td>
            <td class="highlight">Expensive</td>
        </tr>
        <tr>
            <td></td>
            <td><img src="1941.jpg" alt="Cisco 1941 Router"></td>
            <td><img src="1841.png" alt="Cisco 1841 Router"></td>
        </tr>
        
    </table>
</body>
</html>