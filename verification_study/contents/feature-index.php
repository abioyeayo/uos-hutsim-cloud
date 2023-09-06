<div class="mx-0 mx-sm-auto mb-5">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                <i class="fa fa-android fa-2x mb-3 text-primary"></i>
                <p>
                <strong>Feature Index</strong>
                </p>
            </div>

            <hr />

            <div class="px-4">
                <?php 

                // feature index questionnaire
                $feature_index = array(
                    "e1" => array(
                        "abbr" => "e1",
                        "question" => "How accurate was the time estimation in this scenario?"));

                
                foreach ($feature_index as $component) {

                    $feature_index_lower_label = "Very Low";
                    $feature_index_upper_label = "Very High";
                
                    echo '<div style="font-size: 0.95rem;">
                            <p id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="1" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1">
                                1 ('.$feature_index_lower_label.')
                            </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="2" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_2" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_2">
                                2
                            </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="3" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_3" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_3">
                                3
                            </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="4" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_4" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_4">
                                4
                            </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="5" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_5" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_5">
                                5
                            </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="6" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_6" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_6">
                                6
                            </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="7" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_7" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_7">
                                7 ('.$feature_index_upper_label.')
                            </label>
                            </div>
                        </div>';
                    } 
                ?>

            </div>
        </div>
    </div>
</div>