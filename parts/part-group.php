<!-- Part Group Accordion Item -->
<div class="accordion-item">


    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="mr-2"> Part Group </span> <i class="fa-solid fa-circle-info " data-bs-toggle="tooltip"
                data-bs-placement="top" title="Tooltip on top"></i>
        </button>

    </h2>


    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <!-- part group accordion body -->
        <div class="accordion-body">



            <div class="group-general-header p-3">
                <div class="row">
                    <div class="col-md-11 h5">
                        Create Up to 5 part groups..
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-dark" id="part-group-create-new">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>

            </div>

            <!-- part group wrapper -->
            <div id="part-group-wrapper">

                <!-- part  group with input -->
                <div class="part-group-with-input" item-no="1">
                    <div class="group-input-row">
                        <!-- groups main title bar -->
                        <div class="bg-dark text-white h5 p-2 add-new-group-field">
                            <div class="row">
                                <div class="col-md-12">Part Group Fields</div>

                            </div>
                        </div>

                        <!-- part group input field -->
                        <div class="part-group-1 p-2">
                            <div class="form-group">
                                <input type="text" class="form-control mt-2" name="part-group-input[]"
                                    class="part-group-innput" placeholder="Part Group Field" required>
                                <input type="text" class="form-control mt-2" name="part-group-input[]"
                                    class="part-group-input" placeholder="Part Group Field" required>
                                <input type="text" class="form-control mt-2" name="part-group-input[]"
                                    class="part-group-input" placeholder="Part Group Field" required>
                                <input type="text" class="form-control mt-2" name="part-group-input[]"
                                    class="part-group-input" placeholder="Part Group Field" required>
                                <input type="text" class="form-control mt-2" name="part-group-input[]"
                                    class="part-group-input" placeholder="Part Group Field" required>
                            </div>
                        </div>
                    </div>
                    <!-- part group input row end -->
                </div>
                <!-- part group wrapper -->
            </div>
            <!-- group with row end -->

        </div>
        <!-- part group accordion body -->
    </div>
</div>
<!-- Part Group Accordion Item -->