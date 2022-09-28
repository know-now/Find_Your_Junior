@extends('layouts.template')

@section('content')
    {{-- Challanges --}}
   <section id="challenge" >
    <div class="container contest text-end">
        <h3>Just keep </h3>
        <h1><span style="color: #EE2436">challenging</span></h1>
        <h2>yourself</h2>
    </div>

    <div>
        <x-contest />
    </div>
</section>
    {{-- How to write CV and Cover letter --}}
    <section id="cv">
        <div class="container contest-howToWrite mt-5 text-start">
            <h3>HOW to write </h3>
            <h1><span style="color:#00a2df">CV</span></h1>
            <h2> & Cover Letter</h2>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <img src="/assets/cv.jpg" style="max-width:100%;
                max-height:100%;">

                </div>
                <div class="col-lg-4">
                    <img src="/assets/coverLetter.png" style="max-width:100%;
                max-height:100%;">
                </div>
            </div>
        </div>
        <div class="container contest-testYourself mt-5 text-end">
            <h3>Prepare yourself for</h3>
            <h1><span style="color:#00a2df"> soft skills </span></h1>
            <h2>interview questions</h2>
        </div>
    </section>

    <!-- question accordion -->
    <section id="question" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4"><span style="color:#00a2df">Questions </span> & Suggestions</h2>
            <div class="accordion accordion-flush" id="question">
                <!-- question 1-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-One">
                            What do you know about our company?
                        </button>
                    </h2>
                    <div id="question-One" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#question">
                        <div class="accordion-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex
                            sunt ab placeat illum. Quae natus inventore facilis facere.
                            Disti
                        </div>
                    </div>
                </div>

                <!-- question  2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-two">
                            Describe your ideal job?
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#question">
                        <div class="accordion-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex
                            sunt ab placeat illum. Quae natus inventore facilis facere.
                            Distinctio dolorem ipsum doloremque nemo eaque exercitationem,
                            dolorum soluta inventore? Perspiciatis, sint alias animi velit
                            ac
                        </div>
                    </div>
                </div>
                <!-- question  3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-three">
                            How do you deal with deadlines?
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#question">
                        <div class="accordion-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex
                            sunt ab placeat illum. Quae natus inventore facilis facere.
                            Distinctio dolorem ipsum doloremque nemo eaque exercitationem,
                            dolorum
                        </div>
                    </div>
                </div>
                <!-- question 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-four">
                            What make you unique?
                        </button>
                    </h2>
                    <div id="question-four" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#question">
                        <div class="accordion-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex
                            sunt ab placeat illum. Quae natus inventore facilis facere.
                            Distinctio dolorem ipsum doloremque nemo eaque exercitationem,
                            dolorum
                        </div>
                    </div>
                </div>
                <!-- question 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-five">
                            What are your salary expectations?
                        </button>
                    </h2>
                    <div id="question-five" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#question">
                        <div class="accordion-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex
                            sunt ab placeat illum. Quae natus inventore facilis facere.
                            Distinctio dolorem ipsum doloremque nemo eaque exercitationem,
                            dolorum
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeBoVGmrAwJURIFiNVzOJBIW4kzFwKASmBYaEKA_9Lj95WPkQ/viewform?vc=0&c=0&w=1&flr=0" title="Soft skills test" height="1000px" width="90%"></iframe> --}}
