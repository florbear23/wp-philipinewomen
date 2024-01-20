<?php

define ('THEME_NAME',		'pflcwi' );
define ('THEME_FOLDER',		'pflcwi' );
define ('THEME_VER',		'1.0.0'  );

if ( ! isset( $content_width ) ) $content_width = 618;

// Main Functions
require_once ( get_template_directory() . '/framework/functions/theme-functions.php');
require_once ( get_template_directory() . '/framework/functions/common-scripts.php' );
require_once ( get_template_directory() . '/framework/functions/mega-menus.php'     );
require_once ( get_template_directory() . '/framework/functions/pagenavi.php'       );
require_once ( get_template_directory() . '/framework/functions/breadcrumbs.php'    );
require_once ( get_template_directory() . '/framework/functions/tie-views.php'      );
require_once ( get_template_directory() . '/framework/functions/translation.php'    );
require_once ( get_template_directory() . '/framework/widgets.php'                  );
require_once ( get_template_directory() . '/framework/admin/framework-admin.php'    );
require_once ( get_template_directory() . '/framework/shortcodes/shortcodes.php'    );
require_once ( get_template_directory() . '/framework/admin/remove-everything.php'  );
require_once ( get_template_directory() . '/framework/admin/wp-override.php'   		);

if( tie_get_option( 'live_search' ) )
	require_once ( get_template_directory() . '/framework/functions/search-live.php');

if( !tie_get_option( 'disable_arqam_lite' ) )
	require_once ( get_template_directory() . '/framework/functions/arqam-lite.php');

// Homepage Banner


// banner-1

function banner1_section_shortcode() {
	$page_id = get_post(5);
	$bannerlist = get_field("bannerlist", $page_id);



	foreach ($bannerlist as $sm) {

		$bannerlist_all .= '
			<div class="bannerArea1"  style="background: #ffffff url('.$sm['banner1_bg'].') center center/cover no-repeat;">
				<div class="banner1Content container">
					<div class="content1">
						<h2>'.$sm['banner1_tittle'].'</h2>
						<h3>'.$sm['banner1_tittle2'].'</h3>
						<p>'.$sm['banner1_sub'].'</p>
					</div>
				</div>
			</div>
		';
	}

	return '
	<section class="bannerSlider1">
		<div class="bannerContainer">
		'.$bannerlist_all.'
		</div>
	</section>

	';
}
add_shortcode( 'banner1_section', 'banner1_section_shortcode' );


//about us section

function aboutUs_section_shortcode() {
	$page_id = get_post(5);
	$sec_2_pic1 = get_field("sec_2_pic1", $page_id);
	$sec_2_pic2 = get_field("sec_2_pic2", $page_id);
	$sec_2_pic3 = get_field("sec_2_pic3", $page_id);
	$sec_2_tittle = get_field("sec_2_tittle", $page_id);
	$sec_2_sub = get_field("sec_2_sub", $page_id);
	$sec_2_link_title = get_field("sec_2_link_title", $page_id);
	$sec_2_link_link = get_field("sec_2_link_link", $page_id);

	return '
	<section class="aboutSection">
		<div class="container">
			<div class="aboutContent">
				<div class="imgContent coo1">
					<img src="'.$sec_2_pic1.'" alt="">
				</div>
				<div class="imgContent coo2">
					<img src="'.$sec_2_pic2.'" alt="">
					<img src="'.$sec_2_pic3.'" alt="">
				</div>
			</div>
			<div class="aboutContent">
				<h2>'.$sec_2_tittle.'</h2>
				<p>'.$sec_2_sub.'</p>
				<a href="'.$sec_2_link_link.'">'.$sec_2_link_title.'</a>
			</div>
		</div>
	</section>
	';
}
add_shortcode( 'aboutUs_section', 'aboutUs_section_shortcode' );




// titte section

function tittle_section_shortcode() {
	$page_id = get_post(5);
	$sec3_title = get_field("sec3_title", $page_id);

	return '
	<section class="title">
		<!-- <h2>Put your slogan here Put your slogan here Put your slogan here Put your slogan here Put your slogan here</h2> -->
		<marquee behavior="" direction="left" >'.$sec3_title.'</marquee>
	</section>

	';
}
add_shortcode( 'tittle_section', 'tittle_section_shortcode' );


//  our project section

function ourProject_section_shortcode() {
	$page_id = get_post(5);
	$sec4_projectlist = get_field("sec4_projectlist", $page_id);
	


	foreach ($sec4_projectlist as $sm) {

		$sec4_projectlist_all .= '
		<button class="accordion '.$sm['sec4_active'].'">'.$sm['sec4_button_name'].'<span class="negative"><img src="/wp-content/uploads/2023/12/ic_sharp-minus.png" alt=""><img src="/wp-content/uploads/2023/12/ic_outline-plus.png" alt=""></span></button>
		<div class="panel '.$sm['sec4_show'].'">
			<div class="content009">
					<p>
					'.$sm['sec4_text_content'].'
					</p>
					<a href="'.$sm['sec4_link_link'].'">'.$sm['sec_4_link_name'].'</a>
				</div>
				<div class="panelImg">
					<img src="'.$sm['sec4_main_image'].'" alt="">
				</div>
			</div>
		';
	}

	return '
	<section class="ourProject1" style="background: #FAFAFA; ;">
		<div class="container" >
			<div class="projectContent">
				<h2>PFLCW Accomplishments</h2>
				<div class="project234"><img src="/wp-content/uploads/2024/01/PROJECTS.png" alt="project"></div>
					'.$sec4_projectlist_all.'
					<a href="#">View All Projects</a>
				</div>
			<!-- <div class="projectContent"></div> -->
		</div>
	</section>

	';
}
add_shortcode( 'ourProject_section', 'ourProject_section_shortcode' );


// slider 2 section

function slider2_shortcode() {
	$page_id = get_post(5);
	$sec5_slider2_list = get_field("sec5_slider2_list", $page_id);
	$sec5_title = get_field("sec5_title", $page_id);
	$sec5_link_title = get_field("sec5_link_title", $page_id);
	$sec5_link_link = get_field("sec5_link_link", $page_id);
	foreach ($sec5_slider2_list as $sm) {

		$sec5_slider2_list_all .= '
			<div>
				<div class="ftimage" style="background: url('.$sm['sec5_main_image'].') center center/cover no-repeat">
					
				</div>
			</div>
		';
	}

	return '
	<section class="slider002">
		
			<div class="mainSlider002">
			'.$sec5_slider2_list_all.'
			</div>

		<div class="contentSlider2">
				<h2>'.$sec5_title.'</h2>
				<a href="'.$sec5_link_link.'">'.$sec5_link_title.'</a>
		</div>
	</section>


	';
}
add_shortcode( 'slider2', 'slider2_shortcode' );


// event section

function event_section_shortcode() {
	$page_id = get_post(5);
	$sec6_main_picture_card = get_field("sec6_main_picture_card", $page_id);
	$sec6_main_date_card = get_field("sec6_main_date_card", $page_id);
	$sec6_main_title_card = get_field("sec6_main_title_card", $page_id);
	$sec6_main_sub_card = get_field("sec6_main_sub_card", $page_id);
	$sec6_btn_title_card = get_field("sec6_btn_title_card", $page_id);
	$sec6_btn_link_card = get_field("sec6_btn_link_card", $page_id);
	$sec6_slider3_list = get_field("sec6_slider3_list", $page_id);

	foreach ($sec6_slider3_list as $sm) {
		$sec6_slider3_list_all .= '
		<div class="slider3Box">
			<img src="'.$sm['sec6_slider3_image'].'" alt="">
			<h2>'.$sm['sec6_slider3_date'].'</h2>
			<h3>'.$sm['sec6_slider3_title'].'</h3>
			<p>'.$sm['sec6_slider3_sub'].'</p>
			<a href="'.$sm['sec6_slider3_button_link'].'">'.$sm['sec6_slider3_button_text'].'</a>
		</div>
		';
	}

	return '
	<section class="eventSection" style="background: #FCE8FF">
    <div class="container">
        <h2>We want to invite you in</h2>
	<div class="event123">
	  <img src="/wp-content/uploads/2024/01/EVENTS.png" alt="project">
	</div>
        <div class="eventCard">
            <div class="eventArea">
                <img src="'.$sec6_main_picture_card.'" alt="">
            </div>
            <div class="eventArea">
                <h2>'.$sec6_main_date_card.'</h2>
                <h3>'.$sec6_main_title_card.'</h3>
                <p>'.$sec6_main_sub_card.'</p>
                <a href="'.$sec6_btn_link_card.'">'.$sec6_btn_title_card.'</a>
            </div>
        </div>
        <h3>Watch our past webinars</h3>
    </div>

   <div class="slider3Container">
    <div class="slider3Content">
       '.$sec6_slider3_list_all.'
    </div>
   </div>
</section>


	';
}
add_shortcode( 'event_section', 'event_section_shortcode' );



// function footerNews_shortcode() {
// 	$page_id = get_post(5);
// 	$sec5_slider2_list = get_field("sec5_slider2_list", $page_id);
	

// 	return '
	


// 	';
// }
// add_shortcode( 'footerNews', 'footerNews_shortcode' );

function footerMap_shortcode() {
	$page_id = get_post(5);
	$sec8_map = get_field("sec8_map", $page_id);
	

	return '
	<section class="mapArea">
		'.$sec8_map.'
	</section>
	';
}
add_shortcode( 'footerMap', 'footerMap_shortcode' );


function mainFooter_shortcode() {
	$page_id = get_post(5);
	$sec_footer_logo = get_field("sec_footer_logo", $page_id);
	$sec9_footer_icon = get_field("sec9_footer_icon", $page_id);
	$sec9_title_2 = get_field("sec9_title_2", $page_id);
	$sec9_quick_links_list = get_field("sec9_quick_links_list", $page_id);
	$sec9_title_3 = get_field("sec9_title_3", $page_id);
	$sec9_project_list = get_field("sec9_project_list", $page_id);
	$sec9_title_4 = get_field("sec9_title_4", $page_id);
	$sec4_contact_list = get_field("sec4_contact_list", $page_id);
	$sec4_contact2_list = get_field("sec4_contact2_list", $page_id);


	foreach ($sec9_footer_icon as $sm) {
		$sec9_footer_icon_all .= '
			<a href="'.$sm['sec9_icon_link'].'"><img src="'.$sm['sec9_icon'].'" alt=""></a>
		';
	}

	foreach ($sec9_quick_links_list as $sm) {
		$sec9_quick_links_list_all .= '
			<li><a href="'.$sm['sec9_quick_links_links'].'">'.$sm['sec9_quick_links_text'].'</a></li>
		';
	}
	foreach ($sec9_project_list as $sm) {
		$sec9_project_list_all .= '
			<li><a href="'.$sm['sec9_project_links'].'">'.$sm['sec9_project_text'].'</a></li>
		';
	}
	foreach ($sec4_contact_list as $sm) {
		$sec4_contact_list_all .= '
		<div class="cta-container">
			<h3>'.$sm['contact_title'].'</h3>
			<a href="'.$sm['contact_link'].'">'.$sm['contact_text'].'</a>
		</div>
		';
	}

	foreach ($sec4_contact2_list as $sm) {
		$sec4_contact2_list_all .= '
		<div class="cta-container">
			<h3>'.$sm['contact_2_title'].'</h3>
			<a href="'.$sm['contact_2_list'].'">'.$sm['contact_2_text'].'</a>
		</div>
		';
	}

	return '
	
	<div class="footer-top">
		<div class="container">
			<div class="footer-box">
				<img src="'.$sec_footer_logo.'">
				<div class="footer-icons">
					'.$sec9_footer_icon_all.'
				</div>
			</div>
			
			<div class="footer-box">
				<h2>'.$sec9_title_2.'</h2>
				<ul>
					'.$sec9_quick_links_list_all.'
				</ul>
			</div>
			<div class="footer-box">
				<h2>'.$sec9_title_3.'</h2>
				<ul>
					'.$sec9_project_list_all.'
				</ul>
			</div>
			<div class="footer-box">
				<h2>'.$sec9_title_4.'</h2>
				'.$sec4_contact_list_all.'
			</div>

			<div class="footer-box">
			
			'.$sec4_contact2_list_all.'
				
			</div>


		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<h2>© 2023 Philippine Federation of Local Councils of Women. All rights reserved.</h2>
			<img src="/wp-content/uploads/2023/12/ITWORKS-LOGO-2019-03-1.png" alt="">
		</div>
	</div>

	';
}
add_shortcode( 'mainFooter', 'mainFooter_shortcode' );

?>