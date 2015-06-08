{extends file='common/header.tpl'}
{block name="cssFiles" append}
	<link href="{$BASE_URL}css/searchPage.css" rel="stylesheet">
{/block}

{block name="content"}
<div id="searchPage" class="container">
	<!-- FILTERS -->
            <div class="col-sm-2 filters">
                <div class="col-sm-12">
                    <h3> Filters </h3>
                </div>
                <div class="col-sm-12">
                    <button class="col-sm-12 optn search_questions"> Questions </button>
                    <button class="col-sm-12 optn search_tags"> TAGs </button>
                    <button class="col-sm-12 optn search_users"> Users </button>
                    <button class="col-sm-12 optn search_answers"> Answers </button>
                    <button class="col-sm-12 optn search_comments"> Comments </button>
                </div>
                <div class="col-sm-12">
                    <h3> Order Results </h3>
                </div>
                <div class="col-sm-12">
                    <button class="col-sm-12 optn2"> Most Recent </button>
                    <button class="col-sm-12 optn2"> Better ratio </button>
                </div>
            </div>
            
            <!-- RESULTS -->
            <div class="col-sm-10 results">
               <div class="col-sm-12 search_questions_results">
                   <h1 class="col-sm-12"> QUESTIONS </h1>
                   <div class="col-sm-3">
                       <h2 class="col-sm-12"> Qual é a pergunta ? </h2>
                       <span class="col-sm-offset-2 col-sm-4"> 20&nbsp; <a><i class="glyphicon glyphicon-thumbs-up"></i></a></span>
                       <span class="col-sm-4"> 3&nbsp; <a><i class="glyphicon glyphicon-thumbs-down"></i></a></span>
                   </div>
                   <div class="col-sm-3">
                       <h2 class="col-sm-12"> Qual é a pergunta ? </h2>
                       <span class="col-sm-offset-2 col-sm-4"> 20&nbsp; <a><i class="glyphicon glyphicon-thumbs-up"></i></a></span>
                       <span class="col-sm-4"> 3&nbsp; <a><i class="glyphicon glyphicon-thumbs-down"></i></a></span>
                   </div>
                   <div class="col-sm-3">
                       <h2 class="col-sm-12"> Qual é a pergunta ? </h2>
                       <span class="col-sm-offset-2 col-sm-4"> 20&nbsp; <a><i class="glyphicon glyphicon-thumbs-up"></i></a></span>
                       <span class="col-sm-4"> 3&nbsp; <a><i class="glyphicon glyphicon-thumbs-down"></i></a></span>
                   </div>
                   <div class="col-sm-3">
                       <h2 class="col-sm-12"> Qual é a pergunta ? </h2>
                       <span class="col-sm-offset-2 col-sm-4"> 20&nbsp; <a><i class="glyphicon glyphicon-thumbs-up"></i></a></span>
                       <span class="col-sm-4"> 3&nbsp; <a><i class="glyphicon glyphicon-thumbs-down"></i></a></span>
                   </div>
                   <div class="col-sm-3">
                       <h2 class="col-sm-12"> Qual é a pergunta ? </h2>
                       <span class="col-sm-offset-2 col-sm-4"> 20&nbsp; <a><i class="glyphicon glyphicon-thumbs-up"></i></a></span>
                       <span class="col-sm-4"> 3&nbsp; <a><i class="glyphicon glyphicon-thumbs-down"></i></a></span>
                   </div>
               </div>
               
               <div class="col-sm-12 search_tags_results">
                   <h1 class="col-sm-12"> TAGS </h1>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
                   <div class="col-sm-3">
                       <h2> ESTA TAG </h2>
                   </div>
               </div>
               
               <div class="col-sm-12 search_users_results">
                   <h1 class="col-sm-12"> USERS </h1>
                   <div class="col-sm-3">
                       <img src="{$BASE_URL}images/avatar.png" class="col-sm-4" alt="user_img">
                       <h2> Utilizador </h2>
                   </div>
                   <div class="col-sm-3">
                       <img src="{$BASE_URL}images/avatar.png" class="col-sm-4" alt="user_img">
                       <h2> Utilizador </h2>
                   </div>
                   <div class="col-sm-3">
                       <img src="{$BASE_URL}images/avatar.png" class="col-sm-4" alt="user_img">
                       <h2> Utilizador </h2>
                   </div>
                   <div class="col-sm-3">
                       <img src="{$BASE_URL}images/avatar.png" class="col-sm-4" alt="user_img">
                       <h2> Utilizador com um NOme ENORME</h2>
                   </div>
               </div>
               
               <div class="col-sm-12 search_answers_results">
                   <h1 class="col-sm-12"> ANSWERS </h1>
                   <div class="col-sm-3">
                       <p>This is an answer for some asked question...</p>
                   </div>
                   <div class="col-sm-3">
                       <p>This is an answer for some asked question...</p>
                   </div>
                   <div class="col-sm-3">
                       <p>This is an answer for some asked question...</p>
                   </div>
               </div>
               
               <div class="col-sm-12 search_comments_results">
                   <h1 class="col-sm-12"> COMMENTS </h1>
                   <div class="col-sm-3">
                       <p>This may be a comment related to some answer used to reply some asked question...</p>
                   </div>
                   <div class="col-sm-3">
                       <p>This may be a comment related to some answer used to reply some asked question...</p>
                   </div>
                   <div class="col-sm-3">
                       <p>This may be a comment related to some answer used to reply some asked question...</p>
                   </div>
                   <div class="col-sm-3">
                       <p>This may be a comment related to some answer used to reply some asked question...</p>
                   </div>
               </div>
            </div>
</div>

{/block}