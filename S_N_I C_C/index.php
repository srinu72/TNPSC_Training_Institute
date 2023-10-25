<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'srinivasanrmca021@gmail.com'; /* Owner email id  */
    $mail->Password = 'bvlxqeldtsjdzrxj';/* Owner App password */
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name); 
    $mail->addAddress($email); /* Owner email id */
    $mail->Subject = ($name);
    $mail->Body = "Name : ($name) 'Email id : '($email) 'Phone No : '($subject) " ;
    $mail->send();

    header("Location: ./index.php?=email_sent!");
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/allencasul/lonica@d9dbccfa5b0a4666760e4f72b28effa775c56857/css/cdn/lonica.css" integrity="sha256-E1S8yAbnRZ6uM4sA6NMSgTyoDsdK1ZCjBYF3lqXqv6Q=" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1e8d61f212.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
  /* Optional custom styles for the slider */
  .slider-container {
      max-width: 100%;
      overflow: hidden;
  }

  .slider {
      display: flex;
      transition: transform 0.3s ease-in-out;
  }

  .slider-item {
      min-width: 100%;
      flex-shrink: 0;
      max-height: 150px;
  }
  .exm{
    opacity:0.5;
  }
</style>
</head>

<body class="bg-black backdrop-opacity-10">
  <nav class="p-5 bg-gray-600  rounded-2x1 m-2 shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class=" font-sans text-2xl text-white uppercase  px-2 cursor-pointer from-neutral-300">
        Sree Narayana Institute
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static mx-2 absolute bg-gray-600 mb-2 text-gray-50 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      
      <li class="mx-4 my-6 md:my-0">
        <a href="#course" class="text-xl hover:text-black  duration-500 font-semibold">Courses</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#about" class="text-xl hover:text-black  duration-500 font-semibold">About</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#register" class="text-xl hover:text-black  duration-500 font-semibold ">Join US</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#contact" class="text-xl hover:text-black  duration-500 font-semibold">Contact</a>
      </li>
      
<h2 class=""></h2>
    </ul>
  </nav>

 <section class="mt-52 md:mt-3 lg:mt-3 xl:mt-3" >
  <div class="relative bg-cover bg-center h-64 md:h-80 lg:h-96 xl:h-120">
    <!-- Background Image -->
    <img src="./section.webp" alt="Background Image" class=" exm absolute inset-0 w-full h-full object-cover" />
  
    <!-- Text Overlay -->
    <div class="text-white absolute inset-0 flex">
      <ul class="text-white">
        <li class="text-white mt-7 text-xs md:text-0.5xl xl:text-xl font-serif">TNPSC Group Exam Coaching Center.</li>
        <li class="text-white mt-7 text-xs md:text-0.5xl xl:text-xl font-serif"> Scholarship (Fee Reduction ) For SC/ST/MBC Categories .</li>
        <li class="mt-7 md:text-0.5xl lg:text-0.5xl xl:text-xl text-xs font-serif"> And Other Categories Secured More Than 90% Mark In X and XII Standards.</li>
        <li class="mt-7 md:text-0.5xl text-xs xl:text-xl font-serif">Flexible / Convenient Timings For Working Professional Also To Attend The Classes.</li>
      </ul>
    </div>
  </div>
 </section>
 
 <section id="course" class=" bg-black p-5 rounded-2xl ">
  <h2 class="text-lg text-center semi-bold uppercase font-semibold text-white">| Courses Offered |</h2>
  <div class=" grid grid-cols-2 mt-5 text-center text-white sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 ">
      <label class="uppercase font-semibold mt-7">Group - 1</label>
      <label class="uppercase font-semibold mt-7">Group - 2 </label>
      <label class="uppercase font-semibold mt-7">Group - 3 </label>
      <label class="uppercase font-semibold mt-7">Group - 4 </label>
  </div>
</section>

 <footer>
  <!-- Container for demo purpose -->
<div id="about" class="container my-24 mx-auto md:px-6 ">
<!-- Section: Design Block -->
<section class="mb-32 text-center">
<h2 class="mb-10 text-3xl font-bold text-fuchsia-50">
  About <u class="text-primary dark:text-primary-400"> Us</u>
</h2>
<p class="text-neutral-300 dark:text-neutral-300 capitalize mb-10 ">secured 16 years of academic experience in teaching sectors.Best guidance for all competitive exams.</p>
<div class="grid gap-x-6 md:grid-cols-3 lg:gap-x-12 ">
  <div class="mb-12 md:mb-0">
    <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary bg-gray-200"">
      <i class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true" style="color: rgb(5, 5, 5); font-size:medium;"></i>
      <span class="sr-only">Saving. Hang tight!</span>
    </div>
    <h5 class="mb-4 text-lg font-bold text-fuchsia-50 ">Overview</h5>
    <p class="text-neutral-500 dark:text-neutral-300">
      Aims at giving the student to clear the competitive
       exam through effective coaching with respect to
        tamilnadu public sector commission (TNPSC) exams.   </p>
  </div>

  <div class="mb-12 md:mb-0 ">
    <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary bg-gray-200">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00040a}</style><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>

    </div>
    <h5 class="mb-4 text-lg font-bold text-fuchsia-50">Vision</h5>
    <p class="text-neutral-500 dark:text-neutral-300">
      To obtain placement in public sector
      through hardwork and dedication in
      academics,effective learning system.
    </p>
  </div>

  <div class="mb-6 md:mb-0 ">
    <div class="mb-6 inline-block rounded-md bg-primary-100 p-4 text-primary bg-gray-200"  style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.6;">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
        stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
      </svg>
    </div>
    <h5 class="mb-4 text-lg font-bold text-fuchsia-50">MISSION</h5>
    <p class="text-neutral-500 dark:text-neutral-300">
      To acquire deep and sound knowledge in academics .
      To face the competitive exams with confidence.
    </p>
  </div>
</div>
</section>
</div>
<section class=" flex flex-col items-center justify-center" id="register">
  <div class="relative inline-block">
    <button style="font-weight: 500;" id="showFormButton" class="bg-gray-200 text-black px-6 py-3 rounded-full transform transition-transform duration-300 hover:translate-x-4 hover:bg-green-500 hover:shadow-lg">
        Register Now <i class="fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true" style="font-size: medium;"></i>
        <span class="sr-only">Refreshing...</span>
    </button>
    <div class="absolute hidden bg-white text-gray-800 p-4 rounded-lg shadow-lg -right-8 transform translate-x-full origin-right transition-transform duration-300 group-hover:block">
        <!-- Content inside the dropdown -->
        <p>This is a dropdown.</p>
        <p>Click the button to open.</p>
    </div>
</div>
</section>

  
  
  <div id="registrationForm" class="hidden mt-96 fixed inset-0 flex items-center justify-center z-10">
    <div class="bg-white p-8 rounded-lg shadow-lg mt-96  ">
        <h2 class="text-2xl font-semibold mb-4">Registration Form</h2>
        <form class="display-grid row-gap-1-rem" method="post">
          <input class="box-shadow-primary" name="name" type="text" placeholder="Name" autocomplete="off" required />
          <input class="box-shadow-primary" name="email" type="email" placeholder="Email" autocomplete="off" required />
          <input class="box-shadow-primary" name="subject" type="text" placeholder="Phone no" autocomplete="off" required />
          <button type="submit" name="send">
            Send <i class="fa-solid fa-paper-plane color-white margin-left-1-rem"></i>
          </button>
        </form>
    </div>
  </div>
  </div>
  

</footer>
<section id="contact"class=" bg-gray-600 text-white rounded-2xl p-5 text-center mb-1 mx-1 mt-8 ">
  <p class="font-semibold py-2 ">Contact us - 7395920130</p>
  <p class="font-semibold ">Email Id : jayacivilau@gmail.com</p>
</section>
  <script>
    let currentIndex = 0;
    const sliderItems = document.querySelectorAll('.slider-item');
    const totalItems = sliderItems.length;

    function showSlide(index) {
        sliderItems.forEach((item, i) => {
            if (i === index) {
                item.style.transform = 'translateX(0)';
            } else {
                item.style.transform = 'translateX(-100%)';
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems;
        showSlide(currentIndex);
    }

    setInterval(nextSlide, 3000); 
   

    const showFormButton = document.getElementById('showFormButton');
    const registrationForm = document.getElementById('registrationForm');

    showFormButton.addEventListener('click', () => {
        registrationForm.classList.toggle('hidden');
    });

    document.querySelectorAll('a[href^="# "]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
       e.preventDefault();

       const targetId = this.getAttribute('href').substring(1);
       const targetElement = document.getElementById(targetId);

       if (targetElement) {
           window.scrollTo({
               top: targetElement.offsetTop,
               behavior: 'smooth'
           });
       }
      });
   });
 
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>
</body>

</html>