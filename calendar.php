<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!-- Style css -->
	<link rel="stylesheet" href="/include/libraries/bulma-quickview.min.css">
	<script type= "text/javascript" src= "/include/libraries/bulma-quickview.min.js"></script>
	<script type= "text/javascript" src="/include/libraries/toastui-calendar.min.js"></script>
</head>

<body onload= "getEvents()">
	<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>
	
	<h1>Calendar & Events</h1>
	
	<div class= "GREEN">
		<div class= "buttons">
		<button onclick= "calendarTasks.today()">Hoy</button>
		<button onclick= "calendarTasks.prev()"><i class="fas fa-chevron-left"></i></button>
		<button onclick= "calendarTasks.next()"><i class="fas fa-chevron-right"></i></button>
		
		<button onclick= "calendarTasks.changeView('month')">Month</button>
		<button onclick= "calendarTasks.changeView('week')">Week</button>
		<button onclick= "calendarTasks.changeView('day')">Day</button>
		</div>
		
		<div id= "calendarDiv" style= "height: 600px;"></div>
	</div>
	
	<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>
	
	<div class= "quickviewOverlay" id= "eventDetailsOverlay" onclick= "document.getElementById('eventDetails').classList.toggle('is-active'); document.getElementById('eventDetailsOverlay').classList.toggle('is-active');"></div>
	<div class= "quickview" id= "eventDetails">
	<header class= "quickview-header">
	<p class= "title" id= "eventDetailsName"></p>
	<span class= "delete" onclick= "document.getElementById('eventDetails').classList.toggle('is-active'); document.getElementById('eventDetailsOverlay').classList.toggle('is-active');"></span>
	</header>
	
	<div class="quickview-body">
	<div class="quickview-block" style="width: 100%;height: 100%;overflow: hidden;">
	<iframe style= "width: 100%; height: 100%;" id= "iframeEventDetails"></iframe>
	</div>
	</div>
	</div>
	
	<form action= "/include/get-calendar-events.php" method= "POST" style= "display: none" id= "getInfoForm" onsubmit= "return getInfoReturn();">
	<input name="getInfoToken" value= "8UBTef" readonly>
	<input id= "getInfoSend" type= "submit" value= "Enviar">
	</form>
	
	<script type= "text/javascript" src= "https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script>
	function getEvents(){
	document.getElementById('getInfoSend').click();
	}
	
	var Calendar = tui.Calendar;
	var calendarTasks = new Calendar('#calendarDiv', {
	defaultView: 'month',
	isReadOnly: true,
	week: {
	taskView: false,
	eventView: ['time', 'allday'],
	showNowIndicator: false
	}});
	
	calendarTasks.on('clickEvent', ({event}) => {
	// selectedTab = event["id"];
	// document.getElementById('tab' + event["id"]).click();
	});
	
	function getInfoReturn(){
	$.ajax({
		type: 'POST',
		url: '/include/get-calendar-events.php',
		data:$('#getInfoForm').serialize(),
		dataType: 'json',
		success:function(response){
			if(response['events'] == ""){
			document.getElementById('eventDetails').classList.remove('is-active');
			document.getElementById('eventDetailsOverlay').classList.remove('is-active');
			
			calendarTasks.clear();
			var decodedCalendarsEvents = JSON.parse(response["array_calendar_events"]);
			calendarTasks.createEvents(decodedCalendarsEvents);
			}else{
			alert("There was an error retrieving the events");
			}}
	});
	
	return false;
	}
	</script>
</body>
</html>