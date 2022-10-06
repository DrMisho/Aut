<x-layout :title="$title">

    <main class="main-wrapper overflow-hidden">

        <x-hero/>

        <x-about/>

        <x-service_area/>

        <x-service :clients="$clients"/>

        <x-solution/>

        <x-use_study/>

    </main>

</x-layout>