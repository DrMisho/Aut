<x-layout :title="$title">

    <main class="main-wrapper overflow-hidden">

        <x-hero/>

        <section class="team pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center">
                        <h1 class="section-heading__title_big mb-30">WE ARE <span class="text-primary">AUTOMATA4</span></h1>
                        <span class="title aos-item aos-init aos-animate p" style="font-size: 23px;">
                            Your “IT, Passion, and Company” best partner for life
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <x-about/>

        <x-box :boxes="$boxes"/>

        <x-service :clients="$clients" :suites="$suites"/>


    </main>

</x-layout>