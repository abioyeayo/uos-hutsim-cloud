<div class="mx-0 mx-sm-auto mb-5">
        <div class="card">
            <div class="card-body">
            <div class="text-center">
                <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                <i class="fa fa-gears fa-2x mb-3 text-primary"></i>
                <p>
                <strong>Task Workload Index</strong>
                </p>
            </div>

            <hr />

            <div class="px-4">
                <?php 

                // nasa task load index questionnaire
                $nasa_tlx = array(
                    "md" => array(
                            "abbr" => "md",
                            "title" => "Mental Demand",
                            "question" => "How mentally demanding was the task?"),

                    "pd" => array(
                            "abbr" => "pd",
                            "title" => "Physical Demand",
                            "question" => "How physically demanding was the task?"),

                    "td" => array(
                            "abbr" => "td",
                            "title" => "Temporal Demand",
                            "question" => "How hurried or rushed was the pace of the task?"),

                    "pf" => array(
                            "abbr" => "pf",
                            "title" => "Performance",
                            "question" => "How successful were you in accomplishing what you were asked to do?"),

                    "ef" => array(
                            "abbr" => "ef",
                            "title" => "Effort",
                            "question" => "How hard did you have to work to accomplish your level of performance?"),

                    "fr" => array(
                            "abbr" => "fr",
                            "title" => "Frustration",
                            "question" => "How insecure, discouraged, irritated, stressed, and annoyed were you?"));

                foreach ($nasa_tlx as $component) {

                    $nasa_tlx_component_lower_label = "Not at all";
                    $nasa_tlx_component_upper_label = "Extremely";
                    
                    echo '<div style="font-size: 0.95rem;">
                            <p id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="1" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1">
                                1 ('.$nasa_tlx_component_lower_label.')
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
                                7
                                </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="8" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_8" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_8">
                                8
                                </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="9" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_9" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_9">
                                9
                                </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="10" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_10" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_10">
                                10
                                </label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="11" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_11" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_11">
                                11 ('.$nasa_tlx_component_upper_label.')
                                </label>
                            </div>
                            </div>';
                    } 
                ?>

            </div>
            </div>
        </div>
        </div>