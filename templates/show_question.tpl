{extends file='common/header.tpl'}
{block name="cssFiles" append}
	<link href="{$BASE_URL}css/showQuestion.css" rel="stylesheet">
{/block}

{block name="content"}
<div id="questAnsCont" class="container">
	<div class="col-lg-8">
		<!-- QUESTION -->
		<div id="questHolder" class="col-lg-12">
			<div class="header col-lg-12">
				<div class="photoAndName col-lg-2">
					<img src="{$BASE_URL}images/avatar.png" class="col-lg-12">
					<h5 class="username col-lg-12">João Silva</h5>
				</div>
				<div class="col-lg-10">
					<p class="creationDate col-lg-12 text-muted">12-01-2015 at 12:10h</p>

					<h3 class="question col-lg-12">What is the answer for my question?</h3>
					<ul class="tags col-lg-12">
						<li>Porto</li>
						<li>FEUP</li>
					</ul>
					<ul class="icons col-lg-12">
						<li><a>Answer</a></li>
						<li>20&nbsp;<a><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
						<li>3&nbsp;<a><i class="glyphicon glyphicon-thumbs-down"></i></a></li>
					</ul>
				</div>
			</div>
		</div>


		<!-- ANSWER -->
		<div class="ansHolder col-lg-offset-2 col-lg-10">
			<div class="header col-lg-12">
				<div class="photoAndName col-lg-2">
					<img src="{$BASE_URL}images/avatar.png" class="col-lg-12">
					<h5 class="username col-lg-12">Joana Faria</h5>
				</div>
				<div class="col-lg-10">
					<p class="creationDate col-lg-12 text-muted">12-01-2015 at 12:10h</p>

					<p class="answer col-lg-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<ul class="icons col-lg-12">
						<li><a>Comment</a></li>
						<li>5&nbsp;<a><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
						<li>0&nbsp;<a><i class="glyphicon glyphicon-thumbs-down"></i></a></li>
					</ul>
				</div>
			</div>	
		</div>


		<!-- Comment -->
		<div class="comHolder col-lg-offset-3 col-lg-9">
			<div class="header col-lg-12">
				<div class="photoAndName col-lg-2">
					<img src="{$BASE_URL}images/avatar.png" class="col-lg-12">
					<h5 class="username col-lg-12">João Silva</h5>
				</div>
				<div class="col-lg-10">
					<p class="creationDate col-lg-12 text-muted">12-01-2015 at 12:10h</p>

					<p class="comment col-lg-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<ul class="icons col-lg-12">
						<li>5&nbsp;<a><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
						<li>0&nbsp;<a><i class="glyphicon glyphicon-thumbs-down"></i></a></li>
					</ul>
				</div>
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
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<p class="col-lg-9">Put the question here?</p>
			        	</li>
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<p class="col-lg-9">Put the question here?</p>
			        	</li>
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<p class="col-lg-9">Put the question here?</p>
			        	</li>
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<p class="col-lg-9">Put the question here?</p>
			        	</li>
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<p class="col-lg-9">Put the question here?</p>
			        	</li>
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
		      <p class="col-lg-10">Top users of February</p>
		    </div>
		    <div id="collapseThree" class="accordion-body collapse in">
		      <div class="accordion-inner col-lg-12">
		        <ul class="col-lg-12">
		        	<li class="col-lg-12">
		        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
		        		<div class="col-lg-4 totalPoints">
		        			<h2>35</h2>
		        			<p>points</p>
		        		</div>

		        		<div class="col-lg-5 thumbsUpDown">
		        			<p><i class="glyphicon glyphicon-thumbs-up"></i>45</p>
		        			<p><i class="glyphicon glyphicon-thumbs-down"></i>10</p>
		        		</div>
		        	</li>
		        	<li class="col-lg-12">
		        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
		        		<div class="col-lg-4 totalPoints">
		        			<h2>35</h2>
		        			<p>points</p>
		        		</div>

		        		<div class="col-lg-5 thumbsUpDown">
		        			<p><i class="glyphicon glyphicon-thumbs-up"></i>45</p>
		        			<p><i class="glyphicon glyphicon-thumbs-down"></i>10</p>
		        		</div>
		        	</li>
		        	<li class="col-lg-12">
		        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
		        		<div class="col-lg-4 totalPoints">
		        			<h2>35</h2>
		        			<p>points</p>
		        		</div>

		        		<div class="col-lg-5 thumbsUpDown">
		        			<p><i class="glyphicon glyphicon-thumbs-up"></i>45</p>
		        			<p><i class="glyphicon glyphicon-thumbs-down"></i>10</p>
		        		</div>
		        	</li>
		        	<li class="col-lg-12">
		        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
		        		<div class="col-lg-4 totalPoints">
		        			<h2>35</h2>
		        			<p>points</p>
		        		</div>

		        		<div class="col-lg-5 thumbsUpDown">
		        			<p><i class="glyphicon glyphicon-thumbs-up"></i>45</p>
		        			<p><i class="glyphicon glyphicon-thumbs-down"></i>10</p>
		        		</div>
		        	</li>
		        	<li class="col-lg-12">
		        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
		        		<div class="col-lg-4 totalPoints">
		        			<h2>35</h2>
		        			<p>points</p>
		        		</div>

		        		<div class="col-lg-5 thumbsUpDown">
		        			<p><i class="glyphicon glyphicon-thumbs-up"></i>45</p>
		        			<p><i class="glyphicon glyphicon-thumbs-down"></i>10</p>
		        		</div>
		        	</li>
		        </ul>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

</div>

{/block}