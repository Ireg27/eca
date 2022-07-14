<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
      <div class="divide-y-2 divide-gray-200">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
          <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">Get in touch</h2>
          <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">Collaborate</h3>
              <dl class="mt-2 text-base text-gray-500">
                <div>
                  <dt class="sr-only">Email</dt>
                  <dd>support@example.com</dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Phone number</dt>
                  <dd>+1 (555) 123-4567</dd>
                </div>
              </dl>
            </div>
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">Press</h3>
              <dl class="mt-2 text-base text-gray-500">
                <div>
                  <dt class="sr-only">Email</dt>
                  <dd>support@example.com</dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Phone number</dt>
                  <dd>+1 (555) 123-4567</dd>
                </div>
              </dl>
            </div>
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">Join our team</h3>
              <dl class="mt-2 text-base text-gray-500">
                <div>
                  <dt class="sr-only">Email</dt>
                  <dd>support@example.com</dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Phone number</dt>
                  <dd>+1 (555) 123-4567</dd>
                </div>
              </dl>
            </div>
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">Say hello</h3>
              <dl class="mt-2 text-base text-gray-500">
                <div>
                  <dt class="sr-only">Email</dt>
                  <dd>support@example.com</dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Phone number</dt>
                  <dd>+1 (555) 123-4567</dd>
                </div>
              </dl>
            </div>
          </div>
        </div>
        <div class="mt-16 pt-16 lg:grid lg:grid-cols-3 lg:gap-8">
          <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">Locations</h2>
          <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">Los Angeles</h3>
              <div class="mt-2 text-base text-gray-500">
                <p>4556 Brendan Ferry</p>
                <p class="mt-1">Los Angeles, CA 90210</p>
              </div>
            </div>
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">New York</h3>
              <div class="mt-2 text-base text-gray-500">
                <p>886 Walter Streets</p>
                <p class="mt-1">New York, NY 12345</p>
              </div>
            </div>
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">Toronto</h3>
              <div class="mt-2 text-base text-gray-500">
                <p>7363 Cynthia Pass</p>
                <p class="mt-1">Toronto, ON N3Y 4H8</p>
              </div>
            </div>
            <div>
              <h3 class="text-lg leading-6 font-medium text-gray-900">Chicago</h3>
              <div class="mt-2 text-base text-gray-500">
                <p>726 Mavis Island</p>
                <p class="mt-1">Chicago, IL 60601</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
      <div class="max-w-lg mx-auto md:max-w-none md:grid md:grid-cols-2 md:gap-8">
        <div>
          <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">Sales Support</h2>
          <div class="mt-3">
            <p class="text-lg text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
          </div>
          <div class="mt-9">
            <div class="flex">
              <div class="flex-shrink-0">
                <PhoneIcon class="h-6 w-6 text-gray-400" aria-hidden="true" />
              </div>
              <div class="ml-3 text-base text-gray-500">
                <p>+1 (555) 123 4567</p>
                <p class="mt-1">Mon-Fri 8am to 6pm PST</p>
              </div>
            </div>
            <div class="mt-6 flex">
              <div class="flex-shrink-0">
                <MailIcon class="h-6 w-6 text-gray-400" aria-hidden="true" />
              </div>
              <div class="ml-3 text-base text-gray-500">
                <p>support@example.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-12 sm:mt-16 md:mt-0">
          <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">Technical Support</h2>
          <div class="mt-3">
            <p class="text-lg text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, repellat error corporis doloribus similique, voluptatibus numquam quam, quae officiis facilis.</p>
          </div>
          <div class="mt-9">
            <div class="flex">
              <div class="flex-shrink-0">
                <PhoneIcon class="h-6 w-6 text-gray-400" aria-hidden="true" />
              </div>
              <div class="ml-3 text-base text-gray-500">
                <p>+1 (555) 123 4567</p>
                <p class="mt-1">Mon-Fri 8am to 6pm PST</p>
              </div>
            </div>
            <div class="mt-6 flex">
              <div class="flex-shrink-0">
                <MailIcon class="h-6 w-6 text-gray-400" aria-hidden="true" />
              </div>
              <div class="ml-3 text-base text-gray-500">
                <p>support@example.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { MailIcon, PhoneIcon } from '@heroicons/vue/outline'
</script>