<x-layouts.app title="Yna Portfolio">
    <div id="top" class="container-md">
        <div class="card bg-dark border-0 shadow-lg rounded-5 w-100 p-5">
            <div class="card-body p-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 me-5">
                        <h4 class="text-light fw-bold">Hello! I am</h4>
                        <h1 class="display-3 mb-5 fw-bold text-light">
                            Yna Angelika Casabuena
                        </h1>
                        <p class="text-light text-justify">
                            Just here to learn, build, and bring ideas to life. Let’s connect and make things happen!
                        </p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-2 mt-5">
                            <button type="button" class="btn btn-lg px-4 me-md-2 fw-bold" id="software-dev">Software
                                Developer</button>
                            <button type="button" class="btn btn-lg px-4 fw-bold" id="business-analyst">Business
                                Analyst</button>
                        </div>

                    </div>

                    <div class="col-lg-5 text-end">
                        <img src="{{ asset('images/code-logo.png') }}" alt="Code Logo"
                            class="img-fluid w-75 moving-image">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="custom-box-l"></div>

    {{-- Include Sections --}}
    @include('pages.portfolio.about')
    @include('pages.portfolio.certi')
    @include('pages.portfolio.project')
    @include('pages.portfolio.contact')

</x-layouts.app>
