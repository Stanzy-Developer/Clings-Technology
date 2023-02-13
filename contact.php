<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/tailwind.css" />
  <link rel="stylesheet" href="css/all.css" />


  <title>Clings-Tect</title>
</head>

<body class="font-['Poppins']">
  <div>
    <!------------------------ Header Section --------------------->

    <div class="flex justify-between items-center text-center bg-black px-[100px] p-[10px]">
      <div class="flex justify-between items-center">
        <div class="flex justify-between items-center">
          <div class="mx-2"><i class="fa-solid fa-phone"></i></div>
          <p class="text-[10px] font-bold text-white">(+237) 670670440</p>
        </div>
        <div class="flex justify-between items-center mx-[20px]">
          <div class="mx-2"><i class="fa-solid fa-paper-plane"></i></div>
          <p class="text-[10px] font-bold text-white">clingstech01@gmail.com</p>
        </div>
        <div class="flex justify-between items-center">
          <div class="mx-2"><i class="fa-solid fa-clock"></i></div>
          <p class="text-white text-[10px]">Opening: Mon-Fri 08am - 5pm</p>
        </div>
      </div>
      <div>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-whatsapp"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-twitter"></i>
      </div>
    </div>
    <hr>
    <nav class="flex justify-between items-center bg-black p-5">
      <img src="img/logo.JPG" alt="logo" width="100px" height="50px" class="ml-[50px]" />
      <div class="justify-center items-center relativex">
        <ul class="relative list-none flex justify-between items-center">
          <li>
            <a class="no-underline relative p-3 text-orange-400 m-4 text-sm font-bold before:absolute before:content-[''] before:bottom-0 before:left-0 before:h-[2px] before:w-[0px] before:bg-blue-800 hover:before:w-[75%] hover:before:duration-700"
              href="index.php">Home</a>
          </li>
          <li>
            <a class="no-underline relative p-3 text-orange-400 m-4 text-sm font-bold before:absolute before:content-[''] before:bottom-0 before:left-0 before:h-[2px] before:w-[0px] before:bg-blue-800 hover:before:w-[75%] hover:before:duration-700"
              href="service.php">Service</a>
          </li>
          <li>
            <a class="no-underline relative p-3 text-orange-400 m-4 text-sm font-bold before:absolute before:content-[''] before:bottom-0 before:left-0 before:h-[2px] before:w-[0px] before:bg-blue-800 hover:before:w-[75%] hover:before:duration-700"
              href="training.php">Training</a>
          </li>
          <li>
            <a class="no-underline relative p-3 text-orange-400 m-4 text-sm font-bold before:absolute before:content-[''] before:bottom-0 before:left-0 before:h-[2px] before:w-[0px] before:bg-blue-800 hover:before:w-[75%] hover:before:duration-700"
              href="about.php">About</a>
          </li>
          <li>
            <a class="no-underline relative p-3 text-orange-400 m-4 text-sm font-bold before:absolute before:content-[''] before:bottom-0 before:left-0 before:h-[2px] before:w-[100%] before:bg-blue-800"
              href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!----------------Training----------------->
    <section class="flex justify-between  bg-black px-[100px] py-[30px] text-white gap-[30px@]">
      <div class="w-[100%] mt-[50px]">
        <h1 class="text-[3em] font-extrabold my-5 text-orange-400">Contact Us</h1>
        <p class="text-[10px] my-5">Clings-Tech academic is the best place to learn digital skills training and we
          empowers
          individuals and organizations to achieve digital success through courses, workshops, events and corporate
          training. If you have big ideas and the drive to make them a reality, head over to our programs page to view
          our current cohorts. We’d love to hear from you.</p>
        <hr>
        <p class="text-sm text-white my-5"><span class="text-orange-400">Home </span>- Contact Us</p>
      </div>
      <img class="w-[350px] h-[10%]" src="img/11.svg" alt="training">
    </section>

    <!------------------Contact Us--------------------->
    <div class="flex gap-[20px] justify-center items-center my-[100px]">
      <div class="bg-white text-center p-[30px]">
        <form id="form" action="https://formsubmit.co/470190e48b018bea24920eeef6332165" method="POST">

          <h1 class="text-[1.5em] text-black capitalize text-left">leave us a message</h1>
          <div class="flex gap-[10px] text-left">
            <div><label for="first name" class="capitalize my-[10px] text-[12px] text-black">first
                name</label>
              <input type="text" name="First name"
                class="w-[100%] p-[10px] outline-none text-black bg-slate-300 rounded-md text-[10px]"
                placeholder="First Name" required>
            </div>
            <div>
              <label for="last name" class="capitalize my-[10px] text-[12px] text-black">last name</label>
              <input type="text" name="Last Name"
                class="w-[100%] p-[10px] outline-none text-black bg-slate-300 rounded-md text-[10px]"
                placeholder="Last Name" required>
            </div>
          </div>
          <div class="text-left">
            <label for="Subject" class="capitalize my-[10px] text-[12px] text-black">Subject</label>
            <input type="text" name="Subject"
              class="w-[100%] p-[10px] outline-none text-black bg-slate-300 rounded-md text-[10px]"
              placeholder="Subject" required>
          </div>
          <div class="text-left">
            <label for="email" class="capitalize my-[10px] text-[12px] text-black">Email</label>
            <input type="email" name="Email"
              class="w-[100%] p-[10px] outline-none text-black bg-slate-300 rounded-md text-[10px]" placeholder="Email"
              required>
          </div>
          <div class="text-left">
            <label for="message" class="capitalize my-[10px] text-[12px] text-black">Message</label>
            <textarea class="w-[100%]  p-[10px] outline-none text-black bg-slate-300 rounded-md text-[10px]"
              name="Message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
          </div>
          <button type="submit" id="btn"
            class="w-[100%] p-[10px] outline-none text-white bg-orange-400 rounded-md text-[10px] font-extrabold ">submit</button>
        </form>
      </div>
      <div class="bg-orange-200 p-[30px] pb-[80px]">
        <div
          class="p-[20px] bg-white flex gap-[10px] w-[100%] hover:opacity-70 cursor-pointer duration-200 ease-in-out">
          <div class="mr-10px"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <h1 class="text-[14px] font-extrabold ">Phone Numbers</h1>
            <p class="text-[10px]">(+237) 670 670 440 / 679 194 735 / 676 001 329 / 673001658 </p>
          </div>
        </div>

        <div
          class="p-[20px] bg-orange-400 flex gap-[10px] w-[100%] my-[10px] hover:opacity-70 cursor-pointer duration-200 ease-in-out">
          <div class="mr-10px"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <h1 class="text-[14px] font-extrabold ">Our Location</h1>
            <p class="text-[10px]">Rail(Sodiko) Bonaberi,Douala-Litoral Region-Cameroon</p>
          </div>
        </div>
        <div
          class="p-[20px] bg-white flex gap-[10px] w-[100%] hover:opacity-70 cursor-pointer duration-200 ease-in-out">
          <div class="mr-10px"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <h1 class="text-[14px] font-extrabold ">Email Address</h1>
            <p class="text-[10px]">clingstech01@gmail.com </p>
          </div>
        </div>
      </div>
    </div>

    <!------------- footer Section ------------->
    <?php
  include("footer.php");
  ?>
    <div id="scroll"
      class="fixed right-[20px] bottom-[20px] p-[15px] rounded-[50%] bg-orange-500 shadow-md shadow-black/50 hover:scale-[110%] hidden cursor-pointer">
      <i class="fa-solid fa-chevron-up"></i>
    </div>

    <script src="anim.js"></script>
</body>

</html>