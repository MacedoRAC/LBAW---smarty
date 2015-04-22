{extends file='common/header.tpl'}
	{block name="content"}
	<div id="portoPhoto" class="col-lg-12">
		<img src="{$BASE_URL}images/porto.jpg" alt="porto" class="col-lg-12">
	</div>

	<div class="container">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="top:-120px;">
			<div class="accordion" id="lastQuestions">
			  <div class="accordion-group">
			    <div class="accordion-heading col-lg-12">
			      <a class="accordion-toggle col-lg-1" data-toggle="collapse" data-parent="#lastQuestions" href="#collapseOne"><i class="glyphicon glyphicon-chevron-down"></i>
			      </a>
			      <p class="col-lg-10">Last created questions</p>
			    </div>
			    <div id="collapseOne" class="accordion-body collapse in">
			      <div class="accordion-inner col-lg-12">
			        <ul class="col-lg-12">
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<a href="{$BASE_URL}pages/showQuestion.php"><p class="col-lg-9">Put the question here?</p></a>
			        	</li>
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<a href="{$BASE_URL}pages/showQuestion.php"><p class="col-lg-9">Put the question here?</p></a>
			        	</li>
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<a href="{$BASE_URL}pages/showQuestion.php"><p class="col-lg-9">Put the question here?</p></a>
			        	</li>
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<a href="{$BASE_URL}pages/showQuestion.php"><p class="col-lg-9">Put the question here?</p></a>
			        	</li>
			        	<li class="col-lg-12">
			        		<img src="{$BASE_URL}images/avatar.png" alt="" class="userPhoto col-lg-3">
			        		<a href="{$BASE_URL}pages/showQuestion.php"><p class="col-lg-9">Put the question here?</p></a>
			        	</li>
			        </ul>
			      </div>
			    </div>
			  </div>
			</div>
			
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
		</div>

		<div class="accordion col-lg-4 col-md-4 col-sm-12 col-xs-12" id="topUsers" style="top:-120px;">
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

{/block}