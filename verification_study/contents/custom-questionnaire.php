<div class="mx-0 mx-sm-auto mb-4">
    <div class="card">
        <div class="card-body">
        <div class="text-center">
            <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
            <i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
            <p>
            <strong>Relative Comparison</strong>
            </p>
        </div>

        <hr />

        <div class="px-4">
            <div style="font-size: 0.95rem;">
                <p id="radio_pcpt_p1_question" class="my-3 fw-bold">Which scenario did you think you were more successful at?</p>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p1" value="Scenario I (<?php echo $scenario_1; ?>)" id="radio_pcpt_p1_1" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p1_1">Scenario I (<?php echo $scenario_1; ?>)</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p1" value="Scenario II (<?php echo $scenario_2; ?>)" id="radio_pcpt_p1_2" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p1_2">Scenario II (<?php echo $scenario_2; ?>)</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p1" value="I don't know" id="radio_pcpt_p1_3" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p1_3">I don't know</label>
                </div>
            </div>
        </div>

        <div class="px-4">
            <div style="font-size: 0.95rem;">
                <p id="radio_pcpt_p2_question" class="my-3 fw-bold">Why did you think you were more successful in the scenario choosen above?</p>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="Random luck" id="radio_pcpt_p2_1" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p2_1">Random luck</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="The presence of the estimated completion time feature" id="radio_pcpt_p2_2" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p2_2">The presence of the estimated completion time feature</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="The absence of the estimated completion time feature" id="radio_pcpt_p2_3" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p2_3">The absence of the estimated completion time feature</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="The awareness of the mission cost" id="radio_pcpt_p2_4" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p2_4">The awareness of the mission cost</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="The simplicity of the interface" id="radio_pcpt_p2_5" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p2_5">The simplicity of the interface</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="Other reasons not listed" id="radio_pcpt_p2_6" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p2_6">Other reasons not listed</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p2" value="I don't know" id="radio_pcpt_p2_7" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p2_7">I don't know</label>
                </div>
            </div>
        </div>

        <div class="px-4">
            <div style="font-size: 0.95rem;">
                <p id="radio_pcpt_p3_question" class="my-3 fw-bold">What do you think can be improved in this study?</p>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="The simulation interface" id="radio_pcpt_p3_1" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p3_1">The simulation interface</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="The estimated completion time feature" id="radio_pcpt_p3_2" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p3_2">The estimated completion time feature</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="The study questionnaire" id="radio_pcpt_p3_3" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p3_3">The study questionnaire</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="The study scenario" id="radio_pcpt_p3_4" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p3_4">The study scenario</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="Nothing" id="radio_pcpt_p3_5" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p3_5">Nothing</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p3" value="I don't know" id="radio_pcpt_p3_6" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p3_6">I don't know</label>
                </div>
            </div>
        </div>

        <div class="px-4">
            <div style="font-size: 0.95rem;">
                <p id="radio_pcpt_p4_question" class="my-3 fw-bold">Did you use the estimated completion time feature?</p>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="Yes" id="radio_pcpt_p4_1" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p4_1">Yes</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="No" id="radio_pcpt_p4_2" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p4_2">No</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="radio_pcpt_p4" value="I don't know" id="radio_pcpt_p4_3" onchange="validateForm();" />
                    <label class="form-check-label" for="radio_pcpt_p4_3">I don't know</label>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>