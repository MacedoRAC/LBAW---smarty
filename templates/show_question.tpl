{extends file='common/header.tpl'}
{block name="cssFiles" append}
	<link href="{$BASE_URL}css/showQuestion.css" rel="stylesheet">
{/block}


{block name="content"}
<div id="questAnsCont" class="container">
	<input type="hidden" id="questionID" value="{$QUESTION->getQuestionID()}">
	<input type="hidden" id="thumbsURL" value="{$BASE_URL}actions/api/thumbs.php">
	<input type="hidden" id="userID" value="{$USER_ID}">
	<div class="col-lg-8">
		<!-- QUESTION -->
		<div id="questHolder" class="col-lg-12">
			<div class="header col-lg-12">
				<div class="photoAndName col-lg-2">
					<img src="{$BASE_URL}images/avatar.png" class="col-lg-12">
					<h5 class="username col-lg-12">{$QUESTION->getCreatorName()}</h5>
				</div>
				<div class="col-lg-10">
					<p class="creationDate col-lg-12 text-muted">{$QUESTION->getDate()}</p>

					<h3 class="question col-lg-12">{$QUESTION->getText()}</h3>
					<ul class="tags col-lg-12">
						<li>Porto</li>
						<li>FEUP</li>
					</ul>
					{if $USER_ID != $QUESTION->getCreatorID}
					<ul class="icons col-lg-12 not_owner">
					    <li><a class="follow_js">Follow</a></li>
						<li><a data-toggle="modal" data-target="#AnswerModal">Answer</a></li>
						<li class="pos_vot">{$QUESTION->getTu()}&nbsp;<a id="questionTu"><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
						<li class="neg_vot">{$QUESTION->getTd()}&nbsp;<a id="questionTd"><i class="glyphicon glyphicon-thumbs-down"></i></a></li>
					</ul>
					{else}
					<ul class="icons col-lg-12 owner">
					    <li><a data-toggle="modal" data-target="#AnswerModal">Answer</a></li>
					    <li class="block_question"><a>Block</a></li>
					</ul>
					{/if}
				</div>
			</div>
		</div>

        <div id="AnswerModal" class="modal fade modal_bg" role="dialog">
            <div class="modal-dialog modal-xs">
                <form class="" action="POST" id="answer_form">
                    <div class="col-sm-12">
                        <textarea name="answer" class="col-sm-12" cols="80" rows="16" form="answer_form" placeholder="Write here your answer ..."></textarea>
                        <button type="submit" class="col-lg-3 col-sm-3 modal_btn"> Answer </button>
                    </div>
                </form>
            </div>
        </div>

		<!-- ANSWER -->
		<div class="ansHolder col-lg-offset-2 col-lg-10">
			{foreach $QUESTION->getAnswers() as $ans}
				<div class="header col-lg-12">
					<div class="photoAndName col-lg-2">
						<img src="{$BASE_URL}images/avatar.png" class="col-lg-12">
						<h5 class="username col-lg-12">{$ans->getCreatorName()}</h5>
					</div>
					<div class="col-lg-10">
						<p class="creationDate col-lg-12 text-muted">{$ans->getDate()}</p>

						<p class="answer col-lg-12">{$ans->getText()}</p>
						<ul class="icons col-lg-12">
							<li><a data-toggle="modal" data-target="#CommentModal">Comment</a></li>
							<li value="{$ans->getID()}" class="pos_vot">{$ans->getTu()}&nbsp;<a class="thumbsUpAnswer"><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
							<li value="{$ans->getID()}" class="neg_vot">{$ans->getTd()}&nbsp;<a class="thumbsDownAnswer"><i class="glyphicon glyphicon-thumbs-down"></i></a></li>
						</ul>
					</div>
				</div>

				<!-- Comment -->
				<div class="comHolder col-lg-offset-3 col-lg-9">
					{foreach $ans->getComments() as $comment}
						<div class="header col-lg-12">
							<div class="photoAndName col-lg-2">
								<img src="{$BASE_URL}images/avatar.png" class="col-lg-12">
								<h5 class="username col-lg-12">{$comment->getCreatorName()}</h5>
							</div>
							<div class="col-lg-10">
								<p class="creationDate col-lg-12 text-muted">{$comment->getDate()}</p>

								<p class="comment col-lg-12">{$comment->getText()}</p>
								<ul class="icons col-lg-12">
									<!--<li class="pos_vot">{$comment->getTu()}&nbsp;<a><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
									<li class="neg_vot">{$comment->getTd()}&nbsp;<a><i class="glyphicon glyphicon-thumbs-down"></i></a></li>-->
								</ul>
							</div>
						</div>
					{/foreach}	
				</div>
			{/foreach}	
		</div>

        <div id="CommentModal" class="modal fade modal_bg" role="dialog">
            <div class="modal-dialog modal-xs">
                <form class="" action="POST" id="comment_form">
                    <div class="col-sm-12">
                        <textarea name="comment" class="col-sm-12" cols="80" rows="16" form="comment_form" placeholder="Write here your comment ..."></textarea>
                        <button type="submit" class="col-lg-3 col-sm-3 modal_btn"> Comment </button>
                    </div>
                </form>
            </div>
        </div>

		
	</div>

	<div class="col-lg-offset-1 col-lg-3" id="sideBarHighlights">
		<div class="accordion" id="topQuestions">
			  <div class="accordion-group">
			    <div class="accordion-heading col-lg-12">
			      <a class="accordion-toggle col-lg-1" data-toggle="collapse" data-parent="#topQuestions" href="#collapseTwo">
			        <i class="glyphicon glyphicon-chevron-down"></i>
			      </a>
			      <p class="col-lg-10">Most voted questions</p>
			    </div>
			    <div id="collapseTwo" class="accordion-body collapse in">
			      <div class="accordion-inner col-lg-12">
			        <ul class="col-lg-12">
			        	{foreach $MOST_VOTED_QUESTIONS as $quest}
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<p class="col-lg-9">{$quest.texto}</p>
			        	</li>
			        	{/foreach}
			        </ul>
			      </div>
			    </div>
			  </div>
		</div>

		<div class="accordion" id="topUsers">
		  <div class="accordion-group">
		    <div class="accordion-heading col-lg-12">
		      <a class="accordion-toggle col-lg-1" data-toggle="collapse" data-parent="#topUsers" href="#collapseThree">
		        <i class="glyphicon glyphicon-chevron-down"></i>
		      </a>
		      <p class="col-lg-10">Top users</p>
		    </div>
		    <div id="collapseThree" class="accordion-body collapse in">
		      <div class="accordion-inner col-lg-12">
		        <ul class="col-lg-12">
		        	{foreach $MOST_VOTED_USERS as $user}
		        	<li class="col-lg-12">
		        		<img src="{$BASE_URL}images/assets/default.png" alt="" class="userPhoto col-lg-3">
		        		<div class="col-lg-4 totalPoints">
		        			<h2>{$user.pontuacao}</h2>
		        			<p>points</p>
		        		</div>

		        		<div class="col-lg-5 thumbsUpDown">
		        			<p><i class="glyphicon glyphicon-thumbs-up"></i>{$user.positivos}</p>
		        			<p><i class="glyphicon glyphicon-thumbs-down"></i>{$user.negativos}</p>
		        		</div>
		        	</li>
                    {/foreach}
		        </ul>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

</div>

{/block}