<template>
    <public-layout title="Über uns">
        <Navbar/>

        <div class="bg-white dark:bg-gray-800 text-center mt-16 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 px-5">
            <span class="inline-flex items-center rounded-full bg-brand-primary-50 dark:bg-brand-primary-900 px-4 py-1.5 text-sm font-semibold text-brand-primary-700 dark:text-brand-primary-200">
                Unser Leiterteam
            </span>
            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                Das sind <span class="text-brand-primary">wir</span>
            </h1>
            <p class="mt-3 text-xl text-gray-500 dark:text-gray-400 max-w-5xl lg:max-w-4xl mx-auto sm:text-lg md:mt-5 md:text-xl">
                Wir sind das Leiterteam der Freien Christengmeinde Villach. Wir freuen uns auf Sie.
            </p>

            <div class="flex justify-center mt-10">
                <img src="/images/team.png" class="ring-1 ring-gray-900/10 dark:ring-white/10 shadow-2xl rounded-2xl object-cover h-60 sm:h-96 md:h-[36rem]" />
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 sm:text-center mt-10 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 px-5">
            <h1 class="text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-4xl">
                Unsere gemeinsamen <span class="text-brand-primary">Aufgaben</span>
            </h1>
            <p class="mt-3 text-xl text-gray-500 dark:text-gray-400 max-w-5xl lg:max-w-4xl mx-auto sm:text-lg md:mt-5 md:text-xl">
                Wir wissen, dass uns Gott zusammengeführt hat, denn ohne ihn hätten wir uns wohl nie kennengelernt. Wir sind ein buntes Gemisch von Menschen, die Villach und Umgebung mit dem Evangelium erreichen wollen.
            </p>
        </div>

        <tasks />

        <team/>


        <div class="relative bg-white dark:bg-gray-800">
            <div class="lg:absolute lg:inset-0">
                <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
                    <img loading="lazy" class="h-56 w-full object-cover lg:absolute lg:h-full" src="/images/aboutus_prayers.jpg" alt=""/>
                </div>
            </div>
            <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
                <div class="lg:col-start-2 lg:pl-8">
                    <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">
                        <h2 class="leading-6 text-brand-primary font-semibold tracking-wide uppercase">Freie Christengemeinde Villach</h2>
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Das glauben wir</h3>

                        <div class="mt-6 space-y-4">
                            <div class="rounded-xl bg-gray-50 dark:bg-gray-700 p-5">
                                <p class="text-gray-600 dark:text-gray-300"><b class="text-brand-primary">Wir glauben</b>, dass der Gott der Bibel als Schöpfer des Himmels und der Erde, Ursprung und Vollender allen Lebens ist und sich uns
                                    Menschen als dreieiniger Gott, als Vater, Sohn und Heiliger Geist offenbart. Wir nehmen dieses Wissen aus der Bibel, die von Gottes Geist inspirierte Heilige
                                    Schrift. Sie ist die Richtschnur unseres Glaubens und unseres Handelns und ist die Grundlage unserer Verkündigung des Evangeliums.
                                </p>
                            </div>
                            <div class="rounded-xl bg-gray-50 dark:bg-gray-700 p-5">
                                <p class="text-gray-600 dark:text-gray-300"><b class="text-brand-primary">Wir glauben</b>, dass Jesus Christus als Sohn Gottes für unser Heil Mensch geworden ist; gezeugt vom Heiligen Geist und geboren von
                                    der Jungfrau Maria. Mit seinem Leben und Wirken hat er uns gezeigt, wie wirkliches Leben ausschaut. Durch seinen Tod am Kreuz nahm er alle Sünden der Menschheit auf
                                    sich und durch seine Auferstehung und bietet er jedem Menschen der daran glaubt, Versöhnung mit Gott und ewiges Leben.
                                </p>
                            </div>
                            <div class="rounded-xl bg-gray-50 dark:bg-gray-700 p-5">
                                <p class="text-gray-600 dark:text-gray-300"><b class="text-brand-primary">Wir glauben</b>, dass der Heilige Geist durch den Glauben an Jesus Christus im Gläubigen neues Leben schafft, als göttlicher Beistand
                                    in dem Menschen wohnt und zu einem Gott wohlgefälligen Leben befähigt. Zudem rüstet der Heilige Geist die Gemeinde mit Kraft und übernatürliche Gaben aus, so dass
                                    das Leben Christi in der Gemeinde wenigstens ansatzweise gelebt werden kann.
                                </p>
                            </div>
                            <div class="rounded-xl bg-gray-50 dark:bg-gray-700 p-5">
                                <p class="text-gray-600 dark:text-gray-300"><b class="text-brand-primary">Wir glauben</b>, dass die Ortsgemeinde, als eine lokale Lebens-, Glaubens- und Dienstgemeinschaft, das von Gott gesetzte geistliche
                                    Zuhause aller Glaubenden ist. Mit der Taufe werden die Gläubigen aufgrund ihres persönlichen Bekenntnisses der Sündenvergebung und Glaubens an Jesus Christus zur
                                    Gemeinde hinzugetan. Im Abendmahl, als Gedächtnismahl und Zeichen der Gemeinschaft und Teilhabe an ihrem Herrn Jesus Christus, verkündet die Gemeinde den Tod und
                                    die Auferstehung Jesu in Erwartung seiner Wiederkunft in Kraft und Herrlichkeit.
                                </p>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Detaillierte formulierte lehrmäßige Grundlagen können sie
                                <a class="text-brand-primary font-medium hover:text-brand-primary-700" target="_blank" href="http://www.fcgoe.at/images/ueber_uns/lehrmaessige_grundlagen2013-04.pdf">hier</a> downloaden.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative py-16 mt-16 bg-gray-50 dark:bg-gray-900 overflow-hidden">
            <div class="relative px-4 sm:px-6 lg:px-8">
                <div class="text-lg max-w-prose mx-auto">
                    <h1 id="freie-christengemeinde" style="scroll-margin: 7rem">
                        <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Freie Christengemeinden Österreichs</span>
                    </h1>
                    <p class="mt-8 text-xl text-gray-500 dark:text-gray-400 leading-8">Als Freie Christengemeinde – Pfingstgemeinde ist es uns ein Anliegen, den Menschen in unserem Land zu dienen, indem wir die gute Nachricht von Jesus Christus gesellschaftsrelevant verkündigen und praktizieren.</p>
                </div>
                <div class="mt-10 max-w-prose mx-auto rounded-2xl bg-white dark:bg-gray-800 shadow-sm ring-1 ring-gray-900/5 dark:ring-white/10 px-6 py-8 sm:px-10">
                <div class="prose prose-a:text-brand-primary prose-lg dark:prose-invert text-gray-500 mx-auto">
                    <p>Durch attraktive, lebendige Ortsgemeinden soll allen Menschen die Hoffnung des Lebens nahegebracht werden. Es ist uns wichtig, die junge Generation zu erreichen und sie für eine tragfähige Zukunft auszurüsten. Als Kirchenbewegung sehen wir auch einen Auftrag im weltweiten Sozial- und Entwicklungshilfedienst.
                    </p>
                    <p>
                        Als Freie Christengemeinde – Pfingstgemeinde (FCGÖ) sind wir seit 26. August 2013, gemäß der Verordnung der Bundesministerin für Unterricht, Kunst und Kultur vom 26.08.2013,
                        BGBl. II Nr. 250/2013, eine staatlich anerkannte Kirche und gehören zum Bund der <a href="https://freikirchen.at/">„Freikirchen in
                        Österreich“</a>.
                    </p>

                    <h2 id="was-ist-eine-freikirche" style="scroll-margin: 7rem">Was ist eine Freikirche</h2>

                    <p>Die "Freikirchen in Österreich" umfassen alle Kirchengemeinden, die dem Bund der Baptistengemeinden in Österreich, dem Bund Evangelikaler Gemeinden in Österreich, den Elaia Christengemeinden, der Freien Christengemeinde – Pfingstgemeinde in Österreich oder der Mennonitischen Freikirche Österreich angehören. Seit Ende August 2013 sind sie eine gesetzlich anerkannte Kirche.
                    </p>

                    <h2 id="geschichte-der-fcg" style="scroll-margin: 7rem">Geschichte der FCG</h2>

                    <h3>Die historische Bedeutung der weltweiten Pfingstbewegung</h3>
                    <p>Die klassische Pfingstbewegung breitet sich weltweit ungewöhnlich stark aus und geht auf eine Erweckung unter Afroamerikanern zurück (1906). Die World Christian Encyclopedia
                        rechnet
                        der pfingstlich-charismatischen Bewegung mittlerweile ca. 523 Millionen Angehörigen auf der ganzen Welt zu (Daten von 2001).
                    </p>
                    <p>Die Pfingstbewegung engagierte sich gegen soziale Ausgrenzungen und ungerechte soziale Normen. So wurde sie auf der Weltmissionskonferenz des World Council of Churches (WCC) in Athen (2005) als eine Religion der Armen und Unterdrückten, für die, Diskriminierung, Armut und Krankheit Teil des Lebens sind, bezeichnet. Dort wurde auch festgehalten, dass die befreiende Lehre der Pfingstbewegung, breite Wirkung über alle sozialen, ökonomischen und ethnischen Begrenzungen hat (Befreiung durch Integration).</p>

                    <h3>Pfingstchristen betonen im Allgemeinen...</h3>
                    <p>Die Notwendigkeit einer lebendigen Beziehung zu Jesus Christus als Retter und Herrn. Das Rechnen mit der Kraft und den Gaben des Heiligen Geistes, sowohl im Gottesdienst als auch im Alltag, sowie den Glauben an eine besondere Erfahrung des Heiligen Geistes, welche zu einem charakterreifen, seinen Nächsten liebenden und für Gott engagierten Dienst führen.</p>

                    <h3>Die Gründung der ersten Freien Christengemeinde – Pfingstgemeinde in Österreich</h3>
                    <p>Die ersten Pfingstgemeinden in Österreich entstanden als Freikirche ab 1919 in Wien. Ende dieses Jahres kamen Andrew Ek, Edvin Tallbacka und Alwin Christenson aus Schweden nach Wien, um an die hungernde Nachkriegsbevölkerung Lebensmittel und Kleidung zu verteilen und Christus zu verkünden, wodurch die Pfingstgemeinde in Wien entstand. Bis zum Ausbruch des 2. Weltkrieges blühte die Pfingstgemeinde immer mehr auf, wurde dann aber von den Nationalsozialisten verboten.</p>

                    <p>
                        Nach dem zweiten Weltkrieg kamen viele gläubige Flüchtlinge aus dem ehemaligen Jugoslawien in das vom Krieg gezeichnete Österreich. In guter Zusammenarbeit mit den übrig gebliebenen österreichischen Gläubigen wurde die Gemeindearbeit im Raum Wien, im Burgenland, im Salzburger Land u.a. wieder aufgenommen. Am 14. Dezember 1946 trafen sich dann 26 Prediger in einer Flüchtlingswohnung in Sattledt (Oberösterreich) – unter ihnen Leute, die durch den Krieg fast alles verloren hatten – und gründeten, mit einer Begeisterung für die Arbeit am Reich Gottes im Herzen, die "Freien Christengemeinden Österreichs". Ein Ältestenrat wurde berufen und das Missionsfeld Österreich wurde in fünf Arbeitsdistrikte eingeteilt. Die Pfingstbewegung hatte nun endgültig begonnen in Österreich Fuß zu fassen.
                    </p>

                    <h3 class="h3">Die Freie Christengmeinde – Pfingstgemeinde heute</h3>
                    <p>Anfang der Neunzigerjahre, nach der Öffnung des Ostblocks, kamen eine Menge pfingstlicher Christen aus Rumänien nach Österreich und schlossen sich dem Gemeindebund an, woraus 1993 der Rumänische Zweig entstand. Die Entwicklung im ersten Jahrzehnt dieses Jahrhunderts ist wesentlich davon geprägt, dass viele bislang völlig unabhängige christliche Gemeinden den Weg in die gemeinsame Bewegung der Freien Christengemeinde - Pfingstgemeinde in Österreich fanden. 2001 wurde der Internationale Zweig gegründet und 2005 noch zwei weitere Zweige in die FCGÖ aufgenommen: Die "LIFE Church" (damals: "Vision für Österreich") und der Charismatische Zweig. Der bislang letzte aufgenommene Zweig war 2012 der Afrikanische Zweig.
                    </p>

                    <h3 class="h3">Entstehung und Entwicklung der Villacher Freien Christengemeinde</h3>
                    <p>Alles begann 1947 als bei der Gründung der "Freien Christengemeinden Österreichs" in Sattledt, Kärnten als eigener Arbeitsbereich definiert wurde. Ab 1948 wurden dann in Villach jährliche Konferenzen veranstaltet, wo sich viele Pfingstgläubige aus Kärnten trafen. Ab 1952 wurden dann unter dem Evangelisten Jakob de Wilde regelmäßige Gottesdienste abgehalten und 1961, als Karl Wagner nach Villach übersiedelte, eine Gemeinde gegründet. Unter seiner Leitung wurde 1962/63 das noch heute benützte Gemeindehaus gebaut. 1968 übernahm dann Ype de Wilde die Leitung der Freien Christengemeinde in Villach und setzte die Arbeit von Karl Wagner fort. In den folgenden Jahren kamen und gingen mehrere Pastoren und erhielten die Freie Christengemeinde Villach bis heute.</p>
                </div>
                </div>
            </div>
        </div>
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Team from "@/Partials/Team/Team.vue";
import Navbar from "@/Partials/Navbar.vue";
import Tasks from "@/Partials/About/Tasks.vue";
</script>
