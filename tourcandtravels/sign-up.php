<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yo_tours";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['full-name']))
{
  $fullname = $_POST['full-name'];
  $email = $_POST['email'];
  $phoneno = $_POST['number'];
  $addres = $_POST['address'];
  $country = $_POST['Country'];
$sql = "INSERT INTO userData (fullName, email, phoneno , addres , country  )
VALUES ('".$fullname."', '".$email."', '".$phoneno."' , '".$addres."' , '".$country."')";

if (mysqli_query($conn, $sql)) {
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="/signup.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Sign-up section  -->
    <section class="text-gray-400 bg-gray-900 body-font">
        <form action="sign-up.php" method="post">
          <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
            <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
              <h1 class="title-font font-medium text-3xl text-white">Slow-carb next level shoindxgoitch ethical authentic, poko
                scenester</h1>
              <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder
                roathse. Craies vegan tousled etsy austin.</p>
            </div>
            <div class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
              <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
              <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-green-400">Full Name</label>
                <input type="text" id="full-name" name="full-name"
                  class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-green-900 rounded border border-gray-600 focus:border-green-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-green-400">Email</label>
                <input type="email" id="email" name="email"
                  class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-green-900 rounded border border-gray-600 focus:border-green-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <div class="relative mb-4">
                <label for="number" class="leading-7 text-sm text-green-400">Number</label>
                <input type="number" id="number" name="number"
                  class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-green-900 rounded border border-gray-600 focus:border-green-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <div class="relative mb-4">
                <label for="Address" class="leading-7 text-sm text-green-400">Address</label>
                <input type="text" id="Address" name="address"
                  class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-green-900 rounded border border-gray-600 focus:border-green-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <div class="relative mb-4">
                <label for="Country" class="leading-7 text-sm text-green-400">Country</label>
                <input type="text" id="Country" name="Country"
                  class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-green-900 rounded border border-gray-600 focus:border-green-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <button
                class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Submit</button>
              <p class="text-xs mt-3">Literally you probably haven't heard of them jean shorts.</p>
              <a href="login.php" class="font-medium text-green-600 hover:text-green-500" style='font-size: 20px'> Alrady a member? Log In </a>
            </div>
          </div>
          
        </form>
        
      </section>
      <!-- Footer Section -->
      <footer class="text-gray-600 body-font footer">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <span class="ml-3 text-xl">K&K Tours and Travels</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 SPPU | SCOS —
            <a href="https://twitter.com" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@K&KToursAndTravels</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>
    
</body>
</html>