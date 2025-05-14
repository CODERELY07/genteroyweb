<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
      <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800">
<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: ./index.php");
        exit();
    }
?>
<header class="fixed top-0 w-full bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4 py-2">
        <nav class="flex flex-wrap items-center justify-between">
            <a href="#home" class="text-xl font-bold">computer<span class="text-green-500">Engineering.</span></a>
            <button class="text-gray-700 md:hidden" onclick="document.getElementById('nav-menu').classList.toggle('hidden')">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            <div id="nav-menu" class="w-full md:flex md:items-center md:justify-end hidden md:block">
                <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6 mt-4 md:mt-0 text-gray-700">
                    <li><a href="#home" class="hover:text-green-600">Home</a></li>
                    <li><a href="#about" class="hover:text-green-600">About</a></li>
                    <li><a href="#services" class="hover:text-green-600">Services</a></li>
                    <li><a href="#team" class="hover:text-green-600">Team</a></li>
                    <li><a href="#contact" class="hover:text-green-600">Contact</a></li>
                    <li><a href="./logout.php" class="hover:text-red-600">Logout</a></li>
                </ul>
                <a href="#book" class="ml-0 md:ml-6 mt-2 md:mt-0 inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Book Workshop</a>
            </div>
        </nav>
    </div>
</header>

<section id="home" data-aos="zoom-in-up" data-aos-duration="1000" class="pt-28 bg-gray-50">
  <div class="min-h-screen flex flex-col justify-center items-center px-4">
    <div class="flex flex-col md:flex-row items-center justify-between gap-8 max-w-6xl w-full text-center md:text-left">
      
      <!-- Text Content -->
      <div class="flex-1">
        <h3 class="text-3xl font-bold text-green-600 mb-4">Code & Circuits: A Computer Engineering Workshop</h3>
        <p class="text-gray-600 mb-6">
          Join us to unlock the world of embedded systems, digital logic, and the innovation that powers today’s smart technology. Get ready to think like an engineer, create like a developer, and build the future from the ground up.
        </p>
        <a href="#contact" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Book Workshop</a>
      </div>
      
      <!-- Image -->
      <div class="flex-1">
        <img src="https://www.appypie.com/dharam_design/wp-content/uploads/2025/05/headd.svg" alt="Workshop" class="w-full max-w-md mx-auto rounded-lg ">
      </div>

    </div>
  </div>
</section>


<section id="about" class="py-16 bg-white">
    <div  class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
        <img data-aos="flip-right" data-aos-duration="2000"  src="images/pic.jpg" alt="About Image" class="w-full rounded-lg">
        <div data-aos="zoom-in-left" data-aos-duration="2000">
            <span class="text-green-600 uppercase font-semibold">about us</span>
            <h3 class="text-2xl font-bold mt-2 mb-4">Building Intelligence Bit by Bit.</h3>
            <p class="text-gray-600 mb-4">Reflects how computers grow smarter—through the layered interaction of code and circuits. From simple binary to complex logic, each bit forms the foundation of digital intelligence.</p>
            <a href="#contact" class="inline-block bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Book Workshop</a>
        </div>
    </div>
</section>

<section id="services" class="py-16 bg-gray-100">
    <h1 class="text-center text-3xl font-bold mb-12">Our Workshop Services</h1>
    <div class="max-w-7xl mx-auto grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4">
        <!-- Service Item Example -->
        <div class="bg-white p-6 rounded-lg shadow-md"  data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/pcb-board.png" alt="PCB" class="w-20 mb-4">
            <h3 class="text-xl font-semibold mb-2">PCB design basics</h3>
            <p class="text-gray-600">Creating a physical layout connecting components using tracks. Includes schematic design, routing, and manufacturing prep.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md"  data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/oracle-data-integrator.png" alt="" class="w-20 mb-4">
            <h3 class="text-xl font-semibold mb-2">IoT and cloud integration</h3>
            <p class="text-gray-600">IoT (Internet of Things) refers to the network of physical devices—like sensors, appliances, or microcontrollers—connected to the internet, collecting and exchanging data. Cloud integration enables these devices to store, process, and analyze data remotely using cloud services (like AWS, Azure, or Google Cloud). This allows for real-time monitoring, control, scalability, and remote access to IoT systems.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md"  data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/embedded-system.png" alt="" class="w-20 mb-4">
            <h3 class="text-xl font-semibold mb-2">Embedded systems debugging</h3>
            <p class="text-gray-600">The process of finding and fixing errors in software or hardware running on microcontrollers or other embedded devices. It involves using tools like serial monitors, logic analyzers, or in-circuit debuggers to monitor behavior, set breakpoints, and track down bugs in real-time, ensuring the system performs as expected.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md"  data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/embedded.png" alt="" class="w-20 mb-4">
            <h3 class="text-xl font-semibold mb-2">C/C++ for embedded development</h3>
            <p class="text-gray-600">C and C++ are widely used in embedded systems due to their efficiency, low-level hardware access, and control over system resources. C is preferred for its simplicity and performance, while C++ adds object-oriented features for more complex applications. These languages enable developers to write firmware that interacts directly with hardware components.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md"  data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/system-integration.png" alt="" class="w-20 mb-4">
            <h3 class="text-xl font-semibold mb-2">Real-time operating systems (RTOS)</h3>
            <p class="text-gray-600">An RTOS is a lightweight operating system designed to run tasks with precise timing and predictability. It manages multiple tasks concurrently, ensuring that high-priority operations meet strict deadlines, making it ideal for embedded systems in robotics, automotive, and industrial control.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md"  data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/programming.png" alt="" class="w-20 mb-4">
            <h3 class="text-xl font-semibold mb-2">FPGA Programming and Digital Logic Design</h3>
            <p class="text-gray-600">FPGA (Field-Programmable Gate Array) programming involves configuring hardware to perform specific tasks using digital logic. Unlike microcontrollers that run sequential code, FPGAs execute operations in parallel, offering high performance for tasks like signal processing, image recognition, and custom hardware control.</p>
        </div>
       
    </div>
</section>

<section class="py-16 bg-white">
    <h1 class="text-center text-3xl font-bold mb-12">Workshop Flow</h1>
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
        <div class="bg-gray-100 p-6 rounded-lg text-center" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/presentation.png" alt="Intro" class="mx-auto w-32 mb-4">
            <h3 class="text-xl font-semibold mb-2">Introduction & Orientation</h3>
            <p class="text-gray-600">Overview, safety, and goals of the session.</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg text-center" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/setup.png" alt="" class="mx-auto w-32 mb-4">
            <h3 class="text-xl font-semibold mb-2">Tools & Setup</h3>
            <p class="text-gray-600">Get hands-on with setting up your development environment—installing software, connecting hardware, and prepping your workspace.</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg text-center" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/learning.png" alt="" class="mx-auto w-32 mb-4">
            <h3 class="text-xl font-semibold mb-2">Learning by Doing</h3>
            <p class="text-gray-600">Dive into coding, building circuits, and experimenting with microcontrollers. Each topic is paired with hands-on activities.</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg text-center" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/project.png" alt="" class="mx-auto w-32 mb-4">
            <h3 class="text-xl font-semibold mb-2">Real-Time Projects</h3>
            <p class="text-gray-600">Apply your skills in mini-projects like sensor-controlled lights or simple automation systems—guided but creatively open.</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg text-center" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/debugging.png" alt="" class="mx-auto w-32 mb-4">
            <h3 class="text-xl font-semibold mb-2">Debug & Improve</h3>
            <p class="text-gray-600">Learn how to troubleshoot, optimize your code, and refine your circuit designs for better performance.</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg text-center" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/feedback.png" alt="" class="mx-auto w-32 mb-4">
            <h3 class="text-xl font-semibold mb-2"> Showcase & Feedback</h3>
            <p class="text-gray-600">Wrap up with a project demo, peer feedback, and tips for continuing your learning journey beyond the workshop.</p>
        </div>
    </div>
</section>

<section id="team" class="py-16 bg-gray-100">
    <h1 class="text-center text-3xl font-bold mb-12">Who's Teaching?</h1>
    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
        <div class="bg-white p-6 rounded-lg shadow text-center" data-aos-duration="2000" data-aos="fade-up">
            <img src="images/pic.jpg" alt="Trainer" class="w-32 h-32 rounded-full mx-auto mb-4">
            <h3 class="text-xl font-semibold">Engr. Sarahlyn Catimbang</h3>
            <p class="text-gray-600">Instructor at CSPC and Professional Computer Engineer</p>
            <span class="text-green-600 font-medium block mt-2">Trainer/Instructor</span>
        </div>
        <div class="bg-white p-6 rounded-lg shadow text-center"      data-aos-duration="2000" data-aos="fade-up">
            <img src="images/pic.jpg" alt="Trainer" class="w-32 h-32 rounded-full mx-auto mb-4">
            <h3 class="text-xl font-semibold">Engr. Tanya Carmela Jovillano</h3>
            <p class="text-gray-600">Computer Engineering Instructor from Camarines Sur Polytechnic Colleges and a Certified Computer Engineer</p>
            <span class="text-green-600 font-medium block mt-2">Trainer/Instructor</span>
        </div>
      
    </div>
</section>

<section id="book" data-aos-duration="2000" data-aos="fade-up" class="py-16 bg-white">
    <div class="max-w-xl mx-auto px-4">
        <?php include('./util/alert.php') ?>
        <h1 class="text-center text-3xl font-bold mb-8">Book Workshop</h1>
        <form action="./action/book.php" method="post" class="space-y-4">
            <div>
                <label class="block mb-1">Your Name:</label>
                <input type="text" name="name" placeholder="Enter your name" class="w-full border border-gray-300 rounded px-4 py-2">
            </div>
            <div>
                <label class="block mb-1">Your Email:</label>
                <input type="email" name="email" placeholder="Enter your email" class="w-full border border-gray-300 rounded px-4 py-2">
            </div>
            <div>
                <label class="block mb-1">Your Number:</label>
                <input type="number" name="number" placeholder="Enter your number" class="w-full border border-gray-300 rounded px-4 py-2">
            </div>
            <div>
                <label class="block mb-1">Schedule Workshop:</label>
                <input type="datetime-local" name="date" class="w-full border border-gray-300 rounded px-4 py-2">
            </div>
            <input type="submit" value="Book Workshop" name="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">
        </form>
    </div>
</section>

<section id="contact" class="py-12 bg-gray-100">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
        <div class="text-center">
            <i class="fas fa-phone text-2xl text-green-500"></i>
            <h3 class="text-lg font-semibold mt-2">Phone Number</h3>
            <p>+6392-225-100</p>
            <p>+1023-465-100</p>
        </div>
        <div class="text-center">
            <i class="fas fa-map-marker-alt text-2xl text-green-500"></i>
            <h3 class="text-lg font-semibold mt-2">Our Address</h3>
            <p>San Miguel, Nabua, Camarines Sur</p>
        </div>
        <div class="text-center">
            <i class="fas fa-clock text-2xl text-green-500"></i>
            <h3 class="text-lg font-semibold mt-2">Opening Hours</h3>
            <p>8:00 am to 5:00 pm</p>
        </div>
        <div class="text-center">
            <i class="fas fa-envelope text-2xl text-green-500"></i>
            <h3 class="text-lg font-semibold mt-2">Email Address</h3>
            <p>cpe@my.cspc.edu.ph</p>
            <p>cspc@my.edu.ph</p>
        </div>
    </div>
    <div class="text-center mt-12 text-sm text-gray-500">&copy; <?php echo date('Y');?> by <span class="text-green-600">Ms. Riben Genteroy</span></div>
</section>
<script src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
     AOS.init();
</script>
</body>
</html>
