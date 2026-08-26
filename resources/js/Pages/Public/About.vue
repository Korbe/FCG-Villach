<template>
    <public-layout title="Über uns">
        <Navbar/>

        <div class="bg-white text-center mt-16 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 px-5">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                Das sind <span class="text-brand-primary">wir</span>
            </h1>
            <p class="mt-3 text-xl text-gray-500 max-w-5xl lg:max-w-4xl mx-auto sm:text-lg md:mt-5 md:text-xl">
                Wir sind das Leiterteam der Freien Christengmeinde Villach. Wir freuen uns auf Sie.
            </p>

            <div class="flex justify-center mt-10">
                <img src="/images/team.png" class="shadow-xl rounded-xl object-cover h-60 sm:h-96 md:h-[36rem]" />
            </div>
        </div>

        

        <div class="bg-white sm:text-center mt-10 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28 px-5">
            <h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-4xl">
                Unsere gemeinsamen <span class="text-brand-primary">Aufgaben</span>
            </h1>
            <p class="mt-3 text-xl text-gray-500 max-w-5xl lg:max-w-4xl mx-auto sm:text-lg md:mt-5 md:text-xl">
                Wir wissen, dass uns Gott zusammengeführt hat, denn ohne ihn hätten wir uns wohl nie kennengelernt. Wir sind ein buntes Gemisch von Menschen, die Villach und Umgebung mit dem Evangelium erreichen wollen.
            </p>
        </div>

        <tasks />

        <team/>


        <div class="relative bg-white">
            <div class="lg:absolute lg:inset-0">
                <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
                    <img loading="lazy" class="h-56 w-full object-cover lg:absolute lg:h-full" src="/images/aboutus_prayers.jpg" alt=""/>
                </div>
            </div>
            <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
                <div class="lg:col-start-2 lg:pl-8">
                    <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">
                        <h2 class="leading-6 text-brand-primary font-semibold tracking-wide uppercase">Freie Christengemeinde Villach</h2>
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Das glauben wir</h3>

                        <div class="mt-5 prose prose-lg prose-a:text-brand-primary text-gray-500">


                            <ul role="list">
                                <li><b class="text-brand-primary">Wir glauben</b>, dass der Gott der Bibel als Schöpfer des Himmels und der Erde, Ursprung und Vollender allen Lebens ist und sich uns
                                    Menschen als dreieiniger Gott, als Vater, Sohn und Heiliger Geist offenbart. Wir nehmen dieses Wissen aus der Bibel, die von Gottes Geist inspirierte Heilige
                                    Schrift. Sie ist die Richtschnur unseres Glaubens und unseres Handelns und ist die Grundlage unserer Verkündigung des Evangeliums.
                                </li>
                                <li><b class="text-brand-primary">Wir glauben</b>, dass Jesus Christus als Sohn Gottes für unser Heil Mensch geworden ist; gezeugt vom Heiligen Geist und geboren von
                                    der Jungfrau Maria. Mit seinem Leben und Wirken hat er uns gezeigt, wie wirkliches Leben ausschaut. Durch seinen Tod am Kreuz nahm er alle Sünden der Menschheit auf
                                    sich und durch seine Auferstehung und bietet er jedem Menschen der daran glaubt, Versöhnung mit Gott und ewiges Leben.
                                </li>
                                <li><b class="text-brand-primary">Wir glauben</b>, dass der Heilige Geist durch den Glauben an Jesus Christus im Gläubigen neues Leben schafft, als göttlicher Beistand
                                    in dem Menschen wohnt und zu einem Gott wohlgefälligen Leben befähigt. Zudem rüstet der Heilige Geist die Gemeinde mit Kraft und übernatürliche Gaben aus, so dass
                                    das Leben Christi in der Gemeinde wenigstens ansatzweise gelebt werden kann.
                                </li>
                                <li><b class="text-brand-primary">Wir glauben</b>, dass die Ortsgemeinde, als eine lokale Lebens-, Glaubens- und Dienstgemeinschaft, das von Gott gesetzte geistliche
                                    Zuhause aller Glaubenden ist. Mit der Taufe werden die Gläubigen aufgrund ihres persönlichen Bekenntnisses der Sündenvergebung und Glaubens an Jesus Christus zur
                                    Gemeinde hinzugetan. Im Abendmahl, als Gedächtnismahl und Zeichen der Gemeinschaft und Teilhabe an ihrem Herrn Jesus Christus, verkündet die Gemeinde den Tod und
                                    die Auferstehung Jesu in Erwartung seiner Wiederkunft in Kraft und Herrlichkeit.
                                </li>
                            </ul>
                            <p>
                                Detaillierte formulierte lehrmäßige Grundlagen können sie
                                <a target="_blank" href="http://www.fcgoe.at/images/ueber_uns/lehrmaessige_grundlagen2013-04.pdf">hier</a> downloaden.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="relative py-16 mt-16 bg-white overflow-hidden">
            <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
                <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                    <svg class="absolute top-64 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                        <defs>
                            <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)"/>
                    </svg>
                    <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                        <defs>
                            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>
                    </svg>
                    <svg class="absolute bottom-32 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                        <defs>
                            <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)"/>
                    </svg>
                </div>
            </div>
            <div class="relative px-4 sm:px-6 lg:px-8">
                <div class="text-lg max-w-prose mx-auto">
                    <h1 id="freie-christengemeinde" style="scroll-margin: 7rem">
                        <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Freie Christengemeinden Österreichs</span>
                    </h1>
                    <p class="mt-8 text-xl text-gray-500 leading-8">Als Freie Christengemeinde – Pfingstgemeinde ist es uns ein Anliegen, den Menschen in unserem Land zu dienen, indem wir die gute Nachricht von Jesus Christus gesellschaftsrelevant verkündigen und praktizieren.</p>
                </div>
                <div class="mt-6 prose prose-a:text-brand-primary prose-lg text-gray-500 mx-auto">
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
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import Team from "@/Partials/Team/Team.vue";
import Navbar from "@/Partials/Navbar.vue";
import Tasks from "@/Partials/About/Tasks.vue";
</script>
