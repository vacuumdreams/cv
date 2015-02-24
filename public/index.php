<!DOCTYPE = html>
<html>
	<head>
		
	</head>
	<body>
		<h1>Hello</h1>
	</body>

	<script>
		var data = function(){
			return {
				main: {
					name: 'Botond Fekete',
					dob: '11/28/1987',
					photo: 'botondfekete.jpg',
					description: "I tend to be super-enthusiastic about what i do. I consider myself a maximalist, I’m always seeking the best way to achive the most. i'm a fast learner, positive, hardworking, and some say even funny.",
					future: {
						name: 'future aspirations',
						description: 'I’m into RESTful technologies lately, my current favorite is Backbone, I’m planning on using it more often.\n\nI’d love to learn more about Ruby on Rails and Node.js, and maybe Django, too.'
					},
					contact: {
						phone: '07778300930',
						mail: 'fekbot@gmail.com'
					},
					links: {
						facebook: 'http://facebook.com/vacuumdreamz',
						linkedin: 'http://linkedin.com/in/botondfekete',
						github: 'http://github.com/vacuumdreams'
					}
				},
				studylist: [
					{
						dateFrom: '2002',
						dateTo: '2006',
						institution: 'Bod Peter High School',
						subject: 'math-informatics',
						link: 'http://www.bodpetertk.ro/'
					},
					{
						dateFrom: '2006',
						dateTo: '2009',
						institution: 'University of Debrecen',
						subject: 'environmental geography (unfinished)',
						link: 'http://unideb.hu/'			
					},
					{
						dateFrom: '2013',
						dateTo: 'present',
						institution: 'University of Debrecen',
						subject: 'started learning web development, using internet resources, tutorials, books and articles',
						link: [
							{
								name: 'Treehouse',
								link: 'http://teamtreehouse.com/botondfekete',
								icon: 'treehouse'
							},
							{
								name: 'CodeSchool',
								link: 'https://www.codeschool.com/users/662115',
								icon: 'codeschool'
							},
							{
								name: 'CodeAcademy',
								link: 'http://www.codecademy.com/betaMaster01735',
								icon: 'codeacademy'
							},
							{
								name: 'Laracast',
								link: 'https://laracasts.com/@vacuum',
								icon: 'laracast'
							},
							{
								name: 'Sitepoint',
								link: 'http://www.sitepoint.com/',
								icon: 'sitepoint'
							},
							{
								name: 'CSS-Tricks',
								link: 'http://css-tricks.com/',
								icon: 'csstricks'
							},
							{
								name: 'CreativeBloq',
								link: 'http://www.creativebloq.com/',
								icon: 'creativebloq'
							},
							{
								name: 'PHPTheRightWay',
								link: 'http://www.phptherightway.com/',
								icon: 'phptherightway'
							},
							{
								name: 'edX',
								link: 'https://www.edx.org/',
								icon: 'edx'
							},
							{
								name: 'Coursera',
								link: 'https://www.coursera.org/',
								icon: 'coursera'
							},
							{
								name: 'Udemy',
								link: 'https://www.udemy.com/',
								icon: 'udemy'
							}
						]
					}
				],
				worklist: [
					{
						dateFrom: '02/2010',
						dateTo: '08/2010',
						job: 'receptionist',
						company: 'Best Western Grand Hotel Balvanyos',
						location: 'Transylvania, Romania',
						link: 'http://www.hotelbalvanyos.ro/',
						description: ''
					},
					{
						dateFrom: '09/2010',
						dateTo: '11/2010',
						job: 'back office agent',
						company: 'CGS Brasov',
						location: 'Brasov, Romania',
						link: 'http://www.cgscontactcenter.com/',
						description: ''
					},
					{
						dateFrom: '11/2010',
						dateTo: '04/2012',
						job: 'helpdesk and support agent',
						company: 'Dotroll Ltd',
						location: 'Budapest, Hungary',
						link: 'https://hu.dotroll.com/',
						description: ''
					},
					{
						dateFrom: '05/2012',
						dateTo: '01/2013',
						job: 'warehouse operator',
						company: 'Marks and Spencer',
						location: 'Warrington, UK',
						link: 'http://www.marksandspencer.com/',
						description: ''
					},
					{
						dateFrom: '03/2013',
						dateTo: '11/2013',
						job: 'catering assistant',
						company: 'Woodlands Leisure Park',
						location: 'South Devon, UK',
						link: 'http://www.woodlandspark.com/',
						description: ''
					},
					{
						dateFrom: '11/2013',
						dateTo: '05/2014',
						job: 'freelance web developer',
						company: 'Pro*Curator Digital Marketing Services',
						location: 'Warrington, UK',
						link: 'http://pro-curator.com/',
						description: 'installing, deploying and migrating Wordpress sites, creating new themes, content management',
						technologies: ['HTML, SVG, CSS, SASS, JavaScript, PHP, MySQL, NPM, Grunt, Gulp, Bourbon, Compass, jQuery, Git, Drupal, Magento']
					},
					{
						dateFrom: '06/2014',
						dateTo: 'present',
						job: 'senior front end developer',
						company: 'EMS Internet',
						location: 'Warrington, UK',
						link: 'http://ems-internet.co.uk/',
						description: 'developing custom websites (front end) on Drupal, Magento, creating base theme architectures, helping junior designers',
						technologies: ['HTML, CSS, SASS, JavaScript, PHP, MySQL, Compass, jQuery, Wordpress']
					}
				],
				skilltags: {
					front: {
						name: 'front-end',
						icon: 'frontend'
					},
					back: {
						name: 'back-end',
						icon: 'backend'
					},
					markup: {
						name: 'markups',
						icon: 'markup'
					},
					lang: {
						name: 'languages',
						icon: 'language'
					},
					lib: {
						name: 'libraries',
						icon: 'library'
					},
					fw: {
						name: 'frameworks',
						icon: 'framework'
					},
					tpl: {
						name: 'template engines',
						icon: 'template'
					},
					tool: {
						name: 'tools, workflow',
						icon: 'tool'
					},
					vc: {
						name: 'version control',
						icon: 'versioncontrol'
					},
					db: {
						name: 'databases',
						icon: 'database'
					},
					cms: {
						name: 'cms',
						icon: 'cms'
					},
					server: {
						name: 'server environments',
						icon: 'server'
					},
					soft: {
						name: 'softwares',
						icon: 'software'
					},
					os: {
						name: 'operation systems',
						icon: 'system'
					},
					php: {
						name: 'php',
						icon: 'php' 
					},
					js: {
						name: 'javascript',
						icon: 'javascript'
					},
					css: {
						name: 'css',
						icon: 'css'
					}
				},
				skillist: {
					html: {
						name: 'HTML',
						icon: 'html',
						tags: ['markup']
					},
					svg: {
						name: 'SVG',
						icon: 'svg',
						tags: ['markup']
					},
					xml: {
						name: 'XML',
						icon: 'xml',
						tags: ['markup']
					},
					json: {
						name: 'jSON',
						icon: 'json',
						tags: ['markup', 'js']
					},
					css: {
						name: 'CSS',
						icon: 'css',
						tags: ['front', 'markup', 'css']
					},
					sass: {
						name: 'SASS',
						icon: 'sass',
						tags: ['front', 'lang', 'css']
					},
					less: {
						name: 'LESS',
						icon: 'less',
						tags: ['front', 'lang', 'css']
					},
					js: {
						name: 'JavaScript',
						icon: 'javascript',
						tags: ['front', 'back', 'lang', 'js']
					},
					php: {
						name: 'PHP',
						icon: 'php',
						tags: ['back', 'lang', 'php']
					},
					python: {
						name: 'Python',
						icon: 'python',
						tags: ['back', 'lang']
					},
					bourbon: {
						name: 'Bourbon',
						icon: 'bourbon',
						tags: ['front', 'lib', 'css']
					},
					compass: {
						name: 'Compass',
						icon: 'compass',
						tags: ['front', 'lib', 'css']
					},
					jquery: {
						name: 'jQuery',
						icon: 'jquery',
						tags: ['front', 'lib', 'js']
					},
					bootstrap: {
						name: 'Bootstrap',
						icon: 'bootstrap',
						tags: ['front', 'fw', 'css']
					},
					foundation: {
						name: 'Foundation',
						icon: 'foundation',
						tags: ['front', 'css', 'js', 'fw']
					},
					backbone: {
						name: 'Backbone',
						icon: 'backbone',
						tags: ['front', 'js', 'fw']
					},
					slim: {
						name: 'Slim',
						icon: 'slim',
						tags: ['back', 'php', 'fw']
					},
					silex: {
						name: 'Silex',
						icon: 'sliex',
						tags: ['back', 'php', 'fw']
					},
					laravel: {
						name: 'Laravel',
						icon: 'laravel',
						tags: ['back', 'php', 'fw']
					},
					smarty: {
						name: 'Smarty',
						icon: 'smarty',
						tags: ['back', 'php', 'tpl']
					},
					twig: {
						name: 'Twig',
						icon: 'twig',
						tags: ['back', 'php', 'tpl']
					},
					blade: {
						name: 'Blade',
						icon: 'blade',
						tags: ['back', 'php', 'tpl']
					},
					underscore: {
						name: 'Underscore',
						icon: 'underscore',
						tags: ['front', 'js', 'tpl']
					},
					lodash: {
						name: 'Lodash',
						icon: 'lodash',
						tags: ['front', 'js', 'tpl']
					},
					handlebars: {
						name: 'Handlebars',
						icon: 'handlebars',
						tags: ['front', 'js', 'tpl']
					},
					mustache: {
						name: 'Mustache',
						icon: 'mustache',
						tags: ['front', 'js', 'tpl']
					},
					npm: {
						name: 'NPM',
						icon: 'npm',
						tags: ['js', 'tool']
					},
					bower: {
						name: 'Bower',
						icon: 'bower',
						tags: ['front', 'js', 'tool']
					},
					grunt: {
						name: 'Grunt',
						icon: 'grunt',
						tags: ['front', 'js', 'tool']
					},
					gulp: {
						name: 'Gulp',
						icon: 'gulp',
						tags: ['front', 'js', 'tool']
					},
					composer: {
						name: 'Composer',
						icon: 'composer',
						tags: ['back', 'php', 'tool']
					},
					vagrant: {
						name: 'Vagrant',
						icon: 'vagrant',
						tags: ['back', 'tool']
					},
					git: {
						name: 'Git',
						icon: 'git',
						tags: ['vc', 'tool']
					},
					svn: {
						name: 'SVN',
						icon: 'svn',
						tags: ['vc', 'tool']
					},
					mysql: {
						name: 'MySQL',
						icon: 'mysql',
						tags: ['back', 'db']
					},
					sqlite: {
						name: 'SQLite',
						icon: 'sqlite',
						tags: ['back', 'db']
					},
					drupal: {
						name: 'Drupal',
						icon: 'drupal',
						tags: ['front', 'cms', 'php']
					},
					wp: {
						name: 'Wordpress',
						icon: 'wordpress',
						tags: ['front', 'cms', 'php']
					},
					magento: {
						name: 'Magento',
						icon: 'magento',
						tags: ['front', 'cms', 'php']
					},
					pagekit: {
						name: 'PageKit',
						icon: 'pagekit',
						tags: ['front', 'cms', 'php']
					},
					ghost: {
						name: 'Ghost',
						icon: 'ghost',
						tags: ['front', 'cms', 'js']
					},
					apache: {
						name: 'Apache',
						icon: 'apache',
						tags: ['back', 'server']
					},
					nginx: {
						name: 'Nginx',
						icon: 'nginx',
						tags: ['back', 'server']
					},
					ps: {
						name: 'Photoshop',
						icon: 'photoshop',
						tags: ['soft']
					},
					ai: {
						name: 'Illustrator',
						icon: 'illustrator',
						tags: ['soft']
					},
					office: {
						name: 'Office',
						icon: 'office',
						tags: ['soft']
					},
					windows: {
						name: 'Windows',
						icon: 'windows',
						tags: ['soft', 'os']
					},
					ubuntu: {
						name: 'Ubuntu',
						icon: 'ubuntu',
						tags: ['soft', 'os']
					}
				],
				skillset: {
					languages: [
						{
							type: 'native',
							value: 'hungarian'
						},
						{
							type: 'advanced',
							value: 'english, romanian'
						},
						{
							type: 'basic',
							value: 'spanish, german'
						}
					],
					computing: [
						{
							type: 'markups, languages',
							value: []
						},
						{
							type: 'libraries',
							value: []
						},
						{
							type: 'frameworks'
							value: []
						},
						{
							type: 'template engines',
							value: []
						},
						{
							type: 'tools, workflow',
							value: []
						},
						{
							type: 'version control',
							value: []
						},
						{
							type: 'database',
							value: []
						},
						{
							type: 'cms',
							value: []
						},
						{
							type: 'server environment',
							value: []
						},
						{
							type: 'technologies, patterns',
							value: []
						},
						{
							type: 'softwares',
							value: []
						}
					]
				},
				hobbylist:[
					{
						name: 'web programming',
						icons: ['webprog'],
						description: 'couldn’t be more grateful having work on the first place'
					},
					{
						name: 'analog photography',
						icons: ['photography'],
						description: 'because storing sunlight on a film is fun'
					},
					{
						name: 'snowboarding, riding a bike, table tennis, yoga',
						icons: ['snowboard', 'bike', 'pingpong', 'yoga']
						description: 'because we also need to stay in shape'
					},
					{
						name: 'playing on a guitar',
						icons: ['guitar'],
						description: 'because we all need music'
					},
					{
						name: 'chess, reading',
						icons: ['chess', 'book'],
						description: 'because there is nothing better then relaxing and being active in the same time'
					}
				],
				portfolioList:[
					{
						name: 'Hall of Fame Plaques',
						description: '',
						image: '',
						link: 'http://halloffameplaques.com/',
						tags: ['html', 'php', 'js', 'css', 'drupal', 'sass', 'bourbon', 'jquery', 'foundation', 'npm', 'grunt', 'git', 'mysql', 'nginx']
					},
					{
						name: 'Jennyfields',
						description: '',
						image: '',
						link: 'http://jennyfields.emsinternet.net/',
						tags: ['html', 'php', 'js', 'css', 'drupal', 'sass', 'compass', 'jquery', 'foundation', 'npm', 'grunt', 'git', 'mysql', 'nginx']
					},
					{
						name: 'EMS Fifteen',
						description: '',
						image: '',
						link: 'http://ems15.co.uk/',
						tags: ['html', 'php', 'js', 'css', 'drupal', 'sass', 'compass', 'jquery', 'foundation', 'npm', 'grunt', 'git', 'mysql', 'nginx']
					},
					{
						name: 'Onyx PR',
						description: '',
						image: '',
						link: 'http://onyx.emsinternet.net/',
						tags: ['html', 'svg', 'php', 'js', 'css', 'svg', 'drupal', 'sass', 'compass', 'jquery', 'foundation', 'npm', 'grunt', 'git', 'mysql', 'nginx']
					},
					{
						name: 'All Your Protein',
						description: '',
						image: '',
						link: 'http://allyourprotein.co.uk/',
						tags: ['html', 'php', 'js', 'css', 'magento', 'jquery', 'foundation', 'git', 'mysql', 'nginx']
					},
					{
						name: 'Standish Computers and Inks',
						description: '',
						image: '',
						link: 'http://www.standishcomputersandinksshop.co.uk/',
						tags: ['html', 'php', 'js', 'css', 'magento', 'sass', 'bourbon', 'jquery', 'foundation', 'npm', 'grunt', 'git', 'mysql', 'nginx']
					},
					{
						name: 'TP Textiles',
						description: '',
						image: '',
						link: 'http://proof.tptextiles.co.uk/',
						tags: ['html', 'svg', 'php', 'js', 'css', 'magento', 'sass', 'bourbon', 'jquery', 'foundation', 'npm', 'grunt', 'git', 'mysql', 'nginx']
					},
					{
						name: 'Neutronic Technologies',
						description: '',
						image: '',
						link: 'http://proof.neutronic.org/',
						tags: ['html', 'php', 'js', 'css', 'magento', 'sass', 'bourbon', 'jquery', 'foundation', 'npm', 'gulp', 'git', 'mysql', 'nginx']
					}
				]
			}
		} 
	</script>

</html>