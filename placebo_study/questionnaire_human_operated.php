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
                "question" => "This is an attention check. Please select number 4."),
            
            "j8" => array(
                "abbr" => "j8",
                "question" => "The swarm provides security."),

            "j9" => array(
                "abbr" => "j9",
                "question" => "The swarm has integrity."),
            
            "j10" => array(
                "abbr" => "j10",
                "question" => "I trust the scenario that I saw in the video."),

            "j11" => array(
                "abbr" => "j11",
                "question" => "The swarm is dependable."),
            
            "j12" => array(
                "abbr" => "j12",
                "question" => "I am confident in the human-operated swarm."),
            
            "j13" => array(
                "abbr" => "j13",
                "question" => "The swarm is reliable."),

            "j14" => array(
                "abbr" => "j14",
                "question" => "I can trust the swarm."),
            
            "j15" => array(
                "abbr" => "j15",
                "question" => "I am familiar with the swarm."));

        
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
