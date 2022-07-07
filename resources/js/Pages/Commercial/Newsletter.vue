<template>
    <div class="bg-transparent">
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:py-12 lg:px-8">
      <div class="px-6 py-6 rounded-lg md:py-8 md:px-8 lg:py-12 lg:px-16 xl:flex xl:items-center">
        <div class="xl:w-0 xl:flex-1">
          <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-4xl">Want product news and updates?</h2>
          <p class="mt-3 max-w-3xl text-lg leading-6 text-white">Sign up for our newsletter to stay up to date.</p>
        </div>
        <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
          <form class="sm:flex">
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email-address" type="email" autocomplete="email" required="" class="w-full border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white rounded-md" placeholder="Enter your email" />
            <button type="submit" class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent shadow text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">Notify me</button>
          </form>
          <p class="mt-3 text-sm text-white">
            We care about the protection of your data. Read our
            {{ ' ' }}
            <a href="#" class="text-white font-medium underline"> Privacy Policy. </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>