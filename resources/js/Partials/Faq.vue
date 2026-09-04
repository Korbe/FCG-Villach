<template>
    <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200 dark:divide-gray-700">
            <h2 class="text-center text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Häufig gestellte <span class="text-brand-primary">Fragen</span>
            </h2>
            <dl class="mt-6 space-y-6 divide-y divide-gray-200 dark:divide-gray-700">
                <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class="pt-6" v-slot="{ open }">
                    <dt class="text-lg">
                        <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                                        <span class="font-medium text-gray-900 dark:text-white">
                                          {{ faq.question }}
                                        </span>
                            <span class="ml-6 h-7 flex items-center text-brand-primary">
                                            <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true"/>
                                        </span>
                        </DisclosureButton>
                    </dt>
                    <DisclosurePanel as="dd" class="mt-2 pr-12">
                        <p class="text-base text-gray-500 dark:text-gray-400">
                            {{ faq.answer }}
                        </p>
                    </DisclosurePanel>
                </Disclosure>
            </dl>
        </div>
    </div>
</template>

<script setup>
import {Disclosure, DisclosureButton, DisclosurePanel} from '@headlessui/vue';
import {ChevronDownIcon} from "@heroicons/vue/24/outline";

const faqs = [
                {
                    question: "Wie lange dauert ein Gottesdienst?",
                    answer: "Der Gottesdienst dauert durchschnittlich 90 Minuten.",
                },
                {
                    question: "Muss ich für den Gottesdienst etwas bezahlen oder werde ich während des Gottesdienstes nach Geld gefragt?",
                    answer: "Jeder ist willkommen, den Gottesdienst zu besuchen und es ist absolut kostenlos. Wir sammeln eine Kollekte ein, das Teil des Gottesdienstes ist. Jedoch ist niemand gezwungen, etwas zu geben und du darfst es gerne an dir vorbeigehen lassen.",
                },
                {
                    question: "Was soll ich anziehen bzw. gibt es einen Dress Code?",
                    answer: "Jeder kann so kommen, wie er sich wohl fühlt und es für angemessen hält.",
                },
                {
                    question: "Gibt es ein extra Kinderprogramm?",
                    answer: "Ja, bei jedem Gottesdienst gibt es parallel eine Kinderstunde und einen Raum für Eltern mit kleinen Kindern, wo sie auch den Gottesdienst mithören können.",
                },
                {
                    question: "Muss ich Mitglied werden?",
                    answer: "Nein. Zu unseren Gottesdiensten kommen die verschiedensten Menschen. Wir sehen es als unsere Aufgabe, ein Segen für alle Menschen zu sein, auch für die, die nicht aktiv in unserer Gemeinde involviert sind!",
                },
                {
                    question: "Was läuft unter der Woche?",
                    answer: "Unter der Woche finden Gebetsstunden, Hauskreise und Bibelstunden in Raum Villach statt. Dort liest man gemeinsam in der Bibel, tauscht sich über das Gelesene aus, betet miteinander und unterstützt sich gegenseitig.",
                },
            ];
</script>
