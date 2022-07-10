<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { reactive } from "vue";
import Landpage from "../../Layouts/Landpage.vue";
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/outline'
import Divider from "./Home/Divider.vue";

const state = reactive({
    tabs: [
        { name: "General", href: "#", current: true },
        { name: "Payment", href: "#", current: false },
        { name: "Account", href: "#", current: false },
    ],
    generalFaqs: [
        {
          question: "General Question 1 goes here",
          answer:
            "Answer 1 goes here",
        },
        {
          question: "General Question 2 goes here",
          answer:
            "Answer 2 goes here",
        },
    ],
    paymentFaqs: [
        {
          question: "Payment Question 1 goes here",
          answer:
            "Answer 1 goes here",
        },
        {
          question: "Payment Question 2 goes here",
          answer:
            "Answer 2 goes here",
        },
    ],
    accountFaqs: [
        {
          question: "Account Question 1 goes here",
          answer:
            "Answer 1 goes here",
        },
        {
          question: "Account Question 2 goes here",
          answer:
            "Answer 2 goes here",
        },
    ],
    currentTab: "General",
});

function onChange(tabName) {
    state.tabs.forEach((tab) => {
        if (tab.name === tabName) {
            tab.current = true;
            state.currentTab = tabName;
        } else {
            tab.current = false;
        }
    });
}
</script>

<template>
    <Head title="FAQ" />
    <Landpage>
        <div class="pt-[50px] md:pt-12 lg:pt-1 pb-14">
            <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24 lg:pb-[50px]">
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                    <select
                        id="tabs"
                        name="tabs"
                        class="block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                        @change="onChange($event.target.value)"
                    >
                        <option
                            v-for="tab in state.tabs"
                            :key="tab.name"
                            :selected="tab.current"
                        >
                            {{ tab.name }}
                        </option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <nav
                        class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200"
                        aria-label="Tabs"
                    >
                        <a
                            v-for="(tab, tabIdx) in state.tabs"
                            :key="tab.name"
                            :href="tab.href"
                            :class="[
                                tab.current
                                    ? 'text-gray-900'
                                    : 'text-gray-500 hover:text-gray-700',
                                tabIdx === 0 ? 'rounded-l-lg' : '',
                                tabIdx === state.tabs.length - 1
                                    ? 'rounded-r-lg'
                                    : '',
                                'group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-gray-50 focus:z-10',
                            ]"
                            :aria-current="tab.current ? 'page' : undefined"
                            @click="onChange(tab.name)"
                        >
                            <span>{{ tab.name }}</span>
                            <span
                                aria-hidden="true"
                                :class="[
                                    tab.current
                                        ? 'bg-indigo-500'
                                        : 'bg-transparent',
                                    'absolute inset-x-0 bottom-0 h-1',
                                ]"
                            />
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <Divider></Divider>
        <div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
        <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">Frequently asked questions</h2>
        <dl class="mt-6 space-y-6 divide-y divide-gray-200"  v-if="state.currentTab === 'General'">
          <Disclosure as="div" v-for="faq in state.generalFaqs" :key="faq.question" class="pt-6" v-slot="{ open }">
            <dt class="text-lg">
              <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                <span class="font-medium text-gray-900">
                  {{ faq.question }}
                </span>
                <span class="ml-6 h-7 flex items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
              </DisclosureButton>
            </dt>
            <DisclosurePanel as="dd" class="mt-2 pr-12">
              <p class="text-base text-gray-500">
                {{ faq.answer }}
              </p>
            </DisclosurePanel>
          </Disclosure>
        </dl>
        <dl class="mt-6 space-y-6 divide-y divide-gray-200"  v-else-if="state.currentTab === 'Payment'">
          <Disclosure as="div" v-for="faq in state.paymentFaqs" :key="faq.question" class="pt-6" v-slot="{ open }">
            <dt class="text-lg">
              <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                <span class="font-medium text-gray-900">
                  {{ faq.question }}
                </span>
                <span class="ml-6 h-7 flex items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
              </DisclosureButton>
            </dt>
            <DisclosurePanel as="dd" class="mt-2 pr-12">
              <p class="text-base text-gray-500">
                {{ faq.answer }}
              </p>
            </DisclosurePanel>
          </Disclosure>
        </dl>
        <dl class="mt-6 space-y-6 divide-y divide-gray-200"  v-if="state.currentTab === 'Account'">
          <Disclosure as="div" v-for="faq in state.accountFaqs" :key="faq.question" class="pt-6" v-slot="{ open }">
            <dt class="text-lg">
              <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                <span class="font-medium text-gray-900">
                  {{ faq.question }}
                </span>
                <span class="ml-6 h-7 flex items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
              </DisclosureButton>
            </dt>
            <DisclosurePanel as="dd" class="mt-2 pr-12">
              <p class="text-base text-gray-500">
                {{ faq.answer }}
              </p>
            </DisclosurePanel>
          </Disclosure>
        </dl>
      </div>
    </div>
  </div>
    </Landpage>
</template>
