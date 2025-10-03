<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Somyakriti Architects</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    /* Fullscreen gallery */
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 15px;
      width: 100%;
      height: 100vh;
      padding: 15px;
      box-sizing: border-box;
    }

    .gallery img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      cursor: pointer;
    }

    .gallery img:hover {
      transform: scale(1.08);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    /* Architect Section */
    .about {
      max-width: 1000px;
      margin: 50px auto;
      padding: 30px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      line-height: 1.7;
    }

    .about h1 {
      font-size: 2rem;
      color: #333;
      margin-bottom: 15px;
    }

    .about h2 {
      font-size: 1.5rem;
      color: #666;
      margin-bottom: 20px;
    }

    .about p {
      font-size: 1rem;
      color: #444;
      margin-bottom: 15px;
    }

    .about blockquote {
      font-style: italic;
      font-size: 1.1rem;
      color: #555;
      border-left: 4px solid #ff9900;
      padding-left: 15px;
      margin: 20px 0;
    }
  </style>
</head>
<body>

  <!-- Image Gallery -->
  <section class="gallery">
    <img src="your-image1.jpg" alt="Project 1">
    <img src="your-image2.jpg" alt="Project 2">
    <img src="your-image3.jpg" alt="Project 3">
    <img src="your-image4.jpg" alt="Project 4">
    <img src="your-image5.jpg" alt="Project 5">
  </section>

  <!-- About Section -->
  <section class="about">
    <h1>900+ PROJECTS</h1>
    <h2>AR. AMIT KOTHIWAL (FOUNDER AND PRINCIPAL ARCHITECT)</h2>
    <p>Ar. Amit Kothiwal, (B.Arch- 2005, Aayojan School Of Architecture) is a leading architect based in Jaipur with exceptional expertise in planning, detailing, designing, and coordinating projects across both public and private sectors.</p>
    <p>In 2005, he founded SOMYAKRITI, a multidisciplinary design studio committed to delivering high-quality and inspirational work. Over the years, the firm has built a reputation for its thoughtful approach, blending innovation, sustainability, and functionality to create spaces that truly serve their users.</p>
    <p>Somyakriti offers end-to-end architectural and interior design services, with a focus on Apartments, Institutional Projects, and Housing Developments.</p>
    <blockquote>
      “Every project at Somyakriti reflects a deep respect for the site, the client’s vision. Through thoughtful architecture and master planning, we transform ideas into living, thriving spaces.”  
    </blockquote>
    <p>- AR AMIT KOTHIWAL</p>
  </section>

</body>
</html>
