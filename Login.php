<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="grid grid-cols-2 justify-center gap-5 item-center">

  <div class="min-h-screen bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-xl animate-fade-in-down">
      <h2 class="text-3xl text-center font-extrabold text-gray-900 mb-6">Sign in to your account</h2>
      <form class="space-y-4" action="#" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="relative">
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required
            class="appearance-none rounded-lg w-full py-2 px-4 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 border border-gray-300"
            placeholder="Email address">
        </div>
        <div class="relative">
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required
            class="appearance-none rounded-lg w-full py-2 px-4 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 border border-gray-300"
            placeholder="Password">
        </div>
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox"
              class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember-me" class="ml-2 text-sm text-gray-900">Remember me</label>
          </div>
          <a href="#" class="text-sm text-gray-900 hover:text-blue-600">Forgot your password?</a>
        </div>
        <div>
          <button type="submit"
            class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-2 px-4 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform hover:scale-105 transition-all duration-300">
            <span class="flex items-center justify-center space-x-2">
              <span>
                <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5v2m.001 0h2m-2 0H9m11 14a2 2 0 01-2 2H6a2 2 0 01-2-2V9a2 2 0 012-2h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 001.414 0l3.414-3.414A1 1 0 0115.414 7H18a2 2 0 012 2v10z" />
                </svg>
              </span>
              <span>Sign in</span>
            </span>
          </button>
        </div>
        <div class="text-center text-gray-500 text-sm">
          <span>Don't have an account?</span>
          <a href="#" class="text-blue-600 hover:underline">Sign up</a>
        </div>
      </form>
    </div>
  </div>


  <div class="min-h-screen bg-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg animate-fade-in-up">
      <h2 class="text-3xl text-center font-bold text-gray-900 mb-6">Sign in to your account</h2>
      <form class="space-y-4" action="#" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="relative">
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required
            class="appearance-none rounded-lg w-full py-3 px-4 bg-gray-200 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        </div>
        <div class="relative">
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required
            class="appearance-none rounded-lg w-full py-3 px-4 bg-gray-200 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        </div>
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox"
              class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember-me" class="ml-2 text-sm text-gray-700">Remember me</label>
          </div>
          <a href="#" class="text-sm text-gray-700 hover:text-blue-600">Forgot your password?</a>
        </div>
        <div>
          <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform hover:scale-105 transition-all duration-300">
            Sign in
          </button>
        </div>
        <div class="text-center text-gray-700 text-sm">
          <span>Don't have an account?</span>
          <a href="#" class="text-blue-600 hover:underline">Sign up</a>
        </div>
      </form>
    </div>
  </div>

  <div class="min-h-screen bg-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-xl animate-fade-in-down">
      <h2 class="text-3xl text-center font-bold text-gray-800 mb-6">Sign in to your account</h2>
      <form class="space-y-4" action="#" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="relative">
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required
            class="appearance-none rounded-lg w-full py-3 px-4 placeholder-gray-400 text-gray-800 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-300"
            placeholder="Email address">
        </div>
        <div class="relative">
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required
            class="appearance-none rounded-lg w-full py-3 px-4 placeholder-gray-400 text-gray-800 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-300"
            placeholder="Password">
        </div>
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox"
              class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember-me" class="ml-2 text-sm text-gray-800">Remember me</label>
          </div>
          <a href="#" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
        </div>
        <div>
          <button type="submit"
            class="w-full py-3 px-4 rounded-lg font-bold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform hover:scale-105 transition-all duration-300"
            style="background-image: linear-gradient(to right, #667EEA, #764BA2);">
           
              <span class="text-white">Sign in</span>
              
          </button>
        </div>
        <div class="text-center text-gray-700 text-sm">
          <span>Don't have an account?</span>
          <a href="#" class="text-blue-600 hover:underline">Sign up</a>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- partial -->
  
</body>
</html>
