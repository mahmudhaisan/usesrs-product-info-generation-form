<!-- Advantage Accordion Item -->
<div class="accordion-item">

    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#advantageGroup" aria-expanded="false" aria-controls="advantageGroup">
            <span class="mr-2"> Advantage </span> <i class="fa-solid fa-circle-info " data-bs-toggle="tooltip"
                data-bs-placement="top" title="Tooltip on top"></i>
        </button>

    </h2>


    <div id="advantageGroup" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">

        <!-- Advantage accordion body -->
        <div class="accordion-body">

            <div class="group-general-header p-3">
                <div class="row">
                    <div class="col-md-11 h5">
                        Create Up to 5 advantage groups..
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-dark" id="advantage-group-create-new">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Advantage groupwrapper -->
            <div id="advantage-group-wrapper">
                <!-- Advantage group with input -->
                <div class="advantage-group-with-input">

                    <div class="advantage-group-input-row">
                        <!-- Advantage group main title bar -->
                        <div class="bg-dark text-white h5 p-2 add-new-group-field">
                            <div class="row">
                                <div class="col-md-12">Advantage Group Fields</div>

                            </div>
                        </div>

                        <!-- Advantage group input field -->
                        <div class="group-input-field p-2">
                            <div class="form-group">
                                <input type="text" class="form-control" name="advantage-group-input[]"
                                    placeholder="advantage fields" required>

                            </div>

                        </div>
                    </div>
                    <!-- Advantage group input row end -->
                </div>
                <!-- Advantage group with input -->
            </div>
            <!-- Advantage groupwrapper -->

        </div>
        <!-- Advantage accordion body -->

    </div>
</div>
<!-- Advantage Accordion Item -->