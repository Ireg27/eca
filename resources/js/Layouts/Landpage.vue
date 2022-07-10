<template>
    <div>
        <Disclosure as="nav" class="shadow fixed w-full z-30 top-0 text-white" :class="{ 'bg-slate-800': !view.topOfPage}" v-slot="{ open }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <Link
                                :href="route('landpage')">
                            <img
                                class="block lg:hidden h-8 w-auto cursor-pointer"
                                src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                alt="Workflow"
                            />
                            </Link>
                             <Link
                                :href="route('landpage')">
                            <img
                                class="hidden lg:block h-8 w-auto cursor-pointer"
                                src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-900-text.svg"
                                alt="Workflow"
                            />
                            </Link>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                            <Link
                                :href="route('pages.team')"
                                class="text-white hover:text-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium"
                                :class="{'border-b-4 border-indigo-500': $page.component === 'Commercial/Team'}"
                            >
                                Team
                            </Link>
                            <Link
                                :href="route('pages.about')"
                                class="text-white hover:text-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium"
                                :class="{'border-b-4 border-indigo-500': $page.component === 'todo'}"
                            >
                                About
                            </Link>
                            <Link
                                :href="route('pages.faq')"         
                                class="text-white hover:text-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium"
                                :class="{'border-b-4 border-indigo-500': $page.component === 'About'}"
                            >
                                FAQ
                            </Link>
                        </div>
                    </div>
                    <div v-if="! $page.props.auth.user" class="hidden sm:ml-6 sm:flex sm:items-center">
                        <Link :href="route('login')" class="text-sm text-white underline">
                            Log in
                        </Link>

                        <Button class="ml-4 landpage-button px-4 py-2" :class="{ 'gradient': !view.topOfPage}">
                            <Link :href="route('register')">
                                Register
                            </Link>
                        </Button>
                    </div>
                    <div v-else class="hidden sm:ml-6 sm:flex sm:items-center">
                        <Link :href="route('dashboard')" class="text-sm text-white underline">
                            Dashboard
                        </Link>
                    </div>
                    <div class="-mr-2 flex items-center sm:hidden">
                        <!-- Mobile menu button -->
                        <DisclosureButton
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        >
                            <span class="sr-only">Open main menu</span>
                            <MenuIcon
                                v-if="!open"
                                class="block h-6 w-6"
                                aria-hidden="true"
                            />
                            <XIcon
                                v-else
                                class="block h-6 w-6"
                                aria-hidden="true"
                            />
                        </DisclosureButton>
                    </div>
                </div>
            </div>

            <DisclosurePanel class="sm:hidden bg-white text-black z-50">
                <div class="pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
                    <DisclosureButton
                        as="a"
                        :href="route('pages.team')"
                        class="border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                        :class="{'bg-indigo-50 border-indigo-500 text-indigo-700': $page.component === 'Commercial/Team'}"
                        >Team</DisclosureButton
                    >
                    <DisclosureButton
                        as="a"
                        :href="route('pages.about')"
                        class="border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                        >About</DisclosureButton
                    >
                    <DisclosureButton
                        as="a"
                        :href="route('pages.faq')"
                        class="border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                        >FAQ</DisclosureButton
                    >
                </div>
                <div class="pt-4 pb-3 border-t border-gray-200 z-30">
                    <Link :href="route('login')" class="border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                        Log in
                    </Link>
                    <Link :href="route('register')" class="border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                        Register
                    </Link>
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                        Dashboard
                    </Link>
                </div>
            </DisclosurePanel>
        </Disclosure>
        <slot />
        <Footer></Footer>
    </div>
</template>

<script>
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
} from "@headlessui/vue";
import { BellIcon, MenuIcon, XIcon } from "@heroicons/vue/outline";
import { Link } from "@inertiajs/inertia-vue3";
import Button from '../Components/Button.vue';
import Footer from '../Components/Footer.vue';

export default {
    components: {
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        Menu,
        MenuButton,
        MenuItem,
        MenuItems,
        BellIcon,
        MenuIcon,
        XIcon,
        Button,
        Link,
        Footer,
    },
    data () {
        return {
            view: {
                topOfPage: true
            }
        }
    },
    beforeMount() {
        window.addEventListener('scroll', this.handleScroll)
    },
    methods: {
    handleScroll(){
      if(window.pageYOffset>0){
        if(this.view.topOfPage) this.view.topOfPage = false
      } else {
        if(!this.view.topOfPage) this.view.topOfPage = true
      }
    }
  },
};
</script>