<div class="mx-0 mx-sm-auto mb-5">
        <div class="card">
            <div class="card-body">
            <div class="text-center">
                <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                <i class="fa fa-gears fa-2x mb-3 text-primary"></i>
                <p>
                <strong>Task Index</strong>
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

        <div class="mx-0 mx-sm-auto mb-5">
        <div class="card">
            <div class="card-body">
            <div class="text-center">
                <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                <i class="fa fa-android fa-2x mb-3 text-primary"></i>
                <p>
                <strong>Usability Index</strong>
                </p>
            </div>

            <hr />

            <div class="px-4">
                <?php 

                // Usability index questionnaire
                $usability_index = array(
                    "u1" => array(
                        "abbr" => "u1",
                        "question" => "I think that I would like to use the verification feature more frequently."),

                    "u2" => array(
                        "abbr" => "u2",
                        "question" => "I found the verification feature unnecessarily complex."),

                    "u3" => array(
                        "abbr" => "u3",
                        "question" => "I thought the verification feature was easy to use."),

                    "u4" => array(
                        "abbr" => "u4",
                        "question" => "I think that I would need the support of a technical person to be able to use this verification feature."),

                    "u5" => array(
                        "abbr" => "u5",
                        "question" => "I found the various functions in this verification feature were well integrated."),

                    "u6" => array(
                        "abbr" => "u6",
                        "question" => "I thought there was too much inconsistency in this verification feature."),

                    "u7" => array(
                        "abbr" => "u7",
                        "question" => "I would imagine that most people would learn to use this verification feature very quickly."),

                    "u8" => array(
                        "abbr" => "u8",
                        "question" => "I found the verification feature very cumbersome to use."),

                    "u9" => array(
                        "abbr" => "u9",
                        "question" => "I felt very confident using the verification feature."),

                    "u10" => array(
                        "abbr" => "u10",
                        "question" => "I needed to learn a lot of things before I could get going with this verification feature."));

                
                foreach ($usability_index as $component) {

                    $usability_index_lower_label = "Strongly Disagree";
                    $usability_index_upper_label = "Strongly Agree";
                
                    echo '<div style="font-size: 0.95rem;">
                            <p id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="1" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1">
                                1 ('.$usability_index_lower_label.')
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
                                7 ('.$usability_index_upper_label.')
                            </label>
                            </div>
                        </div>';
                    } 
                ?>

            </div>
            </div>
        </div>
        </div>

        <div class="mx-0 mx-sm-auto mb-5">
        <div class="card">
            <div class="card-body">
            <div class="text-center">
                <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                <i class="fa fa-line-chart fa-2x mb-3 text-primary"></i>
                <p>
                <strong>Acceptance Index</strong>
                </p>
            </div>

            <hr />

            <div class="px-4">
                <?php 

                // acceptance index questionnaire
                $acceptance_index = array(
                    "a1" => array(
                        "abbr" => "a1",
                        "question" => "The verification feature is useful."),

                    "a2" => array(
                        "abbr" => "a2",
                        "question" => "The verification feature is unpleasant."),

                    "a3" => array(
                        "abbr" => "a3",
                        "question" => "This is an attention check. Please select number 4."),

                    "a4" => array(
                        "abbr" => "a4",
                        "question" => "The verification feature is good."),

                    "a5" => array(
                        "abbr" => "a5",
                        "question" => "The verification feature is annoying."),

                    "a6" => array(
                        "abbr" => "a6",
                        "question" => "The verification feature is effective."),

                    "a7" => array(
                        "abbr" => "a7",
                        "question" => "The verification feature is irritating."),

                    "a8" => array(
                        "abbr" => "a8",
                        "question" => "The verification feature is worthless."),

                    "a9" => array(
                        "abbr" => "a9",
                        "question" => "The verification feature is desirable."),

                    "a10" => array(
                        "abbr" => "a10",
                        "question" => "The verification feature is sleep-inducing."));

                
                foreach ($acceptance_index as $component) {

                    $acceptance_index_lower_label = "Strongly Disagree";
                    $acceptance_index_upper_label = "Strongly Agree";
                
                    echo '<div style="font-size: 0.95rem;">
                            <p id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>';
                    
                    echo '<div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="1" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1">
                            1 ('.$acceptance_index_lower_label.')
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
                            7 ('.$acceptance_index_upper_label.')
                            </label>
                        </div>
                        </div>';
                    
                    } 
                ?>

            </div>
            </div>
        </div>
        </div>