<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Social Icons',
	'body_class' => $GLOBALS['body_class'] . ' icons-page'
);

get_header($config);
?>

<div class="content-wrapper">
	<?php get_template_part( $GLOBALS['sidebar_file'] ) ?>

	<main class="main-wrapper clearfix">

		<?php get_page_title($config); ?>

		<!-- =================================== -->
		<!-- Different data widgets ============ -->
		<!-- =================================== -->
		<div class="widget-list">
			<div class="row">

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
	          <div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Mono Social Icons Font</h5>
							<p class="text-muted">
								Sample code: <code>&lt;i class="social-icons list-icon"&gt;facebook&lt;/i&gt;</code>
							</p>

	            <div class="row text-center">
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">fivehundredpx</i><br /><small>fivehundredpx</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">aboutme</i><br /><small>aboutme</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">addme</i><br /><small>addme</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">amazon</i><br /><small>amazon</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">aol</i><br /><small>aol</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">appstorealt</i><br /><small>appstorealt</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">appstore</i><br /><small>appstore</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">apple</i><br /><small>apple</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">bebo</i><br /><small>bebo</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">behance</i><br /><small>behance</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">bing</i><br /><small>bing</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">blip</i><br /><small>blip</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">blogger</i><br /><small>blogger</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">coroflot</i><br /><small>coroflot</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">daytum</i><br /><small>daytum</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">delicious</i><br /><small>delicious</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">designbump</i><br /><small>designbump</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">designfloat</i><br /><small>designfloat</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">deviantart</i><br /><small>deviantart</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">diggalt</i><br /><small>diggalt</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">digg</i><br /><small>digg</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">dribble</i><br /><small>dribbble</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">drupal</i><br /><small>drupal</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">ebay</i><br /><small>ebay</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">email</i><br /><small>email</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">emberapp</i><br /><small>emberapp</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">etsy</i><br /><small>etsy</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">facebook</i><br /><small>facebook</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">feedburner</i><br /><small>feedburner</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">flickr</i><br /><small>flickr</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">foodspotting</i><br /><small>foodspotting</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">forrst</i><br /><small>forrst</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">foursquare</i><br /><small>foursquare</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">friendsfeed</i><br /><small>friendsfeed</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">friendstar</i><br /><small>friendstar</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">gdgt</i><br /><small>gdgt</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">github</i><br /><small>github</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">githubalt</i><br /><small>githubalt</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">googlebuzz</i><br /><small>googlebuzz</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">googleplus</i><br /><small>googleplus</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">googletalk</i><br /><small>googletalk</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">gowallapin</i><br /><small>gowallapin</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">gowalla</i><br /><small>gowalla</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">grooveshark</i><br /><small>grooveshark</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">heart</i><br /><small>heart</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">hyves</i><br /><small>hyves</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">icondock</i><br /><small>icondock</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">icq</i><br /><small>icq</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">identica</i><br /><small>identica</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">imessage</i><br /><small>imessage</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">itunes</i><br /><small>itunes</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">lastfm</i><br /><small>lastfm</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">linkedin</i><br /><small>linkedin</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">meetup</i><br /><small>meetup</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">metacafe</i><br /><small>metacafe</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">mixx</i><br /><small>mixx</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">mobileme</i><br /><small>mobileme</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">mrwong</i><br /><small>mrwong</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">msn</i><br /><small>msn</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">myspace</i><br /><small>myspace</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">newsvine</i><br /><small>newsvine</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">paypal</i><br /><small>paypal</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">photobucket</i><br /><small>photobucket</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">picasa</i><br /><small>picasa</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">pinterest</i><br /><small>pinterest</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">podcast</i><br /><small>podcast</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">posterous</i><br /><small>posterous</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">qik</i><br /><small>qik</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">quora</i><br /><small>quora</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">reddit</i><br /><small>reddit</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">retweet</i><br /><small>retweet</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">rss</i><br /><small>rss</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">scribd</i><br /><small>scribd</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">sharethis</i><br /><small>sharethis</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">skype</i><br /><small>skype</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">slashdot</i><br /><small>slashdot</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">slideshare</i><br /><small>slideshare</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">smugmug</i><br /><small>smugmug</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">soundcloud</i><br /><small>soundcloud</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">spotify</i><br /><small>spotify</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">squidoo</i><br /><small>squidoo</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">stackoverflow</i><br /><small>stackoverflow</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">star</i><br /><small>star</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">stumbleupon</i><br /><small>stumbleupon</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">technorati</i><br /><small>technorati</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">tumblr</i><br /><small>tumblr</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">twitterbird</i><br /><small>twitterbird</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">twitter</i><br /><small>twitter</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">viddler</i><br /><small>viddler</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">vimeo</i><br /><small>vimeo</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">virb</i><br /><small>virb</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">www</i><br /><small>www</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">wikipedia</i><br /><small>wikipedia</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">windows</i><br /><small>windows</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">wordpress</i><br /><small>wordpress</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">xing</i><br /><small>xing</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">yahoobuzz</i><br /><small>yahoobuzz</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">yahoo</i><br /><small>yahoo</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">yelp</i><br /><small>yelp</small></div>

	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">youtube</i><br /><small>youtube</small></div>
	              <div class="col-md-2 col-sm-3 col-4"><i class="social-icons">instagram</i><br /><small>instagram</small></div>

	            </div>
	          </div><!-- /.widget-body -->

					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
