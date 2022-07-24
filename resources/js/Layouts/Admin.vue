<template>
  <div>
    <TransitionRoot as="template" :show="sidebarOpen">
      <Dialog as="div" class="relative z-40 md:hidden" @close="sidebarOpen = false">
        <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
          <div class="fixed inset-0 bg-gray-600 bg-opacity-75" />
        </TransitionChild>

        <div class="fixed inset-0 z-40 flex">
          <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
            <DialogPanel class="relative max-w-xs w-full bg-white pt-5 pb-4 flex-1 flex flex-col">
              <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100" leave-to="opacity-0">
                <div class="absolute top-0 right-0 -mr-14 p-1">
                  <button type="button" class="h-12 w-12 rounded-full flex items-center justify-center focus:outline-none focus:bg-gray-600" @click="sidebarOpen = false">
                    <XIcon class="h-6 w-6 text-white" aria-hidden="true" />
                    <span class="sr-only">Close sidebar</span>
                  </button>
                </div>
              </TransitionChild>
              <div class="flex-shrink-0 px-4 flex items-center">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-900-text.svg" alt="Easywire" />
              </div>
              <div class="mt-5 flex-1 h-0 overflow-y-auto">
                <nav class="h-full flex flex-col">
                  <div class="space-y-1">
                    <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[$page.component === item.current ? 'bg-indigo-50 border-indigo-600 text-indigo-600' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group border-l-4 py-2 px-3 flex items-center text-base font-medium']" :aria-current="item.current ? 'page' : undefined">
                      <component :is="item.icon" :class="[$page.component === item.current ? 'text-indigo-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-4 flex-shrink-0 h-6 w-6']" aria-hidden="true" />
                      {{ item.name }}
                    </a>
                  </div>
                  <div class="mt-auto pt-10 space-y-1">
                    <a v-for="item in secondaryNavigation" :key="item.name" :href="item.href" class="group border-l-4 border-transparent py-2 px-3 flex items-center text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                      <component :is="item.icon" class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
                      {{ item.name }}
                    </a>
                  </div>
                </nav>
              </div>
            </DialogPanel>
          </TransitionChild>
          <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
          </div>
        </div>
      </Dialog>
    </TransitionRoot>

    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <nav class="bg-gray-50 border-r border-gray-200 pt-5 pb-4 flex flex-col flex-grow overflow-y-auto">
        <div class="flex-shrink-0 px-4 flex items-center">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-900-text.svg" alt="Workflow" />
        </div>
        <div class="flex-grow mt-5" >
          <div class="space-y-1">
            <Link :href="route(item.href)" v-for="item in navigation" :key="item.name" :class="[$page.component === item.current ? 'bg-indigo-50 border-indigo-500 text-indigo-500' : 'border-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50', 'group border-l-4 py-2 px-3 flex items-center text-sm font-medium']">
              <component :is="item.icon" :class="[$page.component === item.current ? 'text-indigo-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-3 flex-shrink-0 h-6 w-6']" aria-hidden="true" />
              {{ item.name }}
            </Link>
          </div>
        </div>
        <div class="flex-shrink-0 block w-full">
          <a v-for="item in secondaryNavigation" :key="item.name" :href="item.href" class="group border-l-4 border-transparent py-2 px-3 flex items-center text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50">
            <component :is="item.icon" class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" aria-hidden="true" />
            {{ item.name }}
          </a>
        </div>
      </nav>
    </div>

    <div class="md:pl-64 h-full bg-white">
       <div class="sticky top-0 z-10 flex-shrink-0 h-16 bg-white border-b border-gray-200 flex visible md:hidden">
          <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden" @click="sidebarOpen = true">
            <span class="sr-only">Open sidebar</span>
            <MenuAlt2Icon class="h-6 w-6" aria-hidden="true" />
          </button>
          <div class="flex-shrink-0 px-4 flex items-center mx-auto">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-900-text.svg" alt="Workflow" />
          </div>
        </div>
        <slot />

    </div>
    
  </div>
</template>

<script setup>
import { ref } from 'vue'
import {
  PresentationChartLineIcon,
  AnnotationIcon,
  ColorSwatchIcon,
  AdjustmentsIcon,
  IdentificationIcon,
  CogIcon,
  UsersIcon,
  ChartPieIcon,
  XIcon,
  MenuAlt2Icon
} from '@heroicons/vue/outline'
import { Dialog, DialogPanel, Switch, SwitchGroup, SwitchLabel, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { Link } from "@inertiajs/inertia-vue3"


const navigation = [
  { name: 'Dashboard', href: 'adminpanel.dashboard', icon: ChartPieIcon, current: 'AdminPanel/Dashboard' },
  { name: 'Permissions', href: 'adminpanel.dashboard', icon: AdjustmentsIcon, current: 'AdminPanel/Permissions' },
  { name: 'Roles', href: 'adminpanel.roles', icon: IdentificationIcon, current: 'AdminPanel/Roles/Roles' },
  { name: 'Categories', href: 'adminpanel.dashboard', icon: ColorSwatchIcon, current: 'AdminPanel/Categories' },
  { name: 'Users', href: 'adminpanel.dashboard', icon: UsersIcon, current: 'AdminPanel/Users' },
  { name: 'Landpage', href: 'adminpanel.dashboard', icon: PresentationChartLineIcon, current: 'AdminPanel/Landpage' },
  { name: 'Feedback', href: 'adminpanel.dashboard', icon: AnnotationIcon, current: 'AdminPanel/Feedback' },
]

document.body.classList.remove('gradient');

const secondaryNavigation = [
  { name: 'Logout', href: '#', icon: CogIcon },
]

const sidebarOpen = ref(false)
</script>