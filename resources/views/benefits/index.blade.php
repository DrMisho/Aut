<x-layout :title="$title">

    <main class="main-wrapper">
        <!-- ======= Hero inner Start ======= -->
        <section class="hero-inner">
            <div
                    class="hero-inner__bg hero-inner__bg_three"
                    data-bg-image="/theme/images/bg/second_home.jpg"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-breadcrumb">
                                <h1 class="heading">Benefits</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            Company
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Benefits
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Hero inner End ======= -->

        <section class="team pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center">
                        <h1 class="section-heading__title_big mb-30"><span class="text-primary">Automata4</span>... YOUR <span class="text-primary">SECOND HOME</span></h1>
                        <span class="title aos-item aos-init aos-animate p" style="font-size: 23px;">
                            Automata4 Group's benefits package is comprehensive and includes health and <br>financial benefits, as well as paid time off.
                            <br>
                            The company also provides other benefits such as employee and family assistance.
                        </span>
                    </div>
                </div>
            </div>
        </section>

       <section class="team pt-50 pb-50 section-bg-common">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center">
                        <h1 class="section-heading__title_big mb-30"><span class="text-primary">Health Care Plans</span></h1>
                        <span class="title aos-item aos-init aos-animate p" style="font-size: 23px;">
                            Automata4 Group health care plans are designed to provide employees and their
                            eligible dependents with options so they can elect the health care coverage that best meets their needs.
                        </span>
                        <section class="faq pb-40 pt-40">
                            <div class="container">
                                <div class="row mt-40">
                                    <x-benefit-item
                                            :heading="'headingOne'"
                                            :collapse="'collapseOne'"
                                            :title="'Medical'"
                                            :paragraph="'The company offers employees an extensive medical plan. In addition to the medical and surgical benefits,eligible employees have coverage for prescription drugs.'"
                                    >
                                    </x-benefit-item>
                                    <x-benefit-item
                                            :heading="'headingTwo'"
                                            :collapse="'collapseTwo'"
                                            :title="'CarePlus'"
                                            :paragraph="'CarePlus provides financial protection against the high cost of certain specific and costly forms of  medical treatment generally   not covered by the company-offered medical plan or many health maintenance organizations.'"
                                    >
                                    </x-benefit-item>
                                    <x-benefit-item
                                            :heading="'headingThree'"
                                            :collapse="'collapseThree'"
                                            :title="'Dental'"
                                            :paragraph="'Dental coverage is an important part of an employee\'s total compensation and helps the employee pay for necessary dental care, including expenses for routine oral examinations, cleaning, fluoride treatments and X-rays, as well as many basic and major restorative services.'"
                                    >
                                    </x-benefit-item>
                                    <x-benefit-item
                                            :heading="'headingFour'"
                                            :collapse="'collapseFour'"
                                            :title="'Vision'"
                                            :paragraph="'Vision coverage helps pay for eye exams, eyeglasses, contact lenses and frames and offers laser vision correction procedures at a discounted price.'"
                                    >
                                    </x-benefit-item>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="team pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center">
                        <h1 class="section-heading__title_big mb-30"><span class="text-primary">Time Off</span></h1>
                        <section class="faq pb-40 pt-40">
                            <div class="container">
                                <div class="row mt-40">
                                    <x-benefit-item
                                            :heading="'headingFive'"
                                            :collapse="'collapseFive'"
                                            :title="'Leaves of Absence'"
                                            :paragraph="'Automata4 Group offers unpaid leaves of absence, subject to advance approval,for certain quality-of-life needs, including family care leaves.'"
                                    >
                                    </x-benefit-item>
                                    <x-benefit-item
                                            :heading="'headingSix'"
                                            :collapse="'collapseSix'"
                                            :title="'Paid Time Off'"
                                            :paragraph="'Automata4 Group provides paid time away from work torelax and recharge, including vacation, holidays and personal days.'"
                                    >
                                    </x-benefit-item>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="team pt-50 pb-50 section-bg-common">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center">
                        <h1 class="section-heading__title_big mb-30"><span class="text-primary">Other Benefits</span></h1>
                        <section class="faq pb-40 pt-40">
                            <div class="container">
                                <div class="row mt-40">
                                    <x-benefit-item
                                            :heading="'headingSeven'"
                                            :collapse="'collapseSeven'"
                                            :title="'Employee Assistance Plan'"
                                            :paragraph="'The Employee Assistance Program provides employees and their families with professional and confidential services, including referrals for assistance with a variety of personal issues at no cost to employees.'"
                                    >
                                    </x-benefit-item>
                                    <x-benefit-item
                                            :heading="'headingEight'"
                                            :collapse="'collapseEight'"
                                            :title="'Tuition Aid Policy'"
                                            :paragraph="'Automata4 Group offers tuition aid to help eligible employees with their professional development. These funds can be used to help cover the cost of qualified educational expenses approved by the company.'"
                                    >
                                    </x-benefit-item>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="team pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center">
                        <span class="title aos-item aos-init aos-animate p" style="font-size: 17px;">
                            This document was written for easy readability. Therefore, it may contain generalizations
                            and colloquialisms, such as "Automata4 Group employees," rather than precise legal terms. Also,
                            this document only summarizes benefits, and individual situations may vary. For full details, including
                            eligibility, you should consult the official plan documents. In all cases, the official plan documents govern
                            and are the final authority on the terms of the plans. Automata4 Group reserves the right to terminate or amend
                            any and all benefit plans.
                            Participation is neither a contract nor a guarantee of future employment.
                        </span>
                    </div>
                </div>
            </div>
        </section>

    </main>

</x-layout>