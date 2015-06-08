{extends file='common/header.tpl'}
{block name="cssFiles" append}
	<link href="{$BASE_URL}css/showProfile.css" rel="stylesheet">
	<link href="{$BASE_URL}css/showmyProfile.css" rel="stylesheet">
	<link href="{$BASE_URL}css/slick.css" rel="stylesheet">
	<link href="{$BASE_URL}css/slick-theme.css" rel="stylesheet">
{/block}

{block name="content"}
<div id="profile_information">
	<div class="container">
		<div class="col-lg-3 avatar">
			<img class="col-xs-11" src="{$BASE_URL}images/ppic.jpg" alt="profile avatar">
            <a class="col-xs-1 glyphicon glyphicon-pencil edit  edit_nome"></a>
            <form action="" class="pic_form hide">
                    <input type="url" placeholder="picture's url">
                    <button>Edit</button>
            </form>

		</div>
		<div class="col-lg-9 info">
			<div class="col-lg-7">
				<h2 class="col-xs-10 name">Pedro Lemos Faria</h2>
				<a class="col-xs-2 glyphicon glyphicon-pencil edit  edit_nome"></a>
                <form action="" class="hide">
                    <input type="text" placeholder="name">
                    <button>Edit</button>
                </form>
				
				<div class="col-lg-12 contactCont">
                    <span class="col-lg-2 glyphicon glyphicon-user social col-lg-2"></span>
					<p class="social_text col-lg-8">NICKNAME</p>
					<a class="col-lg-2 glyphicon glyphicon-pencil  edit"></a>
					<form action="" class="hide">
                        <input type="text" placeholder="nickname">
                        <button>Edit</button>
                    </form>
				</div>
                
				<div class="col-lg-12 contactCont">
					<span class="col-lg-2 social glyphicon glyphicon-envelope"></span>
					<p class="social_text col-lg-8">example&#64gmail.com</p>
					<a class="col-lg-2 glyphicon glyphicon-pencil  edit"></a>
					<form action="" class="hide">
                        <input type="email" placeholder="email">
                        <button>Edit</button>
                    </form>
				</div>
				                
				<div class="col-xs-12 contactCont">
					<span class="col-xs-2 social glyphicon glyphicon-phone"></span>
					<p class="social_text col-xs-8">+351 910000000</p>
					<a class="col-xs-2 glyphicon glyphicon-pencil  edit"></a>
					<form action="" class="hide">
                        <input type="tel" placeholder="phone number">
                        <button>Edit</button>
                    </form>
				</div>
                
				<div class="col-xs-12 contactCont">
					<span class="col-xs-2 social glyphicon glyphicon-calendar"></span>
					<p class="social_text col-xs-8">1994-10-02</p>
					<a class="col-xs-2 glyphicon glyphicon-pencil  edit"></a>
					<form action="" class="hide">
                        <input type="date" placeholder="date of birth">
                        <button>Edit</button>
                    </form>
				</div>
                
				<div class="col-xs-12 contactCont">
					<span class="col-xs-2 social"></span>
					<p class="col-xs-8">Password: *****</p>
					<a class="col-xs-2 glyphicon glyphicon-pencil  edit"></a>
					<form action="" class="hide">
                        <input type="password" placeholder="password">
                        <button>Edit</button>
                    </form>
				</div>
                
			</div>

			<div class="col-lg-5 rating">
				<div class="month">
					<h4>Rate this month</h4>
					<p class="profile_votes2">
						<i class="glyphicon glyphicon-thumbs-up"></i>
						20
						<i class="voting2 glyphicon glyphicon-thumbs-down"></i>
						5
					</p>
				</div>
				<div class="overall">
					<h4>Overall rate</h4>
					<p class="profile_votes2">
						<i class="glyphicon glyphicon-thumbs-up"></i>
						63
						<i class="voting2 glyphicon glyphicon-thumbs-down"></i>
						8
					</p>
				</div>
			</div>
		</div>

		<div class="bio col-lg-12">
			<h3 class="col-lg-2">About Me</h3>
			<a class="col-lg-10 glyphicon glyphicon-pencil edit  edit_bio"></a>
			<form class="col-lg-12 hide" action="">
			    <input type="text" placeholder="Your Biography">
			    <button>Edit</button>
			</form>
			<p class="col-lg-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nesciunt commodi dolorem incidunt, necessitatibus, porro accusantium officia illum minima repellat nam tenetur molestias numquam, pariatur possimus. Nemo repellat fuga optio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint excepturi assumenda quibusdam repellendus, esse labore voluptates praesentium culpa fugit dolorum, sunt in atque modi aliquam accusantium consectetur voluptas qui molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia culpa quibusdam rem, sit tenetur, consequatur. Numquam dolorem quo itaque dignissimos, iure dolor, alias omnis, explicabo id unde aliquam. Explicabo, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ab fugit id dolor, mollitia reiciendis doloremque optio quod eius? Aut vel placeat ipsam accusantium consequuntur, quasi temporibus! Dignissimos, quasi, quibusdam.</p>
		</div>
	</div>

	<div class="achievements">
		<div class="container">
			<img class="col-lg-offset-3 col-lg-6 image_banner" src="{$BASE_URL}images/banner_achievents.png" alt="Achivements">

			<div class="carousel col-lg-offset-3 col-lg-6">
			    <div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{$BASE_URL}images/achiev1.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question!</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
			    <div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{$BASE_URL}images/achiev2.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{$BASE_URL}images/achiev1.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{$BASE_URL}images/achiev2.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{$BASE_URL}images/achiev1.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{$BASE_URL}images/achiev2.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{$BASE_URL}images/achiev1.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{$BASE_URL}images/achiev2.png" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
			</div>

		</div>
	</div>
</div>


{/block}