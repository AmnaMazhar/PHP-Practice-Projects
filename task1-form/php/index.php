<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Registration</title>
</head>

<body>

  <div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px] bg-white">

      <h1 class="flex items-center justify-center p-8 text-[#07074D]">Book Appointment</h1>
      <br>

      <form action="insert.php" method="POST">

        <div class="mb-5">
          <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
            Full Name
          </label>
          <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        </div>

        <div class="mb-5">
          <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
            Phone Number
          </label>
          <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        </div>

        <div class="mb-5">
          <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
            Email Address
          </label>
          <input type="text" name="email" id="email" placeholder="Enter your email" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        </div>

        <div class="-mx-3 flex flex-wrap">

          <div class="w-full px-3 sm:w-1/2">
            <div class="mb-5">
              <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                Date
              </label>
              <input type="date" name="date" id="date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
          </div>

          <div class="w-full px-3 sm:w-1/2">
            <div class="mb-5">
              <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                Time
              </label>
              <input type="time" name="time" id="time" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
          </div>

        </div>

        <div class="mb-5 pt-3">
          <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
            Address Details
          </label>

          <div class="-mx-3 flex flex-wrap">

            <div class="w-full px-3 sm:w-1/2">
              <div class="mb-5">
                <input type="text" name="city" id="city" placeholder="Enter city" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>
            </div>

            <div class="w-full px-3 sm:w-1/2">
              <div class="mb-5">
                <input type="text" name="state" id="state" placeholder="Enter state" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>
            </div>

          
          </div>
        </div>

        <div>
          <button type="submit" name="submit" class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
            Proceed
          </button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>