{extends file='common/header.tpl'}
{block name="cssFiles" append}
	<link href="{$BASE_URL}css/createQuestion.css" rel="stylesheet">
{/block}


{block name="content"}
    <?php include_once($BASE_DIR . 'database/answers.php'); $c = extractAnswersFromQuestion(1); ?>
	<div class="container">
	    <div class="title">
	        <h1> Create a new Question !</h1>
	    </div>
        
        <div class="opt_btn">
            <button class="btn-active opt_btn2 open_answer" type="button" id="openAnswerButton">
                Open Answer
            </button>
            <button class="opt_btn2 multi_choice" type="button" id="multipleChoiceButton">
                Multiple Choice
            </button>
        </div>
        
        
        <!-- QUESTION INFORMATION -->
        <form id="createQuestionForm" action="{$BASE_URL}actions/api/createQuestion.php" method="POST" enctype="application/x-www-form-urlencoded">
            <input id="user_id" type="hidden" value="{$USER_ID}" />
            <div class="form-group">
                    <div class="col-sm-12">
                        <input class="form-control" placeholder="Question" name="question" type="text" id="createQuestionText">
                    </div>

                    <div class="col-sm-12">
                    </div>
                </div>
                
                 <div class="multi-field-wrapper tags_panel">
                    <div class="multi-fields">
                        <ul class="multi-field-tag col-sm-3">
                            <li><input class="col-sm-12 form-control" type="text" placeholder="TAG" name="tags[]" class="tag" id="tags"></li>
                        </ul>
                     </div>
                     <div class="add_btns col-sm-2">
                         <button type="button" class="opt_btn3 add-field-tag col-sm-6">Add field</button>
                         <button type="button" class="opt_btn3 remove-field-tag col-sm-6"> Remove </button>
                     </div>
                </div>
                
                <div class="hidden multi-field-wraper choices_panel">
                   <div class="multi-fields">
                       <ul class="multi-field-choice col-sm-5">
                            <li>
                                <input class="col-sm-12 form-control" type="text" placeholder="Choices" name="choices[]" id="choices">
                            </li>
                        </ul>
                    </div>
                    <div class="add_btns col-sm-2">
                        <button type="button" class="opt_btn3 add-field-choice col-sm-8">Add field</button>
                        <button type="button" class="opt_btn3 remove-field-choice col-sm-8"> Remove </button>
                    </div>
                </div>                

                <div class = "form-group">
                    <div class = "col-sm-12 ask_pad">
                        <button type = "submit" class = "ask_btn" id="createQuestionButton">Ask</button>
                    </div>
                </div>
			</form>
	</div>
</div>


{/block}