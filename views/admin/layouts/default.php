<!doctype html>
<html lang="fr">

<head>
	<title>Geek's City | Admin-Panel</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="/assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
	<script src='/assets/tinymce/tinymce.min.js'></script>
	<script>
		tinymce.init({
		    selector: 'textarea#myTextarea',
		    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
		    imagetools_cors_hosts: ['picsum.photos'],
		    menubar: 'file edit view insert format tools table help',
		    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
		    toolbar_sticky: true,
		    autosave_ask_before_unload: true,
		    autosave_interval: "30s",
		    autosave_prefix: "{path}{query}-{id}-",
		    autosave_restore_when_empty: false,
		    autosave_retention: "2m",
		    image_advtab: true,
		    /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
		    link_list: [
		        { title: 'My page 1', value: 'https://www.codexworld.com' },
		        { title: 'My page 2', value: 'https://www.xwebtools.com' }
		    ],
		    image_list: [
		        { title: 'My page 1', value: 'https://www.codexworld.com' },
		        { title: 'My page 2', value: 'https://www.xwebtools.com' }
		    ],
		    image_class_list: [
		        { title: 'None', value: '' },
		        { title: 'Some class', value: 'class-name' }
		    ],
		    importcss_append: true,
		    file_picker_callback: function (callback, value, meta) {
		        /* Provide file and text for the link dialog */
		        if (meta.filetype === 'file') {
		            callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
		        }
		    
		        /* Provide image and alt text for the image dialog */
		        if (meta.filetype === 'image') {
		            callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
		        }
		    
		        /* Provide alternative source and posted for the media dialog */
		        if (meta.filetype === 'media') {
		            callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
		        }
		    },
		    templates: [
		        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
		        { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
		        { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
		    ],
		    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
		    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
		    height: 600,
		    image_caption: true,
		    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
		    noneditable_noneditable_class: "mceNonEditable",
		    toolbar_mode: 'sliding',
		    contextmenu: "link image imagetools table",
		});
	</script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="#" style="font-size: 20px;"><i class="fa-solid fa-bug-slash" style=" color: #ff0000"></i>GEEK'S CITY</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<a href="<?= $router->url('home')?>"><i class="lnr lnr-arrow-left-circle" style="font-size: 30px;"></i></a>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?= $router->url('admin-home')?>" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?= $router->url('admin-new-article')?>" class=""><i class="lnr lnr-plus-circle"></i> <span>New Article</span></a></li>
						<li><a href="<?= $router->url('admin-articles-view')?>" class=""><i class="lnr lnr-dice "></i> <span>Articles</span></a></li>
						<li><a href="<?= $router->url('admin-new-category')?>" class=""><i class="lnr lnr-layers"></i> <span>New Categorie</span></a></li>
						<li><a href="<?= $router->url('admin-categories-view')?>" class=""><i class="lnr lnr-layers"></i> <span>Categories</span></a></li>
						<!--<li><a href="#" class=""><i class="lnr lnr-cog"></i> <span>Categories</span></a></li>-->
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="#" class="">Profile</a></li>
									<li><a href="#" class="">Login</a></li>
									<li><a href="#" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="#" class=""><i class="lnr lnr-chart-bars"></i> <span>Statistiques</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->


<?=$content?>



<footer>
     <div class="container-fluid">
          <p class="copyright">&copy;<?=date('Y')?><a href="#" target="_blank"> Geek's City</a>. All Rights Reserved.</p>
     </div>
</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="/assets/vendor/jquery/jquery.min.js"></script>
	<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="/assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="/assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
