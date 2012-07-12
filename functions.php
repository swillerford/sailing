<?php
/**
 * Embeds Google Analytics into the page.
 *
 */
function analytics() { 

?>
	<script type="text/javascript">	
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-20023247-14']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
<?php 
}

/**
 * Pulls the source for a header image depending on the page name. Also supports a default image with no name.
 *
 */
function getHeaderImage($pagename,$print=true) {
	$pagename=strtolower($pagename);
	switch($pagename) {
		case "team":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_team.png";
			break;
		case "competition":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_competition.png";
			break;
		case "mission":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_mission.png";
			break;
		case "contact":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_contact.png";
			break;
		case "design":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_design.png";
			break;
		case "materials":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_design.png";
			break;
		case "engineering":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_design.png";
			break;
		case "home":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_mission.png";
			break;
		case "news":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_news.png";
			break;
		case "sponsors":
			$headerImage = get_template_directory_uri()."/img/new_headers/header_sponsors.png";
			break;
	}
	if($print) {
		echo $headerImage;
	}
	return $headerImage;
}

/**
 *
 *
 */
$people = array();
$people[] = array(	'name'=>'Alex Cort',		
					'team'=>'Project Coordinator',			
					'path'=>get_template_directory_uri().'/headshots/acort-small.png', 		
					'description'=>"I am an economics major from Potomac, MD, outside of Washington D.C. Other than Solar Decathlon, I enjoy music, theatrical design, and photography. The idea of a student-built house pulled me into the project and has kept me interested throughout the process, especially as it gets closer to the competition.");
$people[] = array(	'name'=>'Ally Silberkleit',		
					'team'=>'Design',			
					'path'=>get_template_directory_uri().'/headshots/asilberkleit-small.png', 		
					'description'=>"My name is Ally and I like long walks on the beach. I also like Solar Decathlon! I\'m a studio art major so I\'m pretty hands on and was excited to learn that I could be a part of the design team even without any background in architecture. It\'s been super fun and I can\'t wait to see all of our work become a finished home in just one more year!");
$people[] = array(	'name'=>'Becca Hicks',
					'team'=>'Design',
					'path'=>get_template_directory_uri().'/headshots/bhicks-small.png',
					'description'=>"");
$people[] = array(	'name'=>'Becky Wasserman',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/rwasserman-small.png',
					'description'=>"I joined the Solar Decathlon team in January 2012. This past summer I was a camp counselor in the beautiful Adirondacks and led many hiking trips. On campus, you can find me at the organic garden, leading events with middle school girls for Sister-to-Sister, or playing outside in the sun or snow! I love working with children and providing them with the tools and passion to become the next generation of environmentally conscious citizens of the planet. My patronus would be a mountain lion.");
$people[] = array(	'name'=>'Bree Baccaglini',
					'team'=>'Construction',
					'path'=>get_template_directory_uri().'/headshots/bbaccaglini-small.png', 
					'description'=>"I stumbled into the 2013 Solar Decathlon endeavor, if you will. On a whim and the insistence of a friend, I attended a meeting for the Construction group at the tail end of J-term, and needing a fourth class for the Spring, signed myself up. Only once I got in the trenches did I realize the gratification of dealing with real life deadlines, innovations, and tasks after a long day of high falutin abstraction. You could say I discovered a balance between the two that I think is necessary to satiate the desire to make an impact on the course of history, even if it is the rather slim slice of history called the Solar Decathlon. This impact is a unique opportunity to define a sustainable and flourishing relationship between self, community, and earth, and actually create it in the form of a home...studs, nails, and all. When I am not musing on the perks of life as a Solar Decathlete, I might be playing violin, reading a book, trying to rock climb, looking at pictures of San Francisco, or scouting the Vermont hills for a waterfall.");
$people[] = array(	'name'=>'Camille Seyler',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/cseyler-small.png', 
					'description'=>"I am from New Orleans and am super excited to be helping out with the project. Since the previous competition, I\'ve been involved in the educational outreach team. I hope that the next generation of kids, including my five-year-old sister Scarlett, will grow up with an understanding and appreciation of sustainability. My favorite color is blue.");
$people[] = array(	'name'=>'Cordelia Newbury',
					'team'=>'Design',
					'path'=>get_template_directory_uri().'/headshots/cnewbury-small.png',
					'description'=>"I have solar decathlon fever after working on the 2011 team and going down to DC. I am most excited about getting to know our amazing team, seeing what we create, and winning the majority, if not all of the competitions in Irvine. My dream is to be a food critic on Top Chef, but Solar Decathlon is a good second. ");
$people[] = array(	'name'=>'Danny Nigh',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/dnigh-small.png',
					'description'=>"I\'ve always been passionate about the environment (this was actually one of the reasons I decided to come to Midd), so Solar Decathlon seemed like a fun way to get involved at Middlebury with something related to the environment.  I also like to play guitar and drums and toss the frizz!");
$people[] = array(	'name'=>'Ethan Galiette',
					'team'=>'Finance',
					'path'=>get_template_directory_uri().'/headshots/egaliette-small.png',
					'description'=>"A junior economics major from Avon, CT, I first focused on environmental studies in high school when I designed my own (imaginary) energy efficient home. A passionate Arsenal fan and member of the Middlebury soccer team, I am excited to be a part of the 2013 Middlebury Solar Decathlon team and make sure the project is both energy efficient and cost efficient!");
$people[] = array(	'name'=>'Eliza Margolin',
					'team'=>'Design',
					'path'=>get_template_directory_uri().'/headshots/emargolin-small.png',
					'description'=>"Freshman feb. Gets really excited about stuff. Likes photography, science, and trees.");
$people[] = array(	'name'=>'Ellie Krause',
					'team'=>'Design',
					'path'=>get_template_directory_uri().'/headshots/ekrause-small.png',
					'description'=>"I am an architecture major and global health minor and want to merge the two (yay liberal arts!) and practice architecture for sustainable development in developing countries. I see Solar Decathlon as an opportunity to send a real message about the sustainable future that we as a generation strive to create. From a small town in the Finger Lakes, I have grown-up understanding the importance of a tight-knit community and am passionate about the message of InSite. When not huddled over a design table you can probably find me engaged in environmental initiatives with SNG, playing pretend with my 6-year old community friend, singing at the top of my lungs, or enjoying the outdoors with friends.");
$people[] = array(	'name'=>'Emily Roach',
					'team'=>'Design',
					'path'=>get_template_directory_uri().'/headshots/eroach-small.png',
					'description'=>"Through my studies as a Geography major, I have become extremely interested in the fields of urban planning and development. In many of my classes, I have focused on urban studies and even studied the value of infill - the theme of our project. Being at Middlebury, both my academics and my love for the outdoors have inspired me to consider this interest of mine from an environmental perspective. As of right now, I am looking into internships in sustainable development and believe that participating in the Solar Decathlon is the perfect opportunity to explore this field in both academic and real-world settings. So far I have had a great time working on this project and am looking forward to the two years ahead!");
$people[] = array(	'name'=>'Evan Gallagher',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/evang-small.png',
					'description'=>"Hey, I\'m Evan. I was born and raised around Boston, MA, where I learned to love tennis, skiing, karate, and roller coasters (I\'ve been on more than 250 of them!). Since coming to Midd, I\'ve become involved with Quiddich, IM sports, and tourguiding, and have also discovered a profound interest both in architecture and environmental studies. On the Solar Decathlon team, I head up the graphic design subdivision, so I\'m very involved with how we visually represent our house to the world.  ");
$people[] = array(	'name'=>'Eshetu Feleke',
					'team'=>'Design',
					'path'=>get_template_directory_uri().'/headshots/edejene-small.png',
					'description'=>"I'm an Architectural studies Major, Studio Art and French Minor. I've interned with Wossen Architects PLC in Ethiopia over January and I will be studying abroad at the l\'ecole speciale d\'architecture in Paris next year. I\'ve always been interested in Architectural designs and have taken part in several design projects including designing a monument and a monument and a recreational park for the 200th anniversary of Middlebury. I\'m also really interested in green architecture.");
$people[] = array(	'name'=>'Gwen Cook',
					'team'=>'Project Coordinator',
					'path'=>get_template_directory_uri().'/headshots/gcook-small.png',
					'description'=>"I was a member of the 2011 Middlebury Solar Decathlon Team and after having such an amazing experience working on that project I couldn\'t wait to apply for the 2013 competition. One of the reasons I decided to attend Middlebury College was because they were renowned for their dedication to sustainability. I am very proud to be a part of a project that is reaching out to thousands of people across the nation to share the enthusiasm we have for working together to redefine the way we live and create a better future.");
$people[] = array(	'name'=>'Jack Peisch',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/jpeisch-small.png',
					'description'=>"I came to Middlebury with a lot of academic interests. Yet, Middlebury has opened my eyes to new subjects that I never thought I would have considered. I am an intending religion major and yet when I listed 6 or 7 possibilities when asked what I would study before beginning my first year here, religion never crossed my mind. Being from the Virginia suburbs of D.C., I have grown up in a bustling environment. However, I have really enjoyed living on such a peaceful and somewhat rural campus in the small town of Middlebury, VT. Middlebury has been a great place for me to follow my passions. I am a guide for the Mountain Club and go hiking all of the time. I also go skiing as much as I can. While it\'s easy for me to do the outdoor activities I love at Middlebury, the college\'s friendly and encouraging environment has made me feel like I can join any organization and contribute to it. Solar Decathlon has become a really big part of Middlebury, so one day I said to myself, \"I\'m only here for 4 years, why not join the Solar Decathlon team?\" So far I have really enjoyed my work and can\'t wait to get even more involved!");
$people[] = array(	'name'=>'Jordan Collins',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/jcollins-small.png',
					'description'=>"Kia Ora. I have a mom, a dad, and two younger sisters with whom shenanigans precipitate without fail. I also have two dogs and a turtle and a chinchilla. Before I lived in the Princeton area, I wasn\'t alive yet. I had few friends until the latter years of high school, when I bloomed into the outgoing, life-loving chica I am today. I like food far too much, especially avocados and sweet potatoes. I am customarily singing, or thinking deep thoughts, or in a intermediary state that some call \'noises\'. I would prefer to abstain from shoes whenever possible. On my Febmester, I worked on a farm at home until Halloween, when I left to WWOOF about in New Zealand. I will probably live there, or in Vermont, later in life. You can usually find me on the 6th floor of Bi Hall, or in the back nook of Axinn, or in any one of the campus dining estabilishments. Solar Decathlon was a project I\'d heard of before arriving on campus and was immediately enthusiastic about. Living with heaps of eco-friendly kiwis certainly changed my perspective on the impact of day-to-day life. I love the education team so far, and can\'t wait for the whole lot to get rolling and showcase some really awesome ideas Midd has to offer.");
$people[] = array(	'name'=>'Jillian Mock',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/jmock-small.png',
					'description'=>"Originally from Dallas, Texas, I came to Middlebury excited for the change in weather and the opportunity to learn at one of the premier colleges for environmental studies. Along with the snow, the scenic views, and the delicious local food, the Middlebury community is my favorite part of Vermont living. As an advocate of pairing sustainability and education, I am thrilled to be a part of the outreach team and ready to bring solar decathlon from our school to yours. ");
$people[] = array(	'name'=>'Jun Chen',
					'team'=>'Design',
					'path'=>get_template_directory_uri().'/headshots/jchen-small.png',
					'description'=>"");
$people[] = array(	'name'=>'Laura Romig',
					'team'=>'Finance',
					'path'=>get_template_directory_uri().'/headshots/lromig-small.png',
					'description'=>"");
$people[] = array(	'name'=>'Leif Castren',
					'team'=>'Research',
					'path'=>get_template_directory_uri().'/headshots/lcastren-small.png',
					'description'=>"I joined solar decathlon because I want to have the knowledge to make educated decisions about how I want my own home to work some day.");
$people[] = array(	'name'=>'Lizzie Durkin',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/edurkin-small.png',
					'description'=>"I am a current Sophomore. I love exploring and swimming in all the bodies of water around Middlebury and Vermont. I am a sunset enthusiast and really enjoy listening to the song Oh! You Pretty Things by David Bowie...it really gets me excited about the home we are all building together. I look forward to getting to know everyone on the SD 2013 team and learning from all the different member\'s talents. ");
$people[] = array(	'name'=>'Maddy Lawler',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/mlawler-small.png',
					'description'=>"I spend too much of my time in the windowless basement of Axinn, editing film and procrastinating by stalking Facebook and Twitter, watching movies and catching up on one of the 18 TV shows I watch (not ashamed). Because of this, you might think I hate the outdoors. Au contraire! I love the sun, especially when it sets or when it lets me do homework outside (and by do homework I mean maintain my perpetual sunburn), and can\'t wait to help build a house where the sun is in charge! Also, sustainable architecture is where it\'s at. Come visit me at Self-Reliance in the fall!");
$people[] = array(	'name'=>'Mollie Young',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/myoung-small.png',
					'description'=>"I was born in Boston, Massachusetts, and spent some of my childhood in Kuala Lumpur, Malaysia, where I moved with my parents and my two older siblings for my father\'s job. I love playing sports like soccer and tennis, and watching Boston sports teams dominate. I like spending time outside hiking and at the beach. I love to laugh. Two of my favorite movies are Love Actually and Good Will Hunting. 

Environmental issues and sustainability became interests of mine during a semester I spent at The Island School, in Eleuthera, Bahamas during high school. The curriculum was focused on sustainable living and environmental issues with a emphasis on marine biology. I became very aware of household issues like careless overuse of water, and I continue to monitor my family and roommates actions in this regard with stern oversight! I also spent a semester working at the Apple Orchard School in the Boston area during my senior year in high school. Apple Orchard is a pre-school focused on exploration and place-based learning, and this experience was one of my motivations for joining the Education subdivision of the Outreach team. I believe that younger students have a lot to gain from the mission and concepts that the Solar Decathlon team advocates by both their words and their actions. 

I am inspired by Solar Decathlon\'s mission and excited by the competition. I look forward to helping in the development of InSite over the next two years.");
$people[] = array(	'name'=>'Owen Teach',
					'team'=>'Finance',
					'path'=>get_template_directory_uri().'/headshots/oteach-small.png',
					'description'=>"I am a Junior Feb from Washington, DC who enjoys sports, traveling and good food.  This is my first semester back at Middlebury after studying abroad in Buenos Aires, Argentina in Fall 2011.  As an environmental studies major, I have a strong interest in pursuing environmental sustainability as well as learning more about renewable energy. On the Solar Decathlon Research team, I look forward to contributing valuable information to my team on an array of subjects from solar energy systems to information on grants for the finance team.");
$people[] = array(	'name'=>'Patrick Li',
					'team'=>'Design',
					'path'=>get_template_directory_uri().'/headshots/pli-small.png',
					'description'=>"I joined Solar Decathlon to gain some practical hands on experience and have fun!");
$people[] = array(	'name'=>'Robby Carpenter-Israel',
					'team'=>'Finance',
					'path'=>get_template_directory_uri().'/headshots/rcarpenterisrael-small.png',
					'description'=>"I am a junior, political science major from Washington DC.  As an avid golfer and a member of the Middlebury team, I love to get outside and hit the links. My time at Sidwell Friends School motivated me to learn more about sustainable development and joining Solar Decathlon.  I hope to advance the idea of walkable communities and raise a lot of money for SD over the course of the project!");
$people[] = array(	'name'=>'Rita Croce',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/rcroce-small.png',
					'description'=>"Since I was little, I have always loved art and being creative. Because of that, the idea of architecture always appealed to me. However, in high school, math began to change my mind on pursuing architecture. When I decided to go for a liberal arts education and found myself coming to Middlebury, I soon started to hear things about the Solar Decathlon. Once on campus and feeling the great buzz surrounding SD, I found myself once again thinking about architecture and signed up for an architecture class in my first semester. Since then, I have decided to major in architectural studies. And why not?! You get to draw, build, philosophize, write, speak... everything you want in a liberal arts education!
Outside Solar D, I like making fun happen on campus with live music and bbqs, as well as going on adventures with my friends.");
$people[] = array(	'name'=>'Sam Collins',
					'team'=>'Construction',
					'path'=>get_template_directory_uri().'/headshots/scollins-small.png',
					'description'=>"My name is Sam and I\'m a sophomore pre-med, Molecular Biology & Biochemistry major here at Midd. I\'m so psyched to be a part of the Construction team, looking to help with general construction needs! Solar Decathlon provides me with an outlet for my passion of increasing sustainability in daily life in a new and different way, and I could not be more excited for the next year and a half. When I\'m not working on Solar Decathlon I can almost definitely be found working away in my second home, Bi-hall, and if not there, at practice with the Pranksters, the Ultimate Frisbee team.");
$people[] = array(	'name'=>'Sarah Consagra',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/sconsagra-small.png',
					'description'=>"Despite growing up in New York City, I\'ve always loved being outside, farming, camping, hiking, etc. Until recently, though, my interaction with nature was almost entirely recreational. Then, this past fall, I studied abroad with the School for International Training\'s Sustainability and Environmental Action program in Australia.There, I learned SO much about environmental policy, environmental justice, and the culture of sustainability. I even took a couple of seminars on sustainable design. When I learned that I could join the Solar Decathlon 2013 team, I jumped at the opportunity. Being on this team has allowed me to channel and elaborate upon what I learned while I was in Australia. It\'s my reminder to live with an environmental conscience, even now that I\'m far away from the place where mine was really solidified. 
Outside of Solar Decathlon, I\'m a member of two other \"teams\" at Middlebury: GlobeMed at Middlebury College and the Middlebury \"Mamajamas,\" one of the college\'s co-ed acappella groups.  ");
$people[] = array(	'name'=>'Sofia Silverglass',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/ssilverglass-small.png',
					'description'=>"I am a freshman Feb from Jamaica Plain, Ma, a neighborhood of Boston. I am currently undecided on a major, but am planning to minor in Education Studies and hope to become an elementary school teacher after graduating from Middlebury College. I have been particularly interested in sustainability since attending The Mountain School, a semester program for high school juniors and seniors in Vershire, VT, in Fall 2009. I spent her Febmester WWOOFing (World Wide Opportunities on Organic Farms) her way across Europe. During my travels, I learned to clean a chicken coop, make delicious pasta sauce, and harvest olives with a long stick known as a demple in Greek. When not working for Solar Decathlon, I am a monitor at the ceramics studio and a frequent climber at the rock wall.");
$people[] = array(	'name'=>'Sean Willerford',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/swillerford-small.png',
					'description'=>"Hailing from the beautiful Pacific Northwest, I enjoy a sailboats, skiing, chilling in the woods, and scaling rock faces.  I joined the Solar Decathlon team to do my part in keeping the world safe for wilderness enthusiasts worldwide.  On the side, I like to study political science and economics, in the hopes of someday obtaining what some people would call a \"real job.\"  In the meantime you can find me in the woods, or in some inaccessible part of campus working on the Solar Decathlon website.  ");
$people[] = array(	'name'=>'Teddy Knox',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/ejknox-small.png',
					'description'=>"");
$people[] = array(	'name'=>'Tommy Hyde',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/thyde-small.png',
					'description'=>"Lover of puppies, the great outdoors, and anything creative, I joined the Solar Decathlon Team to combine two of my passions - filmmaking and architecture.  I had no experience with these two fields before coming to Midd, so I am excited to grow as the project moves forward.   

So if you\'re one of those people who likes to watch the movie rather than read the book, check out the video section to learn a little more about why our team is so awesome.");
$people[] = array(	'name'=>'Will Potter',
					'team'=>'Outreach',
					'path'=>get_template_directory_uri().'/headshots/wspotter-small.png',
					'description'=>"I am a Computer Science major with minors in Economics and Spanish. I'm interested in allocating resources sustainably while redefining comfortable living. I joined Solar Decathlon for the opportunity to learn from the high caliber team members that comprise Team Middlebury. I look forward to creating an awesome house that we can be proud of in 20 years.");

/**
 *	FACULTY
 */			
					
$faculty = array();
$faculty[] = array(	'name'=>'Andrea Murray', 
					'role'=>'Faculty',
					'path'=>get_template_directory_uri().'/headshots/akmurray-small.png',
					'description'=>"");
$faculty[] = array(	'name'=>'Ashar Nelson', 
					'role'=>'Faculty',
					'path'=>get_template_directory_uri().'/headshots/jnelson-small.png',
					'description'=>"");
$faculty[] = array(	'name'=>'Sarah Franco',
 
					'role'=>'Administration',
					'path'=>get_template_directory_uri().'/headshots/sfranco-small.png',
					'description'=>"I am the Special Projects Coordinator for the Vice President for Administration. In this role, I assist with the research, management, coordination, and communication of College-wide projects, and I serve as the team\'s Administrative Advisor. I hold a M.Ed. in Higher Education from Northeastern University and a B.A. in Religion (focusing on Jewish environmental ethics) from Middlebury College. I\'m proud to support the Solar Decathlon team because it\'s a great opportunity for students to take risks, make mistakes, get messy, achieve success, and make the world a better place from generation to generation. ");
					
$sponsors = array();
$sponsors[] = array('name'=>'Middlebury Environmental Council','url'=>'http://www.middlebury.edu/sustainability/fech/doenv');
?>