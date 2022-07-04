<template>
    <div class="pt-24">
      <div class="container text-white px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full">Ready for a journey?</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
            Set yourself up for success today!
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Sub-hero message, not too long and not too short. Make it just right!   
          </p>
          <Link :href="route('register')">
               <Button class="landpage-button">
                    Register
                </Button>
          </Link>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
          <img class="w-full md:w-4/5 z-50" src="../../Assets/success.svg" />
        </div>
      </div>
    </div>
</template>