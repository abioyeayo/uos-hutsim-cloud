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

        <div class="mx-0 mx-sm-auto mb-5">
        <div class="card">
            <div class="card-body">
            <div class="text-center">
                <!-- <i class="fa fa-file-text-o fa-4x mb-3 text-primary"></i> -->
                <i class="fa fa-android fa-2x mb-3 text-primary"></i>
                <p>
                <strong>Trust Index</strong>
                </p>
            </div>

            <hr />

            <div class="px-4">
                <?php 

                // Jian trust index questionnaire
                $jian_trust_index = array(
                    "j1" => array(
                        "abbr" => "j1",
                        "question" => "The swarm is deceptive."),

                    "j2" => array(
                        "abbr" => "j2",
                        "question" => "The swarm behaves in an underhanded manner."),

                    "j3" => array(
                        "abbr" => "j3",
                        "question" => "I am suspicious of the swarm's intent, action, or outputs."),

                    "j4" => array(
                        "abbr" => "j4",
                        "question" => "I am wary of the swarm."),

                    "j5" => array(
                        "abbr" => "j5",
                        "question" => "The swarm's actions will have a harmful or injurious outcome."),

                    "j6" => array(
                        "abbr" => "j6",
                        "question" => "I am confident in the swarm."),

                    "j7" => array(
                        "abbr" => "j7",
                        "question" => "The swarm provides security."));

                
                foreach ($jian_trust_index as $component) {

                    $jian_trust_index_lower_label = "Not at all";
                    $jian_trust_index_upper_label = "Extremely";
                
                    echo '<div style="font-size: 0.95rem;">
                            <p id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>
                            <div class="form-check form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="1" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1" onchange="validateForm();" />
                            <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1">
                                1 ('.$jian_trust_index_lower_label.')
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
                                7 ('.$jian_trust_index_upper_label.')
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
                <strong>Performance Index</strong>
                </p>
            </div>

            <hr />

            <div class="px-4">
                <?php 

                // subjective performance index questionnaire
                $subjective_performance_index = array(
                    "p1" => array(
                        "abbr" => "p1",
                        "question" => "To what extent does the swarm perform this search-and-rescue task effectively?"),

                    "p2" => array(
                        "abbr" => "p2",
                        "question" => "To what extent can you anticipate the swarm’s behaviour with some degree of confidence?"),

                    "p3" => array(
                        "abbr" => "p3",
                        "question" => "This is an attention check. Please select number 4."),

                    "p4" => array(
                        "abbr" => "p4",
                        "question" => "To what extent is the swarm free of errors?"),

                    "p5" => array(
                        "abbr" => "p5",
                        "question" => "To what extent do you have a strong belief and trust in the swarm to do the search-and-rescue task in the future without being monitored?"),

                    "p6" => array(
                        "abbr" => "p6",
                        "question" => "How much did you trust the decisions of the swarm overall?"),

                    "p7" => array(
                        "abbr" => "p7",
                        "question" => "How often did you notice an error made by the swarm?"),

                    "p8" => array(
                        "abbr" => "p8",
                        "question" => "To what extent did you lose trust in the swarm when you noticed they made an error?"),

                    "p9" => array(
                        "abbr" => "p9",
                        "question" => "What percentage of the decisions made by the swarm do you think were correct?"),

                    "p10" => array(
                        "abbr" => "p10",
                        "question" => "I have felt cheerful in good spirits when verifying the casualties."),

                    "p11" => array(
                        "abbr" => "p11",
                        "question" => "I have felt calm and relaxed when verifying the casualties."));

                
                foreach ($subjective_performance_index as $component) {

                    $subjective_performance_index_lower_label = "Not at all";
                    $subjective_performance_index_upper_label = "Extremely";
                
                    echo '<div style="font-size: 0.95rem;">
                            <p id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_question" class="my-3 fw-bold">'.$component['question'].'</p>';
                    
                    if ($component['abbr'] == "p9"){
                        echo '<label class="form-check-label ms-1">Enter a value between 0% and 100%</label>
                            <div class="input-group mb-3" style="max-width: 350px;">
                                <input type="number" class="form-control" name="txt_'.$scenario_abbr.'_'.$component['abbr'].'" id="txt_'.$scenario_abbr.'_'.$component['abbr'].'" style="margin-right: 0px;" onchange="validateForm();">
                                <span class="input-group-text">%</span>
                            </div>
                            </div>';
                    
                    } else {
                        echo '<div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="1" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_1">
                                1 ('.$subjective_performance_index_lower_label.')
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
                                <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="7" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_8" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_8">
                                8
                                </label>
                            </div>

                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="radio_'.$scenario_abbr.'_'.$component['abbr'].'" value="7" id="radio_'.$scenario_abbr.'_'.$component['abbr'].'_9" onchange="validateForm();" />
                                <label class="form-check-label" for="radio_'.$scenario_abbr.'_'.$component['abbr'].'_9">
                                9 ('.$subjective_performance_index_upper_label.')
                                </label>
                            </div>
                            </div>';
                        }
                    } 
                ?>

            </div>
            </div>
        </div>
        </div>