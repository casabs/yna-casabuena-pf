<div id="certi" class="container align-items-center pb-0 pe-lg-0 pt-lg-3">
    <h2 class="display-3 fw-bold text-center my-5">CERTIFICATIONS</h2>
    <div class="row align-items-center mt-2">
        <!-- First Column -->
        <div class="col-md-6">
            <div class="text-bg-dark shadow-lg pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded-5">
                <div class="my-3 p-3">
                    <h2 class="display-6 fs-2 fw-bold">Information Technology Specialist:<br>Python</h2>
                    <p class="lead">2023</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto custom-bg img-python hover-zoom"
                     data-bs-toggle="modal"
                     data-bs-target="#certiModal"
                     data-img="{{ asset('images/certi-python.jpg') }}"
                     data-title="Python Certification">
                </div>
            </div>
        </div>

        <!-- Second Column -->
        <div class="col-md-6">
            <div class="bg-body-tertiary shadow-lg pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded-5">
                <div class="my-3 p-3">
                    <h2 class="display-6 fs-2 fw-bold">Information Technology Specialist:<br>Database</h2>
                    <p class="lead">2022</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto custom-bg img-database hover-zoom"
                     data-bs-toggle="modal"
                     data-bs-target="#certiModal"
                     data-img="{{ asset('images/certi-database.jpg') }}"
                     data-title="Database Certification">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div class="modal fade" id="certiModal" tabindex="-1" aria-labelledby="certiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="certiModalLabel">Certification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Default Placeholder Image -->
                <img id="modalImage" src="{{ asset('images/code-logo.png') }}" class="img-fluid rounded" alt="Certification Image">
            </div>
        </div>
    </div>
</div>

