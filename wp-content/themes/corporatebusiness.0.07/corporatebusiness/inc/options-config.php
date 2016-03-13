<?php
function corporatebusiness_generate_array ( $req = "slider" ) {
// FA Array
$fa_array = array("adjust", "adn", "align-center", "align-justify", "align-left", "align-right", "ambulance", "anchor", "android", "angellist", "angle-double-down", "angle-double-left", "angle-double-right", "angle-double-up", "angle-down", "angle-left", "angle-right", "angle-up", "apple", "archive", "area-chart", "arrow-circle-down", "arrow-circle-left", "arrow-circle-o-down", "arrow-circle-o-left", "arrow-circle-o-right", "arrow-circle-o-up", "arrow-circle-right", "arrow-circle-up", "arrow-down", "arrow-left", "arrow-right", "arrow-up", "arrows", "arrows-alt", "arrows-h", "arrows-v", "asterisk", "at", "automobile", "backward", "ban", "bank", "bar-chart", "bar-chart-o", "barcode", "bars", "bed", "beer", "behance", "behance-square", "bell", "bell-o", "bell-slash", "bell-slash-o", "bicycle", "binoculars", "birthday-cake", "bitbucket", "bitbucket-square", "bitcoin", "bold", "bolt", "bomb", "book", "bookmark", "bookmark-o", "briefcase", "btc", "bug", "building", "building-o", "bullhorn", "bullseye", "bus", "buysellads", "cab", "calculator", "calendar", "calendar-o", "camera", "camera-retro", "car", "caret-down", "caret-left", "caret-right", "caret-square-o-down", "caret-square-o-left", "caret-square-o-right", "caret-square-o-up", "caret-up", "cart-arrow-down", "cart-plus", "cc", "cc-amex", "cc-discover", "cc-mastercard", "cc-paypal", "cc-stripe", "cc-visa", "certificate", "chain", "chain-broken", "check", "check-circle", "check-circle-o", "check-square", "check-square-o", "chevron-circle-down", "chevron-circle-left", "chevron-circle-right", "chevron-circle-up", "chevron-down", "chevron-left", "chevron-right", "chevron-up", "child", "circle", "circle-o", "circle-o-notch", "circle-thin", "clipboard", "clock-o", "close", "cloud", "cloud-download", "cloud-upload", "cny", "code", "code-fork", "codepen", "coffee", "cog", "cogs", "columns", "comment", "comment-o", "comments", "comments-o", "compass", "compress", "connectdevelop", "copy", "copyright", "credit-card", "crop", "crosshairs", "css3", "cube", "cubes", "cut", "cutlery", "dashboard", "dashcube", "database", "dedent", "delicious", "desktop", "deviantart", "diamond", "digg", "dollar", "dot-circle-o", "download", "dribbble", "dropbox", "drupal", "edit", "eject", "ellipsis-h", "ellipsis-v", "empire", "envelope", "envelope-o", "envelope-square", "eraser", "eur", "euro", "exchange", "exclamation", "exclamation-circle", "exclamation-triangle", "expand", "external-link", "external-link-square", "eye", "eye-slash", "eyedropper", "facebook", "facebook-f", "facebook-official", "facebook-square", "fast-backward", "fast-forward", "fax", "female", "fighter-jet", "file", "file-archive-o", "file-audio-o", "file-code-o", "file-excel-o", "file-image-o", "file-movie-o", "file-o", "file-pdf-o", "file-photo-o", "file-picture-o", "file-powerpoint-o", "file-sound-o", "file-text", "file-text-o", "file-video-o", "file-word-o", "file-zip-o", "files-o", "film", "filter", "fire", "fire-extinguisher", "flag", "flag-checkered", "flag-o", "flash", "flask", "flickr", "floppy-o", "folder", "folder-o", "folder-open", "folder-open-o", "font", "forumbee", "forward", "foursquare", "frown-o", "futbol-o", "gamepad", "gavel", "gbp", "ge", "gear", "gears", "genderless", "gift", "git", "git-square", "github", "github-alt", "github-square", "gittip", "glass", "globe", "google", "google-plus", "google-plus-square", "google-wallet", "graduation-cap", "gratipay", "group", "h-square", "hacker-news", "hand-o-down", "hand-o-left", "hand-o-right", "hand-o-up", "hdd-o", "header", "headphones", "heart", "heart-o", "heartbeat", "history", "home", "hospital-o", "hotel", "html5", "ils", "image", "inbox", "indent", "info", "info-circle", "inr", "instagram", "institution", "ioxhost", "italic", "joomla", "jpy", "jsfiddle", "key", "keyboard-o", "krw", "language", "laptop", "lastfm", "lastfm-square", "leaf", "leanpub", "legal", "lemon-o", "level-down", "level-up", "life-bouy", "life-buoy", "life-ring", "life-saver", "lightbulb-o", "line-chart", "link", "linkedin", "linkedin-square", "linux", "list", "list-alt", "list-ol", "list-ul", "location-arrow", "lock", "long-arrow-down", "long-arrow-left", "long-arrow-right", "long-arrow-up", "magic", "magnet", "mail-forward", "mail-reply", "mail-reply-all", "male", "map-marker", "mars", "mars-double", "mars-stroke", "mars-stroke-h", "mars-stroke-v", "maxcdn", "meanpath", "medium", "medkit", "meh-o", "mercury", "microphone", "microphone-slash", "minus", "minus-circle", "minus-square", "minus-square-o", "mobile", "mobile-phone", "money", "moon-o", "mortar-board", "motorcycle", "music", "navicon", "neuter", "newspaper-o", "openid", "outdent", "pagelines", "paint-brush", "paper-plane", "paper-plane-o", "paperclip", "paragraph", "paste", "pause", "paw", "paypal", "pencil", "pencil-square", "pencil-square-o", "phone", "phone-square", "photo", "picture-o", "pie-chart", "pied-piper", "pied-piper-alt", "pinterest", "pinterest-p", "pinterest-square", "plane", "play", "play-circle", "play-circle-o", "plug", "plus", "plus-circle", "plus-square", "plus-square-o", "power-off", "print", "puzzle-piece", "qq", "qrcode", "question", "question-circle", "quote-left", "quote-right", "ra", "random", "rebel", "recycle", "reddit", "reddit-square", "refresh", "remove", "renren", "reorder", "repeat", "reply", "reply-all", "retweet", "rmb", "road", "rocket", "rotate-left", "rotate-right", "rouble", "rss", "rss-square", "rub", "ruble", "rupee", "save", "scissors", "search", "search-minus", "search-plus", "sellsy", "send", "send-o", "server", "share", "share-alt", "share-alt-square", "share-square", "share-square-o", "shekel", "sheqel", "shield", "ship", "shirtsinbulk", "shopping-cart", "sign-in", "sign-out", "signal", "simplybuilt", "sitemap", "skyatlas", "skype", "slack", "sliders", "slideshare", "smile-o", "soccer-ball-o", "sort", "sort-alpha-asc", "sort-alpha-desc", "sort-amount-asc", "sort-amount-desc", "sort-asc", "sort-desc", "sort-down", "sort-numeric-asc", "sort-numeric-desc", "sort-up", "soundcloud", "space-shuttle", "spinner", "spoon", "spotify", "square", "square-o", "stack-exchange", "stack-overflow", "star", "star-half", "star-half-empty", "star-half-full", "star-half-o", "star-o", "steam", "steam-square", "step-backward", "step-forward", "stethoscope", "stop", "street-view", "strikethrough", "stumbleupon", "stumbleupon-circle", "subscript", "subway", "suitcase", "sun-o", "superscript", "support", "table", "tablet", "tachometer", "tag", "tags", "tasks", "taxi", "tencent-weibo", "terminal", "text-height", "text-width", "th", "th-large", "th-list", "thumb-tack", "thumbs-down", "thumbs-o-down", "thumbs-o-up", "thumbs-up", "ticket", "times", "times-circle", "times-circle-o", "tint", "toggle-down", "toggle-left", "toggle-off", "toggle-on", "toggle-right", "toggle-up", "train", "transgender", "transgender-alt", "trash", "trash-o", "tree", "trello", "trophy", "truck", "try", "tty", "tumblr", "tumblr-square", "turkish-lira", "twitch", "twitter", "twitter-square", "umbrella", "underline", "undo", "university", "unlink", "unlock", "unlock-alt", "unsorted", "upload", "usd", "user", "user-md", "user-plus", "user-secret", "user-times", "users", "venus", "venus-double", "venus-mars", "viacoin", "video-camera", "vimeo-square", "vine", "vk", "volume-down", "volume-off", "volume-up", "warning", "wechat", "weibo", "weixin", "whatsapp", "wheelchair", "wifi", "windows", "won", "wordpress", "wrench", "xing", "xing-square", "yahoo", "yelp", "yen", "youtube", "youtube-play", "youtube-square");
// Disabled-numbers Array
$qty = array( '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' => '22', '23' => '23', '24' => '24', '25' => '25', '26' => '26', '27' => '27', '28' => '28', '29' => '29', '30' => '30',  );

// Slider Array
$corporatebusiness_slider_array = array(
                            'enable_slider' => array(
                                'type' => 'checkbox',
                                'label' => __('Enable this section', 'corporatebusiness'),
                                'default' => 0,
                                'sanitize_callback' => 'corporatebusiness_boolean',
                            ),
							'slider_quantity' => array(
                                'type' => 'disabled-select',
                                'label' => __('Quantity', 'corporatebusiness'),
                                'default' => 4,
								'choices' => $qty,
                                'sanitize_callback' => 'absint',
                            )
							);
for ($i=1;$i<=4;$i++) {
	$corporatebusiness_slider_item = array();
	$corporatebusiness_slider_item = array(							
							'sep'.$i => array(
								'label' => __("Slider", 'corporatebusiness') . "#$i",
                                'type' => 'sep-title',
                            ),
                            'slider_title'.$i => array(
                                'type' => 'text',
                                'label' => __('Title', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'slider_desc'.$i => array(
                                'type' => 'text',
                                'label' => __('Description', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'slider_link'.$i => array(
                                'type' => 'text',
                                'label' => __('Link', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_url',
                            ),
							'slider_image'.$i => array(
								'default' => get_template_directory_uri() . "/images/slider/$i.jpg",
                                'type' => 'image',
                                'label' => __('Image', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_url_raw',
                            )
							);
	$corporatebusiness_slider_array = array_merge($corporatebusiness_slider_array, $corporatebusiness_slider_item);
}
if ( $req == "slider" ) return $corporatebusiness_slider_array;

// Services Section Array
$corporatebusiness_services_array = array(
                            'enable_services' => array(
                                'type' => 'checkbox',
                                'label' => __('Enable this section', 'corporatebusiness'),
                                'default' => 0,
                                'sanitize_callback' => 'corporatebusiness_boolean',
                            ),
							'services_quantity' => array(
                                'type' => 'disabled-select',
                                'label' => __('Quantity', 'corporatebusiness'),
                                'default' => 4,
								'choices' => $qty,
                                'sanitize_callback' => 'absint',
                            ),
							'services_title' => array(
                                'type' => 'text',
                                'label' => __('Title', 'corporatebusiness'),
                                'default' => "Nunc porta lectus dolor",
                                'sanitize_callback' => 'esc_attr',
                            ),
							'services_desc' => array(
                                'type' => 'textarea',
                                'label' => __('Description', 'corporatebusiness'),
                                'default' => '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."',
                                'sanitize_callback' => 'esc_textarea',
                            )
							);
// FA Icons to choices array
$fa_choices = array();
foreach ( $fa_array as $fa ) {
	$fa_choices = array_merge($fa_choices, array( "fa-$fa" => "$fa" ) );
}

//
for ($i=1;$i<=4;$i++) {
	$corporatebusiness_services_item = array();
	$corporatebusiness_services_item = array(							
							'sep_services'.$i => array(
								'label' => __("Service", 'corporatebusiness') . "#$i",
                                'type' => 'sep-title',
                            ),
                            'service_title'.$i => array(
								'default' => "Lorem ipsum",
                                'type' => 'text',
                                'label' => __('Title', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'service_desc'.$i => array(
								'default' => "Nullam fringilla lorem sed ante pharetra, et ultrices nisl rhoncus!",
                                'type' => 'text',
                                'label' => __('Description', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'service_link'.$i => array(
								'default' => esc_url( home_url( '/' ) ),
                                'type' => 'text',
                                'label' => __('Link', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_url',
                            ),
							'service_icon'.$i => array(
								'default' => "fa-briefcase",
                                'type' => 'select',
                                'label' => __('Icon', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_attr',
								'choices' => $fa_choices
                            ),
							'service_color'.$i => array(
								'default' => "#645F54",
                                'type' => 'color',
                                'label' => __('Color', 'corporatebusiness'),
                                'sanitize_callback' => 'sanitize_hex_color',
                            )
							);
	$corporatebusiness_services_array = array_merge($corporatebusiness_services_array, $corporatebusiness_services_item);
}
if ( $req == "services" ) return $corporatebusiness_services_array;
// Projects Section Array
$corporatebusiness_projects_array = array(
                            'enable_projects' => array(
                                'type' => 'checkbox',
                                'label' => __('Enable this section', 'corporatebusiness'),
                                'default' => 0,
                                'sanitize_callback' => 'corporatebusiness_boolean',
                            ),
							'projects_quantity' => array(
                                'type' => 'disabled-select',
                                'label' => __('Quantity', 'corporatebusiness'),
                                'default' => 4,
								'choices' => $qty,
                                'sanitize_callback' => 'absint',
                            ),
							'projects_title' => array(
                                'type' => 'text',
                                'label' => __('Title', 'corporatebusiness'),
                                'default' => "Nunc porta lectus dolor",
                                'sanitize_callback' => 'esc_attr',
                            ),
							'projects_desc' => array(
                                'type' => 'textarea',
                                'label' => __('Description', 'corporatebusiness'),
                                'default' => '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."',
                                'sanitize_callback' => 'esc_textarea',
                            )
							);
//
for ($i=1;$i<=4;$i++) {
	$corporatebusiness_projects_item = array();
	$corporatebusiness_projects_item = array(							
							'sep_projects'.$i => array(
								'label' => __("Project", 'corporatebusiness') . "#$i",
                                'type' => 'sep-title',
                            ),
                            'project_title'.$i => array(
								'default' => "Lorem ipsum",
                                'type' => 'text',
                                'label' => __('Title', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'project_desc'.$i => array(
								'default' => "Nullam fringilla lorem sed ante pharetra, et ultrices nisl rhoncus!",
                                'type' => 'text',
                                'label' => __('Description', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_attr',
                            ),
							'project_link'.$i => array(
								'default' => esc_url( home_url( '/' ) ),
                                'type' => 'text',
                                'label' => __('Link', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_url',
                            ),
							'project_image'.$i => array(
								'default' => get_template_directory_uri() . '/images/thumbnail.png',
                                'type' => 'upload',
                                'label' => __('Image', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_url_raw',
                            )
							);
	$corporatebusiness_projects_array = array_merge($corporatebusiness_projects_array, $corporatebusiness_projects_item);
}
if ( $req == "projects" ) return $corporatebusiness_projects_array;
} // end of generate array function
// options array
    $options = array(
        'capability' => 10,
        'type' => 'theme_mod',
        'root' => array(
            'sections' => array(
				'pro' => array(
						'title' => __('Upgrade to Pro', 'corporatebusiness'),
						'fields' => array(
								'primary_colors' => array(
                                'type' => 'info',
                                'label' => "",
                                'default' => '#3C9DFF',
                                'sanitize_callback' => 'sanitize_hex_color',
                           		),
                            ),
                    )
            ),
        ),
        'panels' => array(
            'corporatebusiness' => array(
                'priority'       => 9,
                'title'          => __('CorporateBusiness Theme Options', 'corporatebusiness'),
                'description'    => __('CorporateBusiness Theme Options', 'corporatebusiness'),
                'sections' => array(
                    'header' => array(
                        'title' => __('Header', 'corporatebusiness'),
                        'fields' => array(
                            'logo' => array(
								'default' => get_template_directory_uri() . '/images/logo.png',
                                'type' => 'image',
                                'label' => __('Logo Image', 'corporatebusiness'),
                                'sanitize_callback' => 'esc_url_raw',
                            ),
							'adress' => array(
                                'type' => 'text',
                                'label' => __('Adress', 'corporatebusiness'),
								'default' => '77 Massachusetts Ave, Cambridge, MA, USA',
                                'sanitize_callback' => 'esc_attr',
                            ),
							'mail' => array(
                                'type' => 'text',
                                'label' => __('Adress', 'corporatebusiness'),
								'default' => 'info@example.com',
                                'sanitize_callback' => 'esc_attr',
                            ),
							'phone' => array(
                                'type' => 'text',
                                'label' => __('Adress', 'corporatebusiness'),
								'default' => '+1 617-253-1000',
                                'sanitize_callback' => 'esc_attr',
                            )
                        ),
                    ),
                    'general' => array(
                        'title' => __('General', 'corporatebusiness'),
                        'fields' => array(
                            'primary_color' => array(
                                'type' => 'color',
                                'label' => __('Primary Color', 'corporatebusiness'),
                                'default' => '#3C9DFF',
                                'sanitize_callback' => 'sanitize_hex_color',
                            ),
							/*
							'enable_homepage' => array(
                                'type' => 'checkbox',
                                'label' => __('Show recent posts on homepage', 'corporatebusiness'),
                                'default' => 1,
                                'sanitize_callback' => 'corporatebusiness_boolean',
                            ),*/
							'color_scheme' => array(
                            	'type' => 'disabled-select',
                            	'label' => __('Color Scheme', 'corporatebusiness'),
                            	'choices' => array(
									'1' => __('Red', 'corporatebusiness'),
									'2' => __('Green', 'corporatebusiness'),
									'3' => __('Blue', 'corporatebusiness'),
                            	),
                            	'default' => 0,
                            
                        	),
							'color_scheme' => array(
                            	'type' => 'disabled-select',
                            	'label' => __('Color Scheme', 'corporatebusiness'),
                            	'choices' => array(
									'1' => __('Orange', 'corporatebusiness'),
									'2' => __('Green', 'corporatebusiness'),
									'3' => __('Blue', 'corporatebusiness'),
                            	),
                            	'default' => 0,
                            
                        	),
                        ),
                    ),
					'slider' => array(
                        'title' => __('Slider', 'corporatebusiness'),
                        'fields' => corporatebusiness_generate_array ( "slider" ),
                    ),
					/*
					'services' => array(
                        'title' => __('Services Section', 'corporatebusiness'),
                        'fields' => corporatebusiness_generate_array ( "services" ),
                    ),
					'projects' => array(
                        'title' => __('Projects Section', 'corporatebusiness'),
                        'fields' => corporatebusiness_generate_array ( "projects" ),
                    ),
					*/
                )
            ),
        )
    );

function corporatebusiness_boolean($value) {
    if(is_bool($value)) {
        return $value;
    } else {
        return false;
    }
}
?>