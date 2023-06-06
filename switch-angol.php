<!DOCTYPE html>
<html>
<head>
  <title>Cisco Switch Comparison</title>
  <link rel="stylesheet" href="zaszlok.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    h1 {
      color: #333;
      font-size: 28px;
      margin-bottom: 10px;
    }
    h2 {
      color: #333;
      font-size: 20px;
      margin-bottom: 10px;
    }
    p {
      color: #666;
      font-size: 16px;
      line-height: 1.5;
    }
    .container {
      display: flex;
      justify-content: space-between;
      margin-bottom: 40px;
    }
    .switch {
      width: 45%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }
    .switch:hover {
      transform: scale(1.05);
    }
    .switch-title {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }
    .switch-features {
      margin-bottom: 20px;
    }
    .switch-features h2 {
      margin-bottom: 5px;
    }
    .switch-use-cases {
      margin-top: 20px;
    }
    .switch-use-cases h2 {
      margin-bottom: 5px;
    }
    .summary {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 5px;
    }
    .summary-title {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }
    .summary-content {
      margin-bottom: 20px;
    }
    .summary-content p:last-child {
      margin-bottom: 0;
    }
    .image-container {
      position: relative;
      width: 300px;
      height: 200px;
      overflow: hidden;
      border-radius: 5px;
    }
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease-in-out;
    }
    .image-container:hover img {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
<?php $header = file_get_contents("./header-angol.html"); echo $header; ?>
<div><a href="switch.php"><img src="mzaszlo.png" alt="Magyar" title="Magyar" class="zaszlok"></a></div>
  <h1>Cisco Switch Comparison</h1>

  <div class="container">
    <div class="switch">
      <h2 class="switch-title">Cisco 2950</h2>
      <div class="switch-features">
        <h2>Features</h2>
        <p>The 2950 switch offers basic Layer 2 switching capabilities. It supports features like VLANs (Virtual LANs), spanning tree protocol, and basic security features like port security and access control lists (ACLs). However, it lacks some advanced features commonly found in newer switches.</p>
      </div>
      <div class="switch-use-cases">
        <h2>Use Cases</h2>
        <p>Due to its lower performance and basic feature set, the 2950 switch is often used in small office or home office (SOHO) environments, or as access switches in smaller networks where performance requirements are not very high. It can be a cost-effective option for basic network setups.</p>
      </div>
      <div class="image-container">
        <img src="2950.jfif" alt="Cisco 2950 Switch">
      </div>
    </div>
  
    <div class="switch">
      <h2 class="switch-title">Cisco 2960</h2>
      <div class="switch-features">
        <h2>Features</h2>
        <p>The 2960 switch provides advanced Layer 2 switching features. It supports features like VLANs, Rapid Spanning Tree Protocol (RSTP), link aggregation, Quality of Service (QoS), and enhanced security features. The 2960 also offers some Layer 3 routing capabilities in certain models, allowing for more flexibility in network design.</p>
      </div>
      <div class="switch-use-cases">
        <h2>Use Cases</h2>
        <p>The 2960 switch is more versatile and suitable for a wider range of environments. It can be used as access switches in medium to large-sized networks, where higher performance and advanced features are required. The Layer 3 capabilities in some models make it useful in environments where basic routing is needed at the edge of the network.</p>
      </div>
      <div class="image-container">
        <img src="2960.png" alt="Cisco 2960 Switch">
      </div>
    </div>
  </div>

  <div class="summary">
    <h2 class="summary-title">Summary</h2>
    <div class="summary-content">
      <p>While the Cisco 2950 and Cisco 2960 switches are both Cisco models, they differ in terms of performance, features, and use cases.</p>
      <ul>
        <li>The 2950 is an older model with Fast Ethernet connectivity and basic Layer 2 features, making it suitable for smaller networks with simpler requirements.</li>
        <li>The 2960 is a newer model with Gigabit Ethernet connectivity, advanced Layer 2 features, and optional Layer 3 routing capabilities, making it more versatile and suitable for medium to large-sized networks with higher performance demands.</li>
      </ul>
    </div>
  </div>
</body>
</html>