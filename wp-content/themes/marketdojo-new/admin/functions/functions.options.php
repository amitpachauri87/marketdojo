<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = STYLESHEETPATH. '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_bloginfo('template_url').'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		//$google_fonts = array('Open Sans' => 'Open Sans','Sacramento' => 'Sacramento','Droid Sans' =>'Droid Sans','Oswald' => 'Oswald','Droid Serif' => 'Droid Serif','Lato' => 'Lato','Francois One' => 'Francois One','Raleway' => 'Raleway','Arvo' => 'Arvo','Roboto Slab' => 'Roboto Slab','Noto Serif' => 'Noto Serif','Noto Sans' =>'Noto Sans','Abril Fatface'=>'Abril Fatface','Clicker Script' => 'Clicker Script');
		$google_fonts = array('arial'=>'Arial',
						'verdana'=>'Verdana, Geneva',
						'trebuchet'=>'Trebuchet',
						'trebuchet ms'=>'Trebuchet MS',
						'georgia' =>'Georgia',
						'times'=>'Times New Roman',
						'tahoma'=>'Tahoma, Geneva',
						'helvetica'=>'Helvetica',
						'Abel' => 'Abel',
						'Abril Fatface' => 'Abril Fatface',
						'Aclonica' => 'Aclonica',
						'Acme' => 'Acme',
						'Actor' => 'Actor',
						'Adamina' => 'Adamina',
						'Advent Pro' => 'Advent Pro',
						'Aguafina Script' => 'Aguafina Script',
						'Aladin' => 'Aladin',
						'Aldrich' => 'Aldrich',
						'Alegreya' => 'Alegreya',
						'Alegreya SC' => 'Alegreya SC',
						'Alex Brush' => 'Alex Brush',
						'Alfa Slab One' => 'Alfa Slab One',
						'Alice' => 'Alice',
						'Alike' => 'Alike',
						'Alike Angular' => 'Alike Angular',
						'Allan' => 'Allan',
						'Allerta' => 'Allerta',
						'Allerta Stencil' => 'Allerta Stencil',
						'Allura' => 'Allura',
						'Almendra' => 'Almendra',
						'Almendra SC' => 'Almendra SC',
						'Amaranth' => 'Amaranth',
						'Amatic SC' => 'Amatic SC',
						'Amethysta' => 'Amethysta',
						'Andada' => 'Andada',
						'Andika' => 'Andika',
						'Angkor' => 'Angkor',
						'Annie Use Your Telescope' => 'Annie Use Your Telescope',
						'Anonymous Pro' => 'Anonymous Pro',
						'Antic' => 'Antic',
						'Antic Didone' => 'Antic Didone',
						'Antic Slab' => 'Antic Slab',
						'Anton' => 'Anton',
						'Arapey' => 'Arapey',
						'Arbutus' => 'Arbutus',
						'Architects Daughter' => 'Architects Daughter',
						'Arimo' => 'Arimo',
						'Arizonia' => 'Arizonia',
						'Armata' => 'Armata',
						'Artifika' => 'Artifika',
						'Arvo' => 'Arvo',
						'Asap' => 'Asap',
						'Asset' => 'Asset',
						'Astloch' => 'Astloch',
						'Asul' => 'Asul',
						'Atomic Age' => 'Atomic Age',
						'Aubrey' => 'Aubrey',
						'Audiowide' => 'Audiowide',
						'Average' => 'Average',
						'Averia Gruesa Libre' => 'Averia Gruesa Libre',
						'Averia Libre' => 'Averia Libre',
						'Averia Sans Libre' => 'Averia Sans Libre',
						'Averia Serif Libre' => 'Averia Serif Libre',
						'Bad Script' => 'Bad Script',
						'Balthazar' => 'Balthazar',
						'Bangers' => 'Bangers',
						'Basic' => 'Basic',
						'Battambang' => 'Battambang',
						'Baumans' => 'Baumans',
						'Bayon' => 'Bayon',
						'Belgrano' => 'Belgrano',
						'Belleza' => 'Belleza',
						'Bentham' => 'Bentham',
						'Berkshire Swash' => 'Berkshire Swash',
						'Bevan' => 'Bevan',
						'Bigshot One' => 'Bigshot One',
						'Bilbo' => 'Bilbo',
						'Bilbo Swash Caps' => 'Bilbo Swash Caps',
						'Bitter' => 'Bitter',
						'Black Ops One' => 'Black Ops One',
						'Bokor' => 'Bokor',
						'Bonbon' => 'Bonbon',
						'Boogaloo' => 'Boogaloo',
						'Bowlby One' => 'Bowlby One',
						'Bowlby One SC' => 'Bowlby One SC',
						'Brawler' => 'Brawler',
						'Bree Serif' => 'Bree Serif',
						'Bubblegum Sans' => 'Bubblegum Sans',
						'Buda' => 'Buda',
						'Buenard' => 'Buenard',
						'Butcherman' => 'Butcherman',
						'Butterfly Kids' => 'Butterfly Kids',
						'Cabin' => 'Cabin',
						'Cabin Condensed' => 'Cabin Condensed',
						'Cabin Sketch' => 'Cabin Sketch',
						'Caesar Dressing' => 'Caesar Dressing',
						'Cagliostro' => 'Cagliostro',
						'Calligraffitti' => 'Calligraffitti',
						'Cambo' => 'Cambo',
						'Candal' => 'Candal',
						'Cantarell' => 'Cantarell',
						'Cantata One' => 'Cantata One',
						'Cardo' => 'Cardo',
						'Carme' => 'Carme',
						'Carter One' => 'Carter One',
						'Caudex' => 'Caudex',
						'Cedarville Cursive' => 'Cedarville Cursive',
						'Ceviche One' => 'Ceviche One',
						'Changa One' => 'Changa One',
						'Chango' => 'Chango',
						'Chau Philomene One' => 'Chau Philomene One',
						'Chelsea Market' => 'Chelsea Market',
						'Chenla' => 'Chenla',
						'Cherry Cream Soda' => 'Cherry Cream Soda',
						'Chewy' => 'Chewy',
						'Chicle' => 'Chicle',
						'Chivo' => 'Chivo',
						'Coda' => 'Coda',
						'Coda Caption' => 'Coda Caption',
						'Codystar' => 'Codystar',
						'Comfortaa' => 'Comfortaa',
						'Coming Soon' => 'Coming Soon',
						'Concert One' => 'Concert One',
						'Condiment' => 'Condiment',
						'Content' => 'Content',
						'Contrail One' => 'Contrail One',
						'Convergence' => 'Convergence',
						'Cookie' => 'Cookie',
						'Copse' => 'Copse',
						'Corben' => 'Corben',
						'Cousine' => 'Cousine',
						'Coustard' => 'Coustard',
						'Covered By Your Grace' => 'Covered By Your Grace',
						'Crafty Girls' => 'Crafty Girls',
						'Creepster' => 'Creepster',
						'Crete Round' => 'Crete Round',
						'Crimson Text' => 'Crimson Text',
						'Crushed' => 'Crushed',
						'Cuprum' => 'Cuprum',
						'Cutive' => 'Cutive',
						'Damion' => 'Damion',
						'Dancing Script' => 'Dancing Script',
						'Dangrek' => 'Dangrek',
						'Dawning of a New Day' => 'Dawning of a New Day',
						'Days One' => 'Days One',
						'Delius' => 'Delius',
						'Delius Swash Caps' => 'Delius Swash Caps',
						'Delius Unicase' => 'Delius Unicase',
						'Della Respira' => 'Della Respira',
						'Devonshire' => 'Devonshire',
						'Didact Gothic' => 'Didact Gothic',
						'Diplomata' => 'Diplomata',
						'Diplomata SC' => 'Diplomata SC',
						'Doppio One' => 'Doppio One',
						'Dorsa' => 'Dorsa',
						'Dosis' => 'Dosis',
						'Dr Sugiyama' => 'Dr Sugiyama',
						'Droid Sans' => 'Droid Sans',
						'Droid Sans Mono' => 'Droid Sans Mono',
						'Droid Serif' => 'Droid Serif',
						'Duru Sans' => 'Duru Sans',
						'Dynalight' => 'Dynalight',
						'EB Garamond' => 'EB Garamond',
						'Eater' => 'Eater',
						'Economica' => 'Economica',
						'Electrolize' => 'Electrolize',
						'Emblema One' => 'Emblema One',
						'Emilys Candy' => 'Emilys Candy',
						'Engagement' => 'Engagement',
						'Enriqueta' => 'Enriqueta',
						'Erica One' => 'Erica One',
						'Esteban' => 'Esteban',
						'Euphoria Script' => 'Euphoria Script',
						'Ewert' => 'Ewert',
						'Exo' => 'Exo',
						'Expletus Sans' => 'Expletus Sans',
						'Fanwood Text' => 'Fanwood Text',
						'Fascinate' => 'Fascinate',
						'Fascinate Inline' => 'Fascinate Inline',
						'Federant' => 'Federant',
						'Federo' => 'Federo',
						'Felipa' => 'Felipa',
						'Fjord One' => 'Fjord One',
						'Flamenco' => 'Flamenco',
						'Flavors' => 'Flavors',
						'Fondamento' => 'Fondamento',
						'Fontdiner Swanky' => 'Fontdiner Swanky',
						'Forum' => 'Forum',
						'Fjalla One' => 'Fjalla One',
						'Francois One' => 'Francois One',
						'Fredericka the Great' => 'Fredericka the Great',
						'Fredoka One' => 'Fredoka One',
						'Freehand' => 'Freehand',
						'Fresca' => 'Fresca',
						'Frijole' => 'Frijole',
						'Fugaz One' => 'Fugaz One',
						'GFS Didot' => 'GFS Didot',
						'GFS Neohellenic' => 'GFS Neohellenic',
						'Galdeano' => 'Galdeano',
						'Gentium Basic' => 'Gentium Basic',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Geo' => 'Geo',
						'Geostar' => 'Geostar',
						'Geostar Fill' => 'Geostar Fill',
						'Germania One' => 'Germania One',
						'Gilda Display' => 'Gilda Display',
						'Give You Glory' => 'Give You Glory',
						'Glass Antiqua' => 'Glass Antiqua',
						'Glegoo' => 'Glegoo',
						'Gloria Hallelujah' => 'Gloria Hallelujah',
						'Goblin One' => 'Goblin One',
						'Gochi Hand' => 'Gochi Hand',
						'Gorditas' => 'Gorditas',
						'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
						'Graduate' => 'Graduate',
						'Gravitas One' => 'Gravitas One',
						'Great Vibes' => 'Great Vibes',
						'Gruppo' => 'Gruppo',
						'Gudea' => 'Gudea',
						'Habibi' => 'Habibi',
						'Hammersmith One' => 'Hammersmith One',
						'Handlee' => 'Handlee',
						'Hanuman' => 'Hanuman',
						'Happy Monkey' => 'Happy Monkey',
						'Henny Penny' => 'Henny Penny',
						'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
						'Holtwood One SC' => 'Holtwood One SC',
						'Homemade Apple' => 'Homemade Apple',
						'Homenaje' => 'Homenaje',
						'IM Fell DW Pica' => 'IM Fell DW Pica',
						'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
						'IM Fell Double Pica' => 'IM Fell Double Pica',
						'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
						'IM Fell English' => 'IM Fell English',
						'IM Fell English SC' => 'IM Fell English SC',
						'IM Fell French Canon' => 'IM Fell French Canon',
						'IM Fell French Canon SC' => 'IM Fell French Canon SC',
						'IM Fell Great Primer' => 'IM Fell Great Primer',
						'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
						'Iceberg' => 'Iceberg',
						'Iceland' => 'Iceland',
						'Imprima' => 'Imprima',
						'Inconsolata' => 'Inconsolata',
						'Inder' => 'Inder',
						'Indie Flower' => 'Indie Flower',
						'Inika' => 'Inika',
						'Irish Grover' => 'Irish Grover',
						'Istok Web' => 'Istok Web',
						'Italiana' => 'Italiana',
						'Italianno' => 'Italianno',
						'Jim Nightshade' => 'Jim Nightshade',
						'Jockey One' => 'Jockey One',
						'Jolly Lodger' => 'Jolly Lodger',
						'Josefin Sans' => 'Josefin Sans',
						'Josefin Slab' => 'Josefin Slab',
						'Judson' => 'Judson',
						'Julee' => 'Julee',
						'Junge' => 'Junge',
						'Jura' => 'Jura',
						'Just Another Hand' => 'Just Another Hand',
						'Just Me Again Down Here' => 'Just Me Again Down Here',
						'Kameron' => 'Kameron',
						'Karla' => 'Karla',
						'Kaushan Script' => 'Kaushan Script',
						'Kelly Slab' => 'Kelly Slab',
						'Kenia' => 'Kenia',
						'Khmer' => 'Khmer',
						'Knewave' => 'Knewave',
						'Kotta One' => 'Kotta One',
						'Koulen' => 'Koulen',
						'Kranky' => 'Kranky',
						'Kreon' => 'Kreon',
						'Kristi' => 'Kristi',
						'Krona One' => 'Krona One',
						'La Belle Aurore' => 'La Belle Aurore',
						'Lancelot' => 'Lancelot',
						'Lato' => 'Lato',
						'League Script' => 'League Script',
						'Leckerli One' => 'Leckerli One',
						'Ledger' => 'Ledger',
						'Lekton' => 'Lekton',
						'Lemon' => 'Lemon',
						'Lilita One' => 'Lilita One',
						'Limelight' => 'Limelight',
						'Linden Hill' => 'Linden Hill',
						'Lobster' => 'Lobster',
						'Lobster Two' => 'Lobster Two',
						'Londrina Outline' => 'Londrina Outline',
						'Londrina Shadow' => 'Londrina Shadow',
						'Londrina Sketch' => 'Londrina Sketch',
						'Londrina Solid' => 'Londrina Solid',
						'Lora' => 'Lora',
						'Love Ya Like A Sister' => 'Love Ya Like A Sister',
						'Loved by the King' => 'Loved by the King',
						'Lovers Quarrel' => 'Lovers Quarrel',
						'Luckiest Guy' => 'Luckiest Guy',
						'Lusitana' => 'Lusitana',
						'Lustria' => 'Lustria',
						'Macondo' => 'Macondo',
						'Macondo Swash Caps' => 'Macondo Swash Caps',
						'Magra' => 'Magra',
						'Maiden Orange' => 'Maiden Orange',
						'Mako' => 'Mako',
						'Marcellus' => 'Marcellus',
						'Marcellus SC' => 'Marcellus SC',
						'Marck Script' => 'Marck Script',
						'Marko One' => 'Marko One',
						'Marmelad' => 'Marmelad',
						'Marvel' => 'Marvel',
						'Mate' => 'Mate',
						'Mate SC' => 'Mate SC',
						'Maven Pro' => 'Maven Pro',
						'Meddon' => 'Meddon',
						'MedievalSharp' => 'MedievalSharp',
						'Medula One' => 'Medula One',
						'Megrim' => 'Megrim',
						'Merienda One' => 'Merienda One',
						'Merriweather' => 'Merriweather',
						'Metal' => 'Metal',
						'Metamorphous' => 'Metamorphous',
						'Metrophobic' => 'Metrophobic',
						'Michroma' => 'Michroma',
						'Miltonian' => 'Miltonian',
						'Miltonian Tattoo' => 'Miltonian Tattoo',
						'Miniver' => 'Miniver',
						'Miss Fajardose' => 'Miss Fajardose',
						'Modern Antiqua' => 'Modern Antiqua',
						'Molengo' => 'Molengo',
						'Monofett' => 'Monofett',
						'Monoton' => 'Monoton',
						'Monsieur La Doulaise' => 'Monsieur La Doulaise',
						'Montaga' => 'Montaga',
						'Montez' => 'Montez',
						'Montserrat' => 'Montserrat',
						'Montserrat Alternates' => 'Montserrat Alternates',
						'Montserrat Subrayada' => 'Montserrat Subrayada',
						'Moul' => 'Moul',
						'Moulpali' => 'Moulpali',
						'Mountains of Christmas' => 'Mountains of Christmas',
						'Mr Bedfort' => 'Mr Bedfort',
						'Mr Dafoe' => 'Mr Dafoe',
						'Mr De Haviland' => 'Mr De Haviland',
						'Mrs Saint Delafield' => 'Mrs Saint Delafield',
						'Mrs Sheppards' => 'Mrs Sheppards',
						'Muli' => 'Muli',
						'Mystery Quest' => 'Mystery Quest',
						'Neucha' => 'Neucha',
						'Neuton' => 'Neuton',
						'News Cycle' => 'News Cycle',
						'Niconne' => 'Niconne',
						'Nixie One' => 'Nixie One',
						'Nobile' => 'Nobile',
						'Nokora' => 'Nokora',
						'Norican' => 'Norican',
						'Nosifer' => 'Nosifer',
						'Nothing You Could Do' => 'Nothing You Could Do',
						'Noticia Text' => 'Noticia Text',
						'Noto Sans' => 'Noto Sans',
						'Nova Cut' => 'Nova Cut',
						'Nova Flat' => 'Nova Flat',
						'Nova Mono' => 'Nova Mono',
						'Nova Oval' => 'Nova Oval',
						'Nova Round' => 'Nova Round',
						'Nova Script' => 'Nova Script',
						'Nova Slim' => 'Nova Slim',
						'Nova Square' => 'Nova Square',
						'Numans' => 'Numans',
						'Nunito' => 'Nunito',
						'Odor Mean Chey' => 'Odor Mean Chey',
						'Old Standard TT' => 'Old Standard TT',
						'Oldenburg' => 'Oldenburg',
						'Oleo Script' => 'Oleo Script',
						'Open Sans' => 'Open Sans',
						'Open Sans Condensed' => 'Open Sans Condensed',
						'Orbitron' => 'Orbitron',
						'Original Surfer' => 'Original Surfer',
						'Oswald' => 'Oswald',
						'Over the Rainbow' => 'Over the Rainbow',
						'Overlock' => 'Overlock',
						'Overlock SC' => 'Overlock SC',
						'Ovo' => 'Ovo',
						'Oxygen' => 'Oxygen',
						'PT Mono' => 'PT Mono',
						'PT Sans' => 'PT Sans',
						'PT Sans Caption' => 'PT Sans Caption',
						'PT Sans Narrow' => 'PT Sans Narrow',
						'PT Serif' => 'PT Serif',
						'PT Serif Caption' => 'PT Serif Caption',
						'Pacifico' => 'Pacifico',
						'Parisienne' => 'Parisienne',
						'Passero One' => 'Passero One',
						'Passion One' => 'Passion One',
						'Patrick Hand' => 'Patrick Hand',
						'Patua One' => 'Patua One',
						'Paytone One' => 'Paytone One',
						'Permanent Marker' => 'Permanent Marker',
						'Petrona' => 'Petrona',
						'Philosopher' => 'Philosopher',
						'Piedra' => 'Piedra',
						'Pinyon Script' => 'Pinyon Script',
						'Plaster' => 'Plaster',
						'Play' => 'Play',
						'Playball' => 'Playball',
						'Playfair Display' => 'Playfair Display',
						'Podkova' => 'Podkova',
						'Poiret One' => 'Poiret One',
						'Poller One' => 'Poller One',
						'Poly' => 'Poly',
						'Pompiere' => 'Pompiere',
						'Pontano Sans' => 'Pontano Sans',
						'Port Lligat Sans' => 'Port Lligat Sans',
						'Port Lligat Slab' => 'Port Lligat Slab',
						'Prata' => 'Prata',
						'Preahvihear' => 'Preahvihear',
						'Press Start 2P' => 'Press Start 2P',
						'Princess Sofia' => 'Princess Sofia',
						'Prociono' => 'Prociono',
						'Prosto One' => 'Prosto One',
						'Puritan' => 'Puritan',
						'Quantico' => 'Quantico',
						'Quattrocento' => 'Quattrocento',
						'Quattrocento Sans' => 'Quattrocento Sans',
						'Questrial' => 'Questrial',
						'Quicksand' => 'Quicksand',
						'Qwigley' => 'Qwigley',
						'Radley' => 'Radley',
						'Raleway' => 'Raleway',
						'Rammetto One' => 'Rammetto One',
						'Rancho' => 'Rancho',
						'Rationale' => 'Rationale',
						'Redressed' => 'Redressed',
						'Reenie Beanie' => 'Reenie Beanie',
						'Revalia' => 'Revalia',
						'Ribeye' => 'Ribeye',
						'Ribeye Marrow' => 'Ribeye Marrow',
						'Righteous' => 'Righteous',
						'Roboto' => 'Roboto',
						'Roboto Sans' => 'Roboto Sans',
						'Rochester' => 'Rochester',
						'Rock Salt' => 'Rock Salt',
						'Rokkitt' => 'Rokkitt',
						'Ropa Sans' => 'Ropa Sans',
						'Rosario' => 'Rosario',
						'Rosarivo' => 'Rosarivo',
						'Rouge Script' => 'Rouge Script',
						'Ruda' => 'Ruda',
						'Ruge Boogie' => 'Ruge Boogie',
						'Ruluko' => 'Ruluko',
						'Ruslan Display' => 'Ruslan Display',
						'Russo One' => 'Russo One',
						'Ruthie' => 'Ruthie',
						'Sacramento' => 'Sacramento',
						'Sail' => 'Sail',
						'Salsa' => 'Salsa',
						'Sancreek' => 'Sancreek',
						'Sansita One' => 'Sansita One',
						'Sarina' => 'Sarina',
						'Satisfy' => 'Satisfy',
						'Schoolbell' => 'Schoolbell',
						'Seaweed Script' => 'Seaweed Script',
						'Sevillana' => 'Sevillana',
						'Seymour One' => 'Seymour One',
						'Shadows Into Light' => 'Shadows Into Light',
						'Shadows Into Light Two' => 'Shadows Into Light Two',
						'Shanti' => 'Shanti',
						'Share' => 'Share',
						'Shojumaru' => 'Shojumaru',
						'Short Stack' => 'Short Stack',
						'Siemreap' => 'Siemreap',
						'Sigmar One' => 'Sigmar One',
						'Signika' => 'Signika',
						'Signika Negative' => 'Signika Negative',
						'Simonetta' => 'Simonetta',
						'Sirin Stencil' => 'Sirin Stencil',
						'Six Caps' => 'Six Caps',
						'Slackey' => 'Slackey',
						'Smokum' => 'Smokum',
						'Smythe' => 'Smythe',
						'Sniglet' => 'Sniglet',
						'Snippet' => 'Snippet',
						'Sofia' => 'Sofia',
						'Sonsie One' => 'Sonsie One',
						'Sorts Mill Goudy' => 'Sorts Mill Goudy',
						'Special Elite' => 'Special Elite',
						'Spicy Rice' => 'Spicy Rice',
						'Spinnaker' => 'Spinnaker',
						'Spirax' => 'Spirax',
						'Squada One' => 'Squada One',
						'Stardos Stencil' => 'Stardos Stencil',
						'Stint Ultra Condensed' => 'Stint Ultra Condensed',
						'Stint Ultra Expanded' => 'Stint Ultra Expanded',
						'Stoke' => 'Stoke',
						'Sue Ellen Francisco' => 'Sue Ellen Francisco',
						'Sunshiney' => 'Sunshiney',
						'Supermercado One' => 'Supermercado One',
						'Suwannaphum' => 'Suwannaphum',
						'Swanky and Moo Moo' => 'Swanky and Moo Moo',
						'Syncopate' => 'Syncopate',
						'Tangerine' => 'Tangerine',
						'Taprom' => 'Taprom',
						'Telex' => 'Telex',
						'Tenor Sans' => 'Tenor Sans',
						'The Girl Next Door' => 'The Girl Next Door',
						'Tienne' => 'Tienne',
						'Tinos' => 'Tinos',
						'Titan One' => 'Titan One',
						'Titillium Web' => 'Titillium Web',
						'Trade Winds' => 'Trade Winds',
						'Trocchi' => 'Trocchi',
						'Trochut' => 'Trochut',
						'Trykker' => 'Trykker',
						'Tulpen One' => 'Tulpen One',
						'Ubuntu' => 'Ubuntu',
						'Ubuntu Condensed' => 'Ubuntu Condensed',
						'Ubuntu Mono' => 'Ubuntu Mono',
						'Ultra' => 'Ultra',
						'Uncial Antiqua' => 'Uncial Antiqua',
						'UnifrakturCook' => 'UnifrakturCook',
						'UnifrakturMaguntia' => 'UnifrakturMaguntia',
						'Unkempt' => 'Unkempt',
						'Unlock' => 'Unlock',
						'Unna' => 'Unna',
						'VT323' => 'VT323',
						'Varela' => 'Varela',
						'Varela Round' => 'Varela Round',
						'Vast Shadow' => 'Vast Shadow',
						'Vibur' => 'Vibur',
						'Vidaloka' => 'Vidaloka',
						'Viga' => 'Viga',
						'Voces' => 'Voces',
						'Volkhov' => 'Volkhov',
						'Vollkorn' => 'Vollkorn',
						'Voltaire' => 'Voltaire',
						'Waiting for the Sunrise' => 'Waiting for the Sunrise',
						'Wallpoet' => 'Wallpoet',
						'Walter Turncoat' => 'Walter Turncoat',
						'Wellfleet' => 'Wellfleet',
						'Wire One' => 'Wire One',
						'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
						'Yellowtail' => 'Yellowtail',
						'Yeseva One' => 'Yeseva One',
						'Yesteryear' => 'Yesteryear',
						'Zeyada' => 'Zeyada'
		);



		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();


// GENERAL //

$of_options[] = array( 	"name" 		=> "Logo and icons",
                        "type" 		=> "heading"
);

$of_options[] = array( 	"name" 		=> "Logo",
                        "desc" 		=> "Upload logo here.",
                        "id" 		=> "site_logo",
                        "std" 		=> "",
                        "type" 		=> "media"
);
$of_options[] = array( 	"name" 		=> "Category Logo",
						"desc" 		=> "Upload logo here.",
						"id" 		=> "site_logo_category",
						"std" 		=> "",
						"type" 		=> "media"
);
$of_options[] = array( 	"name" 		=> "Innovation Logo",
						"desc" 		=> "Upload logo here.",
						"id" 		=> "site_logo_inno",
						"std" 		=> "",
						"type" 		=> "media"
);
$of_options[] = array( 	"name" 		=> "Sim Logo",
						"desc" 		=> "Upload logo here.",
						"id" 		=> "site_logo_sim",
						"std" 		=> "",
						"type" 		=> "media"
);
$of_options[] = array( 	"name" 		=> "Favicon",
                        "desc" 		=> "Add your custom Favicon image. 16x16px .ico or .png file required.",
                        "id" 		=> "site_favicon",
                        "std" 		=> "",
                        "type" 		=> "media"
);

		
		
		
$of_options[] = array( 	"name" 		=> "Social & Contact Setting",
                        "type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "Facebook url",
                        "desc" 		=> "Insert Facebook url here.",
                        "id" 		=> "fb_url",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Twitter url",
                        "desc" 		=> "Insert Twitter page url here",
                        "id" 		=> "twitter_url",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Google Plus url",
                        "desc" 		=> "Insert Google Plus page url here",
                        "id" 		=> "google_url",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Linkedin url",
                        "desc" 		=> "Insert Linkedin page url here",
                        "id" 		=> "linkedin_url",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Rss url",
                        "desc" 		=> "Insert Rss url here",
                        "id" 		=> "rss_url",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Youtube url",
                        "desc" 		=> "Insert Youtube page url here",
                        "id" 		=> "youtube_url",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Phone Number",
                        "desc" 		=> "Insert Phone Number here",
                        "id" 		=> "phno",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Email Address",
                        "desc" 		=> "Insert Email Address here",
                        "id" 		=> "email",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "404 Page Setting",
                        "type" 		=> "heading"
);
$of_options[] = array( 	"name" 		=> "Heading Text",
                       
                        "id" 		=> "404_page_head",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Text Line 1",
                       
                        "id" 		=> "404_page_text_line_1",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Text Line 2",
                       
                        "id" 		=> "404_page_text_line_2",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Text Line 3",
                       
                        "id" 		=> "404_page_text_line_3",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Link For Home",
                       
                        "id" 		=> "404_page_link_for_home",
                        "std" 		=> "",
                        "type" 		=> "text"
);
		
$of_options[] = array( 	"name" 		=> "Zoho Form Success Popup",
                        "type" 		=> "heading"
);
$of_options[] = array( 	"name" 		=> "Popup Heading text",

                        "id" 		=> "popup_heading_text",
                        "std" 		=> "",
                        "type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "Popup Content Line 1",

                        "id" 		=> "popup_content_line_1",
                        "std" 		=> "",
                        "type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "Popup Content Line 2",

                        "id" 		=> "popup_content_line_2",
                        "std" 		=> "",
                        "type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "Header Call To Action",
                        "type" 		=> "heading"
);

$of_options[] = array( 	"name" 		=> "Call To Action",

                        "id" 		=> "cta",
                        "std" 		=> "",
                        "type" 		=> "switch"
);

$of_options[] = array( 	"name" 		=> "Call To Action Logo",

                        "id" 		=> "cta_logo",
                        "std" 		=> "",
                        "type" 		=> "media"
);

$of_options[] = array( 	"name" 		=> "Call To Action Heading",

                        "id" 		=> "cta_heading",
                        "std" 		=> "",
                        "type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "Call To Action Sub Heading",

                        "id" 		=> "cta_sub_heading",
                        "std" 		=> "",
                        "type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "Call To Action Button Text",

                        "id" 		=> "cta_button_text",
                        "std" 		=> "",
                        "type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "Call To Action Button Link",

                        "id" 		=> "cta_button_link",
                        "std" 		=> "",
                        "type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "Call To Action Background Color",

                        "id" 		=> "cta_background_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Call To Action Heading Text Color",

                        "id" 		=> "cta_heading_text_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Call To Action Sub Heading Text Color",

                        "id" 		=> "cta_sub_heading_text_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Call To Action Button Background Color",

                        "id" 		=> "cta_button_background_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Call To Action Button Hover Background Color",

                        "id" 		=> "cta_button_hover_background_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Call To Action Button Border Color",

                        "id" 		=> "cta_button_border_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Call To Action Button Hover Border Color",

                        "id" 		=> "cta_button_hover_border_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Call To Action Button Text Color",

                        "id" 		=> "cta_button_text_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Call To Action Button Hover Text Color",

                        "id" 		=> "cta_button_hover_text_color",
                        "std" 		=> "",
                        "type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Footer",
                        "type" 		=> "heading"
);
$of_options[] = array( 	"name" 		=> "Copyright text",
                       
                        "id" 		=> "copyright",
                        "std" 		=> "",
                        "type" 		=> "text"
);

}
}
?>
